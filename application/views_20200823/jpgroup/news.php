<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">

    <meta name="keywords" content="callget">
    <meta name="description" content="Global Total Radon Solution">

    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

    <title>CALLGET</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/news.css" rel="stylesheet" type="text/css">

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
				<div class="logo">
					<a href="/jpgroup">
						<img src="/assets/images/logo.png" />
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
						</li>
						<li>
							<a href="/jpgroup/contactus">문의하기</a>
						</li> -->
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

    <!-- Review -->
    <section id="review" class="wow fadeInUp">
        <div class="container-fluid">
            <div class="container">
                <div class="section-header">
                    <h3>CALLGET TV 소식</h3>
                </div>
            </div>
        </div>
        <div id="cbp-vm" class="cbp-vm-view-grid">

            <!-- Option -->
            <div class="container-fluid box_border p0">
                <div class="container">
                    <div id="option-wrap" class="col-xs-12">
                        <div class="option-area col-lg-8 col-md-6 col-sm-4 col-xs-12 p0">
                            <div class="cbp-vm-options btn-group">
                                <a href="#" class="btn cbp-vm-selected" data-view="cbp-vm-view-grid" title="썸네일형" alt="썸네일형">
                                    <span class="glyphicon glyphicon-th"></span>
                                </a>
                                <a href="#" class="btn" data-view="cbp-vm-view-list" title="리스트형" alt="리스트형">
                                    <span class="glyphicon glyphicon-th-list"></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Option_END -->

            <!-- Grid & List -->
            <div class="container-fluid p0">
                <div class="container">
                    <ul class="cbp-list col-xs-12">
                      <?foreach($list['list'] as $row) { $class = '';?>
                        <li>
                            <div class="list-img">
                                <a href="/main/news_view/<?=$row->news_idx?>">
                                  <?if($row->news_thumb) {$thumb = '/assets/uploads/'.$row->news_thumb;} else { $thumb = '/assets/images/default.png';}?>
                                    <div style="background-image:url(<?=$thumb?>);"></div>
                                </a>
                            </div>
                            <div class="list-contents">
                                <div class="title">
                                    <a href="/main/news_view/<?=$row->news_idx?>"><?=$row->news_title?></a>
                                </div>
                                <p class="text">
                                    <?=strip_tags($row->news_content)?>
                                </p>
                                <div class="hr"></div>
                                <div class="list-info">
                                    <div class="writer">
                                        <img src="/assets/images/symbol_g.png" class="img-circle info-logo">
                                        <span>CALLGET TV</span>
                                    </div>
                                    <div class="sns">
                                      <?$arrs = explode('-',$row->news_date); $date = implode('. ',$arrs);?>
                                      <?=$date?>
                                    </div>
                                </div>
                            </div>
                        </li>
                      <?}?>

                    </ul>
                </div>

                <!-- paging -->
                <div class="paging">
                  <div class="col-xs-12">
                      <div class="dataTables_paginate paging_bootstrap_number" id="sample_1_paginate">
                          <?echo $this->pagination->create_links();?>
                      </div>
                  </div>
              </div>
                <!-- /.paging -->
            </div><!-- /.container-fluid -->
        </div><!-- /.cbp-vm-switcher -->
    </section>
    <!-- Review_END -->

    	<!-- Scroll to top -->
    	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
    		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
    	</div>
    	<!-- Scroll to top_END-->

    	<!-- Javascript files -->
    	<script src="/assets/js/global.js"></script>

    <!-- Javascript files -->
	   <script src="/assets/lib/bootstrap/js/jquery.bootstrap-dropdown-hover.js"></script>
     <script src="/assets/lib/sticky/jquery.sticky.js"></script>
     <script src="/assets/lib/wow/wow.min.js"></script>
     <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
     <script src="/assets/lib/cbpViewModeSwitch.js"></script>
     <script src="/assets/lib/classie.js"></script>

    </body>
    </html>
