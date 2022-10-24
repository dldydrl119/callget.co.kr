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

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/get.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/callpop.css" rel="stylesheet" type="text/css">

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
                    <a href="/tmon">
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
                            <a href="/tmon">메인</a>
                        </li>
                        <li>
                            <a href="/tmon/about">콜겟TV란?</a>
                        </li>
                        <li>
                            <a href="/tmon/faq">이용방법</a>
                        </li>
                        <li>
                            <a href="/tmon/event">이벤트</a>
                        </li>
                        <!-- <li>
							<a href="/tmon/news/1">소식</a>
						</li> -->
                        <li>
                            <a href="/tmon/contactus">문의하기</a>
                        </li>
                    </ul>
                </div>
            </div><!-- Container_END -->
        </nav>
    </header>
    <!-- Navigation_END -->

    <section id="get_product2" class="get_product mt20">
        <div class="container">
            <div class="row">
                <div class="sub-navbar-get">
                    <div class="sub-navbar-header">
                        <button type="button" class="return" onclick="history.back()">
                            <span class="glyphicon glyphicon-menu-left"></span>
                        </button>
                    </div>

                    <div class="get-nav">
                        <ul>
                            <li>
                                <a href="javascript:history.back();">리워드시청</a>
                            </li>
                            <li class="active">
                                <a href="#">방송시청</a>
                            </li>
                            <li>
                                <a href="javascript:_AceTM.PV('/event/call_<?= $data->product_idx ?>.html'); location.href='tel:<?= $data->insure_call ?>'; " data-idx="<?= $data->product_idx ?>" data-idx="<?= $data->product_idx ?>">상담예약</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get_Main -->
    <section id="get_main3">
        <div class="manual">
            <button class="manual_up">
                <span class="glyphicon glyphicon-menu-up"></span>
            </button>
            <div class="manual_title">
                <h2>이용방법 및 유의사항</h2>
            </div>
            <div class="manual_hr"></div>
            <div class="manual_area">
                <div class="container relative" style="width: 100%;">
                    <div class="manual_contents">
                        <h3>꼭 읽어주세요!</h3>
                        <p>
                            본 영상은 리워드 영상입니다.<br>
                            해당 리워드는 상담 완료 시 무료 증정 됩니다.<br>
                            동일한 라이프 서비스의 경우 리워드는 1회로 지급제한 됩니다.
                        </p>
                        <h3>이용방법</h3>
                        <p>
                            STEP1) 리워드 선택하기<br>
                            STEP2) 이 사은품 무료로 받기 버튼 누르기<br>
                            STEP3) 라이프 서비스 영상 시청하기<br>
                            STEP4) 전화로 간편 상담 예약하기 버튼 누르기<br>
                            STEP5) 리워드 수령하기
                        </p>
                        <h3>FAQ</h3>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">Q) 콜겟은 어떻게 이용해야 되나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse0" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        메인 페이지에서 원하는 리워드/라이프 서비스를 선택하고, 상담을 완료하면<br>
                                        선택한 리워드를 무료로 받을 수 있습니다.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Q) 상담만 받아도 리워드를 받을 수 있나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        네 맞습니다. 라이프 서비스 상담을 완료하면 가입 및 이용 여부와 관계없이<br>
                                        리워드가 제공됩니다. 단, 각 파트너사가 정한 상담 완료 기준을 지켜야 정상<br>
                                        지급됩니다. (상담 완료 기준 : 라이프 서비스 영상 참조)
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q) 콜겟TV 홈페이지에 있는 모든 리워드를 다 받을 수 있나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        동일한 라이프 서비스의 경우, 무료로 지급받을 수 있는 리워드는 1개로 제한<br>
                                        되어 있습니다. 하지만, 라이프 서비스가 다른 경우에는 각각의 상담을 통해 리<br>
                                        워드를 모두 지급받으실 수 있습니다.<br>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q) 리워드는 언제 받을 수 있나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        전화 상담 예약 후 라이프 서비스 상담사와의 상담을 완료하시면 4주 ~ 8주 내<br>
                                        에 고객님 주소로 배송됩니다.

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Q) 제 개인 정보는 어떻게 처리되나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        콜겟TV는 고객님의 어떠한 정보도 수집 및 보관하지 않습니다. <br>
                                        <br>
                                        라이프 서비스 상담을 진행하는 파트너사는 상담과 리워드 배송을 위해서만<br>
                                        정보를 수집 및 이용합니다. 개인 정보 보관은 각 파트너사의 정책에 따라<br>
                                        결정되며, 이는 전화 상담 시에 자세히 안내받을 수 있습니다.<br>
                                        <br>
                                        그 외의 경우엔 어떠한 상황에도 개인 정보를 수집, 보관, 무단 활용을 하지 않습니다.

                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title panel-title-adjust">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q) 리워드 제품이 불량인 경우엔 어떻게 해야 하나요?</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            모든 리워드는 콜겟TV와 제조/유통사가 정식으로 계약을 맺어 발송하는 상품<br>
                                            이므로, 해당 리워드의 제조/유통사에서 A/S 및 교환 문의를 진행하면 됩니다.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="get_area1" id="list">
            <button id="getcall" class="get_btn" data-idx="<?= $data->product_idx ?>">간편하게 전화로 상담 예약하기 <p style="font-size:10px; line-height: 0.5em;">(평균 소요시간 30초)</p></button>
        </div>
        <div class="get_area_m" id="list">
            <button id="getcall" class="get_btn" ">간편하게 전화로 상담 예약하기 <p style=" font-size:10px; line-height: 0.5em;">(평균 소요시간 30초)</p></button>
        </div>
    </section>

    <!-- carousel end -->



    <div id="pop">
        <article>
            <div class="infoDetail">
                <p class="title"><?= $data->product_titlepop ?><br><strong><?= $data->product_namepop ?></strong><br><?= $data->product_subpop ?></p>
                <!-- <p><strong>[ <?= $data->insure_call ?> ]</strong>으로 지금바로 전화주세요.</p><br> -->

                <div class="infoimg">
                    <img src="/assets/uploads/<?= $data->product_slide ?>" alt="">
                </div>
                <div class="infofoot">
                    <div class="line"></div>
                    <p class="sub_title">간편하게 전화로 상담 예약하기<br>(평균 통화 시간 <strong>30초</strong>)</p>
                </div>
            </div>
            <div class="button_zone">
                <button class="infobutton" type="button">취소</button>
                <button id="<?= $data->product_idx ?>" class="infobutton1" onclick="location.href='tel:<?= $data->insure_call ?>'" type="button">통화하기</button>
            </div>
        </article>
    </div>

    </section>
    <!-- Get_Main_END -->

    <!-- Call_Main -->
    <section id="call_main2" class="call_product">
        <div class="container">
            <div class="call_area">
                <div class="thumb">
                    <img src="/assets/uploads/<?= $data->product_thumb ?>" alt="">
                </div>
                <div class="cont">
                    <p>현재 선택하신 리워드입니다.</p>
                    <p><?= $data->product_name ?></p>
                    <p>※ 상담예약 및 상담 시 방송영상 시청여부를 확인할 수 있습니다.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Call_Main_END -->

    <!-- Get_Product -->
    <section id="get_product2" class="get_product_video mt20">
        <div class="container">
            <div class="row" style="margin-top:0px ;">
                <div class="product_video_title">
                    <p>방송영상 시청</p>
                </div>
                <div class="product_contents">
                    <div class="video">
                        <div class="video-container">
                            <? echo $video = explode('/', $data->insure_video)[3]; ?>
                            <iframe width="100%" src="https://www.youtube.com/embed/<?= $video ?>?ps=blogger&controls=1&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="get_product2" class="get_product_content">
        <div class="container">
            <div class="row" style="margin:0px ;">
                <div class="info">
                    <p class="web"><strong>방송영상을 시청</strong>하시면 다음 단계로 넘어갈 수 있습니다.</p>
                    <p class="mob"><strong>방송영상을 시청</strong>하시면 <br>다음 단계로 넘어갈 수 있습니다.</p>
                    <p class="sub_text"><?= nl2br($data->insure_text2) ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="get_product2" class="get_product_title mb10">
        <div class="container box_padding">
            <div class="row mb30" style="margin-top: 0;">
                <div class="product_contents">
                    <div class="thumb" style="background-image: url('/assets/uploads/<?= $data->insure_logo ?>');"></div>
                    <div class="sponsor">
                        <div class="logo">
                            <img src="/assets/uploads/<?= $data->insure_logo ?>" alt="">
                        </div>
                        <p class="tag"><?= $data->insure_company ?></p>
                        <p class="title">라이프서비스 상품</p>
                        <p class="subtitle"> <?= $data->insure_name ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="get_product2" class="get_product_notice mb100">
        <div class="container box_padding">
            <div class="row">
                <div class="product_title">
                    <p>유의사항</p>
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
    <div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
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
    <script src="/assets/js/tmon_callgetdev.js"></script>

    <script src="/assets/js/get.js"></script>
    <script>
        $(document).ready(function() {
            $(".manual_up").click(function() {
                $(".manual").toggleClass("active");
                $(".manual_up").toggleClass("active");
                $(".manual_area").toggleClass("active");
            });
        });
        $(document).ready(function() {
            $(".manual_title").click(function() {
                $(".manual").toggleClass("active");
                $(".manual_title").toggleClass("active");
                $(".manual_area").toggleClass("active");
            });
        });
    </script>
</body>

</html>