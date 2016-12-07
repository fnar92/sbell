<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <title>SBELLA</title>

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css"/><!-- html -->
    <link rel="stylesheet" href="assets/css/material/angular-material.min.css" /><!-- components -->
    <link rel="stylesheet" href="assets/css/angular-moment-picker/angular-moment-picker.min.css"> <!-- moment picker -->
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/data-tables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/data-tables/dataTables.material.min.css">
    <link rel="stylesheet" href="assets/css/data-tables/angular-datatables.min.css" />

    <link rel="stylesheet" href="assets/css/angular-text-editor/textAngular.css" />

    <link rel="stylesheet" href="assets/css/main.css" />

    <script src="assets/libs/ie/modernizr.js" ></script>
    
    
    <!--TEMPLATE-->
    
    <link rel='stylesheet' id='contact-form-7-css' href='assets/css/plugins/contact-form-7/includes/css/styles-ver=4.4.2.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='swiper-css' href='assets/css/plugins/cherry-shortcodes/assets/css/swiper-ver=1.0.7.4.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='magnific-popup-css' href='assets/css/themes/cherryframework4/lib/assets/css/magnific-popup-ver=1.0.0.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='cherry-shortcodes-all-css' href='assets/css/plugins/cherry-shortcodes/assets/css/shortcodes-ver=1.0.7.4.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='jquery-colorbox-css' href='assets/css/plugins/yith-woocommerce-compare/assets/css/colorbox-ver=4.4.5.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='assets/css/plugins/woocommerce/assets/css/prettyPhoto-ver=3.1.6.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='jquery-selectBox-css' href='assets/css/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox-ver=1.2.0.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='yith-wcwl-main-css' href='assets/css/plugins/yith-woocommerce-wishlist/assets/css/style-ver=2.0.15.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='assets/css/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min-ver=4.3.0.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='theme57736-grid-base-css' href='assets/css/themes/cherryframework4/assets/css/grid-base-ver=1.0.0.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='theme57736-grid-responsive-css' href='assets/css/themes/cherryframework4/assets/css/grid-responsive-ver=1.0.0.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='slick-css' href='assets/css/themes/cherryframework4/lib/assets/css/slick-ver=1.5.0.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='theme57736-main-css' href='assets/css/themes/theme57736/assets/css/main-ver=1.0.0.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='theme57736-main-responsive-css' href='assets/css/themes/theme57736/assets/css/main-responsive-ver=1.0.0.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='theme57736_material-icons-css'  href='assets/css/themes/theme57736/assets/css/material-icons-ver=4.4.5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A700%2Cregular%7CAbril+Fatface%3Aregular&amp;subset=latin%2Clatin-ext&amp;ver=4.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-mega-menu-css'  href='assets/css/plugins/cherry-mega-menu/public/assets/css/style-ver=1.0.4.css' type='text/css' media='all' />
    <link rel='stylesheet' id='material_icons-css'  href='assets/css/themes/theme57736/assets/css/material-icons-ver=1.0.css' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-woocommerce-core-css'  href='assets/css/plugins/cherry-woocommerce-package/public/assets/css/cherry-woocommerce-core-ver=1.0.5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-woocommerce-theme-css'  href='assets/css/themes/theme57736/assets/css/cherry-woocommerce-theme-ver=1.0.5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mpce-theme-css'  href='assets/css/plugins/motopress-content-editor/includes/css/theme-ver=1.6.2.css' type='text/css' media='all' />


    <style>.wishlist_table .add_to_cart,a.add_to_wishlist.button.alt{border-radius:16px;-moz-border-radius:16px;-webkit-border-radius:16px;}</style>

    <style id='theme57736-style-inline-css' type='text/css'>.woocommerce .woocommerce-message{border-top:3px solid #1b1b1b;}.woocommerce .woocommerce-message:before{color:#1b1b1b;}.woocommerce .woocommerce-info{border-top:3px solid #008de5;}.woocommerce .woocommerce-info:before{color:#008de5;}.woocommerce .woocommerce-error{border-top:3px solid #e80000;}.woocommerce .woocommerce-error:before{color:#e80000;}.summary .price{color:#1b1b1b;}.woocommerce-tabs ul.tabs li{border-top:1px solid #e5e5e5;border-bottom:1px solid #e5e5e5;}.woocommerce-tabs ul.tabs li a{border-left:1px solid #e5e5e5;color:#1b1b1b;}.woocommerce-tabs ul.tabs li a:before{background:#1b1b1b;}.woocommerce-tabs ul.tabs li.active a,.woocommerce-tabs ul.tabs li a:hover{color:#1b1b1b;}.woocommerce-tabs .panel{border-top:1px solid #e5e5e5;border-left:1px solid #e5e5e5;}.woocommerce-tabs .panel ol.commentlist li img.avatar{border:1px solid #1b1b1b;}.woocommerce-tabs .panel ol.commentlist li .comment-text{border-left:5px solid #1b1b1b;}.woocommerce-tabs .panel ol.commentlist li .comment-text:before{border-color:transparent #1b1b1b transparent transparent;}.woocommerce table.shop_table{border:1px solid #e5e5e5;}.woocommerce-checkout #payment{background:#e5e5e5;}.woocommerce-checkout #payment ul.payment_methods{border-bottom:1px solid rgb(204,204,204);}.woocommerce-checkout #payment ul.payment_methods li.payment_method_paypal img{border:1px solid rgb(204,204,204);}.woocommerce-checkout #payment div.payment_box{background:#998a7f;color:#333;}.woocommerce-checkout #payment div.payment_box:after{border:8px solid #998a7f;}.woocommerce ul.order_details{background:#e5e5e5;}.woocommerce div.product .summary .yith-wcwl-wishlistaddedbrowse .feedback,.woocommerce div.product .summary .yith-wcwl-wishlistexistsbrowse .feedback{background:#1b1b1b;color:#fff;}.woocommerce div.product .summary .yith-wcwl-wishlistaddedbrowse .feedback:after,.woocommerce div.product .summary .yith-wcwl-wishlistexistsbrowse .feedback:after{border-color:#1b1b1b transparent transparent transparent;}.woocommerce .widget_price_filter .ui-slider .ui-slider-range{background-color:#1b1b1b;}.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content{background-color:rgb(78,78,78);}.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color:rgb(0,0,0);}.product-categories .cat-item:before{color:#1b1b1b;}.product-categories .cat-item.current-cat:before,.product-categories .cat-item.current-cat>a{color:#998a7f;}body{color:#1b1b1b;font:16px/29px Montserrat,sans-serif;}body{background-color:#FFFFFF;background-repeat:repeat;background-position:left;background-attachment:fixed;background-clip:padding-box;background-size:cover;background-origin:padding-box;background-image:none;}input[type="text"],input[type="search"],input[type="password"],input[type="email"],input[type="tel"],input[type="email"],input[type="url"]{color:#1b1b1b;font:16px/23px Montserrat,sans-serif;}h1,.h1{color:#1b1b1b;font:60px/72px Montserrat,sans-serif;}h2,.h2{letter-spacing:0;color:#1b1b1b;font:40px/48px Montserrat,sans-serif;}h3,.h3{letter-spacing:0;color:#1b1b1b;font:30px/36px Montserrat,sans-serif;}h4,.h4{letter-spacing:0;color:#1b1b1b;font:24px/32px Montserrat,sans-serif;}h5,.h5{letter-spacing:0;color:#1b1b1b;font:16px/29px Montserrat,sans-serif;}h6,.h6{letter-spacing:0;color:#1b1b1b;font:16px/22px Montserrat,sans-serif;}code{color:#1b1b1b;background-color:rgb(226,226,226);}pre{color:#e5e5e5;background-color:rgb(255,255,255);border-color:rgb(255,255,255);}kbd{background-color:rgb(191,191,191);}.site-link{color:#ffffff;font:51px/53px Montserrat,sans-serif;}.footer-logo-link{color:#ffffff;font:41px/50px Montserrat,sans-serif;}.site-header{background-color:#ffffff;background-repeat:repeat-x;background-position:top;background-attachment:scroll;background-clip:padding-box;background-size:cover;background-origin:padding-box;background-image:none;}.site-footer{text-align:left;color:#888888;font:14px/20px Montserrat,sans-serif;}.site-footer{background-image:url("assets/css/uploads/2016/05/footer-bg.jpg");background-color:#19171a;background-repeat:repeat;background-position:top left;background-attachment:scroll;background-clip:padding-box;background-size:cover;background-origin:padding-box;}a{color:#998a7f;}a:hover{color:#1b1b1b;}.menu-primary a{text-align:center;color:#998a7f;font:700 16px/24px Montserrat,sans-serif;}.menu-secondary a{color:#998a7f;font:14px/20px Montserrat,sans-serif;}.cherry-mega-menu-sub-item>a{color:#1b1b1b;}.cherry-mega-menu-sub-item>a:hover{color:#1b1b1b;}.cherry-mega-menu-sub .sub-column-title>a{color:#998a7f;}.cherry-breadcrumbs{background-color:rgb(255,255,255);}.cherry-breadcrumbs_item_link,.cherry-breadcrumbs_item_target,.cherry-breadcrumbs_browse,.cherry-breadcrumbs_item_sep{text-align:center;color:#998a7f;font:14px/29px Montserrat,sans-serif;}.post-gallery_prev,.post-gallery_next{background-color:#1b1b1b;color:#ffffff;}.post-gallery_prev:hover,.post-gallery_next:hover{background-color:#998a7f;color:#000000;}.post-gallery_item_caption{background-color:#998a7f;color:#000000;}.post-gallery_paging_item{background-color:#998a7f;}.slick-active>.post-gallery_paging_item,.post-gallery_paging_item:hover{background-color:#1b1b1b;}.cherry-list-numbered-circle>li,.cherry-list-numbered-slash>li,.cherry-list-icons>li{color:rgb(195,195,195);}.cherry-list-numbered-circle>li::before{background-color:#1b1b1b;}.cherry-list-numbered-circle>li:hover::before{background-color:rgb(195,195,195);}.cherry-list-numbered-circle>li:hover{color:#1b1b1b;}.cherry-list-simple>li{color:#1b1b1b;}.cherry-list-simple>li::before{color:rgb(255,255,255);}.cherry-list-simple>li:hover{color:rgb(195,195,195);}.cherry-list-simple>li:hover::before{color:#1b1b1b;}.cherry-list-numbered-slash>li::before{color:#1b1b1b;}.cherry-list-numbered-slash>li:hover{color:#1b1b1b;}.cherry-list-numbered-slash>li:hover::before{color:rgb(195,195,195);}.cherry-list-icons>li{color:rgb(195,195,195);}.cherry-list-icons>li:hover{color:#1b1b1b;}.cherry-list-icons>li i{color:rgb(255,255,255);}.cherry-list-icons>li:hover i{color:rgb(195,195,195);}.cherry-hr-primary{background-color:#1b1b1b;}.cherry-hr-gray-lighter{background-color:rgb(255,255,255);}.cherry-hr-gray-dark{background-color:rgb(195,195,195);}.cherry-drop-cap:first-letter{color:#1b1b1b;}.cherry-drop-cap-bg:first-letter{background-color:#1b1b1b}.cherry-drop-cap-bg-grey:first-letter{background-color:rgb(88,88,88);}.cherry-blockquote,.cherry-blockquote:before{color:#1b1b1b;}.cherry-highlight{background-color:#1b1b1b;}.cherry-highlight-grey{background-color:rgb(255,255,255);}.cherry-btn-transparent:hover{color:#e5e5e5;}.cherry-tabs-nav span{color:#998a7f;}.cherry-tabs-nav span.cherry-tabs-current{color:#1b1b1b;border-bottom:2px solid rgb(255,255,255);}.cherry-post-meta .cherry-post-date{color:#1b1b1b;}.portfolio-wrap .portfolio-container .portfolio-pagination ul.page-link li a{color:rgb(195,195,195);}.portfolio-wrap .portfolio-container .portfolio-pagination .page-nav a{color:rgb(195,195,195);}.text-muted{color:rgb(255,255,255);}.help-block{color:rgb(78,78,78);}legend{color:rgb(178,178,178);font-size:24px;border-bottom:1px solid rgb(255,255,255);}.cherry-highlight-grey{color:rgb(195,195,195);}abbr[title],abbr[data-original-title]{border-bottom:1px dotted rgb(195,195,195);}output{color:#e5e5e5;font-size:16px;line-height:29px;}small,.small{color:rgb(195,195,195);}small,.small{font-size:14px;}.form-control[disabled],.form-control[readonly],.form-control fieldset[disabled]{background-color:rgb(255,255,255);}.form-control{color:#e5e5e5;font-size:16px;line-height:29px;}.blockquote-reverse,blockquote.pull-right{border-right:5px solid rgb(255,255,255);}.page-header{border-bottom:1px solid rgb(255,255,255);}blockquote{border-left:5px solid rgb(255,255,255);font-size:20px;}hr{border-top:1px solid rgb(255,255,255);}.close,.close:hover,.close:focus{color:#f9b300;font-size:24px;}.lead{font-size:18px;}.entry-content table{border:1px solid rgb(155,155,155);}.entry-content table>thead>tr>th,.entry-content table>thead>tr>td,.entry-content table>tbody>tr>th,.entry-content table>tbody>tr>td,.entry-content table>tfoot>tr>th,.entry-content table>tfoot>tr>td{border:1px solid rgb(155,155,155);line-height:29px;}.table .table{background-color:#1b1b1b;}.table>thead>tr>th,.table>thead>tr>td,.table>tbody>tr>th,.table>tbody>tr>td,.table>tfoot>tr>th,.table>tfoot>tr>td{line-height:29px;}dt,dd{line-height:29px;}blockquote footer,blockquote small,blockquote .small{line-height:29px;}address{line-height:29px;}.cherry-nav-divider{background-color:rgb(255,255,255);}.cherry-box .box-primary{background-color:#1b1b1b;color:#ffffff;}.cherry-box .box-secondary{background-color:#998a7f;color:#000000;}.cherry-box .box-gray{background-color:#e5e5e5;}.cherry-box .box-primary-border{border-color:#1b1b1b;}.cherry-box .box-secondary-border{border-color:#998a7f;}.cherry-box .box-gray-border{border-color:#e5e5e5;}.text-primary{color:#1b1b1b;}.text-primary:hover{color:rgb(2,2,2);}.text-success{color:#cfcece;}.text-success:hover{color:rgb(182,181,181);}.text-info{color:#008de5;}.text-info:hover{color:rgb(0,116,204);}.text-warning{color:#f9b300;}.text-warning:hover{color:rgb(224,154,0);}.text-danger{color:#e80000;}.text-danger:hover{color:rgb(207,0,0);}.bg-primary{background-color:#1b1b1b;}.bg-primary:hover{background-color:rgb(2,2,2);}.bg-success{background-color:#cfcece;}.bg-success:hover{background-color:rgb(182,181,181);}.bg-info{background-color:#008de5;}.bg-info:hover{background-color:rgb(0,116,204);}.bg-warning{background-color:#f9b300;}.bg-warning:hover{background-color:rgb(224,154,0);}.bg-danger{background-color:#e80000;}.bg-danger:hover{background-color:rgb(207,0,0);}@media ( min-width:992px ) {.site-header.boxed{max-width:1808px}.site-content.boxed{max-width:1200px}.site-footer.boxed{max-width:1808px}.site-header.boxed .container{width:auto;max-width:1200px}.site-content.boxed .container{width:auto;max-width:1200px}.site-footer.boxed .container{width:auto;max-width:1200px}.site-header.wide .container,.site-content.wide .container,.site-footer.wide .container{width:auto;max-width:1200px}}@media ( max-width:767px ) {.menu-primary_trigger{display:block;}.simple-menu.menu-items{display:none!important;}.simple-menu.menu-items[aria-expanded="true"]{display:block!important;}.simple-menu.menu-items{padding:10px;background:#454545;}.simple-menu .sub-menu{position:static;float:none;visibility:visible;opacity:1;padding:0 0 0 20px;background:none;}.simple-menu .sub-menu li{float:none;}.simple-menu .sub-menu a{width:100%;color:#998a7f;}.simple-menu>ul>li{float:none;display:block;margin:0;padding:0 0 3px 0;}}@media ( min-width:767px ) {.simple-menu li:hover>ul,.simple-menu li.focus>ul,.simple-menu li.menu-hover>ul{opacity:1;visibility:visible;overflow:visible;}}.header-navigation-panel{/*background-image:url("assets/css/uploads/2016/05/footer-bg.jpg");*/background-color:darkcyan;background-repeat:repeat;background-position:top left;background-attachment:scroll;background-clip:padding-box;background-size:auto;background-origin:padding-box;};.second_banner_category:after {background-image: url("assets/css/uploads/2016/05/footer-bg.jpg");background-color:#333333;background-repeat:repeat;background-position:top left;background-attachment:scroll;background-clip:padding-box;background-size:auto;background-origin:padding-box;};.cherry-mega-menu-sub.mega-sub {background-image: url("assets/css/uploads/2016/05/megamenu_bg.jpg");background-color:#ffffff;background-repeat:no-repeat;background-position:right top;background-attachment:notdefined;background-clip:padding-box;background-size:auto;background-origin:padding-box;};.maintenance-container .site-branding{background-color:#ffffff;background-repeat:repeat-x;background-position:top;background-attachment:scroll;background-clip:padding-box;background-size:cover;background-origin:padding-box;background-image:none;};#header .static-header-top-area .widget_nav_menu .menu li.menu-item a{color: #1b1b1b;}.header-nav.isStick {background-image: url("assets/css/uploads/2016/05/footer-bg.jpg");background-color:#333333;background-repeat:repeat;background-position:top left;background-attachment:scroll;background-clip:padding-box;background-size:auto;background-origin:padding-box;};#menu-primary > #menu-primary-items .cherry-mega-menu-sub.mega-sub .mega-block-title{color: #1b1b1b;}#header .static-header-top-area .widget_nav_menu .menu li.menu-item a:hover{color: #998a7f;}.header-navigation-panel {color: #fff;}#header .static-header-top-area .widget_text span{color: #998a7f;}.header-extras.extra-hide .extra-trigger::after {color: #fff;background: #333333;}.header-extras.extra-hide .extra-trigger:hover:after {color: #1b1b1b;}.header-extras.extra-hide .container-fluid {background: #333333;}.motoslider_wrapper .mpsl-header-dark, .motoslider_wrapper .mpsl-header-white, .motoslider_wrapper .mpsl-text-dark, .motoslider_wrapper .mpsl-text-white{font-family: Montserrat !important;}.mpsl-header-white, .mpsl-text-white{color: white;}.mpsl-header-dark, .mpsl-text-dark{color: #1b1b1b;}.motoslider_wrapper .ms_button_layer{background: #998a7f;color: white;}.motoslider_wrapper .ms_button_layer:hover{background: #1b1b1b;}.cherry-posts-list.template-posts_shortcode .block_postshortcode .inner_post_content > div .post-meta{color: #998a7f;}.cherry-posts-list.template-posts_shortcode .block_postshortcode .inner_post_content > div .post-meta a{color: #998a7f;}.cherry-posts-list.template-posts_shortcode .block_postshortcode .inner_post_content > div .post-meta a:hover{color: #1b1b1b;}.cherry-posts-list.template-posts_shortcode .block_postshortcode .inner_post_content > div h3.post-title a{color: #1b1b1b;}.cherry-posts-list.template-posts_shortcode .block_postshortcode .inner_post_content > div h3.post-title a:hover{color: #998a7f;}h6 em {color: #1b1b1b;}.text_block{color: #998a7f;}.text_block h1, .text_block h2{color: white;}/* Navigation (Menu) */#menu-primary > .menu-items > .menu-item > a {color: #fff;}#menu-primary > .menu-items > .menu-item.current-menu-item > a,#menu-primary > .menu-items > .menu-item.mega-toggle-on > a,#menu-primary > .menu-items > .menu-item.menu-hover > a,#menu-primary > .menu-items > .menu-item > a:hover {color: #998a7f;}#menu-primary .sub-menu,#menu-primary .cherry-mega-menu-sub,#menu-primary .cherry-mega-menu-sub.simple-sub {color:#998a7f;font:14px/20px Montserrat, sans-serif;;}.menu-primary .sub-menu{background: #fcfcfc;box-shadow: 0 2px 4px rgba(0,0,0,0.1);}#menu-primary .sub-menu a,#menu-primary .cherry-mega-menu-sub a {color: #998a7f;}#menu-primary .sub-menu a:hover,#menu-primary .sub-menu a.current-menu-item,#menu-primary .sub-menu a.current_page_item,#menu-primary .cherry-mega-menu-sub a:hover,#menu-primary .cherry-mega-menu-sub a.current-menu-item,#menu-primary .cherry-mega-menu-sub a.current_page_item {color: #1b1b1b;}#menu-primary .cherry-mega-menu-sub h1,#menu-primary .cherry-mega-menu-sub h2,#menu-primary .cherry-mega-menu-sub h3,#menu-primary .cherry-mega-menu-sub h4,#menu-primary .cherry-mega-menu-sub h5,#menu-primary .cherry-mega-menu-sub h6 {color: #1b1b1b;}#menu-primary > #menu-primary-items .cherry-mega-menu-sub.mega-sub > li:before {background: transparent;}#menu-primary > #menu-primary-items .cherry-mega-menu-sub.mega-sub .product-categories li.cat-item a{font-size: 14px;;}#menu-primary .cherry-mega-menu-sub .megamenu-post-wrap .btn {color: #fff;background: #1b1b1b;}#menu-primary .cherry-mega-menu-sub .megamenu-post-wrap .btn:hover {color: #1b1b1b;background: #998a7f;}#menu-primary a {color: #998a7f;}#menu-primary a:hover {color: #1b1b1b;}/*mega menu mobile */#menu-primary .cherry-mega-menu-mobile-trigger,#menu-primary .cherry-mega-menu-mobile-close {color: #fff;}/* simple menu mobile */@media ( max-width:767px ) {#menu-primary .menu-primary_trigger {text-align:left;border:none;width:100%;color: #fff;background: #1b1b1b;}#menu-primary #menu-primary-items > .menu-item {float:none;width:auto !important;margin:5px 0 0;}#menu-primary > #menu-primary-items > .menu-item > a {padding:10px;}#menu-primary > #menu-primary-items .sub-menu .sub-menu {padding:0;margin:0 0 0 20px;}}.testimonials-wrap.template-testimonials-about footer {letter-spacing:0;color:#1b1b1b;font:16px/22px Montserrat, sans-serif;;}.testimonials-wrap.template-testimonials-about blockquote:before {color: #1b1b1b;}.site-title.text-logo {color:#ffffff;font:51px/53px Montserrat, sans-serif;}/* Logo */a.site-link:hover {color:#ffffff;}.site-description {letter-spacing:8px;color:#ffffff;font:10px/10px Montserrat, sans-serif;;}.cherry-breadcrumbs {/*background: #1b1b1b;*/}.cherry-breadcrumbs .page-title {color: #998a7f;}.template-banner_shopcategory .cherry-banner_content{color: #998a7f;}/* Pagination *//*Blog posts list pagination*/.navigation.pagination .nav-links .page-numbers,nav.woocommerce-pagination ul li a,nav.woocommerce-pagination ul li span {color: #fff;background: #998a7f;}.navigation.pagination .nav-links .page-numbers:hover,.navigation.pagination .nav-links .page-numbers.current,nav.woocommerce-pagination ul li span.current,nav.woocommerce-pagination ul li a:hover,nav.woocommerce-pagination ul li a:focus {color: #fff;background: #1b1b1b;}.navigation.pagination .nav-links .page-numbers.dots:hover{background: #998a7f;}/*Blog single post prev/next navigation*/.paging-navigation .nav-links a,.post-navigation .nav-links a {color: #1b1b1b;border:2px solid #1b1b1b;}.paging-navigation .nav-links a:hover,.post-navigation .nav-links a:hover {color: #fff;border-color: #1b1b1b;background: #1b1b1b;}/*Portfolio list pagination*/.portfolio-wrap .portfolio-container .portfolio-pagination ul.page-link li a,.portfolio-wrap .portfolio-container .portfolio-pagination .page-nav a {color: #fff;background: #1b1b1b;}.portfolio-wrap .portfolio-container .portfolio-pagination ul.page-link li a:hover,.portfolio-wrap .portfolio-container .portfolio-pagination ul.page-link li.active a,.portfolio-wrap .portfolio-container .portfolio-pagination .page-nav a:hover {background:#998a7f;}h4.entry-title a {color: #998a7f;}h4.entry-title a:hover {color: #1b1b1b;}h3.entry-title a {color: #1b1b1b;}h3.entry-title {color: #1b1b1b;line-height: 43px;;}h3.entry-title a:hover {color: #998a7f;}/* Shortcodes */.second_banner_category:after {background-image: url("assets/css/uploads/2016/05/footer-bg.jpg");background-color:#19171a;background-repeat:repeat;background-position:top left;background-attachment:scroll;background-clip:padding-box;background-size:cover;background-origin:padding-box;};/* button */.cherry-btn {background: #1b1b1b;color: #fff;}.cherry-btn:hover {background: #998a7f;}.cherry-btn.cherry-btn-primary-light {background: none;border: 2px solid #1b1b1b;color: #1b1b1b;}.cherry-btn.cherry-btn-primary-light:hover {border: 2px solid #998a7f;color: #998a7f;}.cherry-btn.cherry-btn-gray {background: #e5e5e5;color: #333;}.cherry-btn.cherry-btn-gray:hover {background: rgb(211,211,211);}.cherry-btn.cherry-btn-success {background: #cfcece;color: #03b503;}.cherry-btn.cherry-btn-success:hover {background: rgb(189,188,188);}.cherry-btn.cherry-btn-info {background: #008de5;color: #fff;}.cherry-btn.cherry-btn-info:hover {background: rgb(0,123,211);}.cherry-btn.cherry-btn-warning {background: #f9b300;color: #e8b100;}.cherry-btn.cherry-btn-warning:hover {background: rgb(231,161,0);}.cherry-btn.cherry-btn-danger {background: #e80000;color: #fff;}.cherry-btn.cherry-btn-danger:hover {background: rgb(214,0,0);}.cherry-btn.cherry-btn-link {color: #1b1b1b;}.cherry-btn.cherry-btn-link:hover {color: #998a7f;}/* swiper-carousel */.swiper-container .swiper-button-next,.swiper-container .swiper-button-prev {color: #fff;background: #1b1b1b;}.swiper-container .swiper-button-next:hover,.swiper-container .swiper-button-prev:hover {color: #1b1b1b;background: #998a7f;}.swiper-container .swiper-pagination .swiper-pagination-bullet-active {background: #1b1b1b;}/* List */.cherry-list.primary {color: #1b1b1b;}/* Portfolio */.portfolio-wrap .filter li a:hover,.portfolio-wrap .filter li.active a {color: #998a7f;}ul.order-filter > li,.portfolio-wrap .portfolio-filter .filter li a:hover,.portfolio-wrap .portfolio-filter .filter li.active a {color: #998a7f;}ul.order-filter > li:hover {color: #1b1b1b;}ul.order-filter > li > span.marker {border-color: #fff transparent transparent;}ul.order-filter > li.dropdown-state > span.marker {border-color: transparent transparent #fff;}ul.order-filter .orderby-list {background: #1b1b1b;color: #fff;}ul.order-filter .orderby-list li:hover {color: #998a7f;}.portfolio-wrap .portfolio-container .portfolio-item .rollover-content:before {background: rgba(24, 24, 24, 0.5);}.portfolio-wrap .portfolio-container .portfolio-item .custom-links .zoomlink:hover {background: #1b1b1b;}.portfolio-wrap .portfolio-container .portfolio-item .custom-links .permalink:hover {color: #1b1b1b;}.portfolio-wrap .portfolio-container .portfolio-item.justified-layout-item .rollover-content h3 a:hover {color: #1b1b1b;}.portfolio-wrap .portfolio-container .portfolio-list .portfolio-item.list-layout-item .inner-wrap .item-content{color: #a7a7a7;}.portfolio-wrap .portfolio-container .portfolio-ajax-button .load-more-button a {color: #fff;background: #1b1b1b;}.portfolio-wrap .portfolio-container .portfolio-ajax-button .load-more-button a:hover {color: #fff;background: #998a7f;}.cherry-spinner-double-bounce .cherry-double-bounce1, .cherry-spinner-double-bounce .cherry-double-bounce2 {background-color: #1b1b1b;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-meta-container{font-size: 12px;text-transform: uppercase;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-meta-container i {color: #998a7f;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-meta-container .post-date {color:#998a7f;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-meta-container .post-author {color:#998a7f;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-meta-container .post-author a {color: #998a7f;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-meta-container .post-author a:hover {color: #1b1b1b;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-taxonomy-list span {color: #1b1b1b;}body.single-portfolio article.type-portfolio .cherry-portfolio-single-post .post-featured-image{background: #1b1b1b;}/* Blog */.entry-meta .posted-on:before,.entry-meta .author:before,.entry-meta .comments-link-on:before {color: #998a7f;}/* Comments */.comments-area .comment .comment-meta .fn {color: #1b1b1b;}.comments-area .comment .comment-meta .comment-metadata:before {color: #998a7f;}.comment-respond form input,.comment-respond form textarea {}.comment-respond form .form-submit .submit {color: #fff;background: #1b1b1b;}.comment-respond form .form-submit .submit:hover {color: #1b1b1b;background: #998a7f;}/* Contact form */.wpcf7 .submit-wrap input {color: #fff;background: #998a7f;}.wpcf7 .submit-wrap input:hover {color: #fff;;background: #1b1b1b;}.wpcf7 .submit-wrap img.ajax-loader {border-color: transparent transparent #1b1b1b #1b1b1b;}/* Widgets */.widget > ul > li {}.widget > ul > li:before {color:#998a7f;}.widget_recent_comments li.recentcomments {color: #1b1b1b;}.widget_recent_comments li.recentcomments .comment-author-link {color: #1b1b1b;}/* Search */.search-submit {color: #1b1b1b;}.material-icons-search,.search-submit .material-icons-search{color: #998a7f;transition: all .3s ease;}.material-icons-search:hover,.search-submit:hover .material-icons-search{color: #1b1b1b;}.search-form .search-submit {color: #998a7f;}.search-form .search-submit:hover {color: #1b1b1b;}header .search-form .search-submit {color: #998a7f;}header .search-form .search-submit:hover {color: #1b1b1b;}.header-navigation-panel .search-submit,.header-navigation-panel .cherry-wc-account_title,.header-navigation-panel .cherry-wc-cart_title {color: #1b1b1b;}.cherry-wc-cart_title{color: #1b1b1b;}.cherry-wc-account_title_label,.cherry-wc-cart_title_label {color: #1b1b1b;}.cherry-wc-cart_count {background: #998a7f;color: #ffffff;font-family: Montserrat;}/* MotoPress Slider */.motoslider_wrapper .ms_pagination .ms_bullet {background: #998a7f;}.motoslider_wrapper .ms_pagination .ms_bullet:hover, .motoslider_wrapper .ms_pagination .ms_bullet.ms_active {background: #1b1b1b;}.motoslider_wrapper:after {background: #1b1b1b;}/* Back to Top */#back-top a {background: #1b1b1b;border: 1px solid rgba(255, 255, 255, 0.2);}#back-top a:hover{background: #998a7f;}.cat-list_title,.portfolio-wrap .portfolio-container .portfolio-list .portfolio-item .item-content h3,.sidebar-main .widget-title,.sidebar-secondary .widget-title,.sidebar-shop .widget-title {letter-spacing:0;color:#1b1b1b;font:24px/32px Montserrat, sans-serif;;}.portfolio-wrap .portfolio-container .portfolio-list .portfolio-item .item-content h5 a{color: #1b1b1b;}.portfolio-wrap .portfolio-container .portfolio-list .portfolio-item .item-content h5 a:hover{color: #998a7f;}/* Shop Style */a.button,button.button,input.button,#respond input#submit,.cherry-btn,input[type="submit"],input[type="reset"],input[type="button"],button,.summary a.addon-button,.btn.btn-default,a.added_to_cart,.cherry-quick-view {background: #998a7f;color: #fff;font-family: Montserrat;}a.button:hover,button.button:hover,input.button:hover,#respond input#submit:hover,.cherry-btn,input[type="submit"]:hover,input[type="reset"]:hover,input[type="button"]:hover,button:hover,.summary a.addon-button:hover,.btn.btn-default:hover,.cherry-quick-view:hover {background: #1b1b1b;}a.button.loading:before,button.button.loading:before,input.button.loading:before,#respond input#submit.loading:before,.cherry-btn.loading:before,input[type="submit"].loading:before,input[type="reset"].loading:before,input[type="button"].loading:before,button.loading:before,a.button.added:before,button.button.added:before,input.button.added:before,#respond input#submit.added:before,.cherry-btn.added:before,input[type="submit"].added:before,input[type="reset"].added:before,input[type="button"].added:before,button.added:before {background: #1b1b1b}a.button.alt,button.button.alt,input.button.alt,#respond input#submit.alt {background: #998a7f;color: #fff;}a.button.alt:hover,button.button.alt:hover,input.button.alt:hover,#respond input#submit.alt:hover {background: rgb(191,176,165);color: #fff;}.woocommerce ul.products li.product .button:hover:after{color: #cfcece;}body.woocommerce .quantity-wrap .qty-controls-add, body.woocommerce .quantity-wrap .qty-controls-remove, .comment-form-comment textarea{border-bottom: 1px solid #998a7f;}body.woocommerce .quantity-wrap .qty-controls-add{border-bottom: transparent;}.orderby, .woocommerce .quantity .qty{border: 1px solid #998a7f;}.stars a:hover{color: #998a7f;}.woocommerce ul.products li.product h3, .woocommerce-page ul.products li.product h3{font-family: Montserrat;font-size: 16px;line-height: 29px;}.woocommerce ul.products li.product h3:hover {color: #998a7f;}span.onsale {background: #998a7f;color: #fff;font-family: Montserrat;}.woocommerce ul.products li.product .button, .woocommerce-page ul.products li.product .button{background: transparent;color: #998a7f;}.woocommerce ul.products li.product .button b, .woocommerce-page ul.products li.product .button b{font-family: Montserrat;}.woocommerce ul.products li.product .price,.woocommerce-page ul.products li.product .price {color: #998a7f;}.woocommerce .product-addons .addon-button-label,.woocommerce-page .product-addons .addon-button-label {color: #1b1b1b;background: #fff;border: 1px solid #1b1b1b;}.woocommerce .product-addons .addon-button-label:before,.woocommerce-page .product-addons .addon-button-label:before {border-color: #1b1b1b transparent transparent transparent;}.woocommerce .product-addons .addon-button-label:after,.woocommerce-page .product-addons .addon-button-label:after {border-color: #fff transparent transparent transparent;}.woocommerce .product-addons .addon-button, .woocommerce .product-addons .yith-wcwl-add-to-wishlist.woocommerce-page .product-addons .addon-button, .woocommerce-page .product-addons .yith-wcwl-add-to-wishlist {color: #cfcece;}.woocommerce .product-addons .addon-button:hover, .woocommerce .product-addons .yith-wcwl-add-to-wishlist:hover.woocommerce-page .product-addons .addon-button:hover, .woocommerce-page .product-addons .yith-wcwl-add-to-wishlist:hover {color: #998a7f;}.swiper-button-next,.swiper-button-prev {color: #1b1b1b;}.cherry-posts-list.template-main-page-blog .post-title {font: regular 16px/22px Montserrat;}.cherry-posts-list.template-main-page-blog .post-comments-link a {color: #998a7f;}.cherry-posts-list.template-main-page-blog .post-comments-link a:hover {color: #998a7f;}.cherry-posts-list.template-main-page-blog .post-thumbnail .post-date {background: #998a7f;color: #333;}.woocommerce ul.cart_list li,.woocommerce ul.product_list_widget li,.woocommerce-page ul.cart_list li,.woocommerce-page ul.product_list_widget li {border-top-color: #e5e5e5;}.woocommerce .star-rating span:before,.woocommerce-page .star-rating span:before {color: #998a7f;}.woocommerce ul.cart_list li .product-title,.woocommerce ul.product_list_widget li .product-title,.woocommerce-page ul.cart_list li .product-title,.woocommerce-page ul.product_list_widget li .product-title {font: regular 18px/22px Montserrat;}.woocommerce ul.cart_list li .product-title a,.woocommerce ul.product_list_widget li .product-title a,.woocommerce-page ul.cart_list li .product-title a,.woocommerce-page ul.product_list_widget li .product-title a {color: #998a7f;}.woocommerce ul.cart_list li .product-title a:hover,.woocommerce ul.product_list_widget li .product-title a:hover,.woocommerce-page ul.cart_list li .product-title a:hover,.woocommerce-page ul.product_list_widget li .product-title a:hover {color: #1b1b1b;}.site-footer a {color: #998a7f;}.site-footer a:hover{color: #ffffff;}.site-footer .tagcloud a{font-size: 14px !important;line-height: 20px !important;}.static-footer-info{font-size: 12px;line-height: 20px;color: white;}.static-footer-info a:hover{color: white;}.site-footer .textwidget, .textwidget span{color: #ffffff;}.site-footer .textwidget a{color: #fff;}.site-footer .textwidget a:hover{color: #998a7f;}.site-footer .textwidget a.post_link{color: #998a7f;}.site-footer .textwidget a.post_link:hover{color: #fff;}.cherry-follow_label {background: #1b1b1b;color: #fff;}.cherry-follow_label:after {border-color: #1b1b1b transparent transparent transparent;}.cherry-follow_link {color: #fff;}.cherry-follow_link:hover {color: #333;}.site-footer .cherry-follow_link {color: #998a7f;}.site-footer .cherry-follow_link:hover {color: white;}.site-footer h1,.site-footer h2,.site-footer h3,.site-footer h4,.site-footer h5,.site-footer h6 {color: #fff;}.woocommerce .woocommerce-info:before {color: #998a7f;}.woocommerce .woocommerce-info {border-top: 3px solid #998a7f;}.header-navigation-panel .cherry-wc-cart_content,.header-navigation-panel .cherry-wc-account_content {color: #fff;background: #333333;}.header-navigation-panel .cherry-wc-cart_content a,.header-navigation-panel .cherry-wc-account_content a {color: #fff;}.header-navigation-panel .cherry-wc-cart_content a:hover,.header-navigation-panel .cherry-wc-account_content a:hover {color: #1b1b1b;}body .mpsl-layer.title1{font-size: 60px;line-height: 72px;font-weight: 400 !important;text-shadow: none !important;text-transform: uppercase;color: #fff !important;}body .mpsl-layer.title2{font-size: 40px;line-height: 48px;font-weight: 400 !important;text-shadow: none !important;text-transform: uppercase;color: #fff !important;}.cherry-breadcrumbs .material-icons-home:before{font-size: 24px;color: #1b1b1b;}.cherry-breadcrumbs .cherry-breadcrumbs_item_link:hover .material-icons-home:before{color: #998a7f;}.menu-logoutmenu-container a{color: #1b1b1b;}.menu-logoutmenu-container a:hover {color: #998a7f;}.cherry-banner.template-banner_about h6{color: #fff;font-weight: 700;}.cherry-banner.template-banner_about p{color: #998a7f;}.motopress-service-box-obj .motopress-service-box-heading-section h6 {font-size: 12px;color: #998a7f;}.testimonials-wrap .testimonials-item blockquote {color:#1b1b1b;font:16px/29px Montserrat, sans-serif;;}.text-white{color: #fff;}.text-white.testimonials-wrap .testimonials-item blockquote p{color: #fff;margin-bottom: 50px;}.text-white.testimonials-wrap .testimonials-item cite{color: #fff;font-size: 20px;text-transform: uppercase;}blockquote footer:before{display: none;}.entry-meta-top *, .entry-meta-top{color: #998a7f;font-size: 12px;}.entry-meta-top a:hover{color: #1b1b1b;}.author-bio{background: #1b1b1b;}.author-bio h4{color: #fff;}.author-bio a{color: #fff;}.author-bio a:hover{color: #998a7f;}.author-bio .description{color: #998a7f;}.author-bio .description + h4 a{color: #998a7f;}.author-bio .description + h4 a:hover{color: #fff;}.related-posts .entry-title a{color: #1b1b1b;}.related-posts .entry-title a:hover{color: #998a7f;}.comments-area .comment-list .comment-body{background: #1b1b1b;}.comments-area .comment-list .comment-content p{color: #998a7f;}.comment-date{font-size: 20px;text-transform: uppercase;color: #998a7f;}.comments-area .comment-list .comment-meta .comment-author .fn{font-size: 20px;text-transform: uppercase;color: #998a7f;}.comments-area .comment-list .reply .comment-reply-link{font-size: 20px;color: #fff;}.comments-area .comment-list .reply .comment-reply-link:hover{color: #998a7f;}.comment-reply-title{letter-spacing:0;color:#1b1b1b;font:24px/32px Montserrat, sans-serif;;}.hentry .entry-thumbnail img:hover{opacity: 1;}.widget_categories ul li{font-size: 14px;}.yith-wcwl-share-title:after{display: none;}.yith-wcwl-share-title{padding-bottom: 0;}body .cherry-mega-menu-sub .mega-block-title{font-weight: 400;}.error404 #header .search-field{border: none;}.site-footer address{line-height: 38px;}.site-footer .menu li.current_page_item a{color: #fff;}.site-footer .menu li.current_page_item a:hover{color: #998a7f;}.woocommerce .product-addons .addon-button-label:after, .woocommerce-page .product-addons .addon-button-label:after, .woocommerce ul.products li.product .button b:after, .woocommerce-page ul.products li.product .button b:after {border-color: #fff transparent transparent transparent;}.woocommerce ul.products li.product .button b:before {border-color: #1b1b1b transparent transparent transparent;}.woocommerce div.product .summary .compare{color: #fff;}#header .widget_nav_menu .menu li.menu-item a{color: #1b1b1b;}#header .widget_nav_menu .menu li.menu-item a:hover{color: #998a7f;}#header .widget_nav_menu .menu li.menu-item.current_page_item a{color: #998a7f;}#header .widget_nav_menu .menu li.menu-item.current_page_item a:hover{color: #1b1b1b;}.maintenance-container .site-branding{background: #1b1b1b;padding: 75px 0;}.boxed #static-area-header-nav.isStick{border-right: 1px solid rgba(255, 255, 255, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.1);border-left: 1px solid rgba(255, 255, 255, 0.1);}.wide #static-area-header-nav.isStick{border-bottom: 1px solid rgba(255, 255, 255, 0.1);}.boxed #static-area-header-top{border-bottom: 1px solid transparent;}.boxed #static-area-header-top.isStick{border-bottom: 1px solid rgba(0, 0, 0, 0.2);}#static-area-header-top.isStick{background: #fff;}#static-area-showcase-area > .container{margin-right: auto;margin-left: auto;padding-left: 15px;padding-right: 15px;max-width: 1808px;}#static-area-showcase-area {margin-top: -40px;}@media (min-width: 992px) {.site-header.boxed {max-width: 1838px;}}.woocommerce .widget_price_filter .ui-slider .ui-slider-range{background-color: #1b1b1b;}.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color: #1b1b1b;}.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content{background-color: #998a7f;}.home.cherry-with-sidebar .template-banner_shopcategory .content_banner h2.cherry-banner_title{color: #1b1b1b !important;}body .cherry-grid_item {background: #fff;}.cherry-btn.cherry-btn-default{background: #1b1b1b;color: #fff;}.cherry-btn.cherry-btn-default:hover{background: #998a7f;color: #fff;}.cherry-btn.cherry-btn-primary-light{background: rgb(30,30,30);color: #fff;}.cherry-btn.cherry-btn-primary-light:hover{background: rgb(35,35,35);color: #fff;}.cherry-btn.cherry-btn-gray{background: #e5e5e5;color: #fff;}.cherry-btn.cherry-btn-gray:hover{background: rgb(255,255,255);color: #fff;}@media (max-width: 1809px) {.boxed #static-area-header-nav.isStick {border-left: none;border-right: none;}}.cherry-mega-menu-sub.mega-sub {background-image: url("assets/css/uploads/2016/05/megamenu_bg.jpg");background-color:#ffffff;background-repeat:no-repeat;background-position:right top;background-attachment:notdefined;background-clip:padding-box;background-size:auto;background-origin:padding-box;};[class*="fa-"]:before,.fa-youtube:before {font-family: FontAwesome;font-style: normal;font-weight: 400;}.entry-content table > thead > tr > th,.entry-content table > thead > tr > td,.entry-content table > tbody > tr > th,.entry-content table > tbody > tr > td,.entry-content table > tfoot > tr > th,.entry-content table > tfoot > tr > td {border: 1px solid rgba(0,0,0,0.1);}.product-addons .addon-button.compare:after {color: #998a7f;}.product-addons .addon-button.compare:hover:after {color: #1b1b1b;}.site-footer .footer-logo-link{color: #fff;text-transform: none;}@media (max-height: 850px) {.motoslider_wrapper > div {height: 547px !important;}}@media (max-height: 750px) {.motoslider_wrapper > div {height: 426px !important;}}.zoomContainer {z-index: 99 !important;}.woocommerce-tabs .panel ol.commentlist li img.avatar{border: none;}.woocommerce div.product .stock.in-stock {color: #1b1b1b;}
    </style>

    <style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-0.1em!important;background:none!important;padding:0!important;}</style>

