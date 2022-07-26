@extends('frontend.layouts.app')
@section('content') 

@push('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

<link rel="stylesheet" type="text/css" href="{{ asset('css/import/main.css') }}"> 
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/import/apps.css') }}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/detailsfe.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main1.css') }}">

<style type="text/css">
    #data-pricetotal{
        width: 194px;
    }

    .modal-body ul li, .content ul li{
           list-style: disc !important;     
    }

    .content  a{
        font-weight: bold;
    }
    .p-gift {
        padding: 10px;
        border: 1px solid #f8810c;
        border-radius: 3px;
        margin-top: 10px;
    }

    .loader {
      height: 5rem;
      width: 5rem;
      border-radius: 50%;
      border: 10px solid orange;
      border-top-color: #002147;
      box-sizing: border-box;
      background: transparent;
      animation: loading 1s linear infinite;
      position: absolute;
        top: 50%;
        left: 45%;
        z-index: 999;
        display: none;
    }

    .fa-angle-left{

        position: absolute;
        top: 50%;
        left: 0;
    }

    .fa-angle-right{
        position: absolute;
        top: 50%;
        right: 0;
    }
    .select-gift{
        display: flex;
    }



    @keyframes loading {
      0% {
        transform: rotate(0deg);
      }
      0% {
        transform: rotate(360deg);
      }
    }

    div.stars {
    width: auto !important;
    }   
    .installment-purchase .but-tra-gop {
        text-decoration: none;
        color: #333;
        font-size: 14px;
        padding: 8px 5px;
        line-height: 18px;
        width: 100%;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
        cursor: pointer;
        background: #ffde00;
    }

    .giohang {
         background: #52a8d9 !important;
    }    

    .modal-body tr{

        height: 50px !important;
    }

    @media screen and (min-width: 576px){
        .modal-dialog {
            max-width: 800px !important;
            
        }
    } 
    @media screen and (max-width: 776px){
            .header__top {
                background-color: #DD2C44;
            }   

             .commitment ul {

                line-height: 28px !important;
                margin-top: 10px;

            }  
             .content img{
                
                height: auto !important;
            }  
        } 

       
        .box01__show{

            min-height: auto !important;
        }

        .breadcrumb{

            text-overflow: ellipsis;
            overflow: visible;
            white-space: nowrap;
        }

        .detail h1{
            padding: 0 15px;
        }



        .installment-purchase .but-1-gop {
            text-decoration: none;
            color: #333;
            font-size: 12px;
            padding: 8px 5px;
            line-height: 18px;
            width: 100% !important;
            border-radius: 5px;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            background: #ffde00;
        }   
        
        @media screen and (min-width: 777px){
            .style-number-fone{
                display: flex;
            }
            .modal-body{
                padding: 0 30px !important;
            }
            #thongso td{
                height: 30px !important;
            }
            .pdetail-installment table{
                width: 430px !important;
                overflow: hidden;
            }
            .pdetail-installment{
                height: 400px;
                width: 430px;
                overflow: hidden;
            }
            .pdetail-installment td{
                padding-left: 5px;
            }
            .Salient_Features td{
                padding: 0 15px;
            }
            .view-all {
                position: absolute;
                width: 440px;
                /*left: 0;*/
                bottom: 0;
                padding: 6px 0;
                font-weight: 300;
                cursor: pointer;
                text-align: center;
                font-size: 14px;
                color: #288ad6;
                background: #fff;
                border: 1px solid #288ad6;
                border-radius: 4px;
                transition: 0.6s ease-out;
            }
            .modal-body table td{
                padding:  0 15px !important;
            }
            .pdetail-installment td{
                height: 30px !important;
            }
            .tbl_time_top thead td {
                font-weight: bold;
            }

            .prod-info .btn-buy{
                width: 100%;
                text-align: center;
            }
            .prod-info{
                display: none;
            }
            .item{
                width: 100%;
                
            }
            .box01 .owl-carousel .owl-item{
                width: 100%;

            }
            .detail h1 {
                padding: 0 15px;
            }
            .box02{
                display: none;
            }

            .content img{
                width: 100% !important;
                height: auto !important;
            }
            .prod-info-left{
                margin-bottom: 20px !important;
            }

            .prod-info .fl{
                margin-bottom: 10px;
            }

            #vote_avg{
                margin: 20px 0;
            }
            .prod-info .txt_20{
                font-size: 20px !important;
            }

            .modal-body .fa-angle-right{
                display: none !important;
            }

            /*.box01 .owl-carousel .owl-item img{
                width: 100% !important;
            }
          */

        } 
</style>

