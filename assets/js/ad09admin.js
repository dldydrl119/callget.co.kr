$(document).ready(function(){
     function admin() {
         this.slide = function() {
             $('body').on('click', '#slidego, #slideedit', function() {
                 var check = true;
                 $('.req').each(function() {
                     if (!$(this).val()) {
                          check = false;
                          return false;
                     }
                 });
                 if(check) {
                     var form = $('form')[0];
                     var data = new FormData(form);
                     if($(this).attr('id') == "slidego"){
                         var json = jsonreturn('/ad09/admin/slideinsertData',data);
                         if(json.return == true) {
                             alert("등록되었습니다");
                             location.href = "/ad09/admin/slideList";
                         }
                     }
                     else {
                         var json = jsonreturn('/ad09/admin/slideUpdate',data);
                         if(json.return == true) {
                             alert("수정되었습니다");
                             location.reload();
                         }
                     }
                 }
                 else {
                     $(this).next().trigger('click');
                 }
             });
             $('body').on('click', '.up', function() {
                 var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                 if(!$tr.prev().is(':visible') && $tr.prev().length > 0) {
                     $tr.prev().show();
                     $tr.hide();
                 }
                 $tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
             });

             $('body').on('click', '.down', function() {
                 var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                 if(!$tr.next().is(':visible') && $tr.next().length >0) {
                     $tr.next().show();
                     $tr.hide();
                 }
                 $tr.next().after($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
             });

              $('body').on('click', '#idxgo', function() {
                var result =json($(this).attr('data-count'));
                var page = $(this).attr('data-page');
          			var idxs = new Array();
          			var idx = new Array();

                var i;
                if(page*10 > 10){
                  if((result*1)/(10*(page-1)) > 1) {
                    i = result - (page-1)*10;
                  }
                  else {
                    i = result%((page-1)*10);
                  }
                } else {
                    i =result;
                }
                $(".pointer").each(function() {
          				idxs.push(i);
          				idx.push($(this).attr('data-idx'));
          				i--;
          			});
          			var url = $(this).attr('data-url');
          			var result =json(url,{'idxs':idxs,'idx':idx});
          			location.reload();
          		});

             $('body').on('change', '#slideimage', function() {
                 var json = uploadImage($(this));
                 $(this).next().val(json.url[0]);
                 $(this).next().next().css('display','block');
                 $(this).next().next().attr('src','http://callget.co.kr/assets/uploads/'+json.url[0]);
             });
         }

         this.event = function() {
            $('body').on('click', '#eventgo, #eventedit', function() {
                var check = true;
                $('.req').each(function() {
                    if (!$(this).val()) {
                         check = false;
                         return false;
                    }
                });
                if(check) {
                    var form = $('form')[0];
                    var data = new FormData(form);
                    if($(this).attr('id') == "eventgo"){
                        var json = jsonreturn('/ad09/admin/eventinsertData',data);
                        if(json.return == true) {
                            alert("등록되었습니다");
                            location.href = "/ad09/admin/eventList";
                        }
                    }
                    else {
                        var json = jsonreturn('/ad09/admin/eventUpdate',data);
                        if(json.return == true) {
                            alert("수정되었습니다");
                            location.reload();
                        }
                    }
                }
                else {
                    $(this).next().trigger('click');
                }
            });
            $('body').on('click', '.up', function() {
                 var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                 $tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
             });

             $('body').on('click', '.down', function() {
                 var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                 $tr.next().after($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
             });

             $('body').on('click', '#idxgo', function() {
               var result =json($(this).attr('data-count'));
               var page = $(this).attr('data-page');
                     var idxs = new Array();
                     var idx = new Array();

               var i;
               if(page*10 > 10){
                 if((result*1)/(10*(page-1)) > 1) {
                   i = result - (page-1)*10;
                 }
                 else {
                   i = result%((page-1)*10);
                 }
               } else {
                   i =result;
               }
               $(".pointer").each(function() {
                         idxs.push(i);
                         idx.push($(this).attr('data-idx'));
                         i--;
                     });
                     var url = $(this).attr('data-url');
                     var result =json(url,{'idxs':idxs,'idx':idx});
                     location.reload();
                 });

            $('body').on('change', '#eventimage', function() {
                var json = uploadImage($(this));
                $(this).next().val(json.url[0]);
                $(this).next().next().css('display','block');
                $(this).next().next().attr('src','/assets/uploads/'+json.url[0]);
            });
        }

         this.yutube = function() {
             $('body').on('click', '#yutubego, #yutubeedit', function() {
                 var check = true;
                 $('.req').each(function() {
                     if (!$(this).val()) {
                         check = false;
                         return false;
                     }
                 });
                 if(check) {
                     var form = $('form')[0];
                     var data = new FormData(form);
                     if($(this).attr('id') == "yutubego"){
                         var json = jsonreturn('/ad09/admin/yutubeinsertData',data);
                         if(json.return == true) {
                             alert("등록되었습니다");
                             location.href = "/ad09/admin/yutubeList";
                         }
                     }
                     else {
                         var json = jsonreturn('/ad09/admin/yutubeUpdate',data);
                         if(json.return == true) {
                             alert("수정되었습니다");
                             location.reload();
                         }
                     }
                 }
                 else {
                     $(this).next().trigger('click');
                 }
             });
             $('body').on('click', '.up', function() {
                 var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                 if(!$tr.prev().is(':visible') && $tr.prev().length > 0) {
                     $tr.prev().show();
                     $tr.hide();
                 }
                 $tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
             });

             $('body').on('click', '.down', function() {
                 var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
                 if(!$tr.next().is(':visible') && $tr.next().length >0) {
                     $tr.next().show();
                     $tr.hide();
                 }
                 $tr.next().after($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
             });

             $('body').on('click', '#idxgo', function() {
                 var result =json($(this).attr('data-count'));
                 var page = $(this).attr('data-page');
                 var idxs = new Array();
                 var idx = new Array();

                 var i;
                 if(page*10 > 10){
                     if((result*1)/(10*(page-1)) > 1) {
                         i = result - (page-1)*10;
                     }
                     else {
                         i = result%((page-1)*10);
                     }
                 } else {
                     i =result;
                 }
                 $(".pointer").each(function() {
                     idxs.push(i);
                     idx.push($(this).attr('data-idx'));
                     i--;
                 });
                 var url = $(this).attr('data-url');
                 var result =json(url,{'idxs':idxs,'idx':idx});
                 location.reload();
             });

             $('body').on('change', '#yutubeimage', function() {
                 var json = uploadImage($(this));
                 $(this).next().val(json.url[0]);
                 $(this).next().next().css('display','block');
                 $(this).next().next().attr('src','http://callget.co.kr/assets/uploads/'+json.url[0]);
             });
         }

         this.category = function() {
             $('body').on('click', '#categorygo, #categoryedit', function() {
                 var check = true;
                 $('.req').each(function() {
                     if (!$(this).val()) {
                          check = false;
                          return false;
                     }
                 });
                 if(check) {
                     var form = $('form')[0];
                     var data = new FormData(form);
                     if($(this).attr('id') == "categorygo"){
                         var json = jsonreturn('/ad09/admin/categoryinsertData',data);
                         if(json.return == true) {
                             alert("등록되었습니다");
                             location.href = "/ad09/admin/categoryList";
                         }
                     }
                     else {
                         var json = jsonreturn('/ad09/admin/categoryUpdate',data);
                         if(json.return == true) {
                             alert("수정되었습니다");
                             location.reload();
                         }
                     }
                 }
                 else {
                     $(this).next().trigger('click');
                 }
             });
         }
         this.faq = function() {
             $('body').on('click', '#faqgo, #faqedit', function() {
                 var check = true;
                 $('.req').each(function() {
                     if (!$(this).val()) {
                          check = false;
                          return false;
                     }
                 });
                 if(check) {
                     var form = $('form')[0];
                     var data = new FormData(form);
                     if($(this).attr('id') == "faqgo"){
                         var json = jsonreturn('/ad09/admin/faqinsertData',data);
                         if(json.return == true) {
                             alert("등록되었습니다");
                             location.href = "/ad09/admin/faqList";
                         }
                     }
                     else {
                         var json = jsonreturn('/ad09/admin/faqUpdate',data);
                         if(json.return == true) {
                             alert("수정되었습니다");
                             history.back();
                         }
                     }
                 }
                 else {
                     $(this).next().trigger('click');
                 }
             });
         }
         this.product = function() {
             $('body').on('click', '#productgo, #productedit', function() {
                 var check = true;
                 $('.req').each(function() {
                     if (!$(this).val()) {
                          check = false;
                          return false;
                     }
                 });
                 if(check) {
                     var form = $('form')[0];
                     var data = new FormData(form);
                     if($(this).attr('id') == "productgo"){
                         var json = jsonreturn('/ad09/admin/productinsertData',data);
                         if(json.return == true) {
                             alert("등록되었습니다");
                             location.href = "/ad09/admin/productList";
                         }
                     }
                     else {
                         var json = jsonreturn('/ad09/admin/productUpdateData',data);
                         if(json.return == true) {
                             alert("수정되었습니다");
                             location.reload();
                         }
                     }
                 }
                 else {
                     $(this).next().trigger('click');
                 }
             });

            $('body').on('change', '#product_thumb', function() {
                var json = uploadImage($(this));
                $(this).next().val(json.url[0]);
                $(this).next().next().css('display','block');
                $(this).next().next().attr('src','http://callget.co.kr/assets/uploads/'+json.url[0]);
            });

         }
         this.news = function() {
           $('body').on('click', '#newsgo, #newsedit', function() {
               oEditors.getById["news_text"].exec("UPDATE_CONTENTS_FIELD", []);
               var check = true;
               $('.req').each(function() {
                   if (!$(this).val()) {
                        check = false;
                        return false;
                   }
               });
               if(check) {
                   var form = $('form')[0];
                   var data = new FormData(form);
                   if($(this).attr('id') == "newsgo"){
                       var json = jsonreturn('/ad09/admin/newsInsertData',data);
                       if(json.return == true) {
                           alert("등록되었습니다");
                           location.href = "/ad09/admin/newsList";
                       }
                   }
                   else {
                       var json = jsonreturn('/ad09/admin/newsUpdate',data);
                       if(json.return == true) {
                           alert("수정되었습니다");
                           location.reload();
                       }
                   }
               }
               else {
                   $(this).next().trigger('click');
               }
           });
         }
         this.login = function() {
           $('body').on('click', '#ns_logingo', function() {
               var req = true;
               $('.req').each(function() {
                   if (!$(this).val()) {
                       req = false;
                       return false;
                   }
                });

               if(req) {
                   var form = $('form')[0];
                   var data = new FormData(form);
                   var json = jsonreturn('/ad09/admin/loginData',data);
                   if(json.return == true) {
                       location.href = '/ad09/admin/slideList';
                   }
                   else {
                       alert("아이디 비밀번호가 일치하지 않습니다");
                   }
               }
               else {
                   $(this).next().trigger('click');
               }
           });

           $(".log").keypress(function(e) {
            if (e.keyCode == 13){
              var req = true;
              $('.req').each(function() {
                  if (!$(this).val()) {
                      req = false;
                      return false;
                  }
               });

              if(req) {
                  var form = $('form')[0];
                  var data = new FormData(form);
                  var json = jsonreturn('/ad09/admin/loginData',data);
                  if(json.return == true) {
                      // alert("로그인 되었습니다");
                      location.href = '/ad09/admin/slideList';
                  }
                  else {
                      alert("아이디 비밀번호가 일치하지 않습니다");
                  }
              }
              else {
                  $(this).next().trigger('click');
              }
            }
          });


         }

     $('body').on('change', '#logo, #logos, #slide', function() {
        var json = uploadImage($(this));
        if (json) {
          var url = json.url.join();
          $(this).next().val(url);
          if(json.url[1]) {
            $('.slidess').remove();
            for(i = 0; i < json.url.length; i++){
              $('.youtubb').after('<img src="http://callget.co.kr/assets/uploads/'+json.url[i]+'" class = "slidess">');
              $(this).next().next().css('display','block');
            }
          }
          else {
            $(this).next().next().attr('src','http://callget.co.kr/assets/uploads/'+json.url[0]);
            $(this).next().next().css('display','block');
          }
        }
      });

		  $('body').on('click', '#up', function() {
			$(".chktable").each(function() {
			 if ($(this).is(":checked")) {
				var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
				$tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
			 }
			});
		});

		$('body').on('click', '#down', function() {
			$(".chktable").each(function() {
			 if ($(this).is(":checked")) {
				var $tr = $(this).parent().parent(); // 클릭한 버튼이 속한 tr 요소
				$tr.next().after($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
			 }
			});
		});

    $('body').on('click', '.btn-show', function() {
      var result = json($(this).attr('data-url'),
      {show : $(this).attr('data-value'), idx : $(this).parent().parent().attr('data-idx')});
      location.reload();
   });
    //
		// $('body').on('click', '#idxgo', function() {
		// 	var idxs = new Array();
		// 	var idx = new Array();
		// 	var i = 1;
		// 	$(".chktable").each(function() {
		// 		idxs.push(i);
		// 		idx.push($(this).parent().parent().attr('data-idx'));
		// 		i++;
		// 	});
		// 	var url = $(this).attr('data-url');
		// 	var result =json(url,{'idxs':idxs,'idx':idx});
		// 	location.reload();
		// });


		  // $('body').on('click', '.adminview', function() {
          //     var idx = $(this).parent().parent().attr('data-idx');
          //     location.href = '/ad09/admin/estimateView/'+idx;
          // });

    }
    var admin = new admin();
    admin.slide();
    admin.category();
    admin.faq();
    admin.event();
    admin.product();
    admin.news();
    admin.login();
    admin.yutube();
});