<!--
    <script type='text/javascript' src='assets/js/jquery/jquery-ver=1.11.3.js'></script>-->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script type='text/javascript' src='assets/js/jquery/jquery-migrate.min-ver=1.2.1.js'></script>
        
</head>
<body class="home page page-id-10 page-template-default cherry-bottom-meta-disabled cherry-responsive cherry-no-sidebar" dir="ltr" ng-app="app">

    
    
    
    <div id="site-wrapper" class="hfeed site">

		<header id="header" class="site-header boxed extra-boxed" role="banner">
		<div class="header-banner">
	<div id="static-area-header-top" class="header-top static-area"><div class="container"><div class="row"><div class="static-header-top-area"><div class="header-top-area widget-area" role="complementary"><aside id="text-2" class="widget widget_text">			<div class="textwidget">Tel: <a href="callto:800-2345-6789">800-2345-6789</a></div>
		</aside><aside id="nav_menu-2" class="widget widget_nav_menu"><div class="menu-header-shop-menu-container"><ul id="menu-header-shop-menu" class="menu"><li id="menu-item-766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-766"><a href="my-account/index.html">My Account</a></li>
<li id="menu-item-768" class="cherry-compare menu-item menu-item-type-custom menu-item-object-custom menu-item-768"><a href="index.html#">Compare</a></li>
<li id="menu-item-1131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1131"><a href="wishlist/index.html">Wishlist</a></li>
<li id="menu-item-769" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-769"><a href="delivery/index.html">Delivery</a></li>
<li id="menu-item-770" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-770"><a href="help/index.html">Help</a></li>
</ul></div></aside></div></div><div class="static-shop-cart-dropdown">		<div class="cherry-wc-cart_wrap woocommerce">
					<div class="cherry-wc-cart" data-dropdown="box" data-dropdown-active="false">
				<div class="cart-content">
	<a class="cherry-wc-cart_link" href="index.html#" data-dropdown="trigger"><span class="cherry-wc-cart_title"><i class="material-icons-local_mall"></i></span><span class="cherry-wc-cart_title_label">Cart:</span><span class="cherry-wc-cart_count">0</span></a>
	<div class="cherry-wc-cart_content" data-dropdown="content">
		

