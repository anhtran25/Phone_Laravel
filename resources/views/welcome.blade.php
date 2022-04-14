<!doctype html>

<html class="no-js" lang="vi">
<!--<![endif]-->

<head>
    <link rel="shortcut icon" href="{{asset('img')}}/AdminLTELogo.png?v=90" type="image/png" />
    <meta charset="utf-8" />
    <title>AESHOP </title>
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="1 day" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    
    <link rel="stylesheet" href="{{ asset('css') }}/font-awesome.min.css">

    <script src="{{ asset('js') }}/jquery.min.1.11.0.js"></script>
    <script src="{{ asset('js') }}/bootstrap.min.js"></script>
    <script src='{{ asset('js') }}/option_selection.js' type='text/javascript'></script>
    <script src='{{ asset('js') }}/api.jquery.js' type='text/javascript'></script>

    <script src='{{ asset('js') }}/default_script.min.js?v=90' type='text/javascript'></script>
    <link href='{{ asset('css') }}default_style.min.css?v=90' rel='stylesheet' type='text/css' media='all' />
    <!--[if lt IE 9]>

<![endif]-->
    <script src="{{ asset('js') }}/jquery-migrate-1.2.0.min.js"></script>
    <script src='{{ asset('js') }}/jquery.touchSwipe.min.js' type='text/javascript'></script>
    <script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize"
        src="{{ asset('js') }}/fixheightproductv2.js"></script>
    <script src="{{ asset('js') }}/haravan.plugin.1.0.js"></script>
    <script src='{{ asset('js') }}/jquery.flexslider.js' type='text/javascript'></script>
    <link href='{{ asset('css') }}/flexslider.css' rel='stylesheet' type='text/css' media='all' />
    <script src='{{ asset('js') }}/scripts.js' type='text/javascript'></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/roboto.css">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="AEShop" />
    <meta property="og:image" content="{{ asset('img') }}/share_fb_home.png?v=90" />
    <meta property="og:image" content="{{ asset('img') }}/share_fb_home.png?v=90" />
   
    <meta property="og:site_name" content="Happylive" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.3.3.1.css">
    <!-- Latest compiled and minified JavaScript -->
    <link href='{{ asset('css') }}/font-awesome.min.css' rel='stylesheet' type='text/css' media='all' />
    <link href='{{ asset('css') }}/styles.css?v=90' rel='stylesheet' type='text/css' media='all' />
</head>

