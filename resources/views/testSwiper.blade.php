<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fody Slider</title>
    @include('cdn')

    <style>
        .container {
          max-width: calc(100% - 30px);
          padding: 0 15px;
          margin: 0 auto;
        }

        .text-center {
        text-align: center;
        }

        .section-heading {
        font-size:35px;
        color: brown;
        padding: 10px 0;
        }

        #tranding {
        padding: 4rem 0;
        }

        #tranding .tranding-slider {
        height: 450px;
        padding: 20px 0;
        position: relative;
        }

        .tranding-slide {
            width: 300px;
          height: 320px;
          position: relative;
        }

        .tranding-slide .tranding-slide-img img {
          width: 300px;
          height: 320px;
          border-radius: 5px;
          object-fit: cover;
        }

        .tranding-slide .tranding-slide-content {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        }

        .tranding-slide-content .rest-rank{
          position:absolute;
          top:14px;
          right:14px;
          color:white;
          font-size:20px;
        }

        .tranding-slide-content .tranding-slide-content-bottom {
          position: absolute;
          bottom: 5px;
          left: 10px;
          color: white;
        }

        .tranding-slide-content .tranding-slide-content-bottom .rest-name{
          font-size:24px;
        }

        .food-rating {
          padding-top: 10px;
          display: flex;
          gap: 10px;
        }

        .rating ion-icon {
          color: yellow;
          font-size:14px;
        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
          display: none;
        }

        .tranding-slider-control {
          position: relative;
          bottom: 50px;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .tranding-slider-control .swiper-button-next {
          left: 58% !important;
          transform: translateX(-58%) !important;
        }

        .tranding-slider-control .slider-arrow {
          background: var(--white);
          width: 50px;
          height: 50px;
          border-radius: 50%;
          left: 42%;
          transform: translateX(-42%);
          filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .tranding-slider-control .slider-arrow ion-icon {
          font-size: 30px;
          color: #222224;
        }

        .tranding-slider-control .slider-arrow::after {
          content: '';
        }

        .tranding-slider-control .swiper-pagination {
          position: relative;
          width: 120px;
          bottom: 10px;
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
          filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
          background: yellow;
        }
    </style>

  </head>

  <body>
    <section id="tranding">
      <div class="container">
        <h3 class="text-center section-heading">- Top Restaurant -</h3>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="{{('image/rest1.jpg')}}">
              </div>
              <div class="tranding-slide-content">
                <h1 class="rest-rank">No.1</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="rest-name">Iketeru Restaurant</h2>
                  <h3 class="food-rating">
                    <span>5.0</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="{{('image/rest2.jpg')}}">
              </div>
              <div class="tranding-slide-content">
                <h1 class="rest-rank">No.2</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="rest-name">Prime</h2>
                  <h3 class="food-rating">
                    <span>5.0</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="{{('image/rest3.jpg')}}">
              </div>
              <div class="tranding-slide-content">
              <h1 class="rest-rank">No.3</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="rest-name">Beta KL</h2>
                  <h3 class="food-rating">
                    <span>5.0</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="{{('image/rest4.jpg')}}">
              </div>
              <div class="tranding-slide-content">
                <h1 class="rest-rank">No.4</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="rest-name">Chambers Grill</h2>
                  <h3 class="food-rating">
                    <span>4.5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="{{('image/rest5.jpg')}}">
              </div>
              <div class="tranding-slide-content">
                <h1 class="rest-rank">No.5</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="rest-name">Positano Risto</h2>
                  <h3 class="food-rating">
                    <span>4.5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="{{('image/rest6.jpg')}}">
              </div>
              <div class="tranding-slide-content">
                <h1 class="rest-rank">No.6</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="rest-name">JP Teres</h2>
                  <h3 class="food-rating">
                    <span>4.5</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="{{('image/rest7.jpg')}}">
              </div>
              <div class="tranding-slide-content">
                <h1 class="rest-rank">No.7</h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="rest-name">Tamarind Hill</h2>
                  <h3 class="food-rating">
                    <span>4.0</span>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
          </div>

          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>

    <script>
        var TrandingSlider = new Swiper('.tranding-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    </script>
  </body>
</html>