<ul class="cart_list product_list_widget">

	
		<li class="empty">No products in the cart.</li>

	
</ul><!-- end product list -->


	</div>
</div>
			</div>
					</div>
		</div><div class="static-header-login-area"><div class="header-login-area widget-area" role="complementary"><aside id="nav_menu-3" class="widget widget_nav_menu"><div class="menu-loginmenu-container"><ul id="menu-loginmenu" class="menu"><li id="menu-item-771" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-771"><a href="my-account/index.html">Login</a></li>
</ul></div></aside></div></div><div class="static-search-form"><span class="material-icons-search"></span><div class="box-search-form">
	<form role="search" method="get" class="search-form" action="http://ld-wp.template-help.com/woocommerce_57736/">
		<label>
			<span class="screen-reader-text">Search:</span>
			<input type="search" class="search-field"
			       placeholder="Search &hellip;"
			       value="" name="s"/>
		</label>
		<button type="submit" class="search-submit"><span class="material-icons-search"></span></button>
	</form>
</div></div></div></div></div></div>
<div class="header-navigation-panel">
    <div id="static-area-header-nav" class="header-nav static-area"><div class="container-fluid"><div class="row"><div class="static-header-logo"><div class="site-branding"><h1 class="site-title image-logo"><a href="#" rel="home"><img style="width: 100px;" src="assets/css/uploads/2016/05/logo.png" alt="boutique"></a></h1> </div></div><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 static-header-menu">
	<!-- Primary navigation -->
	<nav class="menu-primary menu" role="navigation" id="menu-primary">

		<label class="cherry-mega-menu-mobile-trigger" for="trigger-menu-primary-items">Menu</label><input class="cherry-mega-menu-mobile-trigger-box" id="trigger-menu-primary-items" type="checkbox"><ul id="menu-primary-items" class="menu-items cherry-mega-no-js cherry-mega-menu mega-menu-direction-horizontal total-columns-12" data-event="hover" data-effect="slide-bottom" data-direction="horizontal" data-mobile-trigger="767" data-parent-selector=".cherry-mega-menu"><li id="menu-item-747" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-has-children menu-item-747 cherry-mega-menu-top-item item-submenu-position-fullwidth cherry-mega-menu-has-children item-type-megamenu item-align-top-left menu-item-standard" data-width-fullscreen="100%" data-width-desktop="100%" data-width-tablet="100%" data-hide-mobile="" data-sub-hr-position="fullwidth" data-sub-vr-position="vertical-parent" data-sub-type="megamenu"><a href="index.html" data-title="Home">Home<i class="fa fa-angle-down mega-menu-arrow top-level-arrow"></i></a>
