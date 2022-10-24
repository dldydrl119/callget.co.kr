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
	<link href="/assets/css/about.css" rel="stylesheet" type="text/css">

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
				<div class="logo">
					<a href="/jinketing">
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
							<a href="/jinketing">메인</a>
						</li>
						<li>
							<a href="/jinketing/about">콜겟TV란?</a>
						</li>
						<li>
							<a href="/jinketing/faq">이용방법</a>
						</li>
						<li>
							<a href="/jinketing/event">이벤트</a>
						</li> 
						<!-- <li>
							<a href="/jinketing/news/1">소식</a>
						</li> -->
						<li>
							<a href="/jinketing/contactus">문의하기</a>
						</li> 
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- About_1 -->
	<section id="about_1">
		<div class="cover"></div>
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>콜겟TV란?</h3>
					<p>콜겟TV <br>소개입니다.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- About_1_END -->

	<!-- About_2 -->
	<section id="about_2">
		<div class="video-container">
			<iframe width="100%" src="https://www.youtube.com/embed/DbLjgP-ekmE?ps=blogger&controls=0&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
		</div>
	</section>
	<!-- About_2_END -->

	<!-- About_3 -->
	<section id="about_3">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>콜겟TV는 편리합니다.</h3>
					<p>더 나은 라이프를 위한 상품과 영상을 확인하고 <br>전화 상담을 완료하면 다양한 리워드를 무료로 받을 수 있습니다.</p>
				</div>
				<div class="symbol col-xs-12">
					<div>
						<img src="/assets/images/about_1.png">
					</div>
				</div>
				<div class="step_area">
					<div class="steps">
						<p>1. 라이프 상품과 서비스</p>
						<p>콜겟TV는 파트너사로 부터 라이프 상품과 서비스를 제공 받습니다.</p>
					</div>
					<div class="steps">
						<p>2. 콜겟TV로 상담예약</p>
						<p>콜겟TV만의 편리한 전화예약 시스템을 통해 복잡한 과정 없이 상담을 예약합니다.</p>
					</div>
					<div class="steps">
						<p>3. 무료 리워드 수령</p>
						<p>각 파트너사가 정한 전화상담 완료 기준(3분~7분)을 충족하면 리워드를 100% 무료 지급합니다.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About_3_END -->

	<!-- About_4 -->
	<section id="about_4">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>콜겟TV는</h3>
					<h3>소중한 개인 정보를 보호합니다.</h3>
				</div>
				<div class="symbol col-xs-12">
					<div>
						<img src="/assets/images/about_2.png">
					</div>
				</div>
				<div class="step_area">
					<div class="steps">
						<p>콜겟TV는 고객님의 어떠한 정보도 수집 및 보관하지 않습니다.</p>
					</div>
					<div class="steps">
						<p>상담 과정에서 발생한 개인 정보는 파트너사에 한하여 수집 및 이용되며, 해당 개인 정보는 라이프 서비스 상담과 리워드 배송의 목적으로만 활용됩니다.</p>
					</div>
					<div class="steps">
						<p>그 외에는 어떠한 목적으로도 활용되지 않습니다.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About_4_END -->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>
</body>

</html>