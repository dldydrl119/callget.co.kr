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
	<link href="/assets/css/faq.css" rel="stylesheet" type="text/css">
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
					<a href="/syrup">
						<img src="/assets/images/logo.png" />
						<!-- <p>??????????????? ?????? ???????????? ????????????</p> -->
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
							<a href="/syrup">??????</a>
						</li>
						<li>
							<a href="/syrup/about">??????TV????</a>
						</li>
						<li>
							<a href="/syrup/faq">????????????</a>
						</li>
						<li>
							<a href="/syrup/event">?????????</a>
						</li> 
						<!-- <li>
							<a href="/syrup/news/1">??????</a>
						</li>-->
						<li>
							<a href="/syrup/contactus">????????????</a>
						</li> 
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- FAQ_1  -->
	<section id="faq_1">
		<div class="cover"></div>
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>????????????</h3>
					<p>??????TV???<br>?????????????????????.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ_1 _END -->

	<!-- FAQ_2 -->
	<section id="faq_2" class="faq">
		<div class="video-container">
			<iframe width="100%" src="https://www.youtube.com/embed/h3iT9WJhVUw?ps=blogger&controls=0&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
		</div>
	</section>
	<!-- FAQ_2_END -->

	<!-- FAQ_3 -->
	<section id="faq_3" class="faq mt50">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>??????TV ????????????</h3>
					<div class="explain">
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_1.png">
							<p>1. ????????? ??????</p>
							<p>??????TV ?????????????????? ????????? ???????????? ???????????????.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_2.png">
							<p>2. ????????? ?????? ??????</p>
							<p>???????????? ?????? ????????? ?????? ??? ????????? ????????? ???????????????.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_3.png">
							<p>3. ????????? ????????? ?????? ??????</p>
							<p>???????????? ????????? ????????? ????????? ????????? ???????????????.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_4.png">
							<p>4. ???????????? ??????</p>
							<p>????????? ???????????? ?????? ????????? ????????? ?????? ?????????<br>???CALL???????????? ?????? ????????? ???????????????.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_5.png">
							<p>5. ?????? ??????</p>
							<p>???????????? ????????? ???????????? ?????? ????????? ???????????????.</p>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 ex">
							<img src="/assets/images/faq/sym_6.png">
							<p>6. ????????? ??????</p>
							<p>?????? ?????? ??? ????????? ????????? ?????? ???????????? ??????????????????.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ_3_END -->

	<!-- FAQ_4 -->
	<section id="faq_4" class="faq">
		<div class="container">
			<div class="row">
				<div class="section-header">
					<h3>FAQ</h3>
				</div>
			</div>
			<div class="row">
				<div class="panel-group" id="accordion">
					<? for($i=0; $i < count($list); $i++) {?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title panel-title-adjust">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>">
									Q) <?= $list[$i]->faq_question ?>
								</a>
							</h4>
						</div>
						<div id="collapse<?= $i ?>" class="panel-collapse collapse">
							<div class="panel-body">
								A) <?= nl2br($list[$i]->faq_answer) ?>
							</div>
						</div>
					</div>

					<?}?>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- FAQ_4_END -->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP?????? ??????" alt="TOP?????? ??????">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>
</body>

</html>