<ul class="cherry-mega-menu-sub level-0 effect-slide-bottom mega-sub">
	<li id="menu-item-woocommerce_product_categories-3" class="menu-item menu-item-type-widget menu-columns-10 menu-item-woocommerce_product_categories-3 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-widget"><h4 class="mega-block-title">Store</h4><ul class="product-categories"><li class="cat-item cat-item-27"><a href="product-category/belts/index.html">Belts</a></li>
<li class="cat-item cat-item-26"><a href="product-category/bags/index.html">Bags</a></li>
<li class="cat-item cat-item-28"><a href="product-category/blouses-shirts/index.html">Blouses &amp; Shirts</a></li>
<li class="cat-item cat-item-32"><a href="product-category/dresses/index.html">Dresses</a></li>
<li class="cat-item cat-item-33"><a href="product-category/hats/index.html">Hats</a></li>
<li class="cat-item cat-item-34"><a href="product-category/hats-gloves/index.html">Hats &amp; Gloves</a></li>
<li class="cat-item cat-item-35"><a href="product-category/jackets/index.html">Jackets</a></li>
<li class="cat-item cat-item-36"><a href="product-category/jeans/index.html">Jeans</a></li>
<li class="cat-item cat-item-37"><a href="product-category/jewellery/index.html">Jewellery</a></li>
<li class="cat-item cat-item-38"><a href="product-category/jumpsuit-shorts/index.html">Jumpsuit &amp; shorts</a></li>
<li class="cat-item cat-item-39"><a href="product-category/leggings/index.html">Leggings</a></li>
<li class="cat-item cat-item-41"><a href="product-category/outerwear/index.html">Outerwear</a></li>
<li class="cat-item cat-item-42"><a href="product-category/scarves-snoods/index.html">Scarves &amp; snoods</a></li>
<li class="cat-item cat-item-44"><a href="product-category/skirts/index.html">Skirts</a></li>
<li class="cat-item cat-item-46"><a href="product-category/tights/index.html">Tights</a></li>
<li class="cat-item cat-item-47"><a href="product-category/tops-t-shirts/index.html">Tops &amp; T-shirts</a></li>
<li class="cat-item cat-item-49"><a href="product-category/tops-t-shirts/sweaters-cardigans/index.html">Sweaters &amp; Cardigans</a></li>
<li class="cat-item cat-item-48"><a href="product-category/trousers/index.html">Trousers</a></li>
</ul></li>
	<li id="menu-item-cherry-shortcodes-4" class="menu-item menu-item-type-widget menu-columns-2 menu-item-cherry-shortcodes-4 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-widget"><div class="textwidget"></div></li>