<style type="text/css">
        .commitment {
            border: 1px solid #0083d1;
            padding: 10px;
        }
        .commitment h4 {
            font-weight: bold;
            color: #ff9;
            text-transform: uppercase;
            font-size: 16px;
            margin: 0;
            padding: 10px;
            background-color: #fe0000;
            margin: -10px;
            margin-bottom: 0px;
            text-align: center;
        }
       .commitment ul {
            line-height: 3vmin;
        }
        .commitment .support a {
            color: #fe0000;
            font-size: 16px;
            font-weight: bold;
            display: block;
            line-height: 30px;
        }

        .commitment h5 {
          /*  font-weight: 500;*/
            font-size: 16px;
            text-transform: uppercase;
            margin: 0;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .commitment{
            width: 100%;
        }
        .commitment ul li::before {
            content: "\f00c";
            font-weight: 900;
            font-family: Font Awesome\ 5 Free;
            font-size: 8px;
            margin-right: 5px;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 100%;
            width: 14px;
            height: 14px;
            display: inline-block;
            background-color: #ff3333;
            line-height: 13px;
            text-align: center;
        }
    </style>

    <style type="text/css">
        .commitment {
            border: 1px solid #0083d1;
            padding: 10px;
        }
        .commitment h4 {
            font-weight: bold;
            color: #ff9;
            text-transform: uppercase;
            font-size: 16px;
            margin: 0;
            padding: 10px;
            background-color: #fe0000;
            margin: -10px;
            margin-bottom: 0px;
            text-align: center;
        }
       .commitment ul {
            line-height: 3vmin;
        }
        .commitment .support a {
            color: #fe0000;
            font-size: 16px;
            font-weight: bold;
            display: block;
            line-height: 30px;
        }

        .commitment h5 {
          /*  font-weight: 500;*/
            font-size: 16px;
            text-transform: uppercase;
            margin: 0;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .commitment{
            width: 100%;
        }
        .commitment ul li::before {
            content: "\f00c";
            font-weight: 900;
            font-family: Font Awesome\ 5 Free;
            font-size: 8px;
            margin-right: 5px;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 100%;
            width: 14px;
            height: 14px;
            display: inline-block;
            background-color: #ff3333;
            line-height: 13px;
            text-align: center;
        }
    </style>
@endpush

 <div class="home_index no-home">
    <div class="navigation_main_wrapper" id="top-menu">
        <div class="menu_relative">
            <div class="navigation_main">
                <div class='top_menu'>
                    <div class="dcjq-mega-menu cls">
                        <div class="sb-toggle-left navbar-left">
                            <svg width="15" height="15" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24">
                                <g>
                                    <path d="M24,3c0-0.6-0.4-1-1-1H1C0.4,2,0,2.4,0,3v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V3z"></path>
                                    <path d="M24,11c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V11z"></path>
                                    <path d="M24,19c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V19z"></path>
                                </g>
                            </svg>
                        </div>
                        <ul id = 'megamenu' class="menu mypopup">
                            <li class="level_0 sort home ">
                                <a  class="menu_item_a"  href="https://mutosi.com/" title="Mutosi chăm sóc sức khoẻ gia đình bạn" rel="home" >
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M503.402,228.885L273.684,19.567c-10.083-9.189-25.288-9.188-35.367-0.001L8.598,228.886 c-8.077,7.36-10.745,18.7-6.799,28.889c3.947,10.189,13.557,16.772,24.484,16.772h36.69v209.721 c0,8.315,6.742,15.057,15.057,15.057h125.914c8.315,0,15.057-6.741,15.057-15.057V356.932h74.002v127.337 c0,8.315,6.742,15.057,15.057,15.057h125.908c8.315,0,15.057-6.741,15.057-15.057V274.547h36.697c10.926,0,20.537-6.584,24.484-16.772C514.147,247.585,511.479,236.246,503.402,228.885z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M445.092,42.73H343.973l116.176,105.636v-90.58C460.149,49.471,453.408,42.73,445.092,42.73z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="level_0 sort " id="level_t_890" >
                                <a href="https://mutosi.com/cham-soc-nuoc" id="menu_item_890" class="menu_item_a" title="Chăm sóc nước">
                                    <span class="icon_svg cls">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 382.8 382.8" style="enable-background:new 0 0 382.8 382.8;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <g>
                                                        <path d="M141.4,193.6c12-12,19.6-28.8,19.6-47.6c0-6.8-2-14.4-5.2-22.4c-3.6-8.4-8.4-16.8-14-25.6c0-0.4-0.4-0.4-0.4-0.8
                                                            c-11.6-17.6-26.8-34.8-39.6-49.6l-8-9.2l-8,9.2C61,76.4,26.6,116,26.6,146c0,18.4,7.6,35.2,19.6,47.6c12,12,28.8,19.6,47.6,19.6
                                                            C112.2,213.2,129,205.6,141.4,193.6z"/>
                                                        <path d="M321,2.4L319,0l-2,2.4c-14.8,17.2-35.2,40.8-35.2,57.6c0,10.4,4,19.6,10.8,26.4s16,10.8,26.4,10.8
                                                            c10.4,0,19.6-4,26.4-10.8c6.8-6.8,10.8-16,10.8-26.4C356.2,43.2,335.8,19.6,321,2.4z"/>
                                                        <path d="M192.6,58c-6,7.2-12.8,14.8-19.6,23.2l-10.4,12c4.8,7.6,8.8,15.2,12,22.8c4.4,10.4,6.8,20.4,6.8,30c0,24-9.6,46-25.6,62
                                                            s-37.6,25.6-62,25.6c-5.6,0-10.8-0.4-16-1.6c-2-0.4-3.6-0.8-5.6-1.2c-0.8,3.2-1.6,6.4-2.4,9.6c-1.2,6-2,11.6-2,17.6
                                                            c0,34.4,14,65.6,36.4,88.4c22.8,22.8,54,36.4,88.4,36.4c34.4,0,65.6-14,88.4-36.4c22.8-22.4,36.4-54,36.4-88.4
                                                            c0-54.8-61.2-125.2-105.2-176.4C205.4,72.8,199,65.2,192.6,58z"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Chăm sóc nước               
                                </a>
                                <!--    LEVEL 1         -->
                                <span class="drop_down">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="255px" height="255px" viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                                        <g>
                                            <g id="varrow-drop-down-890">
                                                <polygon points="0,63.75 127.5,191.25 255,63.75         "/>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <div class='highlight'>
                                    <div class='highlight1 container'>
                                        <div class="menu-child_list">
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-loc-nuoc" class="level_0 sort sub-menu-item" data-menu_tags="44" id="menu3_item_44" title="Máy lọc nước"  >
                                                Máy lọc nước                                        </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/cay-nuoc-nong-lanh" class="level_0 sort sub-menu-item" data-menu_tags="41" id="menu3_item_41" title="Cây nước nóng lạnh"  >
                                                Cây nước nóng lạnh                                      </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/linh-kien-loc-nuoc" class="level_0 sort sub-menu-item" data-menu_tags="51" id="menu3_item_51" title="Linh kiện lọc nước"  >
                                                Linh kiện lọc nước                                      </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-loc-nuoc-ban-cong-nghiep" class="level_0 sort sub-menu-item" data-menu_tags="57" id="menu3_item_57" title="Máy lọc nước Bán công nghiệp"  >
                                                Máy lọc nước Bán công nghiệp                                        </a>
                                            </div>
                                        </div>
                                        <div class="wraper_item " data-menu_tags="44" data-menu_idt="0">
                                            <div class="image_sub image_sub_0">
                                                <a href="https://mutosi.com/may-loc-nuoc" title="Máy lọc nước">
                                                <img  class="lazy" alt="Máy lọc nước" data-src="https://mutosi.com/images/products/cat/resized/0b13d9f646b48bead2a5_1641459302.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/0b13d9f646b48bead2a5_1641459302.jpg.webp">                                      </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-loc-nuoc-nong-lanh-nguoi-9-loi-mp-692hc-bk/" title = "Máy lọc nước Nóng Lạnh Nguội 9 lõi MP-692HC-BK" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/03/15/small/692_bk-1_1647339825.png" alt="Máy lọc nước Nóng Lạnh Nguội 9 lõi MP-692HC-BK"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy lọc nước Nóng Lạnh Nguội 9 lõi MP-692HC-BK                                                            </div>
                                                                <span class="price"> 11.130.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-loc-nuoc-thong-minh-truesmart-mp-ts100/" title = "Máy lọc nước thông minh TrueSMART MP-TS100" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/03/14/small/mp-ts100-thang-1_1647249010.png" alt="Máy lọc nước thông minh TrueSMART MP-TS100"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy lọc nước thông minh TrueSMART MP-TS100                                                            </div>
                                                                <span class="price"> 9.590.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="41" data-menu_idt="1">
                                            <div class="image_sub image_sub_1">
                                                <a href="https://mutosi.com/cay-nuoc-nong-lanh" title="Cây nước nóng lạnh">
                                                <img  class="lazy" alt="Cây nước nóng lạnh" data-src="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-07_1611801906.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-07_1611801906.jpg.webp">                                      </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/cay-nuoc-nong-lanh-mutosi-md-200bk/" title = "Cây nước nóng lạnh Mutosi MD-200BK" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/03/14/small/200-714x714_1647242308.png" alt="Cây nước nóng lạnh Mutosi MD-200BK"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Cây nước nóng lạnh Mutosi MD-200BK                                                            </div>
                                                                <span class="price"> 3.890.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/cay-nuoc-nong-lanh-mutosi-md-200/" title = "Cây nước nóng lạnh Mutosi MD-200" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2020/06/05/small/md-200-dd_1591349646.png" alt="Cây nước nóng lạnh Mutosi MD-200"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Cây nước nóng lạnh Mutosi MD-200                                                          </div>
                                                                <span class="price"> 3.890.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="51" data-menu_idt="2">
                                            <div class="image_sub image_sub_2">
                                                <a href="https://mutosi.com/linh-kien-loc-nuoc" title="Linh kiện lọc nước">
                                                <img  class="lazy" alt="Linh kiện lọc nước" data-src="https://mutosi.com/images/products/cat/resized/526x330px-linh-kien-loi-loc_1606205987.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/526x330px-linh-kien-loi-loc_1606205987.jpg.webp">                                      </a>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="57" data-menu_idt="3">
                                            <div class="image_sub image_sub_3">
                                                <a href="https://mutosi.com/may-loc-nuoc-ban-cong-nghiep" title="Máy lọc nước Bán công nghiệp">
                                                <img  class="lazy" alt="Máy lọc nước Bán công nghiệp" data-src="https://mutosi.com/images/products/cat/resized/21---may-ban-cong-nghiep_1595382661.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/21---may-ban-cong-nghiep_1595382661.jpg.webp">                                      </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-loc-nuoc-ban-cong-nghiep-mutosi-50lh/" title = "Máy lọc nước bán công nghiệp Mutosi 50L/H" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/02/02/small/may-loc-nuoc-ban-cong-nghiep-mutosi-mb50l_1612255004.png" alt="Máy lọc nước bán công nghiệp Mutosi 50L/H"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy lọc nước bán công nghiệp Mutosi 50L/H                                                         </div>
                                                                <span class="price"> 13.110.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-loc-nuoc-ban-cong-nghiep-mutosi-80lh/" title = "Máy lọc nước bán công nghiệp Mutosi 80L/H" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/01/25/small/may-loc-nuoc-ban-cong-nghiep-mutosi-mb80l_1611556445.png" alt="Máy lọc nước bán công nghiệp Mutosi 80L/H"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy lọc nước bán công nghiệp Mutosi 80L/H                                                         </div>
                                                                <span class="price"> 14.810.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='menu_desc'></div>
                                </div>
                                <!--    end LEVEL 1         -->
                            </li>
                            <li class="level_0 sort " id="level_t_895" >
                                <a href="https://mutosi.com/cham-soc-bep" id="menu_item_895" class="menu_item_a" title="Chăm sóc bếp">
                                    <span class="icon_svg cls">
                                        <svg  height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m272 296a8.008 8.008 0 0 0 -8-8h-48a8.008 8.008 0 0 0 -8 8v8h64z"/>
                                            <path d="m216 336h48a8.008 8.008 0 0 0 8-8v-8h-64v8a8.008 8.008 0 0 0 8 8z"/>
                                            <path d="m184 368h144a8.008 8.008 0 0 0 8-8v-96a8.008 8.008 0 0 0 -8-8h-144a8.008 8.008 0 0 0 -8 8v96a8.008 8.008 0 0 0 8 8zm128-80a8 8 0 1 1 -8 8 8 8 0 0 1 8-8zm0 32a8 8 0 1 1 -8 8 8 8 0 0 1 8-8zm-120-24a24.027 24.027 0 0 1 24-24h48a24.027 24.027 0 0 1 24 24v32a24.027 24.027 0 0 1 -24 24h-48a24.027 24.027 0 0 1 -24-24z"/>
                                            <path d="m32 168v40h16v-40a90.633 90.633 0 0 1 3.176-23.512 24.039 24.039 0 0 0 -19.176 23.512z"/>
                                            <path d="m272 112h-32a8.008 8.008 0 0 0 -8 8v8h48v-8a8.008 8.008 0 0 0 -8-8z"/>
                                            <path d="m256 48c-101.566 0-184.965 49.547-191.578 112h383.156c-6.613-62.453-90.012-112-191.578-112zm128 96h-256a8 8 0 0 1 -8-8c0-40.375 59.738-72 136-72s136 31.625 136 72a8 8 0 0 1 -8 8z"/>
                                            <path d="m64 424a40.047 40.047 0 0 0 40 40h304a40.047 40.047 0 0 0 40-40v-8h-384z"/>
                                            <path d="m64 400h384v-224h-384zm96-136a24.027 24.027 0 0 1 24-24h144a24.027 24.027 0 0 1 24 24v96a24.027 24.027 0 0 1 -24 24h-144a24.027 24.027 0 0 1 -24-24z"/>
                                            <path d="m460.824 144.488a90.633 90.633 0 0 1 3.176 23.512v40h16v-40a24.039 24.039 0 0 0 -19.176-23.512z"/>
                                        </svg>
                                    </span>
                                    Chăm sóc bếp                
                                </a>
                                <!--    LEVEL 1         -->
                                <span class="drop_down">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="255px" height="255px" viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                                        <g>
                                            <g id="varrow-drop-down-895">
                                                <polygon points="0,63.75 127.5,191.25 255,63.75         "/>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <div class='highlight'>
                                    <div class='highlight1 container'>
                                        <div class="menu-child_list">
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/bep-tu" class="level_0 sort sub-menu-item" data-menu_tags="15" id="menu3_item_15" title="Bếp từ"  >
                                                Bếp từ                                      </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/bep-ga" class="level_0 sort sub-menu-item" data-menu_tags="59" id="menu3_item_59" title="Bếp Ga"  >
                                                Bếp Ga                                      </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/bo-noi-chao" class="level_0 sort sub-menu-item" data-menu_tags="60" id="menu3_item_60" title="Bộ nồi chảo"  >
                                                Bộ nồi chảo                                     </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-hut-mui" class="level_0 sort sub-menu-item" data-menu_tags="61" id="menu3_item_61" title="Máy hút mùi"  >
                                                Máy hút mùi                                     </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/noi-ap-suat" class="level_0 sort sub-menu-item" data-menu_tags="39" id="menu3_item_39" title="Nồi áp suất"  >
                                                Nồi áp suất                                     </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/noi-com-dien" class="level_0 sort sub-menu-item" data-menu_tags="36" id="menu3_item_36" title="Nồi cơm điện"  >
                                                Nồi cơm điện                                        </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-ep-cham" class="level_0 sort sub-menu-item" data-menu_tags="40" id="menu3_item_40" title="Máy ép chậm"  >
                                                Máy ép chậm                                     </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/am-dun-sieu-toc" class="level_0 sort sub-menu-item" data-menu_tags="42" id="menu3_item_42" title="Ấm đun siêu tốc"  >
                                                Ấm đun siêu tốc                                     </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/noi-chien-khong-dau" class="level_0 sort sub-menu-item" data-menu_tags="4" id="menu3_item_4" title="Nồi chiên không dầu"  >
                                                Nồi chiên không dầu                                     </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-xay" class="level_0 sort sub-menu-item" data-menu_tags="64" id="menu3_item_64" title="Máy xay"  >
                                                Máy xay                                     </a>
                                            </div>
                                        </div>
                                        <div class="wraper_item " data-menu_tags="15" data-menu_idt="0">
                                            <div class="image_sub image_sub_0">
                                                <a href="https://mutosi.com/bep-tu" title="Bếp từ">
                                                <img  class="lazy" alt="Bếp từ" data-src="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-02_1611801857.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-02_1611801857.jpg.webp">                                      </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/bep-tu-doi-mutosi-mi-92d/" title = "Bếp từ đôi MUTOSI MI-92D" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/08/20/small/bep-tu-mutosi-mi92d_1629459859.png" alt="Bếp từ đôi MUTOSI MI-92D"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Bếp từ đôi MUTOSI MI-92D                                                          </div>
                                                                <span class="price"> 9.990.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/bep-tu-doi-mutosi-mi-95d/" title = "Bếp từ đôi MUTOSI MI-95D" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/14/small/md95_1620973853.png" alt="Bếp từ đôi MUTOSI MI-95D"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Bếp từ đôi MUTOSI MI-95D                                                          </div>
                                                                <span class="price"> 10.690.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="59" data-menu_idt="1">
                                            <div class="image_sub image_sub_1">
                                                <a href="https://mutosi.com/bep-ga" title="Bếp Ga">
                                                <img  class="lazy" alt="Bếp Ga" data-src="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-03_1611801555.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-03_1611801555.jpg.webp">                                      </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/bep-ga-am-co-mutosi-mg-56c/" title = "Bếp ga âm cơ Mutosi MG-56C" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/07/14/small/bep-ga-am-mutosi-2_1620902870_1626233549.png" alt="Bếp ga âm cơ Mutosi MG-56C"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Bếp ga âm cơ Mutosi MG-56C                                                            </div>
                                                                <span class="price"> 2.380.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/bep-ga-duong-mutosi-mg-38b/" title = "Bếp ga dương Mutosi MG-38B" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2020/12/02/small/untitled-17_1606899925.png" alt="Bếp ga dương Mutosi MG-38B"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Bếp ga dương Mutosi MG-38B                                                            </div>
                                                                <span class="price"> 1.970.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="60" data-menu_idt="2">
                                            <div class="image_sub image_sub_2">
                                                <a href="https://mutosi.com/bo-noi-chao" title="Bộ nồi chảo">
                                                <img  class="lazy" alt="Bộ nồi chảo" data-src="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-04_1611801801.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-04_1611801801.jpg.webp">                                     </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/bo-noi-chao-inox-mutosi-mc-347/" title = "Bộ nồi chảo Inox Mutosi MC-347" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2020/12/02/small/bo-noi-chao-inox-mutosi_1606899862.png" alt="Bộ nồi chảo Inox Mutosi MC-347"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Bộ nồi chảo Inox Mutosi MC-347                                                            </div>
                                                                <span class="price"> 1.950.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="61" data-menu_idt="3">
                                            <div class="image_sub image_sub_3">
                                                <a href="https://mutosi.com/may-hut-mui" title="Máy hút mùi">
                                                <img  class="lazy" alt="Máy hút mùi" data-src="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-01_1611801507.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/banner-trang-con-bo-sung-01_1611801507.jpg.webp">                                     </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-hut-mui-kinh-cong-cam-ung-mutosi-mh-73t-70c/" title = "Máy Hút Mùi Kính Cong Cảm Ứng Mutosi MH-73T-70C" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/20/small/27_1621494074.png" alt="Máy Hút Mùi Kính Cong Cảm Ứng Mutosi MH-73T-70C"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy Hút Mùi Kính Cong Cảm Ứng Mutosi MH-73T-70C                                                           </div>
                                                                <span class="price"> 5.990.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-hut-mui-kinh-cong-mutosi-mh-33b-70c/" title = "Máy Hút Mùi Kính Cong Mutosi MH-33B-70C" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/20/small/26_1621493977.png" alt="Máy Hút Mùi Kính Cong Mutosi MH-33B-70C"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy Hút Mùi Kính Cong Mutosi MH-33B-70C                                                           </div>
                                                                <span class="price"> 4.380.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="39" data-menu_idt="4">
                                            <div class="image_sub image_sub_4">
                                                <a href="https://mutosi.com/noi-ap-suat" title="Nồi áp suất">
                                                <img  class="lazy" alt="Nồi áp suất" data-src="https://mutosi.com/images/products/cat/resized/z2487934527257_7e7f90a9494c6c6e609b208ba1cb93c8_1620974228.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/z2487934527257_7e7f90a9494c6c6e609b208ba1cb93c8_1620974228.jpg.webp">                                     </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/noi-ap-suat-dien-mutosi-mip-59/" title = "Nồi áp suất điện Mutosi MIP-59" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/03/17/small/noi-ap-suat-mutosi-mip59_1615955891.png" alt="Nồi áp suất điện Mutosi MIP-59"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Nồi áp suất điện Mutosi MIP-59                                                            </div>
                                                                <span class="price"> 1.490.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="36" data-menu_idt="5">
                                            <div class="image_sub image_sub_5">
                                                <a href="https://mutosi.com/noi-com-dien" title="Nồi cơm điện">
                                                <img  class="lazy" alt="Nồi cơm điện" data-src="https://mutosi.com/images/products/cat/resized/4_1620893062.png" data-srcset="https://mutosi.com/images/products/cat/resized/4_1620893062.png.webp">                                        </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/noi-com-dien-mutosi-mr-36pb-mau-vang-dong/" title = "Nồi cơm điện Mutosi MR-36PB (Màu vàng đồng)" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/03/28/small/mr-36--bo-icon_1648458154.png" alt="Nồi cơm điện Mutosi MR-36PB (Màu vàng đồng)"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Nồi cơm điện Mutosi MR-36PB (Màu vàng đồng)                                                           </div>
                                                                <span class="price"> 1.020.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/noi-com-dien-mutosi-mr-12-do/" title = "Nồi cơm điện Mutosi MR-12 (Đỏ) - SP Ngừng Kinh doanh" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/03/28/small/mr-12-do_1648458316.png" alt="Nồi cơm điện Mutosi MR-12 (Đỏ) - SP Ngừng Kinh doanh"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Nồi cơm điện Mutosi MR-12 (Đỏ) - SP Ngừng Kinh doanh                                                          </div>
                                                                <span class="price"> 850.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="40" data-menu_idt="6">
                                            <div class="image_sub image_sub_6">
                                                <a href="https://mutosi.com/may-ep-cham" title="Máy ép chậm">
                                                <img  class="lazy" alt="Máy ép chậm" data-src="https://mutosi.com/images/products/cat/resized/mj-86r-2_1645522333.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/mj-86r-2_1645522333.jpg.webp">                                       </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-ep-cham-mutosi-mj-83/" title = "Máy ép chậm Mutosi MJ-83" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/20/small/8_1621494783.png" alt="Máy ép chậm Mutosi MJ-83"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy ép chậm Mutosi MJ-83                                                          </div>
                                                                <span class="price"> 2.250.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-ep-cham-mutosi-mj-86r/" title = "Máy ép chậm Mutosi MJ-86R" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/09/23/small/mj-86r-714x714_1632372893.png" alt="Máy ép chậm Mutosi MJ-86R"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy ép chậm Mutosi MJ-86R                                                         </div>
                                                                <span class="price"> 3.000.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="42" data-menu_idt="7">
                                            <div class="image_sub image_sub_7">
                                                <a href="https://mutosi.com/am-dun-sieu-toc" title="Ấm đun siêu tốc">
                                                <img  class="lazy" alt="Ấm đun siêu tốc" data-src="https://mutosi.com/images/products/cat/resized/3_1595242469.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/3_1595242469.jpg.webp">                                     </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/am-dun-sieu-toc-mutosi-mk-18-hong/" title = "Ấm đun siêu tốc Mutosi MK-18 (Hồng)" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/20/small/13_1621494914.png" alt="Ấm đun siêu tốc Mutosi MK-18 (Hồng)"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Ấm đun siêu tốc Mutosi MK-18 (Hồng)                                                           </div>
                                                                <span class="price"> 560.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/am-dun-sieu-toc-mutosi-mk-18-xanh/" title = "Ấm đun siêu tốc Mutosi MK-18 (Xanh)" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/20/small/14_1621494397.png" alt="Ấm đun siêu tốc Mutosi MK-18 (Xanh)"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Ấm đun siêu tốc Mutosi MK-18 (Xanh)                                                           </div>
                                                                <span class="price"> 560.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="4" data-menu_idt="8">
                                            <div class="image_sub image_sub_8">
                                                <a href="https://mutosi.com/noi-chien-khong-dau" title="Nồi chiên không dầu">
                                                <img  class="lazy" alt="Nồi chiên không dầu" data-src="https://mutosi.com/images/products/cat/resized/mf99d-550x330-01_1645523030.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/mf99d-550x330-01_1645523030.jpg.webp">                                       </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/noi-chien-khong-dau-mf88-den/" title = "Nồi chiên không dầu Mutosi MF-88 (Đen) Tạm thời hết hàng" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/20/small/2_1621495769.png" alt="Nồi chiên không dầu Mutosi MF-88 (Đen) Tạm thời hết hàng"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Nồi chiên không dầu Mutosi MF-88 (Đen) Tạm thời hết hàng                                                          </div>
                                                                <span class="price"> 2.290.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/noi-chien-khong-dau-mf88-xanh/" title = "Nồi chiên không dầu Mutosi MF-88 (Xanh) Tạm thời hết hàng" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/05/20/small/3_1621495819.png" alt="Nồi chiên không dầu Mutosi MF-88 (Xanh) Tạm thời hết hàng"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Nồi chiên không dầu Mutosi MF-88 (Xanh) Tạm thời hết hàng                                                         </div>
                                                                <span class="price"> 2.290.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="64" data-menu_idt="9">
                                            <div class="image_sub image_sub_9">
                                                <a href="https://mutosi.com/may-xay" title="Máy xay">
                                                <img data-src="https://mutosi.com/images/config/ho-tro-khach-hang.jpg" class="lazy grayscale" alt="Máy xay" />
                                                </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-xay-thit-da-nang-mutosi-mb-g523/" title = "Máy xay thịt đa năng Mutosi MB-G523" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/05/22/small/1_1653226893.png" alt="Máy xay thịt đa năng Mutosi MB-G523"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy xay thịt đa năng Mutosi MB-G523                                                           </div>
                                                                <span class="price"> 990.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-xay-thit-da-nang-mutosi-mb-g522/" title = "Máy xay thịt đa năng Mutosi MB-G522" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/05/21/small/1_1653131580.png" alt="Máy xay thịt đa năng Mutosi MB-G522"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy xay thịt đa năng Mutosi MB-G522                                                           </div>
                                                                <span class="price"> 950.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='menu_desc'></div>
                                </div>
                                <!--    end LEVEL 1         -->
                            </li>
                            <li class="level_0 sort activated  " id="level_t_897" >
                                <a href="https://mutosi.com/cham-soc-khi" id="menu_item_897" class="menu_item_a" title="Chăm sóc khí">
                                    <span class="icon_svg cls">
                                        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M436.03,42.773c-41.886,0-75.964,34.078-75.964,75.97c0,10.578,8.574,19.152,19.152,19.152s19.152-8.574,19.152-19.152 c0-20.774,16.892-37.666,37.659-37.666c20.774,0,37.666,16.892,37.666,37.666s-16.892,37.666-37.666,37.666H19.152 C8.574,156.409,0,164.983,0,175.561s8.574,19.152,19.152,19.152H436.03c41.886,0,75.97-34.078,75.97-75.97 S477.916,42.773,436.03,42.773z"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M485.187,237.486H19.152C8.574,237.486,0,246.06,0,256.638s8.574,19.152,19.152,19.152h466.035 c10.578,0,19.152-8.574,19.152-19.152S495.765,237.486,485.187,237.486z"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M436.03,317.293H19.152C8.574,317.293,0,325.867,0,336.445s8.574,19.152,19.152,19.152H436.03 c20.774,0,37.666,16.892,37.666,37.666c0,20.767-16.892,37.659-37.666,37.659c-20.767,0-37.659-16.892-37.659-37.659 c0-10.578-8.574-19.152-19.152-19.152s-19.152,8.574-19.152,19.152c0,41.886,34.072,75.964,75.964,75.964 c41.886,0,75.97-34.078,75.97-75.964C512,351.378,477.922,317.293,436.03,317.293z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Chăm sóc khí                
                                </a>
                                <!--    LEVEL 1         -->
                                <span class="drop_down">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="255px" height="255px" viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                                        <g>
                                            <g id="varrow-drop-down-897">
                                                <polygon points="0,63.75 127.5,191.25 255,63.75         "/>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <div class='highlight'>
                                    <div class='highlight1 container'>
                                        <div class="menu-child_list">
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-suoi" class="level_0 sort activated  sub-menu-item" data-menu_tags="62" id="menu3_item_62" title="Máy sưởi"  >
                                                Máy sưởi                                        </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-loc-khong-khi" class="level_0 sort activated  sub-menu-item" data-menu_tags="49" id="menu3_item_49" title="Máy lọc không khí"  >
                                                Máy lọc không khí                                       </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-hut-bui" class="level_0 sort activated  sub-menu-item" data-menu_tags="63" id="menu3_item_63" title="Máy hút bụi"  >
                                                Máy hút bụi                                     </a>
                                            </div>
                                        </div>
                                        <div class="wraper_item " data-menu_tags="62" data-menu_idt="0">
                                            <div class="image_sub image_sub_0">
                                                <a href="https://mutosi.com/may-suoi" title="Máy sưởi">
                                                <img  class="lazy" alt="Máy sưởi" data-src="https://mutosi.com/images/products/cat/resized/mch-2200l-550x330-01_1645522277.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/mch-2200l-550x330-01_1645522277.jpg.webp">                                      </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/quat-suoi-gom-mutosi-mch-2000l/" title = "Quạt sưởi gốm Ceramic Mutosi MCH-2000L" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/01/22/small/10_1642842529.png" alt="Quạt sưởi gốm Ceramic Mutosi MCH-2000L"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Quạt sưởi gốm Ceramic Mutosi MCH-2000L                                                            </div>
                                                                <span class="price"> 3.390.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/quat-suoi-gom-mutosi-mch-2200/" title = "Quạt sưởi gốm Ceramic Mutosi MCH-2200" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/01/22/small/6_1642842558.png" alt="Quạt sưởi gốm Ceramic Mutosi MCH-2200"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Quạt sưởi gốm Ceramic Mutosi MCH-2200                                                         </div>
                                                                <span class="price"> 2.390.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="49" data-menu_idt="1">
                                            <div class="image_sub image_sub_1">
                                                <a href="https://mutosi.com/may-loc-khong-khi" title="Máy lọc không khí">
                                                <img  class="lazy" alt="Máy lọc không khí" data-src="https://mutosi.com/images/products/cat/resized/0110-banner-trang-chu-bo-sung-4_1633077507.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/0110-banner-trang-chu-bo-sung-4_1633077507.jpg.webp">                                       </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-loc-khong-khi-mutosi-map-801h-uv/" title = "Máy lọc không khí Mutosi MAP-801H-UV" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2020/06/04/small/map-801_1591260525.png" alt="Máy lọc không khí Mutosi MAP-801H-UV"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy lọc không khí Mutosi MAP-801H-UV                                                          </div>
                                                                <span class="price"> 9.030.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-loc-khong-khi-o-to-mutosi-map-301c/" title = "Máy lọc không khí Ôtô Mutosi MAP-301C" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2020/06/05/small/map-301_1591346776.png" alt="Máy lọc không khí Ôtô Mutosi MAP-301C"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy lọc không khí Ôtô Mutosi MAP-301C                                                         </div>
                                                                <span class="price"> 980.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wraper_item hide" data-menu_tags="63" data-menu_idt="2">
                                            <div class="image_sub image_sub_2">
                                                <a href="https://mutosi.com/may-hut-bui" title="Máy hút bụi">
                                                <img data-src="https://mutosi.com/images/config/ho-tro-khach-hang.jpg" class="lazy grayscale" alt="Máy hút bụi" />
                                                </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/may-hut-bui-cam-tay-mv-h3400/" title = "Máy hút bụi cầm tay Mutosi MV-H3400" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2022/03/19/small/z3272733099428_c0afdc036304eb0e17f0f7ea6e4f6a6d-removebg_1647675977.png" alt="Máy hút bụi cầm tay Mutosi MV-H3400"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Máy hút bụi cầm tay Mutosi MV-H3400                                                           </div>
                                                                <span class="price"> 1.450.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='menu_desc'></div>
                                </div>
                                <!--    end LEVEL 1         -->
                            </li>
                            <li class="level_0 sort " id="level_t_898" >
                                <a href="https://mutosi.com/cham-soc-moi-truong" id="menu_item_898" class="menu_item_a" title="Chăm sóc môi trường">
                                    <span class="icon_svg cls">
                                        <svg height="50" viewBox="0 -105 512.001 512" width="50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m192.765625 301.484375c-5.1875 0-10.226563-2.691406-13.003906-7.5l-18.5-32.042969c-4.144531-7.175781-1.6875-16.351562 5.488281-20.492187s16.347656-1.683594 20.488281 5.492187l18.5 32.042969c4.144531 7.171875 1.6875 16.347656-5.488281 20.488281-2.363281 1.363282-4.941406 2.011719-7.484375 2.011719zm0 0"/>
                                            <path d="m265.265625 301.484375c-5.1875 0-10.226563-2.691406-13.003906-7.5l-18.5-32.042969c-4.144531-7.175781-1.6875-16.351562 5.488281-20.492187s16.347656-1.683594 20.488281 5.492187l18.5 32.042969c4.144531 7.171875 1.6875 16.347656-5.488281 20.488281-2.363281 1.363282-4.941406 2.011719-7.484375 2.011719zm0 0"/>
                                            <path d="m337.765625 301.484375c-5.1875 0-10.226563-2.691406-13.003906-7.5l-18.5-32.042969c-4.144531-7.175781-1.6875-16.351562 5.488281-20.492187s16.347656-1.683594 20.488281 5.492187l18.5 32.042969c4.144531 7.171875 1.6875 16.347656-5.488281 20.488281-2.363281 1.363282-4.941406 2.011719-7.484375 2.011719zm0 0"/>
                                            <path d="m102.96875 182.742188-4.851562 32.746093h315.765624l-4.851562-32.746093zm0 0"/>
                                            <path d="m468.863281 0h-425.726562c-23.785157 0-43.136719 19.351562-43.136719 43.132812v129.21875c0 23.785157 19.351562 43.136719 43.136719 43.136719h24.65625l.316406-2.144531.84375-5.6875 2.695313-18.210938 3.539062-23.902343c1.089844-7.351563 7.402344-12.800781 14.839844-12.800781h331.949218c7.433594 0 13.746094 5.445312 14.835938 12.800781l3.539062 23.902343 2.699219 18.210938.839844 5.6875.320313 2.144531h24.65625c23.78125 0 43.132812-19.351562 43.132812-43.136719v-129.21875c0-23.78125-19.351562-43.132812-43.136719-43.132812zm-57.152343 127.992188c-8.902344 0-16.148438-7.246094-16.148438-16.148438s7.246094-16.148438 16.148438-16.148438c8.902343 0 16.148437 7.246094 16.148437 16.148438s-7.246094 16.148438-16.148437 16.148438zm0-42c-8.902344 0-16.148438-7.246094-16.148438-16.148438s7.246094-16.148438 16.148438-16.148438c8.902343 0 16.148437 7.246094 16.148437 16.148438s-7.246094 16.148438-16.148437 16.148438zm0 0"/>
                                        </svg>
                                    </span>
                                    Chăm sóc môi trường             
                                </a>
                                <!--    LEVEL 1         -->
                                <span class="drop_down">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="255px" height="255px" viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                                        <g>
                                            <g id="varrow-drop-down-898">
                                                <polygon points="0,63.75 127.5,191.25 255,63.75         "/>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <div class='highlight'>
                                    <div class='highlight1 container'>
                                        <div class="menu-child_list">
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/he-thong-xu-ly-nuoc-cap" class="level_0 sort sub-menu-item" data-menu_tags="54" id="menu3_item_54" title="Hệ thống xử lý nước cấp"  >
                                                Hệ thống xử lý nước cấp                                     </a>
                                            </div>
                                        </div>
                                        <div class="wraper_item " data-menu_tags="54" data-menu_idt="0">
                                            <div class="image_sub image_sub_0">
                                                <a href="https://mutosi.com/he-thong-xu-ly-nuoc-cap" title="Hệ thống xử lý nước cấp">
                                                <img  class="lazy" alt="Hệ thống xử lý nước cấp" data-src="https://mutosi.com/images/products/cat/resized/0110-banner-trang-chu-bo-sung-5_1633077479.jpg" data-srcset="https://mutosi.com/images/products/cat/resized/0110-banner-trang-chu-bo-sung-5_1633077479.jpg.webp">                                     </a>
                                            </div>
                                            <div class="product_item">
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/he-thong-loc-nuoc-tinh-khiet-ro-cong-nghiep/" title = "Hệ thống lọc nước tinh khiết RO Công nghiệp" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2020/06/10/small/ro-cong-nghiep_1591765099.png" alt="Hệ thống lọc nước tinh khiết RO Công nghiệp"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Hệ thống lọc nước tinh khiết RO Công nghiệp                                                           </div>
                                                                <span class="price"> Contact</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item cls">
                                                    <a href="https://mutosi.com/he-thong-xu-ly-nguon-nuoc-nhiem-kim-loai-nang-tap-chat-huu-co-va-da-voi-mt075-3/" title = "Hệ thống xử lý Nguồn nước nhiễm Kim loại nặng, tạp chất hữu cơ và đá vôi MT075-3" >
                                                        <div class="frame_img_cat ">
                                                            <img  class="lazy" data-src="https://mutosi.com/images/products/2021/12/29/small/mt075-3_1640771967.png" alt="Hệ thống xử lý Nguồn nước nhiễm Kim loại nặng, tạp chất hữu cơ và đá vôi MT075-3"  />
                                                        </div>
                                                        <div class="frame_view">
                                                            <div class="item-info">
                                                                <div class="name">Hệ thống xử lý Nguồn nước nhiễm Kim loại nặng, tạp chất hữu cơ và đá vôi MT075-3                                                          </div>
                                                                <span class="price"> 18.890.000₫</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='menu_desc'></div>
                                </div>
                                <!--    end LEVEL 1         -->
                            </li>
                            <!--    CHILDREN                -->
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class='clear'></div>
            </div>
        </div>
    </div>
    <div class="modal-menu-full-screen"></div>
    <div class='breadcrumbs container cls'>
        <div class='breadcrumbs_wrapper' itemscope itemtype="http://schema.org/WebPage">
            <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <a title='Mutosi chăm sóc sức khoẻ gia đình bạn' href="https://mutosi.com/" itemprop="item" >
                        <span itemprop="name">Trang chủ</span>
                        <meta content="1" itemprop="position">
                    </a>
                </li>
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <a title='Chăm sóc khí' href="https://mutosi.com/cham-soc-khi" itemprop="item" >
                        <span itemprop="name">Chăm sóc khí</span>
                        <meta content="2" itemprop="position">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clear"> </div>
    <!-- Content -->

    <section data-id="235791" data-cate-id="1942" class="detail ">
        <ul class="breadcrumb">
            
            <li>
                <a href="{{route('homeFe')}}">Trang chủ</a>
                <meta property="position" content="1">
            </li>
            @if(!empty($groupLink))
            <li>
                <span>›</span>
                <a href="{{ route('details', $groupLink??'') }}">{{ @$groupName }}</a>
                <meta property="position" content="2">
            </li>
            @endif
            <!-- <li>
                <span>›</span>
                <a href="/tivi?g=smart-tivi">Smart Tivi</a>
                <meta property="position" content="3">
                </li> -->
            <li>
                <span>›</span>
                <a href="{{ route('details',$data->Link) }}">{{ $data->Name }}</a>
                <meta property="position" content="4">
            </li>
        </ul>
        <h1>{{ $data->Name }}</h1>
        <div class="box02">
            <div class="box02__left">
                <div class="detail-rate">
                    <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="box_main">
            <div class="box_left">
                <div class="box01">
                    <div class="box01__show">
                        <div class="owl-carousel detail-slider" id="carousel">

                            <div class="item">
                                <a href="{{ asset($data->Image) }}" data-fancybox="gallery"><img src="{{ asset($data->Image) }}" alt="{{ @$data->Name }}"></a>
                            </div>


                            @isset($images)
                            @foreach($images as $image)

                            @if(trim($image->image) != trim($data->Image))
                            <div class="item">
                                <a href="{{ asset($image->image) }}" data-fancybox="gallery"><img src="{{ asset($image->image) }}"  data-src="{{ asset($image->image) }}" class="lazyload" alt="{{ @$data->Name }}"></a>
                                
                            </div>
                            @endif
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>


                <div class="pay mobile">
                    <div class="col-12 pdetail-des">
                        <div class="clearfix"></div>
                        <div>
                            <div class="pdetail-info">
                                <p>Model: <b>{{ @$data->ProductSku  }}</b></p>
                                <!-- <p>Bảo hành: <b>24 Tháng, 1 đổi 1 trong vòng 1 tháng</b></p> -->
                            </div>
                            <div class="scroll-box">
                                <div class="boxbanner-32">
                                    <div class="banner-list">
                                        <div class="item banner-item banner-item-1">
                                            <a target="&quot;_blank&quot;" href="#" data-id="1022">
                                                <!-- <picture>
                                                    <img src="https://thegioidohoacom.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/01/10040348/X4iNCOp-1024x454.jpg" alt="Tết Lớn Khuyến Mại Lớn" width="&quot;640&quot;" height="&quot;150&quot;">
                                                </picture> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pdetail-price">
                                    <div class="pdetail-price-box">
                                        {!! @$text !!}
                                        <h3> {{ str_replace(',' ,'.', number_format($data->Price)) }}₫ </h3>
                                    </div>

                                    
                                    
                                </div>
                                <div class="pdetail-status">
                                    <div class="pdetail-stockavailable">
                                        <?php
                                            if($data->Quantily==0||$data['Price']==0){
                                                $status ='Tạm hết hàng';
                                            
                                            }
                                            elseif($data->Quantily<=-1){
                                                $status ='Ngừng kinh doanh';
                                            }
                                            else{
                                                $status = 'Còn hàng';
                                            }


                                            
                                            ?>
                                        <span>{{ $status }}</span>
                                    </div>

                                     @if(!empty($gift) &&  $data->Quantily>0 &&  $data['Price']>0 && $deal_check_add ==false)

                                    <fieldset class="p-gift">
                                            <legend id="data-pricetotal" style="color: #ff0000;font-size: 18px; font-weight: bold" data-pricetotal="0">
                                                Khuyến mãi kèm theo
                                            </legend>
                                            <!---->
                                            <div class="detail-offer">
                                               
                                                {{ $gifts->type ==1?'Lựa chọn 1 trong 2 sản phẩm sau':'' }}
                                                @foreach($gift as $key => $valuegift)
                                                <div class="select-gift">
                                                    

                                                    <input type="checkbox" name="gift" value="{{ $valuegift->name }}" class="gift-check">
                                                    
                                                    <img src="{{ asset($valuegift->image) }}" height="30px" width="30px">

                                                    @if($valuegift->id ==5)
                                                    <a href="https://dienmaynguoiviet.vn/khau-trang-loc-khi-lg-puricare-the-he-2-ap551awfa-ajp-may-trang"><h4>{{ $valuegift->name }}</h4></a>
                                                    @else
                                                    <h4>{{ $valuegift->name }}</h4>
                                                    @endif
                                                </div>
                                                @endforeach
                                               
                                            </div>
                                            <div class="img-gift clearfix">
                                            </div>
                                        </fieldset>
                                     @endif    

                                    <!-- <div class="pdetail-promotion">
                                        <div class="pdetail-promotion-body">
                                            <ul>
                                                Tặng máy đánh trứng đa năng Roler RHM-1002 trị giá 790,000đ
                                                <li>Tặng eVoucher trị giá 200,000đ mua phụ kiện IT, phụ kiện Mobile (có giá trị sử dụng trong 07 ngày). Chi tiết xem <a href="https://mediamart.vn/tin-khuyen-mai/tang-voucher-tri-gia-200-000vnd-mua-cac-san-pham-phu-kien" target="_blank">tại đây</a>.</li>
                                                <li>TÀI TRỢ TRẢ GÓP 0% LÃI SUẤT (*)</li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div> -->

                                    <!-- mobile -->
                                    @if($data->Quantily>0)
                                    <div class="pdetail-add-to-cart add-to-cart">
                                        <div class="inline">
                                            <input type="hidden" name="productId" value="{{ $data->id }}">
                                            <input type="hidden" name="gift_checked"  id="gift_checked" value="">
                                            <!-- <div class="product-quantity">
                                                <input type="text" class="quantity-field" readonly="readonly" name="qty" value="1">
                                                </div> -->
                                            <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart" onclick="addToCart({{ $data->id }})">MUA NGAY <br>(Giao hàng tận nơi - Giá tốt - An toàn)</button>
                                        </div>
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Launch demo modal
                                            </button> -->
                                    </div>
                                    <div class="clearfix"></div>
                                    @if((int)$data['Price']>=3000000)
                                    <div class="installment-purchase pdetail-installment">
                                       
                                        <a target="_blank"  href="{{ route('details', $data->Link)  }}?show=tra-gop" admicro-data-event="101725" admicro-data-auto="1" admicro-data-order="false" class="but-1-gop">
                                        <strong>TRẢ GÓP QUA THẺ</strong>
                                        <br>
                                        (Visa, Master, JCB)
                                        </a>
                                    </div>
                                    @endif

                                    @else

                                    <div class="pdetail-add-to-cart add-to-cart">
                                        <div class="inline">
                                           
                                          
                                            <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart">Liên hệ</button>
                                        </div>
                                       
                                    </div>
                                    @endif
                                </div>
                                <div class="clearfix"></div>


                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="col-md-3 mobile">
                    <div class="commitment">
                    <h4>Yên tâm mua sắm</h4>
                    <ul>
                        <li>Bảo hành tại nhà</li>
                        <li>Lắp đặt miễn phí</li>
                  (Trừ điều hòa, bình nước nóng)
                        <li>Thanh toán tại nhà</li>
                        <li>Giao hàng miễn phí 20km</li>
                        <li>Giá cạnh tranh nhất thị trường</li>
                        <li>Đổi mới 100% trong 7 ngày đầu</li>
                            ( Trừ Sanaky, Sony chỉ bảo hành tại nhà )
                    </ul>
                    <div class="support">
                      <h5>Tổng Đài mua hàng</h5>
                        <a href="tel:02473036336">0247.303.6336</a>
                      <h5>Tổng Đài mua hàng( Sau 17h )</h5>
                       <a href="tel:0913011888">091.301.1888</a> 
                       <a href="tel:0983612828">098.361.2828</a>
                       
                                              
                      
                       
                    </div>
                    </div>
                </div>
                <div class="total-imgslider">
                    <a id="show-popup-featured-images-gallery" style="display: block" href="javascript:void(0)"  data-color-id="0" data-toggle="modal" data-target="#Salient_Features">Xem tất cả điểm nổi bật</a>
                </div>

                <div class="scrolling_inner">
                    <div class="box01__tab scrolling">
                        <div id="thumb-featured-images-gallery-0" class="item itemTab active " data-gallery-id="featured-images-gallery" data-color-id="0" data-is-full-spec="False" data-color-order-id="0" data-isfeatureimage="True" data-toggle="modal" data-target="#Salient_Features" class="read-full" data-gallery-id="featured-images-gallery">
                            <div class="item-border">
                                <i class="icondetail-noibat"></i>
                            </div>
                            <p>Điểm nổi bật</p>
                        </div>
                        <div id="thumb-specification-gallery-0" class="item itemTab  is-show-popup" data-gallery-id="specification-gallery" data-color-id="0" data-is-full-spec="True" data-color-order-id="0" data-isfeatureimage="True">
                            <div class="item-border">
                                <i class="icondetail-thongso" data-toggle="modal" data-target="#specifications"></i>
                            </div>
                            <p data-toggle="modal" data-target="#specifications">Thông số kỹ thuật</p>
                        </div>

                       <!--  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div> -->

                        <div id="thumb-article-gallery-0" class="item itemTab  is-show-popup" data-gallery-id="article-gallery" data-color-id="0" data-is-full-spec="False" data-color-order-id="0" data-isfeatureimage="True">
                            <div class="item-border">
                                <i class="icondetail-danhgia"></i>
                            </div>
                            <p>Thông tin sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Salient_Features" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Đặc điểm nổi bật</h5>
                            </div>


                           
                            <div class="modal-body" style="padding:0 15px">

                            
                                {!!  str_replace(['Xem thêm', 'Đặc điểm nổi bật'], '', html_entity_decode($data->Salient_Features))  !!} 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="specifications" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Thông số kỹ thuật</h5>
                                <button type="button" class="btn btn-secondary mobiles" data-dismiss="modal">x</button>
                            </div>

                            
                            <div class="modal-body" id="thong-so">
                                {!!  $data->Specifications  !!} 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-tab">
                    <div class="bt-overlay"></div>
                    <ul class="block-tab-top">
                        <li id="tab-featured-images-gallery-0"
                            class="tab-item active"
                            data-is-360-gallery="False"
                            data-gallery-id="featured-images-gallery"
                            data-color-id="0"
                            data-thump-name="&#x110;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t">
                            &#x110;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t
                        </li>
                        <li id="tab-color-images-gallery-11"
                            class="tab-item "
                            data-is-360-gallery="False"
                            data-gallery-id="color-images-gallery"
                            data-color-id="11"
                            data-thump-name="&#x110;en">
                            &#x110;en
                        </li>
                        <li id="tab-specification-gallery-0"
                            class="tab-item "
                            data-is-360-gallery="False"
                            data-gallery-id="specification-gallery"
                            data-color-id="0"
                            data-thump-name="Th&#xF4;ng s&#x1ED1; k&#x1EF9; thu&#x1EAD;t">
                            Th&#xF4;ng s&#x1ED1; k&#x1EF9; thu&#x1EAD;t
                        </li>
                        <li id="tab-article-gallery-0"
                            class="tab-item "
                            data-is-360-gallery="False"
                            data-gallery-id="article-gallery"
                            data-color-id="0"
                            data-thump-name="Th&#xF4;ng tin s&#x1EA3;n ph&#x1EA9;m">
                            Th&#xF4;ng tin s&#x1EA3;n ph&#x1EA9;m
                        </li>
                    </ul>
                    <div class="block-tab-content">
                        <div class="content-t active not-load-content" id="tab-content-featured-images-gallery-0">
                        </div>
                        <div class="content-t  not-load-content" id="tab-content-color-images-gallery-11">
                        </div>
                        <div class="content-t  not-load-content" id="tab-content-specification-gallery-0">
                        </div>
                        <div class="content-t  not-load-content" id="tab-content-article-gallery-0">
                        </div>
                    </div>
                </div>
                <div class="wrap_wrtp hide" id="popup-materialsfee">
                    <div class="pop">
                    </div>
                </div>
                <div class="content">
                     

                    <?php

                         $minutes = 1000;

                        $check = Cache::remember('check',$minutes, function() use ($data){
                            return DB::table('imagecrawl')->select('image')->where('product_id', $data->id)->where('active',0)->get()->pluck('image')->toArray();
                        });


                         $details = $data->Detail;
                        if(isset($check)){

                            
                            $details = str_replace($check,  asset('/images/product/noimage.png'), $data->Detail);
                            $details = str_replace(['http://dienmaynguoiviet.net', 'https://dienmaynguoiviet.net'], 'https://dienmaynguoiviet.vn', $details);
                            $details = preg_replace("/<a(.*?)>/", "<a$1 target=\"_blank\">",  $details);
                            

                        }
                       
                       
                    ?>

                     {!! html_entity_decode($details)   !!}
                    
                </div>
                <div class="show-more">
                    <span>Đọc thêm</span>
                </div>
                <div class="border7"></div>
            </div>

            <div class="box_right desktop">
                <div class="col-12 pdetail-des">
                    <div class="clearfix"></div>
                    <div>
                        <div class="pdetail-info">
                            <p>Model: <b>{{ @$data->ProductSku  }}</b></p>
                            <!-- <p>Bảo hành: <b>24 Tháng, 1 đổi 1 trong vòng 1 tháng</b></p> -->
                        </div>
                        <div class="scroll-box">
                            <!-- <div class="boxbanner-32">
                                <div class="banner-list">
                                    <div class="item banner-item banner-item-1">
                                        <a target="#" data-id="1022">
                                            <picture>
                                               
                                                <img src="https://thegioidohoacom.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/01/10040348/X4iNCOp-1024x454.jpg" alt="Tết Lớn Khuyến Mại Lớn" width="&quot;640&quot;" height="&quot;150&quot;">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                </div> -->
                                <style type="text/css">
                                    
                                    .crazy-deal-details-right {
                                        position: relative;
                                        margin-left: 113px;
                                        height: 100%;
                                        display: flex;
                                        align-items: center;
                                        flex-direction: row;
                                        justify-content: space-between;
                                    }
                                    .crazy-deal-details-procressbar{
                                        width: 90px;
                                        height: 8px;
                                        background: #ffd1c2;
                                        border-radius: 4px;
                                        display: inline-block;
                                        margin-right: 6px;
                                        margin-left: 6px;
                                    }
                                    .crazy-deal-details-process{
                                        font-weight: bold;
                                        margin-right: 10px;
                                    }
                                    .crazy-deal-details.pc {
                                        margin: 8px;
                                        height: 29px;
                                        overflow: hidden;
                                        background-position: 0 0;
                                        background-repeat: no-repeat;
                                        background-size: 100% 100%;

                                    }    
                                    .crazy-deal-details-countdown{
                                        font-weight: bold;
                                    }
                                </style>
                            <div class="pdetail-price">
                                @if(!empty($text))
                                <?php 

                                    if($data->id%2==0){
                                        $numberDeal = 6;
                                    }
                                    else{
                                        $numberDeal = 5;
                                    }
                                ?>
                                <div id="module_flash_sale" class="pdp-block module">
                                    <div class="crazy-deal-details pc" style="background-image:url('{{ asset('images/template/flashsale.png')  }}'); height:38px">
                                        <div class="crazy-deal-details-right">
                                            <time class="crazy-deal-details-countdown" data-spm-anchor-id="a2o4n.pdp_revamp.0.i0.89db8552daSXV6">Kết thúc sau <span class="crazy-deal-details-countdown-time clock">12:08:36</span></time>
                                            <div class="crazy-deal-details-process">
                                                Đã bán {{ $numberDeal }} sản phẩm
                                                <!-- <div class="crazy-deal-details-procressbar">
                                                    <div class="crazy-deal-details-procressbar-inner" style="width:9%"></div>
                                                </div> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <!--  <div class="tbl_time_top">
                                    <table class="tbl_time" width="100%">
                                        <thead>
                                        <tr>
                                            <td align="center">Tiết kiệm</td>
                                            <td align="center">Đã mua</td>
                                            <td align="center">Thời gian còn lại</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr bgcolor="#eee">
                                            <td align="center">{{@$percent}}%</td>
                                            <td align="center">0</td>
                                            <td align="center"><div id="to_time1205" class="clock" data-id="1205" data-time-left="133131"></div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> -->
                                @endif
                                <br>
                                 {!!  @$text !!}
                                <div class="pdetail-price-box">

                                    <h3>
                                         {{str_replace(',' ,'.', number_format($data->Price))  }}₫
                                    </h3>
                                </div>
                                <!-- <div class="pdetail-promotion">
                                    <div class="pdetail-promotion-body">
                                        <ul>
                                            Tặng máy đánh trứng đa năng Roler RHM-1002 trị giá 790,000đ
                                            <li>Tặng eVoucher trị giá 200,000đ mua phụ kiện IT, phụ kiện Mobile (có giá trị sử dụng trong 07 ngày). Chi tiết xem <a href="https://mediamart.vn/tin-khuyen-mai/tang-voucher-tri-gia-200-000vnd-mua-cac-san-pham-phu-kien" target="_blank">tại đây</a>.</li>
                                            <li>TÀI TRỢ TRẢ GÓP 0% LÃI SUẤT (*)</li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    </div> -->
                            </div>
                            <div class="pdetail-status">
                                <div class="pdetail-stockavailable">
                                    <span>{{ $status }} </span>
                                </div>

                                
                                 @if(!empty($gift) && $data->Quantily>0 && $deal_check_add ==false  &&  $data['Price']>0)

                                <fieldset class="p-gift">
                                        <legend id="data-pricetotal" style="color: #ff0000;font-size: 18px; font-weight: bold" data-pricetotal="0">
                                            Khuyến mãi kèm theo
                                        </legend>
                                        <!---->
                                        <div class="detail-offer">
                                           
                                            {{ $gifts->type ==1?'Lựa chọn 1 trong 2 sản phẩm sau':'' }}
                                            <div class="select-gift">
                                                
                                              
                                                 @foreach($gift as $key => $valuegift)
                                                  @if($gifts->type ==1)<input type="checkbox" name="gift" value="{{ $valuegift->name }}" {{ $key==0?'checked':'' }}> @endif
                                                <img src="{{ asset($valuegift->image) }}" height="30px" width="30px">

                                                 @if($valuegift->id ==5)
                                                    <a href="https://dienmaynguoiviet.vn/khau-trang-loc-khi-lg-puricare-the-he-2-ap551awfa-ajp-may-trang"><h4>{{ $valuegift->name }}</h4></a>
                                                    @else
                                                    <h4>{{ $valuegift->name }}</h4>
                                                    @endif
                                                    
                                                @endforeach
                                              

                                            </div>
                                            
                                           
                                        </div>
                                        <div class="img-gift clearfix">
                                        </div>
                                    </fieldset>
                                 @endif    

                                @if($data['Quantily']>0)
                                <div class="pdetail-add-to-cart add-to-cart">
                                    <form class="inline">
                                        <input type="hidden" name="productId" value="19439">
                                        <!-- <div class="product-quantity">
                                            <input type="text" class="quantity-field" readonly="readonly" name="qty" value="1">
                                            </div> -->
                                        @if((int)$data['Price']>0)
                                        <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart" onclick="addToCart({{ $data->id }})">MUA NGAY <br>(Giao hàng tận nơi - Giá tốt - An toàn)</button>
                                        @else
                                        <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart">LIÊN HỆ <br></button>
                                        @endif
                                    </form>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Launch demo modal
                                        </button> -->
                                </div>
                                <div class="clearfix"></div>


                                <div class="installment-purchase pdetail-installment">
                                    
                                    @if((int)$data['Price']>=3000000)
                                   
                                    <a target="_blank" class="but-tra-gop" href="{{ route('details', $data->Link)  }}?show=tra-gop" admicro-data-event="101725" admicro-data-auto="1" admicro-data-order="false">
                                    <strong>TRẢ GÓP QUA THẺ</strong>
                                    <br>
                                    (Visa, Master, JCB)
                                    </a>
                                    @endif
                                    <br><br>
                                    {!!  $data->Specifications  !!} 
                                </div>
                                @else

                                <div class="pdetail-add-to-cart add-to-cart pdetail-installment">
                                    <div class="inline">
                                       
                                      
                                        <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart">Liên hệ</button>
                                    </div>

                                    {!!  $data->Specifications  !!} 
                                </div>
                               
                                @endif

                            </div>
                            <div class="clearfix"></div>

                             <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#specifications">Xem chi tiết thông số kỹ thuật</button>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="border7"></div>
            <div class="clearfix"></div>
            <div class="related view-more-related viewer-product">
            </div>
            <div class="col-md-8 clearfix" id="comment_pro">
                <article id="article-comment-2131" itemprop="comment" itemscope="" itemtype="https://schema.org/Comment">
                    <?php 
                        if(!Cache::has('comment'.$data->id) ){

                            $comments_id = App\Models\rate::where('product_id', $data->id)->Where('active', 1)->get();

                            Cache::put('comment'.$data->id, $comments_id, 10000);

                        }

                        

                        $comment = Cache::get('comment'.$data->id);
                        ?>
                    @if(isset($comment))
                    @foreach($comment as $comments)
                    <header class="comment-header">
                        <p class="comment-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                            <img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&usqp=CAU" height="30px" width="30px">
                            <span class="comment-author-name" itemprop="name">
                            <a href="#" class="comment-author-link" rel="external nofollow" itemprop="url">{{ $comments->name }}</a>
                            </span> 
                        <p class="comment-meta"><time class="comment-time" itemprop="datePublished"><a class="comment-time-link" href="https://nguyenhung.net/comment-trong-html.html#comment-2131" itemprop="url">{{ $comments->created_at->format('d/m/Y, H:i' )  }}</a></time></p>
                    </header>
                    <div class="comment-content" itemprop="text">
                        <p>{!!  $comments->content  !!}</p>
                    </div>
                    @endforeach
                    @endif
                </article>
                <div class="rate-text">
                    <!-- <h3 style="margin-bottom: 0;margin-top: 40px;"> Đánh giá  {{ $data->Name }}</h3> -->
                    <p style="background: #f3f3f3;padding: 10px;border-radius: 3px;margin: 10px 0;">Đánh giá sản phẩm nhận Coupon 20.000đ dành cho khách mua hàng tại Điện máy người việt.</p>
                </div>
                <div class="p-comment">
                    <form class="comment-form" name="rate-form" id="rate-form" role="form">
                        <div class="rate_view">
                            Chọn đánh giá của bạn:
                            <div class="stars">
                                <div>
                                    <input class="star star-click star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-click star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-click star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-click star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-click star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="left">
                                <textarea style="padding: 10px;border-radius: 3px; width: 100%;" name="content" placeholder="Nhập đánh giá về sản phẩm " id="content0"></textarea>
                            </div>
                            <div class="left">
                                <div class="form-input">
                                    <table style="width:100%;" class="tbl-common">
                                        <tbody>
                                            <tr>
                                                <td style="padding-right: 5px;">
                                                    <input style="border-radius: 3px;height: 43px;" type="text" id="name0" name="name" class="inputText" placeholder="Họ tên" value="">
                                                </td>
                                                <td style="padding-left: 5px;">
                                                    <input style="border-radius: 3px;height: 43px;" type="text" id="email0" name="email" class="inputText" placeholder="Email" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin-top: 15px;width: calc(100% - 6px);border-radius: 3px;" type="submit" value="Gửi bình luận" class="btn btn-red comments-rate" ></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--form-input-->
                            </div>
                        </div>
                    </form>
                    <input type="hidden" name="star" id="star_number" value="5">
                    <!--comment-form-->
                </div>
            </div>
            <!-- end đánh giá -->
            <div class="related view-more-related">
                <p class="related__ttl">Xem thêm sản phẩm khác</p>
                @if(isset($other_product))
                <div class="listproduct slider-promo owl-carousel">
                    @foreach($other_product as  $value)
                    @if($value->active==1 && $value->id != $data->id)
                    <div class="item">
                        <a href='{{ route('details', $value->Link) }}' class=" main-contain">
                        <div class="item-label">
                        </div>
                        <div class="item-img">
                            <img data-src="{{ asset($value->Image) }}" class="lazyload" alt="{{ $value->Name }}" width=210 height=210>
                        </div>
                        
                        <h3>{{ $value->Name }}</h3>
                        <strong class="price">{{  str_replace(',' ,'.', number_format($value->Price))  }}&#x20AB;</strong>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="border7"></div>
        <div class="watched"></div>
        </div>
        <div class="errorcompare" style="display:none;"></div>
        <!--#endregion-->
        <!--#region BreadcrumbList-->
        <!--#endregion-->
        <!--#region Organization-->
        <!--#endregion-->
    </section>



    <!-- end.Content -->
    <div class="pos8 cls" >
        <div class="container2">
            <div class="header_l head-t">           
            </div>
            <div class="wapper_container">
                <div class="wrapper_left">
                    <div class="item cls">
                        <img  class="qrcode lazy" alt="Mã QR Code" data-src="https://mutosi.com/images/config/onlink_to_aam52e_small_1586573462.jpg" data-srcset="https://mutosi.com/images/config/onlink_to_aam52e_small_1586573462.jpg.webp">
                        <a href="https://play.google.com/store/apps/details?id=com.app.mutosi&hl=vi&fbclid=IwAR2j2K-gJI0DEnYJQPTkemAjx45NTe6bmthM4MqJfQqy97tUiyI9DWywmqQ" title="App Google Play" target="_blank">
                        <img  class="lazy" alt="Google Play" data-src="https://mutosi.com/images/config/google_pl.jpg" data-srcset="https://mutosi.com/images/config/google_pl.jpg.webp">                       </a>
                    </div>
                    <div class="item cls">
                        <img  class="qrcode lazy" alt="Mã QR Code" data-src="https://mutosi.com/images/config/app-store_1586573870.jpg" data-srcset="https://mutosi.com/images/config/app-store_1586573870.jpg.webp">
                        <a href="https://apps.apple.com/vn/app/mutosi/id1475057126?fbclid=IwAR0dNM9gBWpUMSYTHCKP_85ynOAN2VS12z1kN68CDVS3pfUFDDotguVUo_s" title="App Store" target="_blank">
                        <img  class="lazy" alt="App Store" data-src="https://mutosi.com/images/config/appstrore.jpg" data-srcset="https://mutosi.com/images/config/appstrore.jpg.webp">                     </a>
                    </div>
                </div>
                <div class='block_banners banners_0 blocks_banner blocks0 block'  id = "block_id_133" >
                    <div style="background-color:#b11f8f" class='banners_wrapper cls banners-default_wrapper block_inner block_banner_banner'  >
                        <div class="item">
                            <span class="wrapper_ap">
                            <img  class="lazy" alt="DỊCH VỤ BẢO HÀNH ĐIỆN TỬ MUTOSI" data-src="https://mutosi.com/images/banners/compress/hand_1584066107.png" data-srcset="https://mutosi.com/images/banners/compress/hand_1584066107.png.webp">                                                                                       
                            </span>
                            <div class="wrapper_text" style="background-color:#b11f8f">
                                <div class="item">
                                    <div class="text_ab">
                                        <h2>DỊCH VỤ BẢO HÀNH ĐIỆN TỬ MUTOSI</h2>
                                    </div>
                                    <div class="text_wrapper">
                                        <span class="text_left">
                                        Nhanh chóng tiện lợi<br>
                                        Mọi lúc, mọi nơi                                    </span>
                                        <fieldset>
                                            <legend>Tư vấn</legend>
                                            <span class="summary">24/7</span>
                                        </fieldset>
                                    </div>
                                    <div class="read_more">
                                        <a href="https://mutosi.com/ho-tro-khach-hang/kich-hoat-bao-hanh-dien-tu-bang-app-bao-hanh-cua-mutosi-n36.html" title="Tìm hiểu thêm">Tìm hiểu thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="header_r head-t" style="background-color:#b11f8f">          
            </div>
        </div>
    </div>


    <div class="clear"></div>
    <!--Trên Footer-->
    <div class="by_fastform">
        <img  class="lazy left_image" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/flower.png" data-srcset="https://mutosi.com/templates/mutosi/images/flower.png.webp">
        <div class="container">
            <div class="img_flower">
                <img  class="lazy item" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/flower_a.png" data-srcset="https://mutosi.com/templates/mutosi/images/flower_a.png.webp">         
                <img  class="lazy item" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/flower_a.png" data-srcset="https://mutosi.com/templates/mutosi/images/flower_a.png.webp">         
                <img  class="lazy item" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/flower_a.png" data-srcset="https://mutosi.com/templates/mutosi/images/flower_a.png.webp">         
                <img  class="lazy item" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/flower_a.png" data-srcset="https://mutosi.com/templates/mutosi/images/flower_a.png.webp">         
                <img  class="lazy item" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/flower_a.png" data-srcset="https://mutosi.com/templates/mutosi/images/flower_a.png.webp">         
                <img  class="lazy item" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/flower_a.png" data-srcset="https://mutosi.com/templates/mutosi/images/flower_a.png.webp">         
            </div>
            <div class="wrap-by-fast cls">
                <div class="item">
                    <div class="phone-left">
                        <h2>
                            <p class="phone-tittle">ĐĂNG KÝ NHẬN BẢN TIN MUTOSI</p>
                        </h2>
                        <p class="phone-content">Đừng bỏ lỡ các thông tin sản phẩm mới và khuyến mãi hấp dẫn </p>
                    </div>
                </div>
                <div class="buy_fast">
                    <div class="">
                        <form action="" name="buy_fast_form" id="buy_fast_form" method="post" onsubmit="javascript: return submit_form_buy_fast();" >
                            <div class="cls buy_fast_body">
                                <input type="text" value="" placeholder="Nhập SĐT/Zalo/Email"" id="telephone_buy_fast" name="email_buy_fast" class="keyword input-text" />
                                <button type="submit" class="button-buy-fast button">
                                    <svg x="0px" y="0px" width="15px" height="15px"
                                        viewBox="0 0 334.5 334.5" style="enable-background:new 0 0 334.5 334.5;" xml:space="preserve">
                                        <path d="M332.797,13.699c-1.489-1.306-3.608-1.609-5.404-0.776L2.893,163.695c-1.747,0.812-2.872,2.555-2.893,4.481
                                            s1.067,3.693,2.797,4.542l91.833,45.068c1.684,0.827,3.692,0.64,5.196-0.484l89.287-66.734l-70.094,72.1
                                            c-1,1.029-1.51,2.438-1.4,3.868l6.979,90.889c0.155,2.014,1.505,3.736,3.424,4.367c0.513,0.168,1.04,0.25,1.561,0.25
                                            c1.429,0,2.819-0.613,3.786-1.733l48.742-56.482l60.255,28.79c1.308,0.625,2.822,0.651,4.151,0.073
                                            c1.329-0.579,2.341-1.705,2.775-3.087L334.27,18.956C334.864,17.066,334.285,15.005,332.797,13.699z"/>
                                        <g>
                                    </svg>
                                    &nbsp;
                                    Gửi                 
                                </button>
                            </div>
                            <input type='hidden'  name="module" value="users"/>             
                            <input type='hidden'  name="view" value="users"/>
                            <input type='hidden'  name="task" value="buy_fast_save"/>
                            <input type='hidden'  name="Itemid" value="10"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img  class="lazy right_image" alt="flower" data-src="https://mutosi.com/templates/mutosi/images/home_r.png" data-srcset="https://mutosi.com/templates/mutosi/images/home_r.png.webp">
    </div>
    <div class="form_fast hide clear" id="form_fast">
        <div class="container">
            <div id="close_form" class="close" onclick="close_f();">x</div>
            <div class="form_dk cb cw">
                <div class="block_title">
                    <span>
                        <svg width="10px" height="10px" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 418.304 418.304" style="enable-background:new 0 0 418.304 418.304;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M391.68,96.768C357.888,37.376,295.424,0,226.304,0h-34.816C122.88,0,59.904,37.376,26.624,96.768
                                        C10.752,124.416,2.56,156.16,2.56,188.928v117.248c3.072,62.464,51.712,111.616,112.128,111.616c10.24,0,17.92-7.68,17.92-17.92
                                        v-199.68c0-10.24-7.68-17.92-17.92-17.92c-29.696,0-56.32,12.288-76.8,32.256v-26.112c0-26.112,6.656-51.712,19.456-74.752
                                        C84.48,65.536,135.68,34.816,192,34.816h34.816c55.296,0,107.008,30.208,134.144,78.848c12.8,23.04,19.456,49.152,19.456,74.752
                                        v26.112c-19.968-19.968-47.104-32.256-76.8-32.256c-10.24,0-17.92,7.68-17.92,17.92v200.192c0,10.24,7.68,17.92,17.92,17.92
                                        c59.904,0,109.056-49.664,112.128-112.128V188.928C415.744,156.672,407.552,124.928,391.68,96.768z"/>
                                </g>
                            </g>
                        </svg>
                        Yêu cầu tư vấn
                    </span>
                </div>
                <div class="form-by-fast cls">
                    <div class="form_fast cls">
                        <div class="">
                            <form action="#" name="buy_fast_form" id="buy_fast_form66" method="post" onsubmit="javascript: return submit_form_menu66();" >
                                <ul>
                                    <li>
                                        <span class="text_check">
                                        <input type="text" required value="" placeholder="Họ tên(*):" id="name_buy_fast1" name="name_buy_fast" class="keyword input-text" />
                                        </span>
                                    </li>
                                    <li > 
                                        <input type="text" required value="" placeholder="Điện thoại di động(*):" id="telephone_buy_fast5" name="telephone_buy_fast" class="keyword input-text" />
                                    </li>
                                    <li>
                                        <input type="text" value="" placeholder="Tỉnh/Thành phố" id="address_buy_fast" name="address_buy_fast" class="keyword input-text" />
                                    </li>
                                    <li id="radio_fast"> 
                                        <span id="radio_check">
                                        <label class="container3">Tư vấn sản phẩm phù hợp
                                        <input type="checkbox" required value="Tư vấn sản phẩm phù hợp" id="pro_buy_fast" name="pro_buy_fast" class="keyword radio-text"/>
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="container3">Yêu cầu báo giá
                                        <input type="checkbox" value="Yêu cầu báo giá" id="medical_buy_fast" name="medical_buy_fast" class="keyword radio-text" />
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="container3">Yêu cầu tư vấn kỹ thuật
                                        <input type="checkbox" value="Yêu cầu tư vấn kỹ thuật" id="enginering_buy_fast" name="enginering_buy_fast" class="keyword radio-text"/>
                                        <span class="checkmark"></span>
                                        </label>
                                        </span>
                                    </li>
                                </ul>
                                <div class="button_form">   
                                    <button type="submit" class="button-buy-fast button" id="submit_btn1">
                                    Gửi                         </button>
                                </div>
                        </div>
                        <input type='hidden'  name="module" value="users"/>         
                        <input type='hidden'  name="view" value="users"/>
                        <input type='hidden'  name="task" value="buy_fast_save2"/>
                        <input type='hidden'  name="Itemid" value="10"/>
                        <input type='hidden'  name="return" value="L2NoYW0tc29jLWtoaQ=="/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript">
    $('#carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        dots:true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa fa-angle-right'></i>"],
       
        responsive:{
            0:{
                items:1
    
            },
            600:{
                items:1
            },
            
            1000:{
                items:1
            }
        }
    });
</script>

@endsection

