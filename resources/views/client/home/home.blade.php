  @extends('client.layouts.index')
  @section('body-client')
  <style>
    * {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #13161e;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
  </style>
<section id="hero" class="d-flex align-items-center">
      <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <!-- class="col-lg-8" -->
        <div class="row">
          <div style="height:700px;padding-top: 250px;">
            <!-- <div style="padding-top: 100px;">
                <img src="{{url('/clients/assets/img/Wedding-Transparent.png')}}" style="background: no-repeat;object-fit: scale-down !important;" class="img-thumbnail" alt="Product Image">
            </div> -->
            <!-- <div>
               <h2> <span style="font-family: 'Courier New', monospace;font-size: 23px;">Công Luật <i style="font-size: 12px;font-weight: 400;color: #ff7d7d;" class="fas fa-heart"></i> Kim Ngân</span></h2>
            </div> -->
            <div style="border-radius: 5px;">
            
              <div style="padding:20px;background: #00000061;">
              <div class="">
                <img src="{{url('/clients/assets/img/ring.jpg')}}" style="background: no-repeat;object-fit: scale-down !important;width: 20%;" class="img-thumbnail" alt="Product Image">
              </div>
              <span style="font-family: 'Courier New', monospace;color: #ff4b4b;font-size: 20px;font-weight: 600;">LỄ THÀNH HÔN</span> <br>
              @if($status == 1)
                <center>
                  <span>
                  <img src="{{url('/clients/assets/img/text-luat-white.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">  <img src="{{url('/clients/assets/img/text-&-white.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 5%;height: 5% !important;" class="img-thumbnail" alt="Product Image"> <img src="{{url('/clients/assets/img/text-ngan-white.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">
                  </span> <br>
                  <span style="font-family: &quot;times new roman&quot;, times, serif;color:#ffffff;font-weight: 600;">10 Giờ 30 Phút</span> <br>
                  <span style="font-family: &quot;times new roman&quot;, times, serif;color:#ffffff;font-weight: 600;"><span style="color:#ffffff">CHỦ NHẬT</span> <span style="font-size:36px;color:#ffffff">|</span> <span style="font-size:36px;color:#ff7a7a">24</span> <span style="font-size:36px;color:#ffffff">|</span> <span style="color:#ffffff;padding-right: 25px;"> 11-2024 </span></span> <br>
                  <span style="font-family: &quot;times new roman&quot;, times, serif;color:#ffffff">( Tức ngày 24 tháng 11 năm Giáp Thìn )</span> <br>
                </center>
              @endif
              @if($status == 2)
                <center>
                  <span>
                  <img src="{{url('/clients/assets/img/text-luat-white.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">  <img src="{{url('/clients/assets/img/text-&-white.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 5%;height: 5% !important;" class="img-thumbnail" alt="Product Image"> <img src="{{url('/clients/assets/img/text-ngan-white.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">
                  </span> <br>
                  <span style="font-family: &quot;times new roman&quot;, times, serif;color:#ffffff;font-weight: 600;">16 Giờ 00 Phút</span> <br>
                  <span style="font-family: &quot;times new roman&quot;, times, serif;color:#ffffff;font-weight: 600;"><span style="color:#ffffff">THỨ BẢY</span> <span style="font-size:36px;color:#ffffff">|</span> <span style="font-size:36px;color:#ff7a7a">23</span> <span style="font-size:36px;color:#ffffff">|</span> <span style="color:#ffffff;padding-right: 25px;"> 11-2024 </span></span> <br>
                  <span style="font-family: &quot;times new roman&quot;, times, serif;color:#ffffff">( Tức ngày 23 tháng 11 năm Giáp Thìn )</span> <br>
                </center>
              @endif
              </div>
            </div>
            
            <div class="btns">
              <!-- <a href="#menu" class="btn-menu animated fadeInUp scrollto">Gửi lời chúc</a> -->
              <!-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Xác nhận tham dự</a> -->
            </div>
          </div>
        </div>
      </div>
</section>
<!-- ======= Events Section ======= -->
<section id="events" class="events_tab2">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Chuyện chúng mình</h2>
    </div>
    <span style="color:#edf7ffb0;font-family: &quot;times new roman&quot;, times, serif;">
    “Trăm triệu hạt mưa rơi, không hạt nào rơi nhầm chỗ”, tất cả người ta từng gặp, không một người ngẫu nhiên.Người đến bởi nợ đẩy, nợ đi bởi duyên cạn, mọi thứ đều là duyên phận an bài, chúng ta trở thành vợ chồng chính là đủ Duyên".
    </span>
    <div class="section-title" style="padding-top: 40px;">
      <h2>Thiệp mời</h2>
    </div>
    <div class="row">
      <div class="col-md-12 col-12 collection main-container">
        <div class="row" style="padding-right: 20px !important;padding-left: 20px !important;margin-top: 0px !important">
          <div class="product-hover" style="background: #ffffff;border-radius: 3px;padding:20px">
          @if($status == 1)
            <center>
              <span>
              <img src="{{url('/clients/assets/img/text-savethedate.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">
              </span> <br>
              <span>
              <img src="{{url('/clients/assets/img/text-congluat-kimngan.png')}}" style="background: no-repeat;object-fit: scale-down !important;height: 20% !important;" class="img-thumbnail" alt="Product Image">
              <!-- <img src="{{url('/clients/assets/img/text-luat.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">  <img src="{{url('/clients/assets/img/text-&.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 5%;height: 5% !important;" class="img-thumbnail" alt="Product Image"> <img src="{{url('/clients/assets/img/text-ngan.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image"> -->
              </span> <br>
              <span>TRÂN TRỌNG KÍNH MỜI</span> <br>
              <span style="font-size: 13px;">Đến dự buổi tiệc chung vui cùng gia đình chúng tôi</span><br>
              <!-- text-congluat-kimngan.png -->
              <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-weight: 600;">10 Giờ 30 Phút</span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-weight: 600;"><span style="color:#080f24">CHỦ NHẬT</span> <span style="font-size:36px;color:#080f24">|</span> <span style="font-size:36px;color:#ff1212a6">24</span> <span style="font-size:36px;color:#080f24">|</span> <span style="color:#080f24;padding-right: 25px;">11-2024</span></span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">( Tức ngày 24 tháng 11 năm Giáp Thìn )</span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color: #000000;font-weight: 600;">Tại tư gia nhà trai</span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color: #cb0000;font-size: 16px;">Làng Quyên, Xã Vũ Linh, Yên Bình, Yên Bái</span> <br>
              <div class="row">
                <div class="col-md-12 col-12 collection main-container">
                  <div class="row" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 product-hover" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                      <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 13px;">NHÀ TRAI</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Ông: Nguyễn Văn Đạo</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Bà: Vũ Thị Hoài</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Thôn Làng Quyên</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Xã Vũ Linh, Yên Bình, Yên Bái</span> <br>
                        <!-- <span style="font-family: &quot;times new roman&quot;, times, serif;color: #cb0000;font-weight: 600;">Xem bản đồ</span> <br> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 product-hover" style="">
                      <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 13px;">NHÀ GÁI</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Ông: Chu Văn Én</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Bà: Trương Thị Tam</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Km157+500, Khe Dẹt</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Tân Hợp, Văn Yên, Yên Bái</span> <br>
                        <!-- <span style="font-family: &quot;times new roman&quot;, times, serif;color: #cb0000;font-weight: 600;">Xem bản đồ</span> <br> -->
                      </div>
                    </div>
                  </div>  
                </div>
                <img src="{{url('/clients/assets/img/text-suhiendiencuaquykhachla.png')}}" style="background: no-repeat;object-fit: scale-down !important;height: 20% !important;" class="img-thumbnail" alt="Product Image">
              </div>
            </center>
          @endif
          @if($status == 2)
            <center>
              <span>
              <img src="{{url('/clients/assets/img/text-savethedate.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">
              </span> <br>
              <span>
              <img src="{{url('/clients/assets/img/text-congluat-kimngan.png')}}" style="background: no-repeat;object-fit: scale-down !important;height: 20% !important;" class="img-thumbnail" alt="Product Image">
              <!-- <img src="{{url('/clients/assets/img/text-luat.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image">  <img src="{{url('/clients/assets/img/text-&.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 5%;height: 5% !important;" class="img-thumbnail" alt="Product Image"> <img src="{{url('/clients/assets/img/text-ngan.png')}}" style="background: no-repeat;object-fit: scale-down !important;width: 40%;height: 20% !important;" class="img-thumbnail" alt="Product Image"> -->
              </span> <br>
              <span>TRÂN TRỌNG KÍNH MỜI</span> <br>
              <span style="font-size: 13px;">Đến dự buổi tiệc chung vui cùng gia đình chúng tôi</span><br>
              <!-- text-congluat-kimngan.png -->
              <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-weight: 600;">16 Giờ 00 Phút</span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-weight: 600;"><span style="color:#080f24">THỨ BẢY</span> <span style="font-size:36px;color:#080f24">|</span> <span style="font-size:36px;color:#ff1212a6">23</span> <span style="font-size:36px;color:#080f24">|</span> <span style="color:#080f24;padding-right: 25px;">11-2024</span></span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">( Tức ngày 23 tháng 11 năm Giáp Thìn )</span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color: #000000;font-weight: 600;">Tại tư gia nhà gái</span> <br>
              <span style="font-family: &quot;times new roman&quot;, times, serif;color: #cb0000;font-size: 15px;">Km 157+500 CT NB-LC, Thôn Khe Dẹt, Xã Tân Hợp, Huyện Văn Yên, tỉnh Yên Bái</span> <br>
              <!-- <span style="font-family: &quot;times new roman&quot;, times, serif;color: #cb0000;font-weight: 600;">Xem bản đồ</span> <br> -->
              <div class="row">
                <div class="col-md-12 col-12 collection main-container">
                  <div class="row" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 product-hover" style="">
                      <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 13px;">NHÀ GÁI</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Ông: Chu Văn Én</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Bà: Trương Thị Tam</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Km157+500, Khe Dẹt</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Tân Hợp, Văn Yên, Yên Bái</span> <br>
                        <!-- <span style="font-family: &quot;times new roman&quot;, times, serif;color: #cb0000;font-weight: 600;">Xem bản đồ</span> <br> -->
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 product-hover" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                      <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 13px;">NHÀ TRAI</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Ông: Nguyễn Văn Đạo</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000">Bà: Vũ Thị Hoài</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Thôn Làng Quyên</span> <br>
                        <span style="font-family: &quot;times new roman&quot;, times, serif;color:#000000;font-size: 12px;">Xã Vũ Linh, Yên Bình, Yên Bái</span> <br>
                        <!-- <span style="font-family: &quot;times new roman&quot;, times, serif;color: #cb0000;font-weight: 600;">Xem bản đồ</span> <br> -->
                      </div>
                    </div>
                  </div>  
                </div>
                <img src="{{url('/clients/assets/img/text-suhiendiencuaquykhachla.png')}}" style="background: no-repeat;object-fit: scale-down !important;height: 20% !important;" class="img-thumbnail" alt="Product Image">
              </div>
            </center>
          @endif
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">
    <div class="section-title" style="padding-top: 40px;">
      <h2>Gặp Gỡ</h2>
    </div>
    <span style="color:#edf7ffb0;font-family: &quot;times new roman&quot;, times, serif;">
    “Nếu anh chưa từng gặp em, anh sẽ không thích em
      Nếu anh chưa từng thích em, anh sẽ không yêu em
      Nếu anh chưa từng yêu em, anh sẽ không nhớ em.
      Nhưng anh đã yêu, đang yêu và sẽ mãi mãi luôn yêu em".
    </span>
  </div>
</section>
<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B0.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">

  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B1.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">

  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B2.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">

  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B3.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">

  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B4.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">

  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B5.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B6.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B7.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B8.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B9.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>

  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B10.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>
  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B11.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>
  <div class="mySlides">
    <img src="{{url('/clients/assets/img/B12.jpg')}}" style="margin-top: 10px" class="img-thumbnail" alt="Product Image">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B0.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="1 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B1.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="2 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B2.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="3 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B3.jpg')}}" style="width:100%" onclick="currentSlide(4)" alt="4 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B4.jpg')}}" style="width:100%" onclick="currentSlide(5)" alt="5 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B5.jpg')}}" style="width:100%" onclick="currentSlide(6)" alt="6 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B6.jpg')}}" style="width:100%" onclick="currentSlide(7)" alt="7 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B7.jpg')}}" style="width:100%" onclick="currentSlide(8)" alt="8 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B8.jpg')}}" style="width:100%" onclick="currentSlide(9)" alt="9 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B9.jpg')}}" style="width:100%" onclick="currentSlide(10)" alt="10 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B10.jpg')}}" style="width:100%" onclick="currentSlide(11)" alt="11 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B11.jpg')}}" style="width:100%" onclick="currentSlide(12)" alt="12 / 13">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('/clients/assets/img/B12.jpg')}}" style="width:100%" onclick="currentSlide(13)" alt="13 / 13">
    </div>
  </div>