</ul>
</li>
<li id="menu-item-755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-755 cherry-mega-menu-top-item item-submenu-position-fullwidth item-align-top-left menu-item-standard"><a href="about/index.html" data-title="About">About</a></li>
<li id="menu-item-754" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-754 cherry-mega-menu-top-item item-submenu-position-fullwidth cherry-mega-menu-has-children item-type-standard item-align-top-left menu-item-standard" data-hide-mobile="" data-sub-hr-position="fullwidth" data-sub-vr-position="vertical-parent" data-sub-type="standard"><a href="gallery/index.html" data-title="Gallery">Gallery<i class="fa fa-angle-down mega-menu-arrow top-level-arrow"></i></a>
<ul class="cherry-mega-menu-sub level-0 effect-slide-bottom simple-sub">
	<li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="gallery/masonry-style/index.html" data-title="Masonry style">Masonry style</a></li>
	<li id="menu-item-757" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-757 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="gallery/grid-style/index.html" data-title="Grid style">Grid style</a></li>
	<li id="menu-item-756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-756 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="gallery/justified-style/index.html" data-title="Justified style">Justified style</a></li>
	<li id="menu-item-759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-759 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="gallery/list-style/index.html" data-title="List style">List style</a></li>
</ul>
</li>
<li id="menu-item-760" class="menu-item_left-indent menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-760 cherry-mega-menu-top-item item-submenu-position-fullwidth cherry-mega-menu-has-children item-type-standard item-align-top-left menu-item-standard" data-hide-mobile="" data-sub-hr-position="fullwidth" data-sub-vr-position="vertical-parent" data-sub-type="standard"><a href="store/index.html" data-title="Store">Store<i class="fa fa-angle-down mega-menu-arrow top-level-arrow"></i></a>
<ul class="cherry-mega-menu-sub level-0 effect-slide-bottom simple-sub">
	<li id="menu-item-761" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-761 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="product-category/blouses-shirts/index.html" data-title="Blouses &#038; Shirts">Blouses &#038; Shirts</a></li>
	<li id="menu-item-762" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-762 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="product-category/jackets/index.html" data-title="Jackets">Jackets</a></li>
	<li id="menu-item-763" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-763 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="product-category/outerwear/index.html" data-title="Outerwear">Outerwear</a></li>
	<li id="menu-item-764" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-764 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="product-category/trousers/index.html" data-title="Trousers">Trousers</a></li>
	<li id="menu-item-765" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-765 cherry-mega-menu-sub-item item-nested-sub item-nested-sub-1 menu-item-standard"><a href="product-category/tops-t-shirts/index.html" data-title="Tops &#038; T-shirts">Tops &#038; T-shirts</a></li>
</ul>
</li>
<li id="menu-item-746" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-746 cherry-mega-menu-top-item item-submenu-position-fullwidth item-align-top-left menu-item-standard"><a href="blog/index.html" data-title="Blog">Blog</a></li>
<li id="menu-item-753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-753 cherry-mega-menu-top-item item-submenu-position-fullwidth item-align-top-left menu-item-standard"><a href="contacts/index.html" data-title="Contacts">Contacts</a></li>
</ul><label class="cherry-mega-menu-mobile-close" for="trigger-menu-primary-items">Close</label>
	</nav>

</div></div></div></div>	</div>
		</header>
