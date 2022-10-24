

$(document).ready(function(){
  $(document).ready(function(){
    var url = window.location.href;
    if(url.indexOf('cafe24') != -1) {
        location.href = "https://callget.co.kr/";
    }
	if(url.indexOf('www') != -1) {
        location.href = "https://callget.co.kr/";
    }
});

    function comm() {
        this.co = function() {

            jsonreturn = function(url,data) {
                var option = {
                    url : 'https://callget.co.kr'+url,
                    async:false
                };
                if(data){
                    option.data = data;
                    option.type = "post";
                    option.contentType = false;
                    option.processData = false
                }
                $.ajax(
                    option
                ).done(function(data){
                    result = data;
                });
                return result;
            }

            json = function(url,data) {
                var option = {
                    url : 'https://callget.co.kr'+url,
                    data : data,
                    type : "post",
                    async:false
                };
                $.ajax(
                    option
                ).done(function(data){
                    result = data;
                });
                return result;
            }

            uploadImage = function(form) {
                var image = new FormData();
                for (var I = 0; I < form[0].files.length; I++) {
                    image.append('images[]', form[0].files[I]);
                }
                if (form.data('width')) {
                    image.append('x', form.data('width'));
                    if (form.data('height')) {
                        image.append('y', form.data('height'));
                    }
                }
                return this.jsonreturn('/main/uploadimage', image);
            }

            emailsend = function() {
                var email = $('#email').val();
                var title = '이용문의가 도착했습니다';
                var text = "문의사항 \n\r이름 : "+$('#name').val()+"\n\r연락처 : "+$('#phone').val()+"\n\r이메일 : "+$('#email').val()+"\n\r주소 : "+$('#address').val()+"\n\r문의사항 :"+$('#question').val();
                var result = json('/main/sendmail/',{'title':title,'text':text,'email':email});
                if(result.result == true) {
                    location.href = "https://callget.co.kr/";
                    alert("메일이 전송되었습니다");
                }
            }

          emailsend2 = function() {
              var email = $('#email_').val();
              var title = '제휴문의사항이 도착했습니다';
              var text = "문의사항 \n\r 이름 : "+$('#name_').val() +"\n\r연락처 : "+$('#phone_').val()+"\n\r회사명 : "+$('#company_').val()+"\n\r부서/직급 : "+$('#manager_').val()+'\n\r이메일 : '+$('#email_').val()+'\n\r제휴문의 :'+$('#text_').val();
              var result = json('/main/sendmail/',{'title':title,'text':text,'email':email});
              if(result.result == true) {
                  location.href = "https://callget.co.kr/";
                  alert("메일이 전송되었습니다");
              }
          } 
        }
    }
    var comm = new comm();
    comm.co();



});
