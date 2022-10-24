<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

	<title>CALLGET</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/animate/animate.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/contactus.css" rel="stylesheet" type="text/css">

	<!-- Global site tag (gtag.js) - Google Ads: 675458681 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-675458681"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-675458681');
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156199970-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-156199970-1');
	</script>

	<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
	<script type="text/javascript">
		  kakaoPixel('8277931052310114600').pageView();
	</script>

	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '600429703862604');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=600429703862604&ev=PageView&noscript=1"/></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body>
	<!-- Preloader -->
	<!-- <div id="preloader">
		<div id="status"></div>
	</div> -->
	<!-- Preloader_END -->

	<!-- Navigation -->
	<header>
		<nav class="navbar navbar-global navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="logo ns">
					<a href="/booknlife">
						<img src="/assets/images/bnl_logo.png" />
						<p>상담완료만 해도 리워드가 내집으로</p>
					</a>
				</div>

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/booknlife">메인</a>
						</li>
						<li>
							<a href="/booknlife/about">콜겟TV란?</a>
						</li>
						<li>
							<a href="/booknlife/faq">이용방법</a>
						</li>
						<!-- <li>
							<a href="/booknlife/news/1">소식</a>
						</li>
						<li>
							<a href="/booknlife/contactus">문의하기</a>
						</li> -->
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- Contact US -->
	<section id="contactus">
		<div class="container">
			<div class="section-header">
				<h3>Contact Us</h3>
			</div>
			<div class="row">
				<div class="tab-menu" role="tabpanel" data-example-id="togglable-tabs">
					<div class="tab_head">
						<ul id="myTab" class="nav nav-tabs bar_tabs menu_tabs" role="tablist">
							<li role="presentation" class="active">
								<button data-target="#tab_content1" role="tab" data-toggle="tab" aria-expanded="true">이용문의</button>
							</li>
							<li role="presentation" class="">
								<button data-target="#tab_content2" role="tab" data-toggle="tab" aria-expanded="false">제휴문의</button>
							</li>
						</ul>
					</div>

					<div id="myTabContent" class="tab-content">
						<div id="tab_content1" class="tab-pane fade active in" role="tabpanel" aria-labelledby="이용문의">
							<div class="form">
								<div id="sendmessage">메세지 전송이 완료되었습니다</div>
								<div id="errormessage"></div>
								<form action="" class="contactForm_1" method="post" role="form">
									<div class="form-row">
										<div class="form-group col-xs-12 col-sm-6">
											<input type="text" id="name" class="form-control" placeholder="성함" data-msg="성함이 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-12 col-sm-6">
											<input type="text" id="phone" class="form-control" placeholder="연락처" data-msg="연락처가 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-12 col-sm-6">
											<input type="email" id="email" class="form-control" placeholder="이메일" data-msg="이메일이 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-12 col-sm-6">
											<input type="address" id="address" class="form-control" placeholder="주소" data-msg="주소가 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group form-padding">
											<textarea id="question" class="form-control" rows="5" placeholder="문의사항" data-msg="문의사항이 입력되지 않았습니다." data-rule="required"></textarea>
											<div class="validation"></div>
										</div>
										<div class="form-group form-padding">
											<input type="checkbox">
											<span>개인정보활용동의</span>
											<div class="agree">
												※ 개인정보취급방침 및 이용동의 안내<br>
												- 수집자 : ㈜에스비제이<br>
												- 수집목적 : 이용 문의에 대한 상담 목적<br>
												- 수집항목 : 성함, 연락처, 이메일, 주소, 문의사항<br>
												- 수집 및 이용기간 : 3개월 이내(고객요청시 측시 파기)
											</div>
										</div>
										<div class="text-center">
											<button type="button" id="faq">이용문의 발송</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div id="tab_content2" class="tab-pane fade" role="tabpanel" aria-labelledby="제휴문의">
							<div class="form">
								<div id="sendmessage_">메세지 전송이 완료되었습니다</div>
								<div id="errormessage"></div>
								<form action="" class="contactForm_2" method="post" onsubmit="return false;" role="form">
									<div class="form-row">
										<div class="form-group col-xs-12 col-sm-6">
											<input type="text" id="name_" class="form-control" placeholder="성함" data-msg="성함이 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-12 col-sm-6">
											<input type="text" id="phone_" class="form-control" placeholder="연락처" data-msg="연락처가 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-12 col-sm-6">
											<input type="text" id="company_" class="form-control" placeholder="회사명" data-msg="회사명이 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-12 col-sm-6">
											<input type="text" id="manager_" class="form-control" placeholder="부서/직급" data-msg="부서/직급이 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group col-xs-12">
											<input type="email" id="email_" class="form-control" placeholder="이메일" data-msg="이메일이 입력되지 않았습니다." data-rule="required"/>
											<div class="validation"></div>
										</div>
										<div class="form-group form-padding">
											<textarea class="form-control" id="text_" rows="5" placeholder="제휴문의" data-msg="제휴문의가 입력되지 않았습니다." data-rule="required"></textarea>
											<div class="validation"></div>
										</div>
										<div class="text-center">
											<button type="button" id="faq2">제휴문의 발송</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt100">
			<div class="section-header">
				<h3>찾아오시는 길</h3>
			</div>
			<div class="row">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.7008019137386!2d127.02942345822554!3d37.49844512293751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca157731ad869%3A0x357a65b9fd14f8a7!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDsl63sgrzrj5kg7YWM7Zek656A66GcIDExNg!5e0!3m2!1sko!2skr!4v1594882855715!5m2!1sko!2skr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact US_END -->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Contact Form JavaScript File -->
	<script src="/assets/js/common.js"></script>
	<script src="/assets/contactform/contactform.js"></script>
	<script src="/assets/js/callgetdev.js"></script>

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>
</body>
</html>