<div id="content" class="site-content wide">
    <div id="static-area-showcase-area" class="showcase-area static-area"><div class="container"><div class="row"><div class="static-moto-slider moto-slider"><div class="motoslider_wrapper " id="motoslider_wrapper57f5261251aba" >
        <div data-motoslider style="height: 905px; max-height: 905px;">
    </div>
    <div class="motoslider">
        <div id="settings"  data-full-window-width="false" data-full-height="false" data-full-height-offset="px" data-full-height-offset-container="" data-full-size-grid="false" data-timer="true" data-timer-delay="7000" data-hover-timer="false" data-counter="false" data-slider-layout="auto" data-grid-width="1808" data-grid-height="905" data-timer-reverse="false" data-arrows-show="true" data-thumbnails-show="false" data-slideshow-timer-show="false" data-slideshow-ppb-show="false" data-controls-hide-on-leave="false" data-swipe="false" data-delay-init="0" data-scroll-init="false" data-start-slide="1" data-visible-from="" data-visible-till="100000" data-custom-class="">
        </div>
        <div id="slides">
                            <div class="slide"  data-class="" data-id="" data-animation="msSlideFade" data-fade-animation="msSlideFade" data-duration="900" data-easing="easeOut">
                    <div class="slide_bg" >
                        <div  data-type="color" data-color="rgb(255, 255, 255)"></div><div  data-src="http://localhost:90/fnar/sbell/assets/css/uploads/2016/05/slide_1.jpg" data-type="image" data-fit="cover" data-position="center center" data-repeat="no-repeat"></div>                    </div>
                    <div class="layers">
                                                            <div class="layer"  data-type="html" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="-93" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-white-space="normal" data-class="mpsl-header-white title1 mpsl-layer">The largest range</div>
                                                                    <div class="layer"  data-type="html" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="-27" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-white-space="normal" data-class="mpsl-text-white title2 mpsl-layer">of clothes</div>
                                                                    <div class="layer"  data-link="product-category/blouses-shirts/" data-target="_blank" data-type="button" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="124" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-class="mpsl-layer">Shop now!</div>
                                                    </div>
                </div>
                            <div class="slide"  data-class="" data-id="" data-animation="msSlideFade" data-fade-animation="msSlideFade" data-duration="900" data-easing="easeOut">
                    <div class="slide_bg" >
                        <div  data-type="color" data-color="rgb(255, 255, 255)"></div><div  data-src="http://localhost:90/fnar/sbell/assets/css/uploads/2016/05/slide_2.jpg" data-type="image" data-fit="cover" data-position="center center" data-repeat="no-repeat"></div>                    </div>
                    <div class="layers">
                                                            <div class="layer"  data-type="html" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="-93" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-white-space="normal" data-class="mpsl-header-white title1 mpsl-layer">Stylish models</div>
                                                                    <div class="layer"  data-type="html" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="-27" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-white-space="normal" data-class="mpsl-text-white title2 mpsl-layer">from around the world</div>
                                                                    <div class="layer"  data-link="store/" data-target="_blank" data-type="button" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="124" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-class="mpsl-layer">Shop now!</div>
                                                    </div>
                </div>
                            <div class="slide"  data-class="" data-id="" data-animation="msSlideFade" data-fade-animation="msSlideFade" data-duration="900" data-easing="easeOut">
                    <div class="slide_bg" >
                        <div  data-type="color" data-color="rgb(255, 255, 255)"></div><div  data-src="http://localhost:90/fnar/sbell/assets/css/uploads/2016/05/slide_3.jpg" data-type="image" data-fit="cover" data-position="center center" data-repeat="no-repeat"></div>                    </div>
                    <div class="layers">
                                                            <div class="layer"  data-type="html" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="-93" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-white-space="normal" data-class="mpsl-header-white title1 mpsl-layer">Excellent quality, bright</div>
                                                                    <div class="layer"  data-type="html" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="-27" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-white-space="normal" data-class="mpsl-text-white title2 mpsl-layer">designs, reasonable prices</div>
                                                                    <div class="layer"  data-link="jackets/" data-target="_blank" data-type="button" data-align-horizontal="center" data-align-vertical="middle" data-offset-x="0" data-offset-y="124" data-animation="fadeIn" data-timing-function="easeInOut" data-duration="400" data-leave-animation="fadeOut" data-leave-timing-function="ease" data-leave-duration="400" data-delay="200" data-class="mpsl-layer">Shop now!</div>
                                                    </div>
                </div>
                    </div>
    </div>
</div>
<p class="motopress-hide-script mpsl-hide-script">
    <script type="text/javascript" id='mpsl-fix-height-motoslider_wrapper57f5261251aba'>
        var aspect = 0.50055309734513;
        var sliderWrapper = document.getElementById('motoslider_wrapper57f5261251aba');
        var outerWidth = sliderWrapper.offsetWidth;
        var curHeight = outerWidth * aspect;
        sliderWrapper.querySelector('[data-motoslider]').height = curHeight + 'px';
    </script>
</p></div></div></div></div>	<div class="container-fluid">

		<div id="primary" class="content-area"><main id="main" class="site-main" role="main"><article class="clearfix post-10 page type-page status-publish hentry" id="post-10">


<div class="entry-meta entry-meta-top">
	
	
	
</div>

<div class="entry-content"><div class="row  " ><div class="container"><div class="row row-edge">
<div class="col-md-12">
<div class="cherry-banner template-banner_shopcategory first_banner_category "><div class="cherry-banner_wrap" style="background-color:; color:#1b1b1b;">
	<a href="index.html#" class="cherry-banner_link image-link">
		<img src="assets/css/uploads/2016/05/category_img1.jpg" alt="">
	</a>
        <div class="content_banner">
           <h2 class="cherry-banner_title" style="color:#1b1b1b;">Footwear</h2>
	   <div class="cherry-banner_content">new collections</div>
        </div>
</div></div>
<div class="cherry-clear  "></div>
<div class="cherry-banner template-banner_shopcategory second_banner_category "><div class="cherry-banner_wrap" style="background-color:; color:#ffffff;">
	<a href="index.html#" class="cherry-banner_link image-link">
		<img src="assets/css/uploads/2016/05/category_img2.jpg" alt="">
	</a>
        <div class="content_banner">
           <h2 class="cherry-banner_title" style="color:#ffffff;">Handbags</h2>
	   <div class="cherry-banner_content">get up to 50% off</div>
        </div>
</div></div>
<div class="cherry-clear  "></div>
<div class="cherry-banner template-banner_shopcategory third_banner_category "><div class="cherry-banner_wrap" style="background-color:; color:#1b1b1b;">
	<a href="index.html#" class="cherry-banner_link image-link">
		<img src="assets/css/uploads/2016/05/category_img3.jpg" alt="">
	</a>
        <div class="content_banner">
           <h2 class="cherry-banner_title" style="color:#1b1b1b;">Sunglasses</h2>
	   <div class="cherry-banner_content">new collections</div>
        </div>
</div></div>
</div>
</div></div></div>
<div class="row  " ><div class="container"><div class="row row-edge">
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:123px;"></div><div class="cherry-spacer   visible-sm-block" style="height:50px;"></div><div class="cherry-spacer   visible-xs-block" style="height:40px;"></div>
</div>
</div>
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="motopress-code-obj">
<h4>WEEKLY FEATURED PRODUCTS</h4>
</div>
</div>
</div>
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:102px;"></div><div class="cherry-spacer   visible-sm-block" style="height:60px;"></div><div class="cherry-spacer   visible-xs-block" style="height:20px;"></div>
</div>
</div>
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="woocommerce columns-3">
			
			<ul class="products">

				
					<li class="first post-383 product type-product status-publish has-post-thumbnail product_cat-blouses-shirts product_cat-dresses product_cat-jackets product_cat-jewellery product_cat-outerwear product_cat-scarves-snoods product_cat-skirts product_cat-tops-t-shirts product_tag-women featured shipping-taxable purchasable product-type-simple product-cat-blouses-shirts product-cat-dresses product-cat-jackets product-cat-jewellery product-cat-outerwear product-cat-scarves-snoods product-cat-skirts product-cat-tops-t-shirts product-tag-women instock">

	<a href="product/womens-skinny-jeans-candy-20/index.html">
	<a href="product/womens-skinny-jeans-candy-20/index.html">

		<div class="cherry-thumb-wrap"><img width="370" height="370" src="assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02-370x370.png" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Women&#039;s-Skinny-Jeans-Candy-20Colour_02" srcset="assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02-150x150.png 150w, assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02-300x300.png 300w, assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02-768x768.png 768w, assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02-130x130.png 130w, assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02-370x370.png 370w, assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02-600x600.png 600w, assets/css/uploads/2016/05/Womens-Skinny-Jeans-Candy-20Colour_02.png 1000w" sizes="(max-width: 370px) 100vw, 370px" /><span class="btn cherry-quick-view" data-product="383">Quick view</span></div>		<span class="woccommerce_product_category">
			women   		</span>
	   	<h3>Women&#8217;s Skinny Jeans Candy-20</h3>	</a>
	
	<span class="price"><span class="amount">&#36;184.00</span></span>
</a><div class='prod-inner-wrap'>
	<div class="star-rating" title="Rated 4.33 out of 5"><span style="width:86.6%"><strong class="rating">4.33</strong> out of 5</span></div><a rel="nofollow" href="index-add-to-cart=383.html" data-quantity="1" data-product_id="383" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a><div class="product-addons">
<div class="yith-wcwl-add-to-wishlist add-to-wishlist-383">
			<div class="yith-wcwl-add-button show"
		     style="display:block">

			
<a href="index-add_to_wishlist=383.html" rel="nofollow" data-product-id="383" data-product-type="simple" class="add_to_wishlist addon-button">
	<i class="fa fa-heart-o"></i>	<span class="addon-button-label">
		Add to Wishlist	</span>
</a>
<img src="assets/css/themes/theme57736/assets/images/rolling.svg" class="ajax-loading" alt="loading" width="16"
     height="16" style="visibility:hidden" />
		</div>

		<div class="yith-wcwl-wishlistaddedbrowse hide addon-button" style="display:none;">
			<a href="wishlist/view/index.html">
				<i class="fa fa-check"></i>
		<span class="addon-button-label">
			<span class="feedback">Product added!</span>
			Browse Wishlist		</span>
			</a>
		</div>

		<div
			class="yith-wcwl-wishlistexistsbrowse addon-button hide"
			style="display:none">
			<a href="wishlist/view/index.html">
				<i class="fa fa-check"></i>
		<span class="addon-button-label">
			<span class="feedback">The product is already in the wishlist!</span>
			Browse Wishlist		</span>
			</a>
		</div>

		<div style="clear:both"></div>
		<div class="yith-wcwl-wishlistaddresponse addon-button"></div>
	
</div>

<div class="clear"></div><a href="index-_wpnonce=4db8801b1b.html" class="compare addon-button" data-product_id="383">
	<i class="fa fa-retweet"></i>
	<span class="addon-button-label">
		Compare	</span>
</a></div></div>
</li>

				
					<li class="post-384 product type-product status-publish has-post-thumbnail product_cat-bags product_cat-belts product_cat-blouses-shirts product_cat-hats product_cat-jackets product_cat-outerwear product_cat-scarves-snoods product_cat-sweaters-cardigans product_cat-tops-t-shirts product_cat-trousers product_tag-men sale featured shipping-taxable purchasable product-type-simple product-cat-bags product-cat-belts product-cat-blouses-shirts product-cat-hats product-cat-jackets product-cat-outerwear product-cat-scarves-snoods product-cat-sweaters-cardigans product-cat-tops-t-shirts product-cat-trousers product-tag-men instock">

	<a href="product/levis-mens-slim-trucker-jacket/index.html">
	<a href="product/levis-mens-slim-trucker-jacket/index.html">

		<div class="cherry-thumb-wrap">
	<span class="onsale">Sale!</span>
<img width="370" height="370" src="assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05-370x370.png" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Levi&#039;s-Men&#039;s-Slim-Trucker-Jacket_05" srcset="assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05-150x150.png 150w, assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05-300x300.png 300w, assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05-768x768.png 768w, assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05-130x130.png 130w, assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05-370x370.png 370w, assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05-600x600.png 600w, assets/css/uploads/2016/05/Levis-Mens-Slim-Trucker-Jacket_05.png 1000w" sizes="(max-width: 370px) 100vw, 370px" /><span class="btn cherry-quick-view" data-product="384">Quick view</span></div>		<span class="woccommerce_product_category">
			men   		</span>
	   	<h3>Levi&#8217;s Men&#8217;s Slim Trucker Jacket</h3>	</a>
	
	<span class="price"><del><span class="amount">&#36;258.00</span></del> <ins><span class="amount">&#36;150.00</span></ins></span>
</a><div class='prod-inner-wrap'>
	<div class="star-rating" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div><a rel="nofollow" href="index-add-to-cart=384.html" data-quantity="1" data-product_id="384" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a><div class="product-addons">
<div class="yith-wcwl-add-to-wishlist add-to-wishlist-384">
			<div class="yith-wcwl-add-button show"
		     style="display:block">

			
<a href="index-add_to_wishlist=384.html" rel="nofollow" data-product-id="384" data-product-type="simple" class="add_to_wishlist addon-button">
	<i class="fa fa-heart-o"></i>	<span class="addon-button-label">
		Add to Wishlist	</span>
