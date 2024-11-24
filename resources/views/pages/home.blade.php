@extends('layouts.layout')
@section('title', 'Hệ thống cửa hàng - GoFood')
@section('content')
<div class="app__container">
    <div class="groupimg">

        <div class="groupimg-left">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/public/frontend/images/1.jpg')}}" class="d-block" loading="lazy" style="width:100%;height: 500px;">
                        <div class="carousel-caption" style="color:#000; width:33%;top:20%;">
                            <h3 style="font-size:4em;font-weight:bold;">Stay home & delivered your <font color="0da487">Daily Needs</font> </h3>
                            <p style="font-size:24px;font-weight:300;">Many organizations have issued official statements encouraging people to reduce their intake of sugary drinks.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/public/frontend/images/2.jpg')}}" class="d-block" loading="lazy" style="width: 100%; height: 500px;">
                        <div class="carousel-caption" style="color:#000; width:33%;top:20%;">
                            <h3 style="font-size:4em;font-weight:bold;">Stay home & delivered your <font color="0da487">Daily Needs</font> </h3>
                            <p style="font-size:24px;font-weight:300;">Many organizations have issued official statements encouraging people to reduce their intake of sugary drinks.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/public/frontend/images/slider-3.png')}}" class="d-block" loading="lazy" style="width: 100%; height: 500px;">
                        <div class="carousel-caption" style="color:#000; width:33%;top:20%;">
                            <h3 style="font-size:4em;font-weight:bold;">Stay home & delivered your <font color="0da487">Daily Needs</font> </h3>
                            <p style="font-size:24px;font-weight:300;">Many organizations have issued official statements encouraging people to reduce their intake of sugary drinks.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/public/frontend/images/sl1.png')}}" loading="lazy" class="d-block" style="width: 100%; height: 500px;">
                        <div class="carousel-caption" style="color:#000; width:33%;top:20%;">
                            <h3 style="font-size:4em;font-weight:bold;">Stay home & delivered your <font color="0da487">Daily Needs</font> </h3>
                            <p style="font-size:24px;font-weight:300;">Many organizations have issued official statements encouraging people to reduce their intake of sugary drinks.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/public/frontend/images/slider-4.png')}}" loading="lazy" class="d-block" style="width: 100%; height: 500px;">                   <div class="carousel-caption" style="color:#000; width:33%;top:20%;">
                            <h3 style="font-size:4em;font-weight:bold;">Stay home & delivered your <font color="0da487">Daily Needs</font> </h3>
                            <p style="font-size:24px;font-weight:300;">Many organizations have issued official statements encouraging people to reduce their intake of sugary drinks.</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>


        </div>


    </div>
    <div class="grid">

        <div class="groupcate">
            <div class="namegroup">Nhóm hàng thường mua</div>
            <div class="listgroup">
                <a href="#">
                    <img src="{{asset('/public/frontend/images/thietheo.png')}}" alt="">
                    <span>Thịt heo</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/kem.png')}}" alt="">
                    <span>Kem</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/nuocmam.png')}}" alt="">
                    <span>Nước mắm</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/sua.png')}}" alt="">
                    <span>Sữa tươi</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/nuocngot.png')}}" alt="">
                    <span>Nước ngọt</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/rau.png')}}" alt="">
                    <span>Rau , củ , nấm , trái cây</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/btt.png')}}" alt="">
                    <span>Bánh trung thu</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/my.png')}}" alt="">
                    <span>Mỳ ăn liền</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/chagi.png')}}" alt="">
                    <span>Chả giò , chả rem</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/bo.jpg')}}" alt="">
                    <span>Bơ xanh</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/chuoi.jpg')}}" alt="">
                    <span>Chuối vàng</span>
                </a>
                <a href="#">
                    <img src="{{asset('/public/frontend/images/gaolut.jpg')}}" alt="">
                    <span>Gạo lứt</span>
                </a>
            </div>
        </div>
        <div class="grid__row">

            <div class="grid__column-12">
                <div class="home-filter green">
                    <span class="home-filter__label bg-label">Gian hàng sản phẩm</span>

                </div>
                <div class="home-product">
                    <div class="grid__row">
                        @foreach($products as $product)
                        <div class="grid__column-2-5">

                            <a href="chitietsanpham.html" class="home-product-item" >
                              <div class="product-item__img" style="background-image: url({{asset('/public/frontend/images/'.$product->hinh_sanpham)}});">
                               
                              </div>
                              <h4 class="product-item__name">{{$product->ten_sanpham}}</h4>
                              <div class="product-item__price">
                                <span class="product-item__price-old">{{$product->gia_cu}}₫</span>
                                <span class="product-item__price-new">{{$product->gia_moi}}₫</span>
            
                              </div>
                              
                                <div class="product-item__origin">
                                    @if($product->hinh_quatang !=null)
                                    <img src="{{asset('/public/frontend/images/qt5.jpg')}}" alt="" height="30px" width="30px">

                                    <span class="product-item__brand"> Tặng hộp Trà</span>
                                
                                @endif
                                    <span class="product-item-origin-name"></span>
                                  </div>
                              
                              <a href="" class="buyproduct">
                                CHỌN MUA 
                              </a>
                            </a>
                           </div>

                        @endforeach
                      
                    </div>
                
                    {{ $products->links('pagination::bootstrap-4') }}
                 
                </div>




            </div>
            <div class="slider-footer">
                <div class="home-filter">

                    <span class="home-filter__label-br ">💥 GIAN HÀNG VÀ ƯU ĐÃI TỪ HÃNG 💥</span>
                </div>
                <div class="wrapper-img">
                    <i id="btn-left" class="fa-solid fa-angle-left"></i>
                    <div class="carousel-br">
                        <img src="{{asset('/public/frontend/images/br3.jpg')}}" alt="image" draggable="false" loading="lazy">
                        <img src="{{asset('/public/frontend/images/br4.png')}}" alt="image" draggable="false" loading="lazy">
                        <img src="{{asset('/public/frontend/images/br5.jpg')}}" alt="image" draggable="false" loading="lazy">
                        <img src="{{asset('/public/frontend/images/br6.jpg')}}" alt="image" draggable="false" loading="lazy">
                        <img src="{{asset('/public/frontend/images/br2.png')}}" alt="image" draggable="false" loading="lazy">
                        <img src="{{asset('/public/frontend/images/br7.jpg')}}" alt="image" draggable="false" loading="lazy">
                        <img src="{{asset('/public/frontend/images/br8.jpg')}}" alt="image" draggable="false" loading="lazy">

                    </div>
                    <i id="btn-right" class="fa-solid fa-angle-right"></i>
                </div>
            </div>
            <div class="banner-footer containt-img">

                <div class="botleft">
                    <img src="{{asset('/public/frontend/images/banner_ft2.png')}}" alt="" style="width:800px">
                    <div class="desc-bot">
                        <h4>Dịch Vụ Giao Hàng</h4>
                        <p>Giao Hàng Nhanh </p>
                        <p>Tiết Kiệm </p>
                        <p>Gọi Là Có </p>
                        <button class="btns btn--primary" style="border-radius: 3px;"><span style="color: #fff;text-align: center;">Read More</span></button>
                    </div>
                </div>
                <div class="botright"><img src="{{asset('/public/frontend/images/banner_footer1.jpg')}}" alt="" style="width:390px"></div>
            </div>


        </div>

    </div>
    <div class="faq reveal">
        <h2>Câu hỏi thường gặp</h2>
        <ul class="accordions">
            <li>
                <button class="btn-acc">
                    <span>Tôi phải vào GoFood bằng cách nào?</span>
                </button>
                <div class="contents-text">
                    <p>
                        Truy cập website bằng trình duyệt www.GoFood.com
                    </p>
                </div>

            </li>
            <li>
                <button class="btn-acc">
                    <span>Làm thế nào để mua hàng?</span>
                </button>
                <div class="contents-text">
                    <p>
                        Quý khách chọn sản phẩm cần mua được nhà cung cấp đăng tải trên website.
                </div>

            </li>
            <li>
                <button class="btn-acc">
                    <span>Làm thế nào để hủy đơn hàng?</span>
                </button>
                <div class="contents-text">
                    <p>
                        GoFood rất linh hoạt. Không có hợp đồng phiền toái, không ràng buộc. Bạn có thể dễ dàng hủy đơn hàng chỉ trong hai cú nhấp chuột. Không mất phí hủy – bạn có thể bắt đầu hoặc ngừng tài khoản bất cứ lúc nào.
                    </p>
                </div>

            </li>
            <li>
                <button class="btn-acc">
                    <span>Tôi có thể mua gì trên GoFood?</span>
                </button>
                <div class="contents-text">
                    <p>
                        GoFood là website chuyên cung cấp, kinh doanh các loại thực phẩm sạch, giá rẻ và an toàn.
                    </p>
                </div>

            </li>
            <li>
                <button class="btn-acc">
                    <span>
                        Sản phẩm trên GoFood có an toàn?
                    </span>
                </button>
                <div class="contents-text">
                    <p>
                        GoFood luôn luôn đảm bảo chất lượng sản phẩm khi đến tay người tiêu dùng.
                    </p>
                </div>

            </li>


        </ul>
        <small>
            Bạn đã sẵn sàng mua chưa? Nhập email để tạo hoặc kích hoạt lại tư cách thành viên của bạn.
        </small>
        <div class="form-signup">
            <form action="" class="email-ft">
                <div class="email-end">

                    <input type="email" class="email-signin" name="" id="email-signin" required>
                    <label>Email của bạn</label>

                </div>
                <button type="submit">
                    Bắt đầu
                    <i class="fas fa-chevron-right mt-l-5"></i>
                </button>
            </form>
        </div>
        <hr style="margin-top: 30px;">

    </div>
    <div class="blog grid">
        <h3 class="tittle-blog">
            Những bài viết nổi bật
        </h3>

    @include('includes.blog_includes')


    </div>
</div>
<!--Modal-->
<a class="helpcenter" onclick="openhelp()" id="helpcenter">
    <i class="fas fa-envelope" style="font-size: 20px;color: #fff;"></i>
    <span class="texthelp">Hỗ trợ</span>
</a>
<div class="modal-help" id="modalhelp">



</div>
<!--go to top-->
<a class="helpcenter " id="gototop" onclick="topFunction()">
    <i><i class="fa-solid fa-arrow-up"></i></i>
    <span>Về trang đầu</span>
</a>
 

@endsection