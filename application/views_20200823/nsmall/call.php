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

	<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/get.css" rel="stylesheet" type="text/css">

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
					<a href="/nsmall">
						<img src="/assets/images/ns_logo_w.png" />
						<p>상담완료만 해도 리워드가 내집으로</p>
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
							<a href="/nsmall">메인</a>
						</li>
						<li>
							<a href="/nsmall/about">콜겟TV란?</a>
						</li>
						<li>
							<a href="/nsmall/faq">이용방법</a>
						</li>
						<!-- <li>
							<a href="/nsmall/news/1">소식</a>
						</li>
						<li>
							<a href="/nsmall/contactus">문의하기</a>
						</li> -->
					</ul>
				</div>

				<div class="get-nav">
                    <ul>
                        <li>
                            <a href="javascript:history.back();">1 리뷰시청</a>
                        </li>
                        <li class="active">
                            <a href="#">2 상품시청</a>
                        </li>
                        <li>
                            <a href="tel:<?=$data->insure_call?>" data-idx="<?=$data->product_idx?>" data-idx="<?=$data->product_idx?>">3 상담예약</a>
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
                <h2>이용방법 및 유의사항</h2> 
            </div>
            <div class="manual_hr"></div>
            <div class="manual_area">
                <div class="container relative">
                    <div class="manual_contents">
                        <h3>꼭 읽어주세요!</h3>
                        <p>
                            본 영상은 리워드 사용법 영상입니다.<br>
                            해당 리워드는 상담완료 시 무료증정 됩니다.<br>
                            동일한 상품을 리워드가 1회로 지급제한 됩니다.
                        </p>
                        <h3>이용방법</h3>
                        <p>
                            STEP1) 리워드 선택하기<br>
                            STEP2) GET 누르고, 라이프서비스 영상 시청<br>
                            STEP3) CALL 버튼 누르고, 상담 예약하기<br>
                            STEP4) 사은품 수령
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
                                        A) 메인페이지에서 받고 싶은 리워드를 선택하시고<br>
                                        리워드를 제공하는 업체의 광고 영상을 시청한 후에 <br>
                                        Call 버튼을 눌러 상담예약을 남기시면 됩니다.
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
                                    <div class="panel-body">A) 네 상담만 받으시면 가입 또는 이용 여부와 관계없이 리워드가 제공 됩니다.<br></div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q) 콜겟의 모든 리워드는 다 받을 수 있나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) 동일한 라이프 상품에 리워드는 1개로 제한되어 있습니다.<br>
                                        단, 라이프 상품이 다른 경우에는 각각 상담예약을 남기면 모든 리워드를 다 받으실 수 있습니다.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q) 개인 정보를 수집하고 이용하는 건가요?</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) 콜겟은 고객님의 어떠한 정보도 수집 및 보관하지 않습니다.<br>
                                        상담 예약을 남기시는 상품을 상담하기 위해서 해당 브랜드사에서 상담예약과 <br>
                                        상담 완료 후 리워드를 배송하기 위해서만 정보를 수집합니다. <br>
                                        개인정보 보관은 각 브랜드사의 정책에 따라 결정되면 상담 시 안내 받습니다.<br>
                                        그 외에 어떠한 경우도 개인 정보를 수집, 보관, 무단 활용을 하지 않습니다.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Q) 리워드는 언제 어떻게 받을 수 있나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) 상담 예약을 남기시면 해당 상품 회사에서 상담 전화를 드리고<br>
                                        상담 완료를 하시면 완료 된 고객에 리워드 발송 업체에 전달됩니다.<br>
                                        상담 완료가 확인되면 리워드가 배송 되기 때문에 4주~8주 내에 배송됩니다.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Q) 리워드의 A/S 나 문의는 어떻게 되나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) 본 제품의 리워드는 제조/유통사와 정식으로 계약되어 발송 되는 상품이므로 <br>
                                        해당 리워드의 제조/유통사에서 A/S 및 문의를 하시면 됩니다.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="get_area">
            <button id="getcall" class="get_btn" onclick="location.href='tel:<?=$data->insure_call?>'" data-idx = "<?=$data->product_idx?>">CALL 상담예약하기</button>
        </div>
    </section>
    <!-- Get_Main_END -->

    <!-- Call_Main -->
    <section id="call_main">
        <div class="container">
            <div class="call_area">
                <div class="thumb">
                    <img src="/assets/uploads/<?=$data->product_thumb?>" alt="">
                </div>
                <div class="cont">
                    <p>현재 선택하신 리워드입니다.</p>
                    <p><?=$data->product_name?></p>
					<p>※ 상담예약 및 상담 시 방송영상 시청여부를 확인할 수 있습니다.</p>
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
                   <h3>방송영상 시청</h3> 
                </div>
                <div class="product_contents">
                    <div class="video">
                        <div class="video-container">
                            <?echo $video = explode('/',$data->insure_video)[3];?>
							<iframe width="100%" src="https://www.youtube.com/embed/<?=$video?>?ps=blogger&controls=1&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
                        </div>
                    </div>
                    <div class="text">
                        <p>방송영상을 시청하시면 <br>다음 단계로 넘어갈 수 있습니다.</p>
						<p>손해보험협회 심의필 제 29145호(2020.04.01)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_title">
                   <h3>라이프스타일 상품</h3> 
                </div>
                <div class="product_contents">
                    <div class="thumb" style="background-image: url('/assets/uploads/<?=$data->insure_logo?>');"></div>
                    <div class="sponsor">
                        <p><?=$data->insure_company?></p>
                        <p><?=$data->insure_name?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_title">
                   <h3>유의사항</h3> 
                </div>
                <div class="product_contents">
                    <div class="info">
                        <p>
                            <?=nl2br($data->insure_text)?>
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
	<script src="/assets/js/nsmall_callgetdev.js"></script>
	
	<script src="/assets/js/get.js"></script>
    <script>
        $(document).ready(function(){
            $(".manual_up").click(function(){
                $(".manual").toggleClass("active");
                $(".manual_up").toggleClass("active");
                $(".manual_area").toggleClass("active");
            });
        });
    </script>
</body>
</html>