</a>
<img src="assets/css/themes/theme57736/assets/images/rolling.svg" class="ajax-loading" alt="loading" width="16"
     height="16" style="visibility:hidden" />
		</div>

		<div class="yith-wcwl-wishlistaddedbrowse hide addon-button" style="display:none;">
			<a href="wishlist/view/index.html">
				<i class="fa fa-check"></i>
		<span class="addon-button-label">
			<span class="feedback">Product added!</span>
			Browse Wishlist		</span>
			</a>
		</div>

		<div
			class="yith-wcwl-wishlistexistsbrowse addon-button hide"
			style="display:none">
			<a href="wishlist/view/index.html">
				<i class="fa fa-check"></i>
		<span class="addon-button-label">
			<span class="feedback">The product is already in the wishlist!</span>
			Browse Wishlist		</span>
			</a>
		</div>

		<div style="clear:both"></div>
		<div class="yith-wcwl-wishlistaddresponse addon-button"></div>
	
</div>

<div class="clear"></div><a href="index-_wpnonce=4db8801b1b.html" class="compare addon-button" data-product_id="384">
	<i class="fa fa-retweet"></i>
	<span class="addon-button-label">
		Compare	</span>
</a></div></div>
</li>

				
					<li class="last post-385 product type-product status-publish has-post-thumbnail product_cat-bags product_cat-belts product_cat-blouses-shirts product_cat-jackets product_cat-outerwear product_cat-scarves-snoods product_cat-skirts product_cat-tights product_cat-trousers product_tag-women featured shipping-taxable purchasable product-type-simple product-cat-bags product-cat-belts product-cat-blouses-shirts product-cat-jackets product-cat-outerwear product-cat-scarves-snoods product-cat-skirts product-cat-tights product-cat-trousers product-tag-women instock">

	<a href="product/ltb-jeans-womens-50201-valentine-straight-leg-jeans/index.html">
	<a href="product/ltb-jeans-womens-50201-valentine-straight-leg-jeans/index.html">

		<div class="cherry-thumb-wrap"><img width="370" height="370" src="assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01-370x370.png" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Ltb-Jeans-Women&#039;s-50201---Valentine-Straight-Leg-Jeans_01" srcset="assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01-150x150.png 150w, assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01-300x300.png 300w, assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01-768x768.png 768w, assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01-130x130.png 130w, assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01-370x370.png 370w, assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01-600x600.png 600w, assets/css/uploads/2016/05/Ltb-Jeans-Womens-50201-Valentine-Straight-Leg-Jeans_01.png 1000w" sizes="(max-width: 370px) 100vw, 370px" /><span class="btn cherry-quick-view" data-product="385">Quick view</span></div>		<span class="woccommerce_product_category">
			women   		</span>
	   	<h3>Ltb Jeans Women&#8217;s 50201 Valentine-Straight Leg-Jeans</h3>	</a>
	
	<span class="price"><span class="amount">&#36;186.00</span></span>
</a><div class='prod-inner-wrap'>
	<div class="star-rating" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div><a rel="nofollow" href="index-add-to-cart=385.html" data-quantity="1" data-product_id="385" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a><div class="product-addons">
<div class="yith-wcwl-add-to-wishlist add-to-wishlist-385">
			<div class="yith-wcwl-add-button show"
		     style="display:block">

			
<a href="index-add_to_wishlist=385.html" rel="nofollow" data-product-id="385" data-product-type="simple" class="add_to_wishlist addon-button">
	<i class="fa fa-heart-o"></i>	<span class="addon-button-label">
		Add to Wishlist	</span>
</a>
<img src="assets/css/themes/theme57736/assets/images/rolling.svg" class="ajax-loading" alt="loading" width="16"
     height="16" style="visibility:hidden" />
		</div>

		<div class="yith-wcwl-wishlistaddedbrowse hide addon-button" style="display:none;">
			<a href="wishlist/view/index.html">
				<i class="fa fa-check"></i>
		<span class="addon-button-label">
			<span class="feedback">Product added!</span>
			Browse Wishlist		</span>
			</a>
		</div>

		<div
			class="yith-wcwl-wishlistexistsbrowse addon-button hide"
			style="display:none">
			<a href="wishlist/view/index.html">
				<i class="fa fa-check"></i>
		<span class="addon-button-label">
			<span class="feedback">The product is already in the wishlist!</span>
			Browse Wishlist		</span>
			</a>
		</div>

		<div style="clear:both"></div>
		<div class="yith-wcwl-wishlistaddresponse addon-button"></div>
	
</div>

<div class="clear"></div><a href="index-_wpnonce=4db8801b1b.html" class="compare addon-button" data-product_id="385">
	<i class="fa fa-retweet"></i>
	<span class="addon-button-label">
		Compare	</span>
</a></div></div>
</li>

				
			</ul>

			
		</div>
</div>
</div>
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:54px;"></div><div class="cherry-spacer   visible-sm-block" style="height:20px;"></div><div class="cherry-spacer   visible-xs-block" style="height:20px;"></div>
</div>
</div>
</div>
</div></div></div>
<div class="row fullwidth_block " ><div class="cherry-box   box-847"><div class="inner"><div class="container-fluid"><div class="row row-edge">
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="row text_block " ><div class="container"><div class="row row-edge">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="motopress-code-obj">
<p><img class="alignnone wp-image-844 size-full" src="assets/css/uploads/2016/05/img_about.jpg" alt="img_about" width="669" height="711" srcset="assets/css/uploads/2016/05/img_about-282x300.jpg 282w, assets/css/uploads/2016/05/img_about.jpg 669w" sizes="(max-width: 669px) 100vw, 669px" /></p>
<h1>About</h1>
<h2>Store</h2>
<p>Thanks for visiting our website! We have numerous loyal clients all over the globe. This fact proves that our company takes the leading place among the competitors. So don&#8217;t waste your time and money, buy high quality products from our store!</p>
</div>
</div>
</div></div></div>
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:20px;"></div><div class="cherry-spacer   visible-sm-block" style="height:20px;"></div><div class="cherry-spacer   visible-xs-block" style="height:20px;"></div>
</div>
</div>
</div>
</div></div></div></div></div>
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:242px;"></div><div class="cherry-spacer   visible-sm-block" style="height:90px;"></div><div class="cherry-spacer   visible-xs-block" style="height:40px;"></div>
</div>
</div>
<div class="row  " ><div class="container"><div class="row row-edge">
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="motopress-code-obj">
<h4>From the blog</h4>
</div>
</div>
</div></div></div>
<div class="row row-edge  " >
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:102px;"></div><div class="cherry-spacer   visible-sm-block" style="height:50px;"></div><div class="cherry-spacer   visible-xs-block" style="height:20px;"></div>
</div>
</div>
<div class="row  " ><div class="container"><div class="row row-edge">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div id="cherry-posts-list-1" class="cherry-posts-list template-posts_shortcode  "><div class="cherry-posts-item post-item item-0 odd"><div class="inner cherry-clearfix"><div class="block_postshortcode">
   <figure class="post-thumbnail"><img width="370" height="370" src="assets/css/uploads/2016/05/post01-370x370.jpg" class="attachment-theme57736-thumb-m size-theme57736-thumb-m wp-post-image" alt="post01" srcset="assets/css/uploads/2016/05/post01-150x150.jpg 150w, assets/css/uploads/2016/05/post01-130x130.jpg 130w, assets/css/uploads/2016/05/post01-370x370.jpg 370w" sizes="(max-width: 370px) 100vw, 370px" /></figure>
   <div class="inner_post_content">
      <div class="inner_block">
        <span class="post-meta">
        by <span class="post-author vcard"><a href="author/admin/index.html" rel="author">admin</a></span> <time datetime="2015-05-25T10:17:53+00:00">May 25, 2015</time>
        </span>
        <h3 class="post-title"><a href="branding/establishing-your-brand-on-college-campuses/index.html">Establishing Your Brand on College Campuses</a></h3>
      </div>
   </div>
</div></div></div><!--/.cherry-posts-item--><div class="cherry-posts-item post-item item-1 even"><div class="inner cherry-clearfix"><div class="block_postshortcode">
   <figure class="post-thumbnail"><img width="370" height="370" src="assets/css/uploads/2016/05/post02-370x370.jpg" class="attachment-theme57736-thumb-m size-theme57736-thumb-m wp-post-image" alt="Two woman posing in lingerie in studio" srcset="assets/css/uploads/2016/05/post02-150x150.jpg 150w, assets/css/uploads/2016/05/post02-130x130.jpg 130w, assets/css/uploads/2016/05/post02-370x370.jpg 370w" sizes="(max-width: 370px) 100vw, 370px" /></figure>
   <div class="inner_post_content">
      <div class="inner_block">
        <span class="post-meta">
        by <span class="post-author vcard"><a href="author/admin/index.html" rel="author">admin</a></span> <time datetime="2015-05-25T10:14:33+00:00">May 25, 2015</time>
        </span>
        <h3 class="post-title"><a href="customer-service/believe-in-the-business-of-your-dreams/index.html">Believe in the Business of Your Dreams</a></h3>
      </div>
   </div>
</div></div></div><!--/.cherry-posts-item--></div><!--/.cherry-posts-list-->
</div>
</div></div></div>
</div>
</article></main></div>
				
	
</div>

	<div class="footer-before">
			</div>
	<footer id="footer" class="site-footer boxed extra-boxed" role="contentinfo"><div id="static-area-footer_area" class="footer_area static-area"><div class="container"><div class="row"><div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 static-sidebar-footer-1"><div class="sidebar-footer-1 widget-area" role="complementary"><aside id="nav_menu-5" class="widget widget_nav_menu"><h5 class="widget-title">Navigation</h5><div class="menu-menu-navigation-container"><ul id="menu-menu-navigation" class="menu"><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-773"><a href="index.html">Home</a></li>
