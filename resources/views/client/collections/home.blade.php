  @extends('client.layouts.index')
  @section('body-client')

      <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <!-- <div class="bg-home">
          <video playsinline autoplay muted loop>
              <source src="polina.webm" type="video/webm">
              <source src="https://videos.pexels.com/video-files/8306452/8306452-uhd_4096_2160_25fps.mp4" type="video/mp4">
              <source src="https://videos.pexels.com/video-files/7568747/7568747-hd_1920_1080_25fps.mp4" type="video/mp4">
              <source src="../assets/video/video_background.mp4" type="video/mp4">
          </video>
      </div> -->

      <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h1>Chào mừng đến với <br><span>The Light</span></h1>
            <h2>Mua sắm thả ga, không lo về giá!</h2>

            <div class="btns">
              <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
              <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
          </div>

        </div>
      </div>
    </section><!-- End Hero -->
      <main id="main">

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gian hàng</h2>
        <p>Sản phẩm bán chạy</p>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-12 sidebar sidebar-left d-none d-lg-block">
            <div class="filter-wrapper sticky-sidebar">
              <div class="filter-current">
                <div class="widget-title">
                  <div class="filter-subtitle">
                    <h1>Bộ lọc</h1></div>
                </div>
              </div>
              <div class="filter-content">
                <div class="widget-title">Danh mục sản phẩm</div>
                <ul class="category-list">
                  <li><a href="#">Sale</a></li>
                  <li><a href="#">Áo Nam</a></li>
                  <li><a href="#">Quần Nam</a></li>
                  <li><a href="#">Đồ Thể Thao</a></li>
                  <li><a href="#">Bộ Sưu Tập</a></li>
                  <li><a href="#">Hệ Thống Cửa Hàng</a></li>
                </ul>
                <div class="widget-title">Khoảng giá</div>
                <div class="price-slider">
                  <input type="range" min="0" max="30000000" value="15000000" class="slider" id="priceRange">
          
                </div>
                <div class="widget-title ">Màu sắc</div>
                <ul class="color-list d-flex justify-content-between ">
                  <li><span class="color-swatch" style="background-color: #000;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #fff;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #f00;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #00f;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #ff0;"></span> </li>
                </ul>
                <div class="widget-title">Size</div>
                <ul class="size-list d-flex justify-content-between">
                  <li><a href="#">S</a></li>
                  <li><a href="#">M</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">XL</a></li>
                  <li><a href="#">XXL</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="toolbar-products d-block d-lg-none col-12">
            <div class="head-title d-flex flex-row ">
              <h1 class="title">Sản phẩm khuyến mãi</h1>
              <div class="product-count ">
                <div class="count">
                  <b>14</b> sản phẩm
                </div>
              </div>
            </div>
            
            <div class="d-flex justify-content-between "> 
              <div class="product-filter-mb border border-dark d-flex flex-row">
                <p class="m-3">Bộ lọc</p>
                <svg class="m-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 459 459">
                <path d="M178.5,382.5h102v-51h-102V382.5z M0,76.5v51h459v-51H0z M76.5,255h306v-51h-306V255z"> </path> </svg>
              </div>

              <div class="product-sort">
                <label class="title">Sắp xếp theo</label>
                <div class="border border-dark">
                  <span class="text">Sản phẩm nổi bật</span>
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 128 128">
                      <path d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-9 col-md-12 col-12 collection main-container">
            <div class="row" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
            
            @foreach ($datas as $key => $data)

              <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 product-hover" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pro-sale">
                    <span style="font-size: 13px !important;color: white; font-weight: 600;font-family: 'Quicksand', sans-serif;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="5" height="13" viewBox="0 0 512.002 512.002">
                        <g>
                          <path d="m201.498 512.002c-1.992 0-4.008-.398-5.934-1.229-6.741-2.907-10.387-10.266-8.617-17.39l50.724-204.178h-136.67c-4.947 0-9.576-2.439-12.373-6.52s-3.402-9.278-1.617-13.892l100.262-259.204c2.235-5.779 7.793-9.589 13.989-9.589h137.961c5.069 0 9.795 2.56 12.565 6.806 2.768 4.246 3.206 9.603 1.162 14.242l-59.369 134.76h117.42c5.486 0 10.534 2.995 13.164 7.81 2.63 4.814 2.422 10.68-.543 15.296l-209.496 326.192c-2.833 4.412-7.651 6.896-12.628 6.896z" fill="#ffffff" data-original="#000000"></path>
                        </g>
                      </svg>-22%
                    </span>
                  </div>
                  <img src="{{url('/file-image-client/product/')}}/{{ !empty($data['image'])?$data['image']:'' }}" class="img-thumbnail" alt="Product Image">
                  <div class="pro-add-icon-right" style="cursor: pointer;">
                    <i class="fas fa-cart-plus"></i> Thêm vào giỏ <i class="fas fa-arrow-right"></i>
                  </div>
                  <div class="proloop-detail">
                    <div class="proloop-variant">
                      <div class="vrt-option vrt1">+13 Màu sắc</div>
                      <div class="vrt-option vrt2">+4 Kích thước</div>
                    </div>
                  </div>
                  <h3 class="proloop-title">
                    <a style="color:#333333" href="/products/ao-t-shirt-tron-in-logo-nguc-8-fsts001" data-handle="/products/ao-t-shirt-tron-in-logo-nguc-8-fsts001">Áo T shirt trơn in logo ngực FSTS001</a>
                  </h3>
                  <div class="price">
                    <div class="price_1">149,000₫</div>
                    <div class="price_2">200,000₫</div>
                  </div>
                </div>
              </div>

            @endforeach
             

            </div>  
          </div>
        
        </div>
      </div>
    </div>
  </section><!-- End Why Us Section -->
  </main><!-- End #main -->

  @endsection