</div>
<!-- ======= Testimonials Section ======= -->
<!-- <section id="testimonials" class="events section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title pt-5">
      <h2>Album</h2>
    </div>

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B0.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B1.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B12.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B2.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B3.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B4.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B5.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B6.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B7.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B8.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B9.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B10.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{url('/clients/assets/img/B11.jpg')}}" style="" class="img-thumbnail" alt="Product Image">
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section> -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title pt-3">
      <h2 style="color:#2b365d">Địa chỉ trên bản đồ</h2>
    </div>
  </div>
  @if($status == 1)
  <div data-aos="fade-up">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52815.3792572998!2d105.0030624675622!3d21.772395722071646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3133563cfd27ae6d%3A0x58bedd76cf5cdd72!2zVsWpIExpbmgsIFnDqm4gQsOsbmgsIFnDqm4gQsOhaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1730741107823!5m2!1svi!2sus" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          
        <div class="col-lg-4">
          <div class="info">
            <div class="address" style="padding:10px">
              <i class="bi bi-geo-alt"></i>
              <h4>Địa chỉ nhà trai:</h4>
              <p>Thôn Làng Quyên, Xã Vũ Linh, Huyện Yên Bình, tỉnh Yên Bái</p>
            </div>
          </div>
    </div>
  </div>
  @endif
  @if($status == 2)
  <div data-aos="fade-up">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4154.746277619558!2d104.61345329885!3d21.916925584637184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313335021597bbb7%3A0x27682fc8cc10380d!2zxJBUMTY2LCBUw6JuIEjhu6NwLCBWxINuIFnDqm4sIFnDqm4gQsOhaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1730742691134!5m2!1svi!2sus" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>         
    <div class="info">
            <div class="address" style="padding:10px">
              <i class="bi bi-geo-alt"></i>
              <h4>Địa chỉ nhà gái:</h4>
              <p>Km 157+500 cao tốc Nội Bài - Lào Cai, Thôn Khe Dẹt, Xã Tân Hợp, Huyện Văn Yên, tỉnh Yên Bái</p>
            </div>
          </div>
    </div>
  </div>
  @endif
  </div>
</section><!-- End Contact Section -->
<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
</script>
@endsection