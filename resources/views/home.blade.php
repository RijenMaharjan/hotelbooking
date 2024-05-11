@include('header')

  <!-- HERO SECTION -->
  <section class="hero-section container ">
    {{-- display.blade.php = displays popup messages --}}
    @include('display')
   
  <div class="carousel">
  <div><img class="carousel-img" src="{{asset('/img/carousel/1.JPG')}}" alt=""></div>
  <div><img class="carousel-img" src="{{asset('/img/carousel/2.jpg')}}" alt=""></div>
  <div><img class="carousel-img" src="{{asset('/img/carousel/3.jpg')}}" alt=""></div>
  <div><img class="carousel-img" src="{{asset('/img/carousel/4.jpg')}}" alt=""></div>
  <div><img class="carousel-img" src="{{asset('/img/carousel/5.jpg')}}" alt=""></div>
  <div><img class="carousel-img" src="{{asset('/img/carousel/6.jpg')}}" alt=""></div>
</div>
@include('front-booking')

  </section>

  {{-- ------------------------ Facility ---------------------- --}}
  <section class="facility-section container ">
<h3 class="section-title h-font">SEE THE FACILITIES WE <br>PROVIDE IN <span>REAL TIME</span></h3>
<div class="facility-contents">
  <div class="facility-container">
  <i class="fa-solid fa-house-laptop"></i>
  <p>Private Space</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-house-laptop"></i>
  <p>Outdoor Space</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-person-swimming"></i>
  <p>Swimming Pool</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-square-parking"></i>
  <p>Parking Area</p>
  </div>
  <div class="facility-container">
    <i class="fa-solid fa-wifi"></i>
    <p>Free Wifi</p>
  </div>
  <div class="facility-container">
    <i class="fa-solid fa-mug-saucer"></i>
    <p>Breakfast</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-plug-circle-bolt"></i>
  <p>Free Electricity</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-shirt"></i>
  <p>Laundry Service</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-dumbbell"></i>
  <p>Gym</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-dog"></i>
  <p>Pet Friendly</p>
  </div>
  <div class="facility-container">
  <i class="fa-solid fa-utensils"></i>
  <p>On-Site Restaurant</p>
  </div>

</div>
</section>

<!-- gallery -->

<section class="container life-in-kimdo">
  <div class="title-container">
    <h3 class="section-title h-font">GALLERY <span></span></h3>
  </div>
<div class="gallery ">
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/5.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/4.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/4.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/1.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/6.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/7.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/8.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/9.jpg')}}" alt="">
  </div>
  <div class="gallery-item">
    <img loading="lazy" src="{{asset('/img/photo gallery/10.jpg')}}" alt="">
  </div>


</div>
</section>

<!------------------------ Testimonials ----------------->
<section class=" testimonials container">
  <div class="testimonials-titles">
    <h3 class="section-title h-font">Testimonials</h3>
    <p>AT THE HEART OF COMMUNITIES</p>
  </div>
  <div class="testimonial-container">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach($testimonials as $testi)
        <div class="swiper-slide">
          <div class="testimonial-items">
            {{-- <div class="testimonial-images">
              <img src="images/testimonials/person1.png" alt="" />
            </div> --}}
            {{-- <div class="testimonial-rating">
              <i class="fas fa-star rating-stars"></i>
              <i class="fas fa-star rating-stars"></i>
              <i class="fas fa-star rating-stars"></i>
              <i class="fas fa-star rating-stars"></i>
              <i class="fas fa-star rating-stars"></i>
            </div> --}}
            <div class="testimonial-contents">
              <p class="testimonial-comment">
              {{$testi->testi_cont}}
              </p>
              <p class="testimonial-author">{{$testi->customer->full_name}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev prev-btn"></div>
      <div class="swiper-button-next next-btn"></div>
    </div>
  </div>
</section>

  {{-- --------------- FOOTER ----------------- --}}
  <footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>Contact Us</h4>
      <p>UttarDhoka</p>
      <p>Kathmandu, 44600</p>
      <p>Phone: 01-4412345</p>
      <p>Email: info@hotelheranya.com</p>
    </div>
    <div class="footer-section">
      <h4>About Us</h4>
      <p>Learn more about our hotel and the services we offer.</p>
      <a href="../kimdo2/aboutus.php">Learn More</a>
    </div>
    <div class="footer-section">
      <h4>Stay Connected</h4>
      <ul class="social-icons">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="copyright">Copyright &copy; Hotel Heranya. All rights reserved.</div>
</footer>

  {{-- -----------------SCRIPTS ------------- --}}

  {{-- ------------------ Header Scripts ---------------------- --}}
  <script type="text/javascript">
  var navbar = document.querySelector(".header");
  var threshold = 700;

window.onscroll = function() {
  if (window.pageYOffset >= threshold) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
};
</script>


<script type="text/javascript">
  var loginBtn = document.querySelector('.show-login-form');
var registerBtn = document.querySelector('.show-register-form');
var modal = document.querySelector('.modal-container');
var loginForm = document.querySelector('.login-form');
var registerForm = document.querySelector('.register-form');
var lclose= document.querySelector('.lclose');
var rclose= document.querySelector('.rclose');

loginBtn.addEventListener('click', function() {
  modal.style.display = 'block';
  loginForm.style.display = 'block';
  registerForm.style.display = 'none';
});

registerBtn.addEventListener('click', function() {
  modal.style.display = 'block';
  loginForm.style.display = 'none';
  registerForm.style.display = 'block';
});

lclose.addEventListener('click', function() {
    modal.style.display = 'none';
});
rclose.addEventListener('click', function() {
    modal.style.display = 'none';
});
</script>

<script>
 const burgerMenu = document.querySelector('.burger-menu');
const navLinks = document.querySelector('.nav-links');
const navBtnsContainer = document.querySelector('.nav-btns-container');

burgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  navBtnsContainer.classList.toggle('active');
});

</script>

  {{-- ---------------------- Body Scripts--------------------- --}}
  <script type="text/javascript">
var bookmodal = document.getElementById("bookingModal");
var btns = document.getElementsByClassName("bookRoomBtn");
var span = document.getElementsByClassName("modal-close")[0];

for (var i = 0; i < btns.length; i++) {
  btns[i].onclick = function() {
    bookmodal.style.display = "block";
  }
}

span.onclick = function() {
  bookmodal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    bookmodal.style.display = "none";
  }
}


</script>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
<script type="text/javascript">
  $('.carousel').slick({
  infinite: true,
  speed: 300,
  fade: true,
  arrows:false,
  autoplay:true,

  cssEase: 'linear'
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript">
  var navbar = document.querySelector(".header");
  var threshold = 800;

window.onscroll = function() {
  if (window.pageYOffset >= threshold) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
};
</script>

<script>
var swiper = new Swiper('.swiper-container', {
  initialSlide: 1,
        grabCursor: false,
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView:"auto",
        loop: false,

        pagination: {
          el: ".swiper-pagination",
          clickable: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints:{
          320: {
            slidesPerView:1,
          },
          640: {
            slidesPerView:1,
          },
          768: {
            slidesPerView:2,
          },
          1024: {
            slidesPerView:3,
          },
        }

});
</script>

<script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView:"auto",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints:{
          320: {
            slidesPerView:1,
          },
          640: {
            slidesPerView:1,
          },
          768: {
            slidesPerView:2,
          },
          1024: {
            slidesPerView:3,
          },

        }
      });
    </script>

          <script>

            function closeCustomAlert() {
                document.getElementById('sucessalert').style.display = 'none';
            }
        </script>
</body>
</html>