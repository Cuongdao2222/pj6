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
<link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">


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
 @push('script')   
<script type="text/javascript">
     $(".show-more span").bind("click", function(){
        $('.content').css({'height':'auto', 'overflow':'auto' });
        $(this).hide();
        view_more_height  = $('.view-more-related').offset().top-100;
    });
</script>    
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
@endpush
@endsection

