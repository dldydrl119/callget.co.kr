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
	<link href="/assets/css/test.css" rel="stylesheet" type="text/css">

	<!-- Global site tag (gtag.js) - Google Ads: 675458681 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-675458681"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-675458681');
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156199970-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-156199970-1');
	</script>

	<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
	<script type="text/javascript">
		kakaoPixel('8277931052310114600').pageView();
	</script>

	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '600429703862604');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=600429703862604&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

	<!--AceCounter-Plus Log Gathering for AceTag Manager V.9.2.20170103-->
	<script type="text/javascript">
		var _AceTM = (function(_j, _s, _b, _o, _y) {
			var _uf = 'undefined',
				_pmt = '',
				_lt = location;
			var _ap = String(typeof(_y.appid) != _uf ? _y.appid() : (isNaN(window.name)) ? 0 : window.name);
			var _ai = (_ap.length != 6) ? (_j != 0 ? _j : 0) : _ap;
			if (typeof(_y.em) == _uf && _ai != 0) {
				var _sc = document.createElement('script');
				var _sm = document.getElementsByTagName('script')[0];
				var _cn = {
					tid: _ai + _s,
					hsn: _lt.hostname,
					hrf: (document.referrer.split('/')[2]),
					dvp: (typeof(window.orientation) != _uf ? (_ap != 0 ? 2 : 1) : 0),
					tgp: '',
					tn1: _y.uWorth,
					tn2: 0,
					tn3: 0,
					tw1: '',
					tw2: '',
					tw3: '',
					tw4: '',
					tw5: '',
					tw6: '',
					tw7: _y.pSearch
				};
				_cn.hrf = (_cn.hsn != _cn.hrf) ? _cn.hrf : 'in';
				for (var _aix in _y) {
					var _ns = (_y[_aix]) || {};
					if (typeof(_ns) != 'function') {
						_cn.tgp = String(_aix).length >= 3 ? _aix : '';
						_cn.tn2 = _ns.pPrice;
						_cn.tn3 = _ns.bTotalPrice;
						_cn.tw1 = _ns.bOrderNo;
						_cn.tw2 = _ns.pCode;
						_cn.tw3 = _ns.pName;
						_cn.tw4 = _ns.pImageURl;
						_cn.tw5 = _ns.pCategory;
						_cn.tw6 = _ns.pLink;
						break;
					};
				};
				_cn.rnd = (new Date().getTime());
				for (var _alx in _cn) {
					var _ct = String(_cn[_alx]).substring(0, 128);
					_pmt += (_alx + "=" + encodeURIComponent((_ct != _uf) ? _ct : '') + "&");
				};
				_y.acid = _ai;
				_y.atid = _cn.tid;
				_y.em = _cn.rnd;
				_sc.src = ((_lt.protocol.indexOf('http') == 0 ? _lt.protocol : 'http:') + '//' + _b + '/' + _o) + '?' + _pmt + 'py=0';
				_sm.parentNode.insertBefore(_sc, _sm);
			};
			return _y;
		})(148878, 'AZ-50-A', 'atm.acecounter.com', 'ac' + '.js', window._AceTM || {});
	</script>
	<!--AceCounter-Plus Log Gathering for AceTag Manager End -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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
				<div class="logo">
					<a href="/jpgroup">
						<img src="/assets/images/logo.png" />
						<!-- <p>상담완료만 해도 리워드가 내집으로</p> -->
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
							<a href="/jpgroup">메인</a>
						</li>
						<li>
							<a href="/jpgroup/about">콜겟TV란?</a>
						</li>
						<li>
							<a href="/jpgroup/faq">이용방법</a>
						</li>
						<!-- <li>
							<a href="/jpgroup/news/1">소식</a>
						</li>-->
						<li>
							<a href="/jpgroup/event">이벤트</a>
						</li> 
						<li>
							<a href="/jpgroup/contactus">문의하기</a>
						</li> 
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->




	<!-- Main_Banner -->
	<section id="main_banner" class="main_banner">
		<div id="test">
			<div class="container">
				<div class="wrap">
					<div class="clearfix">
						<ul id="slide" class="slide">
							<? foreach ($slide as $row) { ?>
								<div class="col-xs-12">
									<li class="slide_box">
										<img src="/assets/uploads/<?= $row->slide_image ?>">
									</li>
								</div>
							<? } ?>
						</ul>

					</div>
					<div id="slide_paging" class="slide_paging mail_paging"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Main_Banner_END -->


	<!-- sub_Banner -->
	<!-- <section id="sub_banner" class="sub_banner">
		<div class="container">
			<div class="col-xs-12 ">
				<div class="sub_banner1">
					<span>조금 전 신청한 사은품 수 <span class="countUp">
							<?php
							// 특정 범위의 정수 난수
							for ($i = 0; $i < 1; $i++) {
								$result = mt_rand(10, 20);
								echo "$result 건\n";
							}
							?>
						</span> </span>

				</div>
			</div>
		</div>
	</section> -->
	<!-- sub_Banner_END -->



	<!-- Live -->
	<? foreach ($yutube as $list) : ?>
		<section id="live">
			<div class="container">
				<div class="main-header" >
					<h3>방송 다시보기</h3><span class="on_air"></span>
				</div>
				<div class="video">
					<div class="video-container">
						<iframe width="100%" height="100%" src="<?= $list->yutube_link ?>" frameborder="0" allowfullscreen="true" style="border-radius: 10px;"></iframe>
					</div>
				</div>
			</div>
		</section>
	<? endforeach; ?>
	<!-- Live_END -->


	<section id="sub_banner" class="sub_banner">
		<div id="test">
			<div class="container">
				<div class="main-header">
					<h3>놓치면 후회할 이벤트</h3><span class="on_air"></span>
				</div>
				<div class="w_banner">
					<img src="/assets/images/banner/event_vn.png">
				</div>
				<div class="m_banner">
					<img src="/assets/images/banner/event_vn_m.png">
				</div>
			</div>
		</div>
	</section>


	<!-- Product -->
	<section id="product" class="mb30">
		<div class="container">
			<!-- <div class="main-header mb10">
				<h3>모든 상품보기</h3>
			</div> -->
			<div class="category">
				<ul>
					<li class="jpgroup_cate_list active" data-number="0">
						<a href="javascript:void(0);">
							<!-- <div class="sym" style="background-image: url('/assets/images/category/category_1.png');"></div> -->
							<p>전체</p>
						</a>
					</li>
					<? foreach ($category as $cate) : ?>
						<li class="jpgroup_cate_list" data-number="<?= $cate->category_idx ?>">
							<a href="javascript:void(0);">
								<!-- <div class="sym" style="background-image: url('/assets/images/category/category_<?= $cate->category_idx + 1 ?>.png');"></div> -->
								<p><?= $cate->category_name ?></p>
							</a>
						</li>
					<? endforeach; ?>
				</ul>
			</div>
			<div class="cate_menu">
				<div id="after"></div>

				<? foreach ($product as $row) {
					$image = $row->product_thumb; ?>
					<div class="col-md-4 col-xs-6 main_list">
						<div class="product_area" onclick="location.href='<?= $row->product_numget ?><?= $row->product_idx2 ?>'">
							<div class="bg" style=" background-image: url('/assets/uploads/<?= $image ?>');">
								<div class="count">
									<p>GET</p>
									<p><?= $row->product_get ?></p>
								</div>
								<div class="contents">
									<div class="cont-area">
										<div class="brand">
											<div class="title">

												<p><?= $row->product_name ?></p>
												<p><b><?= $row->insure_company ?></b> <?= $row->insure_name ?></p>
												
												<!-- <p><img src="/assets/uploads/<?= $row->insure_logo ?>" style="width: 16px; border-radius: 50%;"> <?= $row->insure_name ?></p> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<? } ?>
				<!-- <div class="col-xs-12">
					<div class="more-btn" data-count="<?= $count ?>" data-now="1">
						<button>더보기</button>
					</div>
				</div> -->

			</div>
		</div>
	</section>
	<!-- Product_END -->

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 p0">
					<div class="foot_cont">
						상호명 : (주)에스비제이 | 대표 : 정일웅 | 주소 : 서울특별시 강남구 도산대로 157, 14층(신사동, 신웅타워2) | 메일 : info@sbjgroup.co.kr | 사업자등록번호 : 894-86-01505
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
	<script src="/assets/js/test.js"></script>
	<script src="/assets/js/jpgroup_callgetdev.js"></script>

	<script src="/assets/lib/slick/slick.js"></script>

	<script src="/assets/js/global.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>