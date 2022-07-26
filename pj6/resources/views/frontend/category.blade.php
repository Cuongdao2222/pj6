@extends('frontend.layouts.app')
@section('content') 
<link rel="stylesheet" href="{{ asset('css/import/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/import/category.css') }}?ver=1 ">


<link rel="stylesheet" type="text/css" href="{{ asset('css/import/categories.css') }}"> 

<link rel="stylesheet" type="text/css" href="{{ asset('css/import/main.css') }}"> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/import/apps.css') }}">
<link rel="stylesheet" href="{{ asset('css/import/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/main1.css') }}">

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

   <section id="categoryPage" class="desktops" data-id="1942" data-name="Tivi" data-template="cate">
        <div class="box-sort ">
            @if(isset($data))
            <p class="sort-total"><b>{{ $numberdata }}</b> Sản phẩm <strong class="manu-sort"></strong></p>

            @endif
            <div class="sort-select ">
                <label for="standard-select">Xếp theo</label>
                <div class="select">
                  <select id="sort-by-option">
                    <option value="id">Nổi bật</option>
                    <option value="asc">Giá tăng dần</option>
                    <option value="desc">Giá giảm dần</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container-productbox">
            <!-- <div id="preloader">
                <div id="loader"></div>
            </div> -->
            <div class="row list-pro">
                @if(isset($data))
                <?php $arr_id_pro = []; ?>
               
                @foreach($data as $value)
                    @if($value->active==1)
                        <?php   

                            $id_product = $value->id;
                            array_push($arr_id_pro, $id_product);


                            $check_deal = App\Models\deal::select('deal_price','start', 'end')->where('product_id', $value->id)->where('active', 1)->first();

                            $deal_check_add = false;


                            
                            if(!empty($check_deal) && !empty(!empty($check_deal->deal_price))){
                                 $now  = Carbon\Carbon::now();
                                $timeDeal_star = $check_deal->start;
                                $timeDeal_star =  \Carbon\Carbon::create($timeDeal_star);
                                $timeDeal_end = $check_deal->end;
                                $timeDeal_end =  \Carbon\Carbon::create($timeDeal_end);
                                $timestamp = $now->diffInSeconds($timeDeal_end);

                                if($now->between($timeDeal_star, $timeDeal_end)){
                                   
                                    $value->Price = $check_deal->deal_price;
                                    
                                }
                            
                                
                            
                            }
                        ?>

                    <div class="col-md-3 col-6 lists">
                        <div class="item  __cate_1942">
                            <a href='{{ route("details", $value->Link ) }}' data-box="BoxCate" class="main-contain">
                                <span class="icon_tragop">Trả góp <i>0%</i></span>
                                <div class="item-img item-img_1942">
                                    <img class="lazyload thumb" data-src="{{ asset($value->Image) }}" alt="{{ $value->Name }}" style="width:100%"> 
                                </div>
                                <div class="items-title">
                                    
                                    <h3 >
                                        {{ $value->Name  }}
                                    </h3>

                                    @if(!empty($id_cate) && $id_cate<5)
                                    <?php
                                        
                                            if($id_cate == 1){
                                                $searchstring = 'inch';
                                            }
                                            else{
                                                $searchstring = 'inverter';
                                            }
                                           
                                        $infoName  = str_replace($value->ProductSku,'', strstr($value->Name, $value->ProductSku));

                                        $infoName = str_replace($value->ProductSku,'', $infoName);

                                        if(!empty($infoName)){
                                            $arNames = [];
                                            if(strpos($value->Name, $searchstring)){

                                                $arNames = explode($searchstring, $infoName);

                                            }
                                        }
                                    ?>

                                    <div class="item-compare">
                                        @if(!empty($arNames))
                                        <span>{{ @$arNames[0] }} {{ !empty($arNames)?$searchstring:'' }}</span>
                                        <span>{{ @$arNames[1] }}</span>
                                        @endif
                                        
                                    </div>
                            
                                    @endif
                                  
                                    <?php 

                                        if($value->Price =='Liên hệ'){
                                            $value->Price = 0;
                                        }

                                    ?>
                                    
                                    <strong class="price">{{ $value->Price==0?'Liên hệ':number_format(str_replace("\xc2\xa0",'',$value->Price) , 0, ',', '.')}}{{ $value->Price!=0?'đ':''   }}</strong>
                                    <!-- <p class="item-gift">Quà <b>1.500.000₫</b></p> -->
                                    <div class="item-rating">
                                        <p>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                           
                                        </p>
                                       <!--  <p class="item-rating-total">56</p> -->
                                    </div>

                                    <?php
                                        // check quà phần tìm kiếm sản phẩm
                                        if(empty($id_cate)){

                                            $groupProduct = App\Models\groupProduct::select('name', 'link', 'product_id','id')->where('level', 0)->get();

                                            foreach($groupProduct as $groupProducts ){

                                                if(!empty(json_decode($groupProducts->product_id))){

                                                    if(in_array($value->id,json_decode($groupProducts->product_id))){

                                                       

                                                        $id_cate =  $groupProducts->id;

                                                        
                                                    }
                                                }
                                            }

                                          

                                        }


                                        $gift = gift($id_product);

                                        if(!empty($id_cate)){
                                            if(empty($gift)){
                                                $gift = groupGift($id_cate);
                                                
                                                if(empty($gift)){

                                                    $gift =[];
                                                }
                                            }
                                        } 

                                    ?>
                                    
                                   
                                    @if(!empty($gift)&&!$check_deal)

                                        <?php 
                                            $gifts = $gift['gifts'];
                                            $gift = $gift['gift']; 

                                        ?>

                                        {{ $gifts->type ==1?'k/m chọn 1 trong 2':'' }}
                                        <div class="option-gift">

                                             @foreach($gift as $gifts)

                                            <div class="quatang"><img src="{{ asset($gifts->image) }}"></div>
                                            @endforeach
                                        </div>
                                       
                                    @endif

                                </div>
                                
                            </a>
                            <div class="item-bottom">
                                <a href="#" class="shiping"></a>
                            </div>
                           <!--  <a href="javascript:void(0)" class="item-ss">
                                <i></i>
                                So sánh
                            </a> -->
                        </div>
                    </div>
                    @endif
                @endforeach


                 <span class="lists-id">{{ json_encode($arr_id_pro) }}</span>
                  
               
               @else   

                <div style="margin-left: 20px;">
                    <h2>Không tìm thấy sản phẩm</h2>
                </div>
                
                @endif


            </div>
            <!-- <div class="view-more ">
                <a href="javascript:;">Xem thêm <span class="remain">133</span> Tivi</a>
            </div> -->
        </div>


      
        <div class="errorcompare" style="display:none;"></div>
       <!--  <div class="block__banner banner__topzone">
            <a data-cate="0" data-place="1919" href="https://www.topzone.vn/" onclick="jQuery.ajax({ url: '/bannertracking?bid=48557&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2021/12/banner/Frame4879-1200x120.jpg" alt="Promote Topzone" width="1200" height="120"></a>
        </div> -->
        <div class="watched"></div>
        <div class="overlay"></div>

       
        @if(\Request::route()->getName()!='search-product-frontend' && !empty($data))

        {{ @$data->links() }}

        @endif
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

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    @if(!empty($gift) && $gifts->type ==1)
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
          } else {
            $box.prop("checked", false);
          }
    });
    @endif
    var gift_check = ''
    @if(!empty($gift) && $data->Quantily>0 && $deal_check_add==false)  
    gift_check  = '{{ $gift[0]->name }}';
    $('#gift_checked').val(gift_check);
    $('input[type="checkbox"]').click(function(){
            if($(this).is(":checked")){
                gift_check = $(this).val();
               
            }

            $('#gift_checked').val(gift_check);
           
        });
    @endif

    $( document ).ready(function() {
        $('.box01 a').fancybox();
    
        $('.star-click').bind('click',function(){
            id_star = $(this).attr('id');    
            number_star = id_star.substr(5, 6);
            $('#star_number').val(number_star);
            // console.log(number_star);
           
        });
    
        $("#rate-form").validate({
            rules: {
                name: "required",
                content: "required",
                email: {
                    required: true,
                    email: true
                },
               
            },
             messages: {
                name: "vui lòng nhập tên",
                content: "vui lòng nhập đánh giá",
               
                email: {
                    required: "vui lòng nhập địa chỉ email",
                    email: "vui lòng nhập đúng định dạng email"
                },
              
            },
            submitHandler: function(form) {
                
              postComment();
    
            }
           
    
        }); 
    
    });  
    
    
    function postComment() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('rate-form') }}",
            data: {
                product_id: {{ $data->id??'' }},
                email:$('#email0').val(),
                name:$('#name0').val(),
                content:$('#content0').val(),
                star:$('#star_number').val(),
                   
            },
            success: function(result){
    
                $('.comments-rate').text('Đã gửi bình luận');
                $('.comments-rate').val('Đã gửi bình luận');
    
                $('#email0').val('');
                $('#name0').val('');
                $('#content0').val('');
              
              alert(result);
            }
        });
    
    }  
    
    
    // chức năng sản phẩm đã xem
    
    
    function toUniqueArray(a){
        var newArr = [];
        for (var i = 0; i < a.length; i++) {
            if (newArr.indexOf(a[i]) === -1) {
                newArr.push(a[i]);
            }
        }
      return newArr;
    }
    
    product_id_item_viewer = [];
    
    const item_local_store =  JSON.parse(localStorage.getItem('viewed_product'));
    
    if(item_local_store !=null){
    
        product_id_item_viewer = item_local_store;
    }
    
    product_id_item_viewer.push('{{ $data->id??'' }}');
    
    product_id_item_viewer = toUniqueArray(product_id_item_viewer);

     product_id_item_viewer.slice(0, 6);

    
    localStorage.setItem('viewed_product', JSON.stringify(product_id_item_viewer));
    
    view_product_id = localStorage.getItem('viewed_product');

    
    button_buy_height = $('.scroll-box').offset().top;
    view_more_height  = ($('.view-more-related').offset().top);
 
                
    $(".show-more span").bind("click", function(){
        $('.content').css({'height':'auto', 'overflow':'auto' });
        $(this).hide();
        view_more_height  = $('.view-more-related').offset().top-100;
    });
    
    $(function(){
        $(window).scroll(function(){
            const scroll_result = $('.total-imgslider').offset().top
            const scroll_browser = $(this).scrollTop();
    
            if(scroll_browser>= scroll_result &&scroll_browser <= view_more_height){
    
                $(".prod-info").show();
                
            }
            else{
                $(".prod-info").hide();
            }
    
        });
    });
    