<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="about/index.html">About</a></li>
<li id="menu-item-777" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-777"><a href="gallery/index.html">Gallery</a></li>
<li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-778"><a href="store/index.html">Store</a></li>
<li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-775"><a href="blog/index.html">Blog</a></li>
<li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-776"><a href="contacts/index.html">Contacts</a></li>
</ul></div></aside></div></div><div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 static-sidebar-footer-2"><div class="sidebar-footer-2 widget-area" role="complementary"><aside id="tag_cloud-3" class="widget widget_tag_cloud"><h5 class="widget-title">Tags</h5><div class="tagcloud"><a href='tag/blouses-shirts/index.html' class='tag-link-12' title='5 topics' style='font-size: 20.218181818182pt;'>Blouses &amp; Shirts</a>
<a href='tag/dresses/index.html' class='tag-link-13' title='6 topics' style='font-size: 22pt;'>Dresses</a>
<a href='tag/jackets/index.html' class='tag-link-14' title='3 topics' style='font-size: 15.636363636364pt;'>Jackets</a>
<a href='tag/jeans/index.html' class='tag-link-15' title='1 topic' style='font-size: 8pt;'>Jeans</a>
<a href='tag/jumpsuit-shorts/index.html' class='tag-link-16' title='1 topic' style='font-size: 8pt;'>Jumpsuit &amp; shorts</a>
<a href='tag/leggings/index.html' class='tag-link-17' title='1 topic' style='font-size: 8pt;'>Leggings</a>
<a href='tag/outerwear/index.html' class='tag-link-18' title='1 topic' style='font-size: 8pt;'>Outerwear</a>
<a href='tag/skirts/index.html' class='tag-link-19' title='1 topic' style='font-size: 8pt;'>Skirts</a>
<a href='tag/sweaters-cardigans/index.html' class='tag-link-20' title='3 topics' style='font-size: 15.636363636364pt;'>Sweaters &amp; Cardigans</a>
<a href='tag/tights/index.html' class='tag-link-21' title='1 topic' style='font-size: 8pt;'>Tights</a>
<a href='tag/tops-t-shirts/index.html' class='tag-link-22' title='6 topics' style='font-size: 22pt;'>Tops &amp; T-shirts</a>
<a href='tag/trousers/index.html' class='tag-link-23' title='1 topic' style='font-size: 8pt;'>Trousers</a></div>
</aside></div></div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 static-sidebar-footer-3"><div class="sidebar-footer-3 widget-area" role="complementary"><aside id="text-3" class="widget widget_text"><h5 class="widget-title">Contacts</h5>			<div class="textwidget"><div class="contact-info"><address>28 Jackson Blvd Ste 1020 Chicago IL 60604-2340</address>
<p>Tel: <a href="callto:800-2345-6789">800-2345-6789</a></p>
<p><a href="../cdn-cgi/l/email-protection.html#41282f272e0125242c2e2d282f2a6f2e3326" class="post_link"><span class="__cf_email__" data-cfemail="b2dbdcd4ddf2d6d7dfdddedbdcd99cddc0d5">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></p>
<time datetime="2016-01-01">7 Days a week from 9:00 am to 7:00 pm</time></div></div>
		</aside><aside id="cherry-social-follow-2" class="widget cherry-social-follow-class"><div id='cherry-follow-items-1' class='cherry-follow_wrap '><ul class='cherry-follow_list clearfix'><li class="cherry-follow_item facebook-item"><a class="cherry-follow_link" href="https://www.facebook.com/TemplateMonster/" target="_blank" rel="nofollow" title="Facebook"><i class='flaticon-facebook'></i><span class="cherry-follow_label">Facebook</span></a></li><li class="cherry-follow_item twitter-item"><a class="cherry-follow_link" href="https://twitter.com/TemplateMonster/" target="_blank" rel="nofollow" title="Twitter"><i class='flaticon-twitter'></i><span class="cherry-follow_label">Twitter</span></a></li><li class="cherry-follow_item google-item"><a class="cherry-follow_link" href="https://twitter.com/TemplateMonster/" target="_blank" rel="nofollow" title="Google +"><i class='flaticon-googleplus'></i><span class="cherry-follow_label">Google +</span></a></li><li class="cherry-follow_item youtube-item"><a class="cherry-follow_link" href="https://www.youtube.com/user/TemplateMonsterCo/" target="_blank" rel="nofollow" title="YouTube"><i class='fa-youtube'></i><span class="cherry-follow_label">YouTube</span></a></li></ul></div></aside></div></div></div></div></div><div id="static-area-footer-bottom" class="footer-bottom static-area"><div class="container"><div class="row"><div class="col-xs-12 col-sm-12 static-footer-logo"><div class="cherry-footer-logo image-logo"><a href="index.html" rel="home"><img src="assets/css/uploads/2016/05/footer_logo.png" alt="boutique"></a></div><div class="footer-site-description"></div></div><div class="col-xs-12 col-sm-12 static-footer-info"><div class="site-info"> WooCommerce Theme is proudly powered by WordPress. <a href="privacy-policy/index.html">Privacy Policy</a></div></div></div></div></div></footer><div id="back-top" class=""><a href="#top"></a></div>
	</div><!--site-wrapper-->


    <!-- js angular -->
    
    <script src="assets/libs/angular/1.5.8/angular.min.js"></script>        
    <script src="assets/libs/data-tables/angular-resource.min.js"></script>
    <script src="assets/libs/data-tables/jquery.dataTables.min.js"></script>              
    <script src="assets/libs/data-tables/angular-datatables.min.js"></script>
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>       
    <script src="assets/libs/material-1.1.0/angular-animate.min.js"></script>
    <script src="assets/libs/material-1.1.0/angular-aria.min.js"></script>
    <script src="assets/libs/material-1.1.0/angular-messages.min.js"></script>
    <script src="assets/libs/material-1.1.0/angular-material.min.js"></script>
    <script src="assets/libs/angular/complements/angular-ui-router/angular-ui-router.min.js"></script>
    <script src="assets/libs/angular/complements/angular-storage/ngStorage.min.js"></script>
    <script src="assets/libs/angular/complements/angular-moments/moment-with-locales.min.js"></script>
    <script src="assets/libs/angular/complements/angular-moments/angular-moment.min.js"></script>
    <script src="assets/libs/angular/complements/angular-moment-picker/angular-moment-picker.min.js"></script>
    <script src="assets/libs/angular/complements/angular-navBar/navBar.js"></script>

    <script src="assets/libs/angular/complements/angular-text-editor/textAngular-rangy.min.js"></script>
    <script src="assets/libs/angular/complements/angular-text-editor/textAngular-sanitize.min.js"></script>
    <script src="assets/libs/angular/complements/angular-text-editor/textAngular.min.js"></script>
    <script src="assets/libs/angular/complements/angular-text-editor/textAngularSetup.js"></script>
    
    <!-- end js angular -->	    
     
    <!-- inject: app global js -->
    <script src="app/app.js"></script>
    <script src="app/app-config.js"></script>
    <script src="app/app-run.js"></script>
    <script src="app/app-constants.js"></script>
    <!-- endinject -->
    
    <!-- inject: util services js -->
    <script src="app/utils/services/rest.service.js"></script>
    <script src="app/utils/services/base64.service.js"></script>
    <script src="app/utils/services/dialog.service.js"></script>
    <script src="app/utils/services/validations/validation.service.js"></script>
    <script src="app/utils/services/shared.service.js"></script>
    <!-- endinject -->         
    
    <!-- inject: login js -->
    <script src="app/home/services/home.service.js"></script>
    <script src="app/home/controllers/home.controller.js"></script>
    <!-- endinject -->
    
    <!-- inject: login js -->
    <script src="app/login/services/login.service.js"></script>
    <script src="app/login/controllers/login.controller.js"></script>
    <!-- endinject -->
    
    
    
    
    <!-- inject: home js
    <script src="app/main/controllers/menu.controller.js"></script> 
    <script src="app/main/controllers/breadcrumb.controller.js"></script>
    <script src="app/main/controllers/select-perfil.controller.js"></script> 
    <script src="app/main/controllers/about.controller.js"></script>
    endinject -->
    
    
    <!-- TEMPLATE -->
    
    <style type="text/css">.box-847 .inner{background-image:url("assets/css/uploads/2016/05/footer-bg.jpg");background-repeat:repeat;background-position:top left;background-attachment:scroll;background-size:auto;}</style><link rel='stylesheet' id='mpsl-core-css'  href='assets/css/plugins/motopress-slider/motoslider_core/styles/motoslider-ver=1.2.3.css' type='text/css' media='all' />
    <style id='mpsl-core-inline-css' type='text/css'>.mpsl-layer.mpsl-btn-blue{background-color:#20b9d5;color:#ffffff;font-size:18px;font-family:Open Sans;text-shadow:0px 1px 0px #06879f;padding-top:12px;padding-right:28px;padding-bottom:13px;padding-left:28px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;text-decoration: none; -webkit-box-shadow: 0px 2px 0px 0px #06879f; -moz-box-shadow: 0px 2px 0px 0px #06879f; box-shadow: 0px 2px 0px 0px #06879f;}.mpsl-layer.mpsl-btn-blue:hover{}.mpsl-layer.mpsl-btn-green{background-color:#58cf6e;color:#ffffff;font-size:18px;font-family:Open Sans;text-shadow:0px 1px 0px #17872d;padding-top:12px;padding-right:28px;padding-bottom:13px;padding-left:28px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;text-decoration: none; -webkit-box-shadow: 0px 2px 0px 0px #2ea044; -moz-box-shadow: 0px 2px 0px 0px #2ea044; box-shadow: 0px 2px 0px 0px #2ea044;}.mpsl-layer.mpsl-btn-green:hover{}.mpsl-layer.mpsl-btn-red{background-color:#e75d4a;color:#ffffff;font-size:18px;font-family:Open Sans;text-shadow:0px 1px 0px #c03826;padding-top:12px;padding-right:28px;padding-bottom:13px;padding-left:28px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;text-decoration: none; -webkit-box-shadow: 0px 2px 0px 0px #cd3f2b; -moz-box-shadow: 0px 2px 0px 0px #cd3f2b; box-shadow: 0px 2px 0px 0px #cd3f2b;}.mpsl-layer.mpsl-btn-red:hover{}.mpsl-layer.mpsl-txt-header-dark{color:#000000;font-size:48px;font-family:Open Sans;font-weight:300;letter-spacing: -0.025em;}.mpsl-layer.mpsl-txt-header-dark:hover{}.mpsl-layer.mpsl-txt-header-white{color:#ffffff;font-size:48px;font-family:Open Sans;font-weight:300;letter-spacing: -0.025em;}.mpsl-layer.mpsl-txt-header-white:hover{}.mpsl-layer.mpsl-txt-sub-header-dark{background-color:rgba(0, 0, 0, 0.6);color:#ffffff;font-size:26px;font-family:Open Sans;font-weight:300;padding-top:14px;padding-right:14px;padding-bottom:14px;padding-left:14px;}.mpsl-layer.mpsl-txt-sub-header-dark:hover{}.mpsl-layer.mpsl-txt-sub-header-white{background-color:rgba(255, 255, 255, 0.6);color:#000000;font-size:26px;font-family:Open Sans;font-weight:300;padding-top:14px;padding-right:14px;padding-bottom:14px;padding-left:14px;}.mpsl-layer.mpsl-txt-sub-header-white:hover{}.mpsl-layer.mpsl-txt-dark{color:#000000;font-size:18px;font-family:Open Sans;font-weight:normal;line-height:30px;text-shadow:0px 1px 0px rgba(255, 255, 255, 0.45);}.mpsl-layer.mpsl-txt-dark:hover{}.mpsl-layer.mpsl-txt-white{color:#ffffff;font-size:18px;font-family:Open Sans;font-weight:normal;line-height:30px;text-shadow:0px 1px 0px rgba(0, 0, 0, 0.45);}.mpsl-layer.mpsl-txt-white:hover{}
    </style>
    <link rel='stylesheet' id='mpsl-object-style-css'  href='assets/css/plugins/motopress-slider/css/theme-ver=1.3.4.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mpsl-object-gfonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800&amp;ver=1.3.4' type='text/css' media='all' />

    <script type='text/javascript' src='assets/css/plugins/yith-woocommerce-compare/assets/js/woocompare-ver=2.0.8.js'></script>
    <script type='text/javascript' src='assets/css/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min-ver=1.4.21.js'></script>
    <script type='text/javascript' src='assets/css/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min-ver=3.1.5.js'></script>
    <script type='text/javascript' src='assets/js/hoverIntent.min-ver=1.8.1.js'></script>

    <script type='text/javascript'>
    /* <![CDATA[ */
    var cherry_mega_menu_data = {"duration":"300"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='assets/css/plugins/cherry-mega-menu/public/assets/js/min/script.min-ver=1.0.4.js'></script>
    <script type='text/javascript' src='assets/css/themes/theme57736/assets/js/script-ver=1.0.js'></script>
    <script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js?ver=1.1'></script>
    <script type='text/javascript' src='assets/js/wp-embed.min-ver=4.4.5.js'></script>


    <script type='text/javascript' src='assets/css/plugins/cherry-woocommerce-package/public/assets/js/min/cherry-woocommerce-script.min-ver=1.0.5.js'></script>
<!--    <script type='text/javascript' src='assets/css/plugins/motopress-slider/motoslider_core/scripts/vendor-ver=1.2.3.js'></script>-->
    <script type='text/javascript' src='assets/css/plugins/motopress-slider/motoslider_core/scripts/motoslider-ver=1.2.3.js'></script>

</body>
</html>