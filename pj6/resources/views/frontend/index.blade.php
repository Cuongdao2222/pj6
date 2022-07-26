@extends('frontend.layouts.app')
@section('content') 

@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/homesao.css') }}">
<style type="text/css">
    .dcjq-mega-menu #megamenu>.activated {
        background: none;
    }
    .bg_pos6 .after-lazy{
        height: 181px !important;
        width: auto;
    }
    .block-strengths-round .background_round .bg_1 {
        top: 16% !important;
    }    
</style>
@endpush


<div class="home_index ">
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
                            <li class="level_0 sort home  active_home">
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
                                <a href="https://mutosi.com/cham-soc-nuoc" id="menu_item_890" class="menu_item_a" title="Máy lọc nước">
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
                                    Máy lọc nước              
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
                               <!--  <div class='highlight'>
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
                                </div> -->
                                <!--    end LEVEL 1         -->
                            </li>
                            <li class="level_0 sort " id="level_t_895" >
                                <a href="https://mutosi.com/cham-soc-bep" id="menu_item_895" class="menu_item_a" title="Máy lọc không khí">
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
                                    Máy lọc không khí              
                                </a>
                              
                            </li>
                            <li class="level_0 sort " id="level_t_897" >
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
                                    Máy lọc đầu nguồn                
                                </a>
                               
                               <!--  <span class="drop_down">
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
                                                <a href="https://mutosi.com/may-suoi" class="level_0 sort sub-menu-item" data-menu_tags="62" id="menu3_item_62" title="Máy sưởi"  >
                                                Máy sưởi                                        </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-loc-khong-khi" class="level_0 sort sub-menu-item" data-menu_tags="49" id="menu3_item_49" title="Máy lọc không khí"  >
                                                Máy lọc không khí                                       </a>
                                            </div>
                                            <div class='sub-menu sub-menu-level1 has_child  ' >
                                                <a href="https://mutosi.com/may-hut-bui" class="level_0 sort sub-menu-item" data-menu_tags="63" id="menu3_item_63" title="Máy hút bụi"  >
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
                                </div> -->
                               
                            </li>


                            <li class="level_0 sort " id="level_t_897" >
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
                                    Máy nước nóng                
                                </a>
                               
                              
                               
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

    
    <div class="slideshow_countdown cls">
        <div class="slideshow">
            <div id="pav-slideShow">
                <div id="fs-slider-home" class="owl-carousel">
                    <div class="item hide">
                        <a href="https://truesmart.mutosi.com/?utm_source=Optimal.content&utm_medium=banner.link&utm_campaign=BannerSlide_Ldp.Truesmart" title="">  
                        <img  alt="Mutosi chuẩn chất lượng Nhật Bản" src ="https://theme.hstatic.net/1000286959/1000784865/14/slideshow_4.jpg?v=345" srcset="https://theme.hstatic.net/1000286959/1000784865/14/slideshow_4.jpg?v=345">                                            </a>
                        <div class="container">
                            <div class="slide-content">
                            </div>
                        </div>
                    </div>
                    <div class="item hide">
                        <a href="https://mutosi.com/may-loc-nuoc-mutosi-9-loi-enrolas-mp-e91s/?utm_source=Optimal.content&utm_medium=banner.link&utm_campaign=BannerSlide_MPE91S" title=""> 
                        <img  class="owl-lazy" alt="Mutosi chuẩn chất lượng Nhật Bản" data-src="https://theme.hstatic.net/1000286959/1000784865/14/slideshow_2.jpg?v=345" data-srcset="https://theme.hstatic.net/1000286959/1000784865/14/slideshow_2.jpg?v=345">                                          </a>
                        <div class="container">
                            <div class="slide-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="introdu pos1">
        <div class=" container">
            <div class='block_introduce introduce- introduce_0 block'  id = "block_id_121" >
                <div class="introduce introduce_js">
                    <div class="body-introduce cls">
                        <div class="content-bl">
                            <div class="title1">
                                <h1>Giới thiệu</h1>
                            </div>
                            <div class="summary-bl">
                               <p>
                                       
                                </p>
                            </div>
                            <div class="description_c">
                                 Trong hơn 145 năm phát triển, thương hiệu A. O. Smith được biết đến với hàng loạt giải pháp và hàng trăm phát minh, sáng chế về công nghệ ứng dụng mang lại không chỉ sự tiện nghi mà còn là những tiện ích thực sự cho khách hàng. Trên chặng đường thành công bền bỉ của mình, qua những cột mốc lịch sử, những thành tựu nổi bật của A. O. Smith được đánh dấu và đóng góp bởi những cá nhân và tập thể A. O. Smith đoàn kết cùng nhau gây dựng.
                                    <br><br>
                                    Với tôn chỉ “Chính trực – Đổi mới – Niềm tin của khách hàng”, tập thể A. O. Smith luôn đảm bảo sự phồn thịnh cho công ty và hướng tới hơn 145 năm thành công bền vững.
                            </div>
                            <div class="block-strengths block-strengths-3 block-strengths-row-3 cls">
                                <div class="box_item_strengths-3 cls">
                                    <div class="item">
                                        <div class="svg_icon">
                                            <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                <defs>
                                                    <style>.cls-1{fill:#b41e8e;}.cls-2{fill:#fff;}</style>
                                                </defs>
                                                <title>Do bong anh SP trang chu</title>
                                                <path class="cls-1" d="M49.94.49c.26.51.39.71.47.92C55.53,14.76,62.77,27,70.57,38.87c5.08,7.76,9,16,10.36,25.29,2.41,16.79-9.5,32.52-26.63,35C37.73,101.62,21.8,90,19.19,73.56a37.9,37.9,0,0,1,3-21.11A87.2,87.2,0,0,1,28.8,39.91C36,28.56,43.08,17.16,48.24,4.69,48.77,3.4,49.29,2.1,49.94.49Z"/>
                                                <path class="cls-2" d="M60.45,84.1H39.55v-49h20.9Zm-5.36-1.44H59V36.48H41V82.66Z"/>
                                                <polygon class="cls-2" points="45.44 63.45 45.44 88.16 40.27 83.38 40.27 58.68 45.44 63.45"/>
                                                <path class="cls-2" d="M45.44,88.87a.68.68,0,0,1-.48-.19l-5.18-4.77a.76.76,0,0,1-.23-.53V58.68A.71.71,0,0,1,40,58a.72.72,0,0,1,.78.12l5.17,4.78a.74.74,0,0,1,.23.53V88.15a.72.72,0,0,1-.72.72ZM41,83.07l3.74,3.45V63.77L41,60.32Z"/>
                                                <path class="cls-2" d="M48.31,79.29a.72.72,0,0,1-.72-.72V66.64H46.16V78.57a.72.72,0,1,1-1.43,0V65.92a.71.71,0,0,1,.71-.71h2.87a.71.71,0,0,1,.71.71V78.57A.71.71,0,0,1,48.31,79.29Z"/>
                                                <path class="cls-2" d="M51.17,79.29H48.31a.72.72,0,0,1-.72-.72V65.92a.72.72,0,0,1,1.43,0V77.86h1.43V65.92a.72.72,0,0,1,1.44,0V78.57A.72.72,0,0,1,51.17,79.29Z"/>
                                                <path class="cls-2" d="M54,79.29a.72.72,0,0,1-.72-.72V66.64H51.89V78.57a.72.72,0,1,1-1.44,0V65.92a.72.72,0,0,1,.72-.71H54a.71.71,0,0,1,.71.71V78.57A.71.71,0,0,1,54,79.29Z"/>
                                                <path class="cls-2" d="M56.9,79.29H54a.72.72,0,0,1-.72-.72V65.92a.72.72,0,0,1,1.43,0V77.86h1.43V65.92a.71.71,0,0,1,.72-.71h2.83a.72.72,0,1,1,0,1.43H57.62V78.57A.72.72,0,0,1,56.9,79.29Z"/>
                                                <path class="cls-2" d="M60.45,59.4H39.55V40.78h20.9ZM55.09,58H59V42.21H41V58Z"/>
                                                <path class="cls-2" d="M57.58,59.4H42.42V40.78H57.58ZM53.8,58h2.35V42.21H43.85V58Z"/>
                                                <path class="cls-2" d="M47.43,50.33a.72.72,0,0,1-.72-.72V46.27a.72.72,0,0,1,1.44,0v3.34A.72.72,0,0,1,47.43,50.33Z"/>
                                                <path class="cls-2" d="M52.57,50.33a.72.72,0,0,1-.72-.72V46.27a.72.72,0,0,1,1.44,0v3.34A.72.72,0,0,1,52.57,50.33Z"/>
                                                <path class="cls-2" d="M46.24,39.58H45a.72.72,0,0,1,0-1.43h1.2a.72.72,0,0,1,0,1.43Z"/>
                                                <path class="cls-2" d="M51.25,39.58h-2.5a.72.72,0,1,1,0-1.43h2.5a.72.72,0,1,1,0,1.43Z"/>
                                                <path class="cls-2" d="M55,39.58h-1.2a.72.72,0,0,1,0-1.43H55a.72.72,0,0,1,0,1.43Z"/>
                                                <path class="cls-2" d="M56.87,56.53H43.13a.72.72,0,0,1,0-1.43H56.87a.72.72,0,0,1,0,1.43Z"/>
                                                <path class="cls-2" d="M43.53,74.36a.71.71,0,0,1-.71-.72V72.25a.72.72,0,1,1,1.43,0v1.39A.72.72,0,0,1,43.53,74.36Z"/>
                                            </svg>
                                        </div>
                                        <div class="box_content">
                                            <div class="text">
                                                <!-- <span class="summary" id="txt_0" data-t="30+">
                                                    </span> -->
                                                <span class="sum">30+</span>
                                            </div>
                                            <div class="title">
                                                <a  href="" alt="Loại sản phẩm">Loại sản phẩm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="svg_icon">
                                            <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100">
                                                <defs>
                                                    <style>.cls-2{fill:#fff;}.cls-3{fill:#b41e8e;}.cls-4{clip-path:url(#clip-path);}</style>
                                                    <clipPath id="clip-path">
                                                        <path class="cls-1" d="M46.73,35.37a.91.91,0,0,1-1.37.17,1.05,1.05,0,0,0-1.49.42c-.3.54-.6.66-1.38.18s-.89.06-1.19.6-1.07-.12-1.55-.54-.6-.18-1.31.66c-.45.51-.61.67-.92.76v.07a8.88,8.88,0,0,1,1.32,1.13c.46.54,1.26,1,1.49,1.69s.19,1.6.34,2S42.16,44.71,43.5,44s1.76-1.1,2.26-.38,1.83,2.91,1.83,2.91.16.77-.83,1-2.42.77-1.65,1.42,2.56,2.14,2.79,2.41a4.77,4.77,0,0,1,.58,1.61c.07.46.23.3,1,1s2.45,2.29,3.06,3,1.26.85,1.26,1.53a3.05,3.05,0,0,0,1.76,2c.57.11.82.59.56.85s-.67.82-.41,1.33.46.88.82.88.52.41.31.77a4.81,4.81,0,0,0-.21,2c.06.47.06,1.4-.3,1.4s-.16.46,0,.81.82,1.29.77,1.91a2.74,2.74,0,0,1-.57,1.54c-.31.36-.41.83-.05,1s.72,1.7.31,1.7-1.44-.31-1.8.1-1.54.46-1.8,1.08-.21.67-.67.62-1.44-.21-1.59.1-.47.72,0,1.18.25.78.56.93a6.19,6.19,0,0,1,.93.72s.2.62-.77.46-1.08-.56-1.65-.56-1.6.36-1.7.77-.41,1.08-1.08.82-.6.19-.6.19l1,1.08c.67.45.84,1.2.53,2.26l-.39,2-.39,1.44c1.23.31,2-.11,2.24-1.27A2,2,0,0,1,51.58,85l1.85-1,1.12-.34c-.36-.7.2-1,.44-1.54-.32-1.62.15-1.94,1.42-1l1.7-.4,3.14-2.23,1.42-.83A2.27,2.27,0,0,0,63.9,75.3l-.15-2.21c.23-.55,1-.92.66-1.65L63.24,70.1a11.4,11.4,0,0,0-1.1-6.88.53.53,0,0,1-.77-.18l-.06-.79-.8-1.72-1-1a1.54,1.54,0,0,1-1.76-.13L55.91,57.1a2.94,2.94,0,0,1-2.14-1.33l-.05-1.68L51,51.64a3.79,3.79,0,0,1,.23-4.23l1.46-1.17a2.59,2.59,0,0,0,1-2.61,1.27,1.27,0,0,1,1.24-.4l1.41-.36c-.16-1.1,1.45-1,2.31-1.39l1.43-.42s-1-.92-1.65-.92-.6.36-1.2.06-.89-.3-1.19-.48S54,38.65,53.47,38.35s-.12-.84.42-1.67-.12-1.2-.59-1.14-2.33-.35-3.11-.42-1.49-1-2.26-1.07h-.08c-.71,0-.83.85-1.12,1.32Z"/>
                                                    </clipPath>
                                                </defs>
                                                <title>Do bong anh SP trang chu</title>
                                                <path class="cls-3" d="M49.94.49c.26.51.39.71.47.92C55.53,14.76,62.77,27,70.57,38.87c5.08,7.76,9,16,10.36,25.29,2.41,16.79-9.5,32.52-26.63,35C37.73,101.62,21.8,90,19.19,73.56a37.9,37.9,0,0,1,3-21.11A87.2,87.2,0,0,1,28.8,39.91C36,28.56,43.08,17.16,48.24,4.69,48.77,3.4,49.29,2.1,49.94.49Z"/>
                                                <path class="cls-2" d="M46.73,35.37a.91.91,0,0,1-1.37.17,1.05,1.05,0,0,0-1.49.42c-.3.54-.6.66-1.38.18s-.89.06-1.19.6-1.07-.12-1.55-.54-.6-.18-1.31.66c-.45.51-.61.67-.92.76v.07a8.88,8.88,0,0,1,1.32,1.13c.46.54,1.26,1,1.49,1.69s.19,1.6.34,2S42.16,44.71,43.5,44s1.76-1.1,2.26-.38,1.83,2.91,1.83,2.91.16.77-.83,1-2.42.77-1.65,1.42,2.56,2.14,2.79,2.41a4.77,4.77,0,0,1,.58,1.61c.07.46.23.3,1,1s2.45,2.29,3.06,3,1.26.85,1.26,1.53a3.05,3.05,0,0,0,1.76,2c.57.11.82.59.56.85s-.67.82-.41,1.33.46.88.82.88.52.41.31.77a4.81,4.81,0,0,0-.21,2c.06.47.06,1.4-.3,1.4s-.16.46,0,.81.82,1.29.77,1.91a2.74,2.74,0,0,1-.57,1.54c-.31.36-.41.83-.05,1s.72,1.7.31,1.7-1.44-.31-1.8.1-1.54.46-1.8,1.08-.21.67-.67.62-1.44-.21-1.59.1-.47.72,0,1.18.25.78.56.93a6.19,6.19,0,0,1,.93.72s.2.62-.77.46-1.08-.56-1.65-.56-1.6.36-1.7.77-.41,1.08-1.08.82-.6.19-.6.19l1,1.08c.67.45.84,1.2.53,2.26l-.39,2-.39,1.44c1.23.31,2-.11,2.24-1.27A2,2,0,0,1,51.58,85l1.85-1,1.12-.34c-.36-.7.2-1,.44-1.54-.32-1.62.15-1.94,1.42-1l1.7-.4,3.14-2.23,1.42-.83A2.27,2.27,0,0,0,63.9,75.3l-.15-2.21c.23-.55,1-.92.66-1.65L63.24,70.1a11.4,11.4,0,0,0-1.1-6.88.53.53,0,0,1-.77-.18l-.06-.79-.8-1.72-1-1a1.54,1.54,0,0,1-1.76-.13L55.91,57.1a2.94,2.94,0,0,1-2.14-1.33l-.05-1.68L51,51.64a3.79,3.79,0,0,1,.23-4.23l1.46-1.17a2.59,2.59,0,0,0,1-2.61,1.27,1.27,0,0,1,1.24-.4l1.41-.36c-.16-1.1,1.45-1,2.31-1.39l1.43-.42s-1-.92-1.65-.92-.6.36-1.2.06-.89-.3-1.19-.48S54,38.65,53.47,38.35s-.12-.84.42-1.67-.12-1.2-.59-1.14-2.33-.35-3.11-.42-1.49-1-2.26-1.07h-.08c-.71,0-.83.85-1.12,1.32Z"/>
                                                <g class="cls-4">
                                                    <rect class="cls-2" x="37.52" y="34.05" width="27.18" height="54.03"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="box_content">
                                            <div class="text">
                                                <!-- <span class="summary" id="txt_1" data-t="1.000.000+">
                                                    </span> -->
                                                <span class="sum">1.000.000+</span>
                                            </div>
                                            <div class="title">
                                                <a  href="" alt="Khách hàng trên toàn quốc">Khách hàng trên toàn quốc</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                           <!--  <div class="read_more">
                                <a href="ct-gioi-thieu-cong-ty.html" title="Giới thiệu Mutosi">Xem thêm Mutosi</a>
                            </div> -->
                        </div>
                        <div class="intro_images">
                            <!-- <span></span>
                                <span></span>
                                <span></span>
                                <span></span> -->
                            <a href="ct-gioi-thieu-cong-ty.html" title="Giới thiệu Mutosi">
                                <img  class="lazy" alt="Giới thiệu Mutosi" data-src="https://theme.hstatic.net/1000286959/1000784865/14/logo_about.png?v=345" data-srcset="https://theme.hstatic.net/1000286959/1000784865/14/logo_about.png?v=345">                   
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div  class="pos4 lazy"style="background-image: url(https://mutosi.com/images/config/Banner-vong-tron-trang-chu-23--4.png.webp); display: block;">
        <div class="container">
            <div class='block_strengths strengths_0 blocks_strengths blocks0 block'  id = "block_id_135" >
                <div class="block_title">
                    <h2>
                    <a href="" title="Bảo vệ gia đình thân yêu bằng Máy lọc nước Quản trị chất lượng theo chuẩn Nhật">
                    <span class="text-left">Bảo vệ gia đình thân yêu bằng</span>
                    <span class="text-right">Máy lọc nước Quản trị chất lượng theo chuẩn Nhật</span>
                    </a>
                </div>
                <div class="block-strengths-round cls">
                    <div class="box_item_strengths-3 cls">
                        <div class="background_round">
                            <img  class="lazy" alt="Điểm mạnh" data-src="https://mutosi.com/images/config/banner-vong-tron-trang-chu---2-10_1586799874_1587626211.png" data-srcset="https://mutosi.com/images/config/banner-vong-tron-trang-chu---2-10_1586799874_1587626211.png.webp">         
                            <div class="item item_1 bg_1">
                                <div class="item_inner">
                                                                              
                                    <div class="svg_icon">
                                        <img  class="lazy" alt="QCVN 6-1:2010/BYT" data-src="{{ asset('images/icon/85.2.png')}}" data-srcset="{{ asset('images/icon/85.2.png')}}">                       
                                    </div>
                                    <div class="box_content">
                                        <div class="title">
                                            <a  href="" title="QCVN 6-1:2010/BYT">
                                                <h3><strong>GIÁM SÁT ĐIỆN TỬ EMS 2.0</strong></h3>
                                                <br>
                                                giúp đồng bộ hoạt động của các bộ phận, theo dõi và cảnh báo tình trạng vận hành của máy.                                                                     
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item item_2 bg_2">
                                <div class="item_inner">
                                    <img  class="lazy img_2" alt="RO SLITEC" data-src="{{ asset('images/banner/v22.png')}}" data-srcset="{{ asset('images/banner/v22.png')}}">                                             
                                    <div class="svg_icon">
                                        <img  class="lazy" alt="RO SLITEC" data-src="{{ asset('images/icon/85.1.png')}}" data-srcset="{{ asset('images/icon/85.1.png')}}">                       
                                    </div>
                                    <div class="box_content">
                                        <div class="title">
                                            <a  href="" title="RO SLITEC">
                                                <h3><strong>MÀNG LỌC RO - SIDE STREAM</strong></h3>
                                                <br>
                                                Màng lọc RO - Side Stream loại sạch các chất kim loại nặng (Asen, chì, thủy ngân...) và vi khuẩn có hại.                                                                   
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item item_3 bg_3">
                                <div class="item_inner">
                                    <img  class="lazy img_3" alt="RO SLITEC" data-src="{{ asset('images/banner/v3.png')}}" data-srcset="{{ asset('images/banner/v3.png')}}">                           
                                    <div class="image_cat">
                                        <img  class="lazy" alt="Tiêu chuẩn nhật" data-src="{{ asset('images/home/Untitled-133.png') }}" data-srcset="{{ asset('images/home/Untitled-133.png') }}">                           
                                    </div>
                                </div>
                            </div>
                            <div class="item item_4 bg_4">
                                <div class="item_inner">
                                    <img  class="lazy img_4" alt="Máy lọc nước" data-src="{{ asset('images/banner/v33.png') }}" data-srcset="{{ asset('images/banner/v33.png') }}">
                                    <div class="svg_icon">
                                        <img  class="lazy" alt="Máy lọc nước" data-src="{{ asset('images/icon/85.3.png')}}" data-srcset="{{ asset('images/icon/85.3.png')}}">                        
                                    </div>
                                    <div class="box_content">
                                        <div class="title">
                                            <a  href="" title="Máy lọc nước">
                                                <h3><strong>Máy lọc nước</strong></h3>
                                                <br>
                                                nâng cao hiệu suất sử dụng, tăng 66% tỷ lệ nước tinh khiết, giảm 56% tỷ lệ nước thải                                                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"> </div>
    <div class="pos5 lazy hello" style="background-image: url(https://mutosi.com/images/config/2-banner-gia-dung-trang-chu-cheo_1588925995.jpg.webp); display: block;">
        <div class="container">
            <div class="block_strengths strengths_0 blocks_strengths_left blocks0 block" id="block_id_130">
                <div class="block_title">
                    <h2><a href="https://mutosi.com/noi-com-dien-pc36.html" title="Máy lọc nước">
                        <span class="text-left">Máy lọc nước</span>
                        
                        </a>
                    </h2>
                </div>
                <div class="strengths_vertical_block cls">
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-l">
                                <div class="svg_icon">
                                    <img class="lazy after-lazy" alt="ems 2.0" src="{{ asset('images/home/852.png') }}" srcset="{{ asset('images/home/852.png') }}" style="display: inline;">                   
                                </div>
                            </div>
                            <div class="item-r">
                                <h3>
                                    <span class="sumamry">
                                       EMS 2.0                                                    
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-l">
                                <div class="svg_icon">
                                    <img class="lazy after-lazy" alt="Màng lọc ro-side strean" src="{{ asset('images/home/851.png') }}" srcset="{{ asset('images/home/851.png') }}" style="display: inline;">                  
                                </div>
                            </div>
                            <div class="item-r">
                                <h3>
                                    <span class="sumamry">
                                       MÀNG LỌC RO - SIDE STREAM                                            
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-l">
                                <div class="svg_icon">
                                    <img class="lazy after-lazy" alt="Máy lọc nước" src="{{ asset('images/home/853.png') }}" srcset="{{ asset('images/home/853.png') }}" style="display: inline;">                  
                                </div>
                            </div>
                            <div class="item-r">
                                <h3>
                                    <span class="sumamry">
                                       MÁY LỌC NƯỚC                                               
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="cat_image">
                        <img class="lazy after-lazy" alt="Nồi cơm điện" src="{{ asset('images/home/b3.png') }}" srcset="{{ asset('images/home/b3.png') }}" style="display: inline;">   
                    </div>
                </div>
            </div>
            <div class="block_strengths strengths_0 blocks_strengths_right blocks0 block" id="block_id_141">
                <div class="block_title">
                    <h2><a href="" title="Thiết bị gia dụng Thiết bị đắc lực tạo nên những món ăn thơm ngon cho gia đình bạn">
                        <span class="text-left">Máy lọc không khí</span>
                        <!-- <span class="text-right">Thiết bị đắc lực tạo nên những món ăn thơm ngon cho gia đình bạn</span> -->
                        </a>
                    </h2>
                </div>
                <div class="strengths_vertical_block cls">
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-l">
                                <div class="svg_icon">
                                    <img class="lazy after-lazy" alt="Giữ chọn" src="{{ asset('images/icon/100.1.png') }}" srcset="{{ asset('images/icon/100.1.png') }}" style="display: inline;">                 
                                </div>
                            </div>
                            <div class="item-r">
                                <h3>
                                    <span class="sumamry">
                                       có chức năng lọc Fomanđêhít                                                
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-l">
                                <div class="svg_icon">
                                    <img class="lazy after-lazy" alt="Sản phẩm bền" src="{{ asset('images/icon/100.2.png') }}" srcset="{{ asset('images/icon/100.2.png') }}" style="display: inline;">                   
                                </div>
                            </div>
                            <div class="item-r">
                                <h3>
                                    <span class="sumamry">
                                       lọc sạch không khí siêu nhanh                                                  
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-l">
                                <div class="svg_icon">
                                    <img class="lazy after-lazy" alt="An toàn và" src="{{ asset('images/icon/100.3.png') }}" srcset="{{ asset('images/icon/100.3.png') }}" style="display: inline;">                 
                                </div>
                            </div>
                            <div class="item-r">
                                <h3>
                                    <span class="sumamry">
                                         Loại bỏ bụi siêu mịn PM2.5                                              
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="cat_image">
                        <img class="lazy after-lazy" alt="Thiết bị gia dụng" src="{{ asset('images/home/b2.png') }}" srcset="{{ asset('images/home/b2.png') }}" style="display: inline;">  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class='main_wrapper  main_wrapper_home  container' >
        <div class="main-area main-area-1col main-area-full">
        </div>
        <div class='clear'></div>
    </div>
    <!-- end.Content -->
    <div  class="bg_pos6 lazy"style="background-image: url(https://mutosi.com/images/config/10-4-landing-page-4_1586533691.jpg.webp); display: block;">
        <div class="pos6 container">
            <div class='block_product_cat product_cat_0 blocks_product_cat blocks0 block'  id = "block_id_129" >
                <div class="block_title"><span class="text-right"><img  class="lazy" alt="Logo" data-src="{{ asset('images/logo.svg') }}" data-srcset="{{ asset('images/logo.svg') }}"></span></div>
                <div class="_content product_cat_slide product_hide">
                    <div class="item " >
                        <a href="#"  title="Chăm sóc nước">
                            <figure>
                                <img  class="lazy" alt="Chăm sóc nước" data-src="{{ asset('images/home/image-mayloc.png') }}" data-srcset="{{ asset('images/home/image-mayloc.png') }}">
                            </figure>
                        </a>
                        <h2> 
                            <a href="#"  title="Máy lọc nước">  <span class="product_title">Máy lọc nước</span> </a>
                        </h2>
                    </div>
                    <div class="item " >
                        <a href="#"  title="Máy lọc không khí">
                            <figure>
                                <img  class="lazy" alt="Máy lọc không khí" data-src="{{ asset('images/home/sticker_phanloai.png') }}" data-srcset="{{ asset('images/home/sticker_phanloai.png') }}">
                            </figure>
                        </a>
                        <h2> <a href="#"  title="Máy lọc không khí">  <span class="product_title">Máy lọc không khí</span> </a></h2>
                    </div>
                    <div class="item " >
                        <a href="#"  title="Máy lọc nước đầu nguồn">
                            <figure>
                                <img  class="lazy" alt="Chăm sóc khí" data-src="{{ asset('images/home/may-loc-dau-nguon.png') }}" data-srcset="{{ asset('images/home/may-loc-dau-nguon.png') }}">
                            </figure>
                        </a>
                        <h2> <a href="#"  title="Máy lọc nước đầu nguồn">  <span class="product_title">Máy lọc nước đầu nguồn</span> </a></h2>
                    </div>
                    <div class="item " >
                        <a href="#"  title="Máy nước nóng">
                            <figure>
                                <img  class="lazy" alt="Chăm sóc môi trường" data-src="{{ asset('images/home/maynuocnong.png') }}" data-srcset="{{ asset('images/home/maynuocnong.png') }}">
                            </figure>
                        </a>
                        <h2> <a href="#"  title="Máy nước nóng">  <span class="product_title">Máy nước nóng</span> </a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="pos7 lazy"style="background-image: url(https://mutosi.com/images/config/shutterstock_421098091_huge_1587957077.png.webp); display: block;">
        <div class="container">
            <div class='block_banners banners-_banner banners_0 block'  id = "block_id_132" >
                <div class="wrapper_banner_home">
                    <div class='banners cls banners-default block_inner block_banner_banner'  >
                        <div class="item">
                            <a rel="nofollow" href="https://mutosi.com/may-loc-khong-khi" title='.'  id="banner_item_93" class="banner_item">
                            <span class="wrapper_ap">
                            <img  class="lazy" alt="." data-src="{{ asset('images/home/banner-sp2.png') }}" data-srcset="{{ asset('images/home/banner-sp2.png') }}">                                                                                                                       <span class="text_ab">
                            .                               </span>
                            </span>
                            </a>
                        </div>
                        <div class="item">
                            <a rel="nofollow" href="https://mutosi.com/may-loc-nuoc" title='.'  id="banner_item_94" class="banner_item">
                            <span class="wrapper_ap">
                            <img  class="lazy" alt="." data-src="{{ asset('images/home/banner-sp1.png') }}" data-srcset="{{ asset('images/home/banner-sp1.png') }}">                                                                                                                       <span class="text_ab">
                            .                               </span>
                            </span>
                            </a>
                        </div>
                        <div class="item">
                            <a rel="nofollow" href="https://mutosi.com/cay-nuoc-nong-lanh" title='..'  id="banner_item_95" class="banner_item">
                            <span class="wrapper_ap">
                            <img  class="lazy" alt=".." data-src="{{ asset('images/home/banner-sp.png') }}" data-srcset="{{ asset('images/home/banner-sp.png') }}">                                                                                                                      <span class="text_ab">
                            ..                              </span>
                            </span>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class='block_products_home products_home-_products_list products_home_1 block'  id = "block_id_137" >
                <div class="wapper-content-page product_home_content">
                    <div class="cat_item_store cat_p">
                        <div class="products_home_slideshow" id="products_home_slideshow" >
                            <!--    EACH Product                -->
                            <div  class="item">
                                <div class="frame_inner">
                                    <figure class="product_image ">
                                        <a href="https://mutosi.com/may-loc-nuoc-thong-minh-truesmart-mp-ts100/" title='Máy lọc nước thông minh TrueSMART MP-TS100'>
                                        <img  class="owl-lazy" alt="Máy lọc nước thông minh TrueSMART MP-TS100" data-src="https://mutosi.com/images/products/2022/03/15/large/ts100_1-1_1647326546.png" data-srcset="https://mutosi.com/images/products/2022/03/15/large/ts100_1-1_1647326546.png.webp">                    </a>
                                    </figure>
                                </div>
                                <!-- end .frame_inner -->   
                                <div class="frame_right">
                                    <h2>
                                        <a href="https://mutosi.com/may-loc-nuoc-thong-minh-truesmart-mp-ts100/" title = "Máy lọc nước thông minh TrueSMART MP-TS100" class="name" >
                                        Máy lọc nước thông minh TrueSMART MP-TS100                      
                                        </a>
                                    </h2>
                                    <div class="summary">   
                                        Cảnh b&aacute;o thay l&otilde;i theo điều kiện sử dụng thực tế&nbsp;
                                        Chẩn đo&aacute;n v&agrave; th&ocirc;ng b&aacute;o kịp thời t&igrave;nh trạng hoạt động của to&agrave;n bộ m&aacute;y&nbsp;
                                        Loa th&ocirc;ng b&aacute;o bằng giọng n&oacute;i về t&igrave;nh trạng hoạt động của to&agrave;n bộ m&aacute;y&nbsp;
                                        Đ&egrave;n cảnh b&aacute;o thay l&otilde;i biến đổi m&agrave;u sắc, dễ d&agrave;ng nhận...              
                                    </div>
                                    <div class="read_more">
                                        <a href="https://mutosi.com/may-loc-nuoc-thong-minh-truesmart-mp-ts100/" title="Chi tiết">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div  class="item">
                                <div class="frame_inner">
                                    <figure class="product_image ">
                                        <a href="https://mutosi.com/may-loc-nuoc-mutosi-9-loi-enrolas-mp-e91s/" title='Máy lọc nước Mutosi 9 lõi Enrolas MP-E91S'>
                                        <img  class="owl-lazy" alt="Máy lọc nước Mutosi 9 lõi Enrolas MP-E91S" data-src="https://mutosi.com/images/products/2022/03/15/large/e91s_1-1_1647326723.png" data-srcset="https://mutosi.com/images/products/2022/03/15/large/e91s_1-1_1647326723.png.webp">                   </a>
                                    </figure>
                                </div>
                                <!-- end .frame_inner -->   
                                <div class="frame_right">
                                    <h2>
                                        <a href="https://mutosi.com/may-loc-nuoc-mutosi-9-loi-enrolas-mp-e91s/" title = "Máy lọc nước Mutosi 9 lõi Enrolas MP-E91S" class="name" >
                                        Máy lọc nước Mutosi 9 lõi Enrolas MP-E91S                       
                                        </a>
                                    </h2>
                                    <div class="summary">   
                                        C&ocirc;ng nghệ hồi lưu tinh khiết ENROLAS Bảo vệ m&agrave;ng RO khỏi t&aacute;c nh&acirc;n g&acirc;y tắc m&agrave;ng, n&acirc;ng cao tỉ lệ&nbsp;thu hồi nước tinh khiết, k&eacute;o d&agrave;i tuổi thọ m&agrave;ng RO.
                                        Hiển thị chỉ số tinh khiết của nguồn nước theo thời gian thực.
                                        Sử dụng m&agrave;ng RO Mutosi C&ocirc;ng...             
                                    </div>
                                    <div class="read_more">
                                        <a href="https://mutosi.com/may-loc-nuoc-mutosi-9-loi-enrolas-mp-e91s/" title="Chi tiết">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div  class="item">
                                <div class="frame_inner">
                                    <figure class="product_image ">
                                        <a href="https://mutosi.com/may-loc-nuoc-mutosi-10-loi-mp-2100s-nc/" title='Máy lọc nước Mutosi 10 lõi MP-2100S-NC'>
                                        <img  class="owl-lazy" alt="Máy lọc nước Mutosi 10 lõi MP-2100S-NC" data-src="https://mutosi.com/images/products/2021/05/15/large/290-260x480_1621072730.png" data-srcset="https://mutosi.com/images/products/2021/05/15/large/290-260x480_1621072730.png.webp">                    </a>
                                    </figure>
                                </div>
                                <!-- end .frame_inner -->   
                                <div class="frame_right">
                                    <h2>
                                        <a href="https://mutosi.com/may-loc-nuoc-mutosi-10-loi-mp-2100s-nc/" title = "Máy lọc nước Mutosi 10 lõi MP-2100S-NC" class="name" >
                                        Máy lọc nước Mutosi 10 lõi MP-2100S-NC                      
                                        </a>
                                    </h2>
                                    <div class="summary">   
                                        Xử l&yacute; nguồn nước nhiều ion kim loại cứng
                                        Hệ thống lọc 10 cấp mạnh mẽ.&nbsp;
                                        Sử dụng m&agrave;ng RO Mutosi C&ocirc;ng nghệ Slitec ti&ecirc;n tiến, đạt ti&ecirc;u chuẩn NFS/ANSI 58 &ndash; Ti&ecirc;u chuẩn to&agrave;n cầu cho m&agrave;ng lọc RO;
                                        L&otilde;i chức năng bổ sung c&aacute;c vi kho&aacute;ng c&oacute; lợi, l&agrave;m tăng...              
                                    </div>
                                    <div class="read_more">
                                        <a href="https://mutosi.com/may-loc-nuoc-mutosi-10-loi-mp-2100s-nc/" title="Chi tiết">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div  class="item">
                                <div class="frame_inner">
                                    <figure class="product_image ">
                                        <a href="https://mutosi.com/cay-nuoc-nong-lanh-mutosi-md-450ro/" title='Cây nước nóng lạnh Mutosi MD-450RO'>
                                        <img  class="owl-lazy" alt="Cây nước nóng lạnh Mutosi MD-450RO" data-src="https://mutosi.com/images/products/2020/12/23/large/untitled-2_1608709554.png" data-srcset="https://mutosi.com/images/products/2020/12/23/large/untitled-2_1608709554.png.webp">                  </a>
                                    </figure>
                                </div>
                                <!-- end .frame_inner -->   
                                <div class="frame_right">
                                    <h2>
                                        <a href="https://mutosi.com/cay-nuoc-nong-lanh-mutosi-md-450ro/" title = "Cây nước nóng lạnh Mutosi MD-450RO" class="name" >
                                        Cây nước nóng lạnh Mutosi MD-450RO                      
                                        </a>
                                    </h2>
                                    <div class="summary">   
                                        T&iacute;ch hợp c&ocirc;ng nghệ lọc nước RO
                                        Hệ thống lọc RO 8&nbsp;cấp, sử dụng m&agrave;ng lọc RO Mutosi C&ocirc;ng nghệ Slitec đột ph&aacute;, mang lại nguồn nước sau lọc đạt chuẩn Quốc gia nước uống trực tiếp.
                                        L&agrave;m lạnh s&acirc;u, giữ lạnh l&acirc;u với block Danfu si&ecirc;u bền, nhiệt độ l&agrave;m lạnh:...              
                                    </div>
                                    <div class="read_more">
                                        <a href="https://mutosi.com/cay-nuoc-nong-lanh-mutosi-md-450ro/" title="Chi tiết">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!--    end EACH Product                -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pos8 cls" >
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
                    <div style="background-color:#21793D" class='banners_wrapper cls banners-default_wrapper block_inner block_banner_banner'  >
                        <div class="item">
                            
                            <div class="wrapper_text" style="background-color:#21793D">
                                <div class="item">
                                    <div class="text_ab">
                                        <h2>DỊCH VỤ BẢO HÀNH ĐIỆN TỬ</h2>
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
            <div class="header_r head-t" style="background-color:#21793D">          
            </div>
        </div>
    </div> -->
    <div class="clear"></div>
    <div class="pos9" >
        <div class="container">
            <div class='block_newslist_home newslist_home-_news_list newslist_home_0 block'  id = "block_id_138" >
                <div class="block_title">
                    <h2>
                    <p><span>Tin tức & Sự kiện</span></p>
                </div>
                <div class="list_menu_cat">
                    <div class="cat_new_ss scroll_bar_m">
                        <ul class='cat-title '>
                            <li class='cat-title-main activated cat-title_0  ' id="title_12" >Mới nhất</li>
                            <li class='cat-title-main cat-title_0  ' id="title_12" ><a class="cat-title-acc" href="https://mutosi.com/danh-muc-tin/ho-tro-khach-hang"  title="Hỗ trợ khách hàng">Hỗ trợ khách hàng</a></li>
                            <li class='cat-title-main cat-title_1  ' id="title_14" ><a class="cat-title-acc" href="https://mutosi.com/danh-muc-tin/ban-tin-mutosi"  title="Báo chí đưa tin">Báo chí đưa tin</a></li>
                            <li class='cat-title-main cat-title_2  ' id="title_13" ><a class="cat-title-acc" href="https://mutosi.com/danh-muc-tin/tin-san-pham"  title="Tin sản phẩm">Tin sản phẩm</a></li>
                            <li class='cat-title-main cat-title_3  ' id="title_15" ><a class="cat-title-acc" href="https://mutosi.com/danh-muc-tin/kinh-nghiem-hay"  title="Kinh nghiệm hay">Kinh nghiệm hay</a></li>
                            <li class='cat-title-main cat-title_4  ' id="title_17" ><a class="cat-title-acc" href="https://mutosi.com/danh-muc-tin/trach-nhiem-xa-hoi"  title="Trách nhiệm xã hội">Trách nhiệm xã hội</a></li>
                            <li class='cat-title-main cat-title_5  ' id="title_19" ><a class="cat-title-acc" href="https://mutosi.com/danh-muc-tin/tin-mutosi"  title="Tin MUTOSI">Tin MUTOSI</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div class='news_list_large cls dis_js_news'>
                    <div  class=" news_highlight" >
                        <div class="img_large">
                            <a href="https://mutosi.com/tin-khuyen-mai/khai-truong-showroom-anmoga--uu-dai-len-toi-50/" title='KHAI TRƯƠNG SHOWROOM ANMOGA – ƯU ĐÃI LÊN TỚI 50%'  >
                            <img  class="lazy" alt="KHAI TRƯƠNG SHOWROOM ANMOGA – ƯU ĐÃI LÊN TỚI 50%" data-src="https://mutosi.com/images/news/2022/04/30/large/anh-ngang-1_1651309185.jpg" data-srcset="https://mutosi.com/images/news/2022/04/30/large/anh-ngang-1_1651309185.jpg.webp">    </a>
                        </div>
                        <div class="text">
                            <div class="text_lage">
                                <h3>
                                    <a href="https://mutosi.com/tin-khuyen-mai/khai-truong-showroom-anmoga--uu-dai-len-toi-50/" title = "KHAI TRƯƠNG SHOWROOM ANMOGA – ƯU ĐÃI LÊN TỚI 50%" class="name" >
                                    KHAI TRƯƠNG SHOWROOM ANMOGA – ƯU ĐÃI LÊN TỚI 50%          </a> 
                                </h3>
                            </div>
                            <div class="summary_news">
                                Nhằm mang tới trải nghiệm tuyệt vời, gi&uacute;p Qu&yacute; kh&aacute;ch h&agrave;ng thuận tiện mua sắm, bảo h&agrave;nh v&agrave; bảo tr&igrave; sản phẩm,&nbsp;Mutosi th&ocirc;ng b&aacute;o ch&iacute;nh...            
                            </div>
                        </div>
                    </div>
                    <div class='grid  cls'>
                        <div  class=" item item_1" >
                            <div class="img_large">
                                <a href="https://mutosi.com/tin-khuyen-mai/may-moi-het-y---uu-dai-me-ly-doi-di-cho-chi/" title='MÁY MỚI HẾT Ý - ƯU ĐÃI MÊ LY - ĐỔI ĐI CHỜ CHI!'  >
                                <img  class="lazy" alt="MÁY MỚI HẾT Ý - ƯU ĐÃI MÊ LY - ĐỔI ĐI CHỜ CHI!"itemprop="image" data-src="https://mutosi.com/images/news/2022/04/15/resized/z3341820433241_b4a2595361f4605496ffc6f653fd4087_1649996991.jpg" data-srcset="https://mutosi.com/images/news/2022/04/15/resized/z3341820433241_b4a2595361f4605496ffc6f653fd4087_1649996991.jpg.webp">    </a>
                            </div>
                            <div class="text">
                                <div class="text_lage">
                                    <h3>
                                        <a href="https://mutosi.com/tin-khuyen-mai/may-moi-het-y---uu-dai-me-ly-doi-di-cho-chi/" title = "MÁY MỚI HẾT Ý - ƯU ĐÃI MÊ LY - ĐỔI ĐI CHỜ CHI!" class="name" >
                                        MÁY MỚI HẾT Ý - ƯU ĐÃI MÊ LY - ĐỔI ĐI CHỜ CHI!                      </a> 
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div  class=" item item_2" >
                            <div class="img_large">
                                <a href="https://mutosi.com/tin-khuyen-mai/minigame_follow-het-minh---rinh-qua-okelaz/" title='[MINIGAME] FOLLOW HẾT MÌNH - RINH QUÀ OKELAZ'  >
                                <img  class="lazy" alt="[MINIGAME] FOLLOW HẾT MÌNH - RINH QUÀ OKELAZ"itemprop="image" data-src="https://mutosi.com/images/news/2022/01/26/resized/follow-het-minh_1643190927.jpg" data-srcset="https://mutosi.com/images/news/2022/01/26/resized/follow-het-minh_1643190927.jpg.webp">    </a>
                            </div>
                            <div class="text">
                                <div class="text_lage">
                                    <h3>
                                        <a href="https://mutosi.com/tin-khuyen-mai/minigame_follow-het-minh---rinh-qua-okelaz/" title = "[MINIGAME] FOLLOW HẾT MÌNH - RINH QUÀ OKELAZ" class="name" >
                                        [MINIGAME] FOLLOW HẾT MÌNH - RINH QUÀ OKELAZ                      </a> 
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div  class=" item item_3" >
                            <div class="img_large">
                                <a href="https://mutosi.com/tin-mutosi/su-kien-ra-mat-mutosi-truesmart--khai-mo-chuan-moi-cua-may-loc-nuoc-viet-nam/" title='Sự kiện ra mắt Mutosi TrueSMART – Khai mở chuẩn mới của máy lọc nước Việt Nam'  >
                                <img  class="lazy" alt="Sự kiện ra mắt Mutosi TrueSMART – Khai mở chuẩn mới của máy lọc nước Việt Nam"itemprop="image" data-src="https://mutosi.com/images/news/2021/12/28/resized/truesmart-01_1640674128.jpg" data-srcset="https://mutosi.com/images/news/2021/12/28/resized/truesmart-01_1640674128.jpg.webp">    </a>
                            </div>
                            <div class="text">
                                <div class="text_lage">
                                    <h3>
                                        <a href="https://mutosi.com/tin-mutosi/su-kien-ra-mat-mutosi-truesmart--khai-mo-chuan-moi-cua-may-loc-nuoc-viet-nam/" title = "Sự kiện ra mắt Mutosi TrueSMART – Khai mở chuẩn mới của máy lọc nước Việt Nam" class="name" >
                                        Sự kiện ra mắt Mutosi TrueSMART – Khai mở chuẩn mới của máy lọc...                      </a> 
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div  class=" item item_4" >
                            <div class="img_large">
                                <a href="https://mutosi.com/tin-mutosi/minigame-ra-mat-may-loc-nuoc-truesmart/" title='[MINIGAME] RA MẮT MÁY LỌC NƯỚC TRUESMART'  >
                                <img  class="lazy" alt="[MINIGAME] RA MẮT MÁY LỌC NƯỚC TRUESMART"itemprop="image" data-src="https://mutosi.com/images/news/2021/12/28/resized/z3057899528087_3006fe77b9e3165b34fda15ffe21d553_1640691306.jpg" data-srcset="https://mutosi.com/images/news/2021/12/28/resized/z3057899528087_3006fe77b9e3165b34fda15ffe21d553_1640691306.jpg.webp">    </a>
                            </div>
                            <div class="text">
                                <div class="text_lage">
                                    <h3>
                                        <a href="https://mutosi.com/tin-mutosi/minigame-ra-mat-may-loc-nuoc-truesmart/" title = "[MINIGAME] RA MẮT MÁY LỌC NƯỚC TRUESMART" class="name" >
                                        [MINIGAME] RA MẮT MÁY LỌC NƯỚC TRUESMART                      </a> 
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <input type='hidden'  name="return" value="Lw=="/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection