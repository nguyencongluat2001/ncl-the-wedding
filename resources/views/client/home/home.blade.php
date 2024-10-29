  @extends('client.layouts.index')
  @section('body-client')


    <section id="hero" class="d-flex align-items-center">
    
      <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <!-- <h1>SAVE THE DATE </h1><br> -->
            <div style="padding-top: 100px;">
                <img src="{{url('/clients/assets/img/Wedding-Transparent.png')}}" style="background: no-repeat;object-fit: scale-down !important;" class="img-thumbnail" alt="Product Image">
            </div>
            <div>
               <h2> <span style="font-family: 'Courier New', monospace;font-size: 23px;">Công Luật <i style="font-size: 12px;font-weight: 400;color: #ff7d7d;" class="fas fa-heart"></i> Kim Ngân</span></h2>
            </div>
            <div style="background: #0e0e0e57;border-radius: 5px;width: 400px;">
              <span style="font-family: 'Courier New', monospace;color: #ff4b4b;font-size: 20px;">Lễ thành hôn</span> <br>
              <span style="font-family: 'Courier New', monospace;color:#bebebe">10 Giờ 30 Phút ngày 24/11/2024</span>
            </div>
            <div style="">
                <img src="{{url('/clients/assets/img/ring.jpg')}}" style="background: no-repeat;object-fit: scale-down !important;width: 20%;" class="img-thumbnail" alt="Product Image">
            </div>
            <div class="btns">
              <!-- <a href="#menu" class="btn-menu animated fadeInUp scrollto">Gửi lời chúc</a> -->
              <!-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Xác nhận tham dự</a> -->
            </div>
          </div>
          <!-- <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
          </div> -->

        </div>
      </div>
    </section><!-- End Hero -->
      <main id="main">
      
  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chuyện chúng mình</h2>
        </div>
        <span style="color:#edf7ffb0">
        “Trăm triệu hạt mưa rơi, không hạt nào rơi nhầm chỗ”, tất cả người ta từng gặp, không một người ngẫu nhiên.Người đến bởi nợ đẩy, nợ đi bởi duyên cạn, mọi thứ đều là duyên phận an bài, chúng ta trở thành vợ chồng chính là đủ Duyên".
        </span>
        <div class="section-title" style="padding-top: 40px;">
          <h2>Ảnh nổi bật</h2>
        </div>
        <div class="row">
          <div class="col-md-12 col-12 collection main-container">
            <div class="row" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
            
            @foreach ($datas as $key => $data)

              <div class="col-lg-4 col-md-6 col-sm-6 col-4 product-hover" style="">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <!-- <div class="pro-sale">
                    <span style="font-size: 13px !important;color: white; font-weight: 600;font-family: 'Quicksand', sans-serif;">
                    <i style="font-size: 12px;font-weight: 400;color: #ff7d7d;" class="fas fa-heart"></i>
                    </span>
                  </div> -->
                  <img src="{{url('/file-image-client/product/')}}/{{ !empty($data['image'])?$data['image']:'' }}" class="img-thumbnail" alt="Product Image">
                </div>
              </div>

            @endforeach
             

            </div>  
          </div>
        
        </div>
      </div>
    </section>
  @endsection