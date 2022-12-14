<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="keywords" content="Callget">
    <meta name="description" content="Callget">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

    <title>CALLGET</title>

    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/get.css" rel="stylesheet" type="text/css">

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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <style>
        #pop {
            position: fixed;
            z-index: 1;
            top: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        #pop>article {
            width: 50%;
            position: relative;
            z-index: 2;
            background: white;
            box-shadow: 3px 3px 5px black;
            margin: 12% 0 0 25%;
            cursor: pointer;
            text-align: center;
        }

        .black {
            background: rgba(0, 0, 0, 0.6);
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#list>button:first-of-type").click(function() {
                $("#pop").fadeIn();
                $("#pop").addClass("black");
            });
            $("#pop>article").click(function() {
                $(this).parent().fadeOut();
            });
        });
    </script>

</head>

<body class="bg-lightgray">
    <!-- Preloader -->
    <!-- <div id="preloader">
		<div id="status"></div>
	</div> -->
    <!-- Preloader_END -->

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-get call navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="logo get">
                    <a href="/ad04">
                        <img src="/assets/images/logo.png" />
                        <!-- <p>??????????????? ?????? ???????????? ????????????</p> -->
                    </a>
                </div>

                <div class="navbar-header">
                    <button type="button" class="return" onclick="history.back()">
                        <span class="glyphicon glyphicon-menu-left"></span>
                    </button>
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
                            <a href="/ad04">??????</a>
                        </li>
                        <li>
                            <a href="/ad04/about">??????TV????</a>
                        </li>
                        <li>
                            <a href="/ad04/faq">????????????</a>
                        </li>
                        <!-- <li>
							<a href="/ad04/news/1">??????</a>
						</li>
						<li>
							<a href="/ad04/contactus">????????????</a>
						</li> -->
                    </ul>
                </div>

                <div class="get-nav">
                    <ul>
                        <li>
                            <a href="javascript:history.back();">1 ????????????</a>
                        </li>
                        <li class="active">
                            <a href="#">2 ????????????</a>
                        </li>
                        <li>
                            <a href="javascript:_AceTM.PV('/event/call_<?= $data->product_idx ?>.html'); location.href='tel:<?= $data->insure_call ?>'; " data-idx="<?= $data->product_idx ?>" data-idx="<?= $data->product_idx ?>">3 ????????????</a>
                        </li>
                    </ul>
                </div>
            </div><!-- Container_END -->
        </nav>
    </header>
    <!-- Navigation_END -->

    <!-- Get_Main -->
    <section id="get_main">
        <div class="manual">
            <button class="manual_up">
                <span class="glyphicon glyphicon-menu-up"></span>
            </button>
            <div class="manual_title">
                <h2>???????????? ??? ????????????</h2>
            </div>
            <div class="manual_hr"></div>
            <div class="manual_area">
                <div class="container relative">
                    <div class="manual_contents">
                        <h3>??? ???????????????!</h3>
                        <p>
                            ??? ????????? ????????? ????????? ???????????????.<br>
                            ?????? ???????????? ???????????? ??? ???????????? ?????????.<br>
                            ????????? ????????? ???????????? 1?????? ???????????? ?????????.
                        </p>
                        <h3>????????????</h3>
                        <p>
                            STEP1) ????????? ????????????<br>
                            STEP2) GET ?????????, ?????????????????? ?????? ??????<br>
                            STEP3) CALL ?????? ?????????, ?????? ????????????<br>
                            STEP4) ????????? ??????
                        </p>
                        <h3>FAQ</h3>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">Q) ????????? ????????? ???????????? ??????????</a>
                                    </h4>
                                </div>
                                <div id="collapse0" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) ????????????????????? ?????? ?????? ???????????? ???????????????<br>
                                        ???????????? ???????????? ????????? ?????? ????????? ????????? ?????? <br>
                                        Call ????????? ?????? ??????????????? ???????????? ?????????.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Q) ????????? ????????? ???????????? ?????? ??? ??????????</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">A) ??? ????????? ???????????? ?????? ?????? ?????? ????????? ???????????? ???????????? ?????? ?????????.<br></div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q) ????????? ?????? ???????????? ??? ?????? ??? ??????????</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) ????????? ????????? ????????? ???????????? 1?????? ???????????? ????????????.<br>
                                        ???, ????????? ????????? ?????? ???????????? ?????? ??????????????? ????????? ?????? ???????????? ??? ????????? ??? ????????????.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q) ?????? ????????? ???????????? ???????????? ??????????</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) ????????? ???????????? ????????? ????????? ?????? ??? ???????????? ????????????.<br>
                                        ?????? ????????? ???????????? ????????? ???????????? ????????? ?????? ?????????????????? ??????????????? <br>
                                        ?????? ?????? ??? ???????????? ???????????? ???????????? ????????? ???????????????. <br>
                                        ???????????? ????????? ??? ??????????????? ????????? ?????? ???????????? ?????? ??? ?????? ????????????.<br>
                                        ??? ?????? ????????? ????????? ?????? ????????? ??????, ??????, ?????? ????????? ?????? ????????????.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Q) ???????????? ?????? ????????? ?????? ??? ??????????</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) ?????? ????????? ???????????? ?????? ?????? ???????????? ?????? ????????? ?????????<br>
                                        ?????? ????????? ????????? ?????? ??? ????????? ????????? ?????? ????????? ???????????????.<br>
                                        ?????? ????????? ???????????? ???????????? ?????? ?????? ????????? 4???~8??? ?????? ???????????????.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Q) ???????????? A/S ??? ????????? ????????? ??????????</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) ??? ????????? ???????????? ??????/???????????? ???????????? ???????????? ?????? ?????? ??????????????? <br>
                                        ?????? ???????????? ??????/??????????????? A/S ??? ????????? ????????? ?????????.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="get_area1">
            <button id="getcall" class="get_btn" onclick="javascript:_AceTM.PV('/event/call_<?= $data->product_idx ?>.html'); location.href='tel:<?= $data->insure_call ?>'" data-idx="<?= $data->product_idx ?>">CALL ??????????????????<p style="font-size:10px; line-height: 0.5em;">(365???,24?????? ??????)</p></button>
        </div>
        <div class="get_area_m" id="list">
            <button id="getcall" class="get_btn" ">CALL ??????????????????<p style=" font-size:10px; line-height: 0.5em;">(365???,24?????? ??????)</p></button>
        </div>
    </section>

    <div id="pop">
        <article>
            <div class="info_call">????????????</div>
            <div class="infoDetail">
                <img class="infoimg" src="/assets/uploads/<?= $data->product_thumb ?>" alt="">
                <div style="height: 30px;"></div>
                <p><strong>[ <?= $data->product_name ?> ]</strong>??? ???????????? ?????? ??????????????? ?????? ?????????. </p>
                <p><strong>[ <?= $data->insure_call ?> ]</strong>?????? ???????????? ???????????????.</p><br>
                <p>365???,24?????? ???????????? ?????? </p>
            </div>
            <button class="infobutton" type="button">??????</button>
        </article>
    </div>
    </section>
    <!-- Get_Main_END -->

    <!-- Call_Main -->
    <section id="call_main">
        <div class="container">
            <div class="call_area">
                <div class="thumb">
                    <img src="/assets/uploads/<?= $data->product_thumb ?>" alt="">
                </div>
                <div class="cont">
                    <p>?????? ???????????? ??????????????????.</p>
                    <p><?= $data->product_name ?></p>
                    <p>??? ???????????? ??? ?????? ??? ???????????? ??????????????? ????????? ??? ????????????.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Call_Main_END -->

    <!-- Get_Product -->
    <section id="get_product" class="get_product mb100">
        <div class="container">
            <div class="row">
                <div class="product_title">
                    <h3>???????????? ??????</h3>
                </div>
                <div class="product_contents">
                    <div class="video">
                        <div class="video-container">
                            <? echo $video = explode('/', $data->insure_video)[3]; ?>
                            <iframe width="100%" src="https://www.youtube.com/embed/<?= $video ?>?ps=blogger&controls=1&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="info">
                            <p>
                                <?= nl2br($data->insure_text2) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_title">
                    <h3>?????????????????? ??????</h3>
                </div>
                <div class="product_contents">
                    <div class="thumb" style="background-image: url('/assets/uploads/<?= $data->insure_logo ?>');"></div>
                    <div class="sponsor">
                        <p><?= $data->insure_company ?></p>
                        <p><?= $data->insure_name ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_title">
                    <h3>????????????</h3>
                </div>
                <div class="product_contents">
                    <div class="info">
                        <p>
                            <?= nl2br($data->insure_text) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get_Product -->

    <!-- Scroll to top -->
    <div class="scroll-up" title="TOP?????? ??????" alt="TOP?????? ??????">
        <a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
    </div>
    <!-- Scroll to top_END-->

    <!-- Javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="/assets/js/cbpAnimatedHeader.js"></script>
    <script src="/assets/js/classie.js"></script>
    <script src="/assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="/assets/js/jquery.sticky.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>

    <script src="/assets/js/common.js"></script>
    <script src="/assets/js/ad04_callgetdev.js"></script>

    <script src="/assets/js/get.js"></script>
    <script>
        $(document).ready(function() {
            $(".manual_up").click(function() {
                $(".manual").toggleClass("active");
                $(".manual_up").toggleClass("active");
                $(".manual_area").toggleClass("active");
            });
        });
    </script>
</body>

</html>