<body>
    <nav id="menu-mobile" class="hidden">
        <ul>


            <li><a href="/">Trang chủ</a></li>



            <li class="dropdown">
				<a href="#" title="Danh mục phone" class="">
					<span>Danh mục phone</span>
				</a>
				<ul class="dropdown-menu" role="menu">
					@foreach ($category as $cate)
						@if ($cate->status == 1)
							<li>
								<a href="#"
									title="{{ $cate->name }}">{{ $cate->name }}</a>

							</li>
						@endif
					@endforeach

				</ul>
			</li>



			<li class="dropdown">
				<a href="/collections/dong-ho-nu" title="Đồng hồ nữ" class="">
					<span>Phụ kiện điện thoại</span>
				</a>
				<ul class="dropdown-menu" role="menu">

					<li>
						<a href="#" title="Đồng hồ Beesister">xxxxxxxxxxxx</a>

					</li>



				</ul>
			</li>



			<li>
				<a href="/pages/dich-vu" class="" title="Dịch vụ">
					<span>Dịch vụ</span>
				</a>
			</li>



			<li>
				<a href="/pages/gioi-thieu" class="" title="Giới thiệu">
					<span>Giới thiệu</span>
				</a>
			</li>



			<li>
				<a href="/blogs/news" class="" title="Blog">
					<span>Blog</span>
				</a>
			</li>





        </ul>
    </nav>
    <div id="page">
       
     
        <section id="page_content" class="">
            <div id="pageContainer" class="clearfix">
                <header class="header bkg visible-lg">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 logo">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-7 col-xs-7">
                                        <!-- LOGO -->

                                        <h1>
                                            <a href="#">
                                                <img src="{{ asset('img') }}/AdminLTELogo.png?v=90" alt="AESHOP"
                                                    class="img-responsive logoimg" />
                                            </a>
                                        </h1>

                                        <h1 style="display:none">
                                            <a href="/">AESHOP</a>
                                        </h1>


                                    </div>
                                    <div class="hidden-lg hidden-md col-sm-5 col-xs-5 mobile-icons">
                                        <div>
                                            <a href="#" title="Xem giỏ hàng" class="mobile-cart"><span>5</span></a>
                                            <a href="#" id="mobile-toggle"><i class="fa fa-bars"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
                                <aside class="top-info">
                                    <div class="cart-info hidden-xs">
                                        <a class="cart-link" href="/cart">
                                            <span class="icon-cart">
                                            </span>
                                            <div class="cart-number">
                                                5
                                            </div>
                                        </a>
                                        <div class="cart-view clearfix" style="display: none;">
                                            <table id="clone-item-cart" class="table-clone-cart">
                                                <tr class="item_2 hidden">
                                                    <td class="img"><a href="" title=""><img src=""
                                                                alt="" /></a></td>
                                                    <td>
                                                        <a class="pro-title-view" href="" title=""></a>
                                                        <span class="variant"></span>
                                                        <span class="pro-quantity-view"></span>
                                                        <span class="pro-price-view"></span>
                                                        <span class="remove_link remove-cart">
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table id="cart-view">


                                                <tr>
                                                    <td class="img">
                                                        <a href="/products/dong-ho-nam-skmei-kim-xanh-duong">
                                                            <img src="{{ asset('img') }}/1_e0ed7c0240734782a8268793dce0b9b8_large.jpg "
                                                                alt="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG" />
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="pro-title-view"
                                                            href="/products/dong-ho-nam-skmei-kim-xanh-duong"
                                                            title="ĐỒNG HỒ NAM SKMEI KIM XANH DƯƠNG">ĐỒNG HỒ NAM SKMEI
                                                            KIM XANH DƯƠNG</a>
                                                        <span class="variant">

                                                        </span>
                                                        <span class="pro-quantity-view">2</span>
                                                        <span class="pro-price-view">499,000₫</span>
                                                        <span class="remove_link remove-cart">
                                                            <a href='javascript:void(0);'
                                                                onclick='deleteCart(1012030836)'><i
                                                                    class='fa fa-times'></i></a>
                                                        </span>
                                                    </td>
                                                </tr>



                                            </table>
                                            <span class="line"></span>
                                            <table class="table-total">
                                                <tr>
                                                    <td class="text-left">TỔNG TIỀN:</td>
                                                    <td class="text-right" id="total-view-cart">3,398,000₫</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="/cart" class="linktocart">Xem giỏ hàng</a></td>
                                                    <td><a href="/checkout" class="linktocheckout">Thanh toán</a></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="navholder">
                                        <nav id="subnav">
                                            <ul>

                                                <li>
                                                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                                                        0978.xxx.xxx</a>
                                                </li>
                                                


                                                <li><a class="" href="#"
                                                        >ĐĂNG KÝ</a></li>
                                                <li><a class="" href="{{route('login')}}"
                                                        >Đăng nhập</a></li>






                                            </ul>
                                        </nav>
                                        <div class="header_line">
                                            <p>Miễn phí vận chuyển<span class="mar-l5">ĐƠN HÀNG TRÊN 500K TP HÀ
                                                    NỘI</span></p>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </header>
                <nav class="navbar-main navbar navbar-default cl-pri">
                    <!-- MENU MAIN -->
                    <div class="container nav-wrapper check_nav">
                        <div class="row">
                            <div class="navbar-header">
                                <div class="mobile-menu-icon-wrapper">
                                    <div class="menu-logo">

                                        <h1 class="logo logo-mobile">
                                            <a href="">
                                                <img src="{{ asset('img') }}/AdminLTELogo.png?v=90"
                                                    alt="AESHOP" class="img-responsive logoimg" />
                                            </a>
                                        </h1>

                                        <div class="nav-login">
                                            <a href="/account" class="cart " title="Tài khoản">
                                                <svg class="icon icon-user" viewBox="0 0 32 32">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-user">
                                                    </use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="menu-btn click-menu-mobile "><a href="#menu-mobile"
                                                class="navbar-toggle">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span></a>
                                        </div>

                                        <div id="cart-targets" class="cart">
                                            <a href="/cart" class="cart " title="Giỏ hàng">
                                                <span>

                                                    <svg class="shopping-cart">
                                                        <use xmlns:xlink="./www.w3.org/1999/xlink"
                                                            xlink:href="#icon-add-cart" />
                                                    </svg>
                                                </span>
                                                <span id="cart-count" class="cart-number">0</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="search-bar-top">
                                        <div class="search-input-top">
                                            <form action="/search">
                                                <input type="hidden" name="type" value="product" />
                                                <input type="text" name="q" placeholder="Tìm kiếm sản phẩm ..." />
                                                <button type="submit" class="icon-search">
                                                    <svg class="icon-search_white">
                                                        <use xmlns:xlink="./www.w3.org/1999/xlink"
                                                            xlink:href="#icon-search_white" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav clearfix">


                                    <li>
                                        <a href="/" class=" current" title="Trang chủ">
                                            <span>Trang chủ</span>
                                        </a>
                                    </li>



                                    <li class="dropdown">
                                        <a href="#" title="Danh mục phone" class="">
                                            <span>Danh mục phone</span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach ($category as $cate)
                                                @if ($cate->status == 1)
                                                    <li>
                                                        <a href="#"
                                                            title="{{ $cate->name }}">{{ $cate->name }}</a>

                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </li>



                                    <li class="dropdown">
                                        <a href="/collections/dong-ho-nu" title="Đồng hồ nữ" class="">
                                            <span>Phụ kiện điện thoại</span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">

                                            <li>
                                                <a href="#" title="Đồng hồ Beesister">xxxxxxxxxxxx</a>

                                            </li>



                                        </ul>
                                    </li>



                                    <li>
                                        <a href="/pages/dich-vu" class="" title="Dịch vụ">
                                            <span>Dịch vụ</span>
                                        </a>
                                    </li>



                                    <li>
                                        <a href="/pages/gioi-thieu" class="" title="Giới thiệu">
                                            <span>Giới thiệu</span>
                                        </a>
                                    </li>



                                    <li>
                                        <a href="/blogs/news" class="" title="Blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>


                                </ul>

                            </div>
                            <div class="hidden-xs pull-right right-menu">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="col-md-12">

                                        <div class="search-bar">

                                            <div class="">
                                                <form action="/search">
                                                    <input type="hidden" name="type" value="product" />
                                                    <input type="text" name="q" placeholder="Tìm kiếm..."
                                                        autocomplete="off" />
                                                </form>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div><!-- End container  -->
                    <script>
                        $(window).resize(function() {
                            $('li.dropdown li.active').parents('.dropdown').addClass('active');
                            if ($('.right-menu').width() + $('#navbar').width() > $('.check_nav.nav-wrapper').width() - 40) {
                                $('.nav-wrapper').addClass('responsive-menu');
                            } else {
                                $('.nav-wrapper').removeClass('responsive-menu');
                            }
                        })

                        $(document).on("click",
                            ".mobile-menu-icon .dropdown-menu ,.drop-control .dropdown-menu, .drop-control .input-dropdown",
                            function(e) {
                                e.stopPropagation();
                            });
                    </script>
                    <script>
                        $(function() {
                            $('nav#menu-mobile').mmenu();
                        });
                        $(document).ready(function() {
                            flagg = true;
                            if (flagg) {
                                $('.click-menu-mobile a').click(function() {
                                    $('#menu-mobile').removeClass('hidden');
                                    flagg = false;
                                })
                            }
                        })
                    </script>
                </nav>


                <!-- Begin slider -->
                <div class="slider-default bannerslider">
                    <div class="hrv-banner-container">
                        <div class="hrvslider">
                            <ul class="slides">
                                <li>
                                    <a href="/collections/dong-ho-nam-rolex" class="hrv-url">
                                            <img class="" height="400" src="{{asset('img')}}/dat-iPhone-13-Pro-Max-nguoi-phu-nu-nhanchai-nuoc-rua-tay-1-USD-iphone-13-pro-max-1643957886-223-width660height439.jpg?v=90" alt="" />
                                    </a>
                                    <div id="hrv-banner-caption1" class="hrv-caption hrv-banner-caption">
                                        <div class="container">
                                            <div class="hrv-caption-inner">
                                                <div class="hrv-banner-content slider-1">
                                                        <h2 class="hrv-title1" >Đẳng cấp về thương hiệu</h2>						
                                                    <h3 class="hrv-title2">Iphone 13Pro Max</h3>			
                                                    <a href="/collections/dong-ho-nam-rolex" class="hrv-url">Xem ngay</a>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>			
                                </li>
                                
                                
                                
								

                                <li>
                                    
                                    {{-- <a href="#" class="hrv-url">
                                        <img height="450" class="" src=""
                                            alt="" />
                                    </a> --}}
                                    
                                    {{-- <div id="hrv-banner-caption1" class="hrv-caption hrv-banner-caption">
                                        <div class="container">
                                            <div class="hrv-caption-inner">
                                                <div class="hrv-banner-content slider-1">
                                                    <h2 class="hrv-title1">{{$p->name}}</h2>
                                                    <h3 class="hrv-title2">{{$p->descripton}}</h3>
                                                    <a href="#" class="hrv-url">Xem
                                                        ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- @endforeach --}}
                                </li>
                                

								
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End slider -->


                <script>
                    jQuery(document).ready(function() {
                        if ($('.slides li').size() > 0) {
                            $(".hrv-banner-container .slides").owlCarousel({
                                singleItem: true,
                                autoPlay: 3000,
                                items: 1,
                                itemsDesktop: [1199, 1],
                                itemsDesktopSmall: [980, 1],
                                itemsTablet: [768, 1],
                                itemsMobile: [479, 1],
                                slideSpeed: 500,
                                paginationSpeed: 500,
                                rewindSpeed: 500,
                                addClassActive: true,
                                navigation: true,
                                stopOnHover: true,
                                pagination: false,
                                scrollPerPage: true,
                                afterMove: nextslide,
                                afterInit: nextslide,
                            });

                            function nextslide() {
                                $(".hrv-banner-container .owl-item .hrv-banner-caption").css('display', 'none');
                                $(".hrv-banner-container .owl-item .hrv-banner-caption").removeClass('hrv-caption')
                                $(".hrv-banner-container .owl-item.active .hrv-banner-caption").css('display', 'block');

                                var heading = $('.hrv-banner-container .owl-item.active .hrv-banner-caption').clone()
                                    .removeClass();
                                $('.hrv-banner-container .owl-item.active .hrv-banner-caption').remove();
                                $('.hrv-banner-container .owl-item.active>li').append(heading);
                                $('.hrv-banner-container .owl-item.active>li>div').addClass('hrv-banner-caption hrv-caption');
                            }

                        }
                    })
                </script>




            </div>
            <section id="content" class="clearfix container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Content-->
                        <div class="main-content">
                            <!-- Sản phẩm trang chủ -->


                            <div class="product-list clearfix">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <aside class="styled_header  use_icon ">
                                            <h2>What hot</h2>

                                            <h3>Sản phẩm mới</h3>

                                        </aside>
                                    </div>
                                </div>
                                <!--Product loop-->
                                <div class="row content-product-list products-resize">

                                    <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">





                                        @foreach ($products as $product)
                                            <div class="product-block product-resize">
                                                <div class="product-img image-resize view view-third">

                                                    <div class="product-sale">
                                                        <span><label class="sale-lb">- </label> 29%</span>
                                                    </div>



                                                    <a href="/products/dong-ho-nam-skmei-kim-xanh-duong"
                                                        title="{{ $product->name }}">
                                                        <img height="250" class="first-image  has-img"
                                                            alt=" {{ $product->name }}"
                                                            src="{{ asset('storage/images/'.$product->image )}}" />

                                                        <img height="250" class="second-image"
                                                            src="{{ asset('storage/images/'.$product->image )}}"
                                                            alt=" {{ $product->name }}" />

                                                    </a>
                                                    <div class="actionss">
                                                        <div class="btn-cart-products">
                                                            <a href="xemgiohang.html">
                                                                <i class="fa fa-bag-shopping"></i>
                                                                {{-- <i class="fa fa-shopping-bag" aria-hidden="true"></i> --}}
                                                            </a>
                                                        </div>
                                                        <div class="view-details">
                                                            <a href="chitietsanpham.html" class="view-detail">
                                                                <span>
                                                                    <i class="fa fa-align-justify"></i>
                                                                    {{-- <i class="fa fa-clone"> </i> --}}
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="btn-quickview-products">
                                                            <a href="javascript:void(0);" class="quickview"
                                                                data-handle="/products/dong-ho-nam-skmei-kim-xanh-duong">
                                                                <i class="fa fa-eye"></i>
                                                                {{-- <i class="fa fa-eye"></i> --}}
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
                                        @endforeach

                                        <div class=" dataTables_pager">

                                            {!! $products->links() !!}

                                        </div>

                                    </div>
                                    <!-- end Content-->
                                </div>
                            </div>
            </section>
            <footer id="footer">
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                                <div class="widget-wrapper animated">

                                    <h3 class="title title_left">Giới thiệu</h3>

                                    <div class="inner about_us">

                                        <p class="message">AESHOP cam kết, tất cả dòng điện thoại được bán trực
                                            tiếp tại hệ thống các cửa hàng của chúng tôi và bán Online đều là hàng chính
                                            hãng 100%</p>

                                        <ul class="list-unstyled">

                                            <li>
                                                <i class="fa fa-home"></i>Quận Bắc Từ Liêm, Hà Nội
                                            </li>


                                            <li>
                                                <i class="fa fa-envelope-o"></i> <a
                                                    href="mailto:Suport@oxywatch.vn">Suport@aeshop.vn</a>
                                            </li>


                                            <li>
                                                <i class="fa fa-phone"></i>0978.xxx.xxx
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-2 col-xs-12 clear-sm">
                                <div class="widget-wrapper animated">

                                    <h3 class="title title_left">Liên kết</h3>

                                    <div class="inner">

                                        <ul class="list-unstyled list-styled">

                                            <li>
                                                <a href="/">Trang chủ</a>
                                            </li>

                                            <li>
                                                <a href="#">Danh mục phone</a>
                                            </li>

                                            <li>
                                                <a href="#">Phụ kiện điện thoại</a>
                                            </li>

                                            <li>
                                                <a href="#">Dịch vụ</a>
                                            </li>

                                            <li>
                                                <a href="#">Giới thiệu</a>
                                            </li>

                                            <li>
                                                <a href="#">Blog</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                                <div class="widget-wrapper animated">


                                    <h3 class="title title_left">Đăng kí nhận tin</h3>

                                    <div class="inner">


                                        <form accept-charset='UTF-8' action='/account/contact' class='contact-form'
                                            method='post'>
                                            <input name='form_type' type='hidden' value='customer'>
                                            <input name='utf8' type='hidden' value='✓'>

                                            <div class="group-input">
                                                <input type="hidden" id="contact_tags" name="contact[tags]"
                                                    value="khách hàng tiềm năng, bản tin" />
                                                <input type="email" required="required" name="contact[email]"
                                                    id="contact_email" />
                                                <span class="bar"></span>
                                                <label>Nhập email của bạn</label>
                                                <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                            </div>





                                        </form>


                                        <div class="caption">Hãy nhập email của bạn vào đây để nhận tin!</div>

                                    </div>




                                    <div id="widget-social" class="social-icons">
                                        <ul class="list-inline">

                                            <li>
                                                <a target="_blank" href="/" class="social-wrapper facebook">
                                                    <span class="social-icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </span>
                                                </a>
                                            </li>


                                            <li>
                                                <a target="_blank" href="/" class="social-wrapper twitter">
                                                    <span class="social-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </span>
                                                </a>
                                            </li>


                                            <li>
                                                <a target="_blank" href="/" class="social-wrapper pinterest">
                                                    <span class="social-icon">
                                                        <i class="fa fa-pinterest"></i>
                                                    </span>
                                                </a>
                                            </li>


                                            <li>
                                                <a target="_blank" href="/" class="social-wrapper google">
                                                    <span class="social-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </span>
                                                </a>
                                            </li>


                                            <li>
                                                <a target="_blank" href="/" class="social-wrapper youtube">
                                                    <span class="social-icon">
                                                        <i class="fa fa-youtube"></i>
                                                    </span>
                                                </a>
                                            </li>


                                            <li>
                                                <a target="_blank" href="/" class="social-wrapper instagram">
                                                    <span class="social-icon">
                                                        <i class="fa fa-instagram"></i>
                                                    </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>


                                </div>
                            </div>


                            <div class="col-sm-6 col-md-4 col-xs-12 clear-sm">
                                <div class="widget-wrapper animated">

                                    <h3 class="title title_left">Kết nối với chúng tôi</h3>

                                    <div class="inner">
                                        <!-- Facebook widget -->

                                        <div class="footer-static-content">
                                            <div class="fb-page" data-href="#" data-height="300"
                                                data-small-header="false" data-adapt-container-width="true"
                                                data-hide-cover="false" data-show-facepile="true"
                                                data-show-posts="false"> </div>
                                        </div>
                                        <div style="clear:both;">

                                        </div>

                                        <!-- #Facebook widget -->
                                        <script>
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "./connect.facebook.net/en_US/sdk.js#xfbml=1&appId=263266547210244&version=v2.0";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="footer-copyright">
                    <div class="container copyright">
                        <p>Copyright &copy; 2022 AESHOP. <a target='_blank' href='https://www.haravan.com'>Powered by
                                Anhttph13025</a>.</p>

                    </div>
                </div>
            </footer>
            <a href="#" class="scrollToTop show">
                <i class="fa fa-chevron-up"></i>
            </a>

            <!--Scroll to Top-->
            <div style="display:none" id="myCart" class="modal fade bs-example-modal-lg in" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="false" style="display: block;">

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
                <symbol id="icon-add-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" enable-background="new 0 0 512 512">
                        <g>
                            <g>
                                <polygon
                                    points="447.992,336 181.555,336 69.539,80 0.008,80 0.008,48 90.477,48 202.492,304 447.992,304 		" />
                            </g>
                            <path
                                d="M287.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S287.992,389.5,287.992,416z" />
                            <path
                                d="M447.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S447.992,389.5,447.992,416z" />
                            <g>
                                <polygon points="499.18,144 511.992,112 160.008,112 172.805,144 		" />
                                <polygon points="211.195,240 223.992,272 447.992,272 460.805,240 		" />
                                <polygon points="486.398,176 185.602,176 198.398,208 473.586,208 		" />
                            </g>
                        </g>
                    </svg>
                </symbol>
                <symbol id="icon-list-switch">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 194.828 194.828" style="enable-background:new 0 0 194.828 194.828;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path d="M190.931,17.534H3.897C1.745,17.534,0,19.279,0,21.431v19.483c0,2.152,1.745,3.897,3.897,3.897h187.034
          c2.152,0,3.897-1.745,3.897-3.897V21.431C194.828,19.279,193.083,17.534,190.931,17.534z M187.034,37.017H7.793v-11.69h179.241
          V37.017z" />
                                    <path d="M190.931,64.293H3.897C1.745,64.293,0,66.038,0,68.19v31.172c0,2.152,1.745,3.897,3.897,3.897h187.034
          c2.152,0,3.897-1.745,3.897-3.897V68.19C194.828,66.038,193.083,64.293,190.931,64.293z M187.034,95.466H7.793v-23.38h179.241
          V95.466z" />
                                    <path d="M190.931,122.741H3.897c-2.152,0-3.897,1.745-3.897,3.897v46.759c0,2.152,1.745,3.897,3.897,3.897h187.034
          c2.152,0,3.897-1.745,3.897-3.897v-46.759C194.828,124.486,193.083,122.741,190.931,122.741z M187.034,169.5H7.793v-38.966
          h179.241V169.5z" />
                                </g>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>

                </symbol>
                <symbol id="icon-sort-by">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
                        <g>
                            <polygon points="85.877,154.014 85.877,428.309 131.706,428.309 131.706,154.014 180.497,221.213 217.584,194.27 108.792,44.46
            0,194.27 37.087,221.213 	" />
                            <polygon points="404.13,335.988 404.13,61.691 358.301,61.691 358.301,335.99 309.503,268.787 272.416,295.73 381.216,445.54
            490,295.715 452.913,268.802 	" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
                </symbol>
                <symbol id="icon-search_white" viewBox="0 0 1024 1024">
                    <path class="path1"
                        d="M1014.176 968.256l-264.32-260.128c69.184-75.264 111.68-174.688 111.68-284.128 0-234.080-192.8-423.872-430.688-423.872s-430.72 189.792-430.72 423.872c0 234.112 192.864 423.872 430.72 423.872 102.752 0 197.088-35.552 271.072-94.688l265.376 261.12c12.928 12.736 33.952 12.736 46.88 0 12.96-12.672 12.96-33.376 0-46.048zM430.848 782.688c-201.312 0-364.48-160.64-364.48-358.688 0-198.080 163.168-358.656 364.48-358.656 201.28 0 364.448 160.576 364.448 358.656 0.032 198.048-163.168 358.688-364.448 358.688z">
                    </path>
                </symbol>
                <symbol id="icon-user" viewBox="0 0 1024 1024">
                    <title>user</title>
                    <path class="path1"
                        d="M622.826 702.736c-22.11-3.518-22.614-64.314-22.614-64.314s64.968-64.316 79.128-150.802c38.090 0 61.618-91.946 23.522-124.296 1.59-34.054 48.96-267.324-190.862-267.324s-192.45 233.27-190.864 267.324c-38.094 32.35-14.57 124.296 23.522 124.296 14.158 86.486 79.128 150.802 79.128 150.802s-0.504 60.796-22.614 64.314c-71.22 11.332-337.172 128.634-337.172 257.264h896c0-128.63-265.952-245.932-337.174-257.264z">
                    </path>
                </symbol>
            </svg>
    </div>
    </section>
    </div>
</body>

</html>
