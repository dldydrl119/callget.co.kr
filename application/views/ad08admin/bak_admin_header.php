<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>관리자 페이지</title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/assets/template/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">
    <!-- Admin CSS -->
    <link href="/assets/css/admin.css" rel="stylesheet">
    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <style>
        #pagination {
            text-align: center;
        }

        #idxgo {
            margin-right: 5px;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/admin" class="site_title"><img src="/assets/images/symbol.png" alt=""> <span>CALLGET</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>안녕하세요</span>
                            <h2><?= $_SESSION['id'] ?> 님</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-edit"></i> Main <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/admin/slideList">메인배너 관리</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> 재단소개 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <!-- <li><a href="/admin/categoryList">카테고리 관리</a></li> -->
                                        <li><a href="/admin/history-menu">연혁 관리</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> 장학금 · 기부자 명단<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/admin/bursary-give">장학금 지급 내역</a></li>
                                        <li><a href="/admin/bursary-donation">장학금 기부 내역</a></li>
                                        <li><a href="/admin/bursary-goods">물품 지원 내역</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> 정보마당 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/admin/notice">공지사항 관리 </a></li>
                                        <li><a href="/admin/press">언론보도 관리 </a></li>
                                        <li><a href="/admin/gallery">갤러리 관리 </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?= $_SESSION['id'] ?> 님
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->