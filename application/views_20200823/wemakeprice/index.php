<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">

	<title>CALLGET</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/animate/animate.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/slick/slick.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/slick/slick-theme.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/main.css" rel="stylesheet" type="text/css">

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
	  src="https://www.facebook.com/tr?id=600429703862604&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body id="top">
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
					<a href="/wemakeprice">
						<img src="/assets/images/ns_logo.png" />
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
							<a href="/wemakeprice">메인</a>
						</li>
						<li>
							<a href="/wemakeprice/about">콜겟TV란?</a>
						</li>
						<li>
							<a href="/wemakeprice/faq">이용방법</a>
						</li>
						<!-- <li>
							<a href="/wemakeprice/news/1">소식</a>
						</li>
						<li>
							<a href="/wemakeprice/contactus">문의하기</a>
						</li> -->
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- Main_Banner -->
	<section id="main_banner" class="main_banner">
		<div class="container">
			<div id="main_slide" class="slider slick-slider">
				<?foreach($slide as $row) {?>
					<div class="col-xs-12">
						<a href="<?=$row->slide_link?>">
							<img src="/assets/uploads/<?=$row->slide_image?>" alt="<?=$row->slide_name?>" data-link="<?=$row->slide_link?>">
						</a>
					</div>
				<?}?>
			</div>
		</div>
	</section>
	<!-- Main_Banner_END -->

	<!-- Live -->
	<section id="live">
		<div class="container">
			<div class="main-header" style="margin-top: 10px;">
				<h3>CALLGET TV</h3><span class="on_air"><img src="/assets/images/on_air.png" alt=""></span>
			</div>
			<div class="video">
				<div class="video-container">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/XmhrI0679-E?ps=blogger&amp;controls=1&amp;iv_load_policy=3&autoplay=1" frameborder="0" allowfullscreen="true"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- Live_END -->

	<!-- Product -->
	<section id="product" class="mb30">
		<div class="container">
			<!--<div class="main-header mb10">
				<h3>모든 상품보기</h3>
			</div>-->
			 <div class="category">
				<ul>
                    <li class="wemakeprice_cate_list active" data-number="0">
                        <a href="javascript:void(0);">
                            <div class="sym" style="background-image: url('/assets/images/category/category_1.png');"></div>
                            <p>전체</p>
                        </a>
                    </li>
                    <?foreach ($category as $cate):?>
					<li class="wemakeprice_cate_list" data-number="<?=$cate->category_idx?>">
						<a href="javascript:void(0);">
							<div class="sym" style="background-image: url('/assets/images/category/category_<?=$cate->category_idx+1?>.png');"></div>
							<p><?=$cate->category_name?></p>
						</a>
					</li>
					<?endforeach;?>
				</ul>					
			</div>

            <div id="after"></div>
			<?foreach($product as $row) {
			$image = $row->product_thumb;?>
			<div class="col-md-4 col-xs-6 main_list">
				<div class="product_area" onclick="location.href='/wemakeprice/get/<?=$row->product_idx?>'">
					<div class="bg" style=" background-image: url('/assets/uploads/<?=$image?>');">
						<div class="get_count">
							<div>D-<?=$row->dates?></div>
						</div>
						<div class="count">
							<p>GET</p>
							<p><?=$row->product_get?></p>
						</div>
						<div class="contents">
							<div class="cont-area">
								<div class="brand">
									<div class="title">
										<p><?=$row->product_name?></p>
										<p><b><?=$row->insure_company?></b> | <?=$row->insure_name?></p>
										<!-- <p><img src="/assets/uploads/<?=$row->insure_logo?>" style="width: 16px; border-radius: 50%;"> <?=$row->insure_name?></p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?}?>
<!-- 		<div class="col-xs-12"> -->
<!-- 			<div class="more-btn" data-count="<?=$count?>" data-now="1"> -->
<!-- 				<button>더보기</button> -->
<!-- 			</div> -->
<!-- 		</div> -->
		</div>
	</section>
	<!-- Product_END -->

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 p0">
					<div class="foot_cont">
						상호명 : (주)에스비제이 | 대표 : 정일웅 | 주소 : 서울시 강남구 테헤란로 116, 1064호 | 전화 : 02-544-1117 | 메일 : info@sbjgroup.co.kr | 사업자등록번호 : 894-86-01505
					</div>
				</div>
				<div class="col-xs-12">
					<div class="copyright">
						<p>Copyright &copy; Callget. All rights reserved.</p>
					</div>
				</div>
			</div><!-- row end -->
		</div><!-- Container_END -->
	</footer>
	<!-- Footer_END -->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Javascript files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>

	<script src="/assets/js/common.js"></script>
	<script src="/assets/js/wemakeprice_callgetdev.js"></script>

	<script src="/assets/lib/slick/slick.js"></script>

	<script src="/assets/js/global.js"></script>
	<script src="/assets/js/main.js"></script>
</body>
</html>
