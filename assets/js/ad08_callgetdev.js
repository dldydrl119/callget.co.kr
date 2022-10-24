$(document).ready(function(){
  if($('.more-btn').attr('data-count') == 1) {
    $('.more-btn').remove();
  }

  $('section').on('click', '.more-btn', function() {
    var count = $(this).attr('data-count');
    var now = $(this).attr('data-now');
    var data = jsonreturn('/ad08/ad08/mainList/'+(now*1+1));
    var html = '';
    if(data.return) {
      for(i=0; i<data.list.length; i++) {
        var image = data.list[i].product_slide.split(',')[0];
        html += '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><div class="product_area" onclick="location.href=\'/ad08/ad08/get/'+data.list[i].product_idx+'\'"><div class="bg p_1" style=" background-image: url(\'/assets/uploads\/'+image+'\')";><div class="get_count"><div>현재까지<br>Get한 수량</div><div><b>'+data.list[i].product_get+'</b>개</div></div><div class="count gray"><p>남은 기간</p><p class="mb10">'+data.list[i].dates+'<span>일</span></p></div><div class="contents"><div class="cont-area"><div class="brand"><div class="logo p_1 sym_1" style="background-image: url(\'/assets/uploads\/'+data.list[i].product_logo+'\');"></div><div class="logo p_1 sym_2" style="background-image: url(\'/assets/uploads\/'+data.list[i].insure_logo+'\');"></div><div class="title"><p>'+data.list[i].product_company+' X '+data.list[i].insure_company+'</p><p>'+data.list[i].product_name+'</p></div></div><hr><div class="hashtag">'+data.list[i].product_hashtag+'</div></div></div></div></div></div>';
      }
    }
    $('.col-sm-6:last').after(html);
    $(this).attr('data-now',(now*1)+1);
    if(count == $(this).attr('data-now')) {
      $(this).parent().remove();
    }
  });

  $('section').on('click', '.item', function() {
    var link = $(this).children().attr('data-link');
    location.href=link;
  });

  $('body').on('click', '#getcall', function() {
    var data = jsonreturn('/ad08/ad08/updateGet/'+$(this).attr('data-idx'));
    if(data.return == false) {
      alert("다시 시도해주세요");
    }
  });

  $('body').on('click', '#faq', function() {

    contract_eamil('1');
    // emailsend();
  });

  $('body').on('click', '#faq2', function() {
    contract_eamil('2');
    // emailsend2();
  });

  $('body').on('click', '.locationbtnnews', function() {
    if($(this).attr('data-idx')){
      location.href = "http://callget.co.kr/main/news_view/"+$(this).attr('data-idx');
    }
    else {
      if($(this).hasClass('prev')) {
        alert("최신 글입니다");
      }
      else {
        alert("마지막 글입니다");
      }
    }
  });
  $('body').on('click', '.cate_list, .ad08_cate_list', function() {
    var cate_num = $(this).data('number');
    var content = $(this).attr( 'class' )

    var url = '';
    if (content.indexOf('ad08_cate_list') != -1) {
      url = '/ad08/ad08/getMainListCate/' + cate_num;
    } else {
      url = '/main/getMainListCate/' + cate_num
    }


    var option = {
      url : url,
      async:true,
      type :"post",
      contentType :false,
      processData :false,
    };

    $.ajax(
        option
    ).done(function(data){
      var html = '';

      $.each(data.list,function(index, item){
        html += '<div class="col-md-4 col-xs-6 main_list">';
        html += '<div class="product_area" onclick="location.href=\' '+item.product_numget + '' + item.product_idx2 + '\'">';
        html += '<div class="bg" style=" background-image: url(\'/assets/uploads/'+ item.product_thumb+ '\');">';
        html += '<div class="get_count">';
        html += '<div>D-'+item.dates+ '</div>';
        html += '</div>';
        html += '<div class="'+ item.product_countcolor+ '">';
        html += '<p>' +item.product_counttext+ '</p>';
        html += '<p>' +item.product_get + '</p>';
        html += '</div>';
        html += '<div class="contents">';
        html += '    <div class="cont-area">';
        html += '    <div class="brand">';
        html += '    <div class="title">';
        html += '<p>' + item.product_name +'</p>';
        html += '<p><b>'+item.insure_company+'</b> '+item.insure_name+'</p>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
      })

      $('.main_list').remove();
      $('#after').after(html);
    });

  });


});
