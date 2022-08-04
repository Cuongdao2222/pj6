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
<style type="text/css">
    .navigation_main_wrapper{
        background-color: #157939 !important;
    }
    .by_fastform{
        background-color: #21793D !important;
    }
</style>

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