</script>
<script type="text/javascript">

   
    $('.bar-top-left').hide();

     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: "{{ route('show-viewed-product') }}",
        data: {
            product_id: view_product_id
               
        },
        success: function(result){
           // numberCart = result.find($("#number-product-cart").text());
           $('.viewer-product').append(result);
           
        }
    });    
    
    function addToCart(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('cart') }}",
            data: {
                product_id: id,
                gift_check:$('#gift_checked').val()
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){
    
               //  numberProductCart = $(".number-cart").text();
    
               //  console.log(numberProductCart);
               
               // numberCart = result.find(numberProductCart);
    
                $('#tbl_list_carts').append(result);
    
                const numberCart = $('#number-product-cart').text();
    
                $('.number-cart').text(numberCart);
    
                $('#exampleModal').modal('show'); 
                $('.loader').hide();
                
            }
        });
        
    }

     function addCartFast(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('addcartfast') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
    
                $('.number-cart').text(result);
                alert('Thêm sản phẩm vào giỏ hàng thành công !');

            }
        });
        
    }


    
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
    
    
    
    
    $('.listproduct').owlCarousel({
        loop:true,
    
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1.5
            },
            600:{
                items:1.5
            },
            1000:{
                items:5
            }
        }
    });

    @if(!empty($text))

        // đếm thời gian 

         //document.getElementById('svg').innerHTML = xmlSvg;
                                        
        time = '{{ @$timestamp }}';
        number_deal_product =10;
        //in time 
        var h = 12;
        var i = 0;
        var s = 0;
    
        amount = time //calc milliseconds between dates
        days = 0;
        hours = 0;
        mins = 0;
        secs = 0;
        out = "";
    
    
        hours = Math.floor(amount / 3600);
        amount = amount % 3600;
        mins = Math.floor(amount / 60);
        amount = amount % 60;
        secs = Math.floor(amount);
            
            
    
    
        //time run 
        if(parseInt(time)>0 && parseInt(number_deal_product)>0){
         h = hours;
          m = mins;
          s = secs;
        }   
        else{
            let today =  new Date();
            h = 99 - parseInt(today.getHours());
            m = 59 - parseInt(today.getMinutes());
            s = 59 - parseInt(today.getSeconds());
            
        }

        start();    
        function start()
        {

              /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
              if (h === null)
              {
                  h = parseInt($('.hour').text());

              }

              /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
              // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
              //  - giảm số phút xuống 1 đơn vị
              //  - thiết lập số giây lại 59
              if (s === -1){
                  m -= 1;
                  s = 59;
              }

              // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
              //  - giảm số giờ xuống 1 đơn vị
              //  - thiết lập số phút lại 59
              if (m === -1){
                  h -= 1;
                  m = 59;
              }

              // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
              //  - Dừng chương trình
              //if (h == -1){

                 //clearTimeout(timeout);
                 //$('#timer-391923717').hide();
                  //return false;


              //}



              /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/



              var hour =  h.toString();

              var seconds =  s.toString();

              var minutes =  m.toString();



              // $('.hourss').text(h<10?'0'+hour:''+hour);
              // $('.secondss').text(s<10?'0'+seconds:''+seconds);
              // $('.minutess').text(m<10?'0'+minutes:''+minutes);

            let currentHour = h<10?'0'+hour:''+hour;
            let currentMinutes = m<10?'0'+minutes:''+minutes;
            let currentSeconds = s<10?'0'+seconds:''+seconds;

    
            let currentTimeStr =currentHour + ":" + currentMinutes + ":" + currentSeconds;

          

            $('.clock').html(currentTimeStr);

              // Insert the time string inside the DOM
           

              /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
              timeout = setTimeout(function(){
                  s--;
                  start();


              }, 1000);
        }
    @endif    
</script>
@endpush

@endsection