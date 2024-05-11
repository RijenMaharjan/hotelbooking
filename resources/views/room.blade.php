@include('header')
{{-- -------------------------------------------- --}}
<section class="rooms-section">
  <h3 class="section-title h-fonts">Room & Suites</h3>
 
  <div class="allrooms">
     @foreach ($room as $rooms)
      <div class="product-card">
        <div class="room-image">
          @if ($rooms)
            @foreach($rooms->roomtypeimgs as $img)
              <div class="imgcol{{$img->id}}">
                <img src="{{ asset('storage/' . $img->img_src) }}" alt=""  >
              </div>
            @endforeach
            @endif
        </div>
      <div class="room-details">
        <h4>{{$rooms->title}}</h4>
        <p><span class="room-price">Rs.{{$rooms->price}}</span> per night</p>
        <ul class="room-full-detail">
          <li>{{$rooms->detail}}</li>
          <li></li>
        </ul>
      </div>
   <div class="facility-icons">
    <i class="fa-solid fa-wifi rooms-icons"></i>
    <i class="fa-solid fa-tv rooms-icons"></i>
    <i class="fa-solid fa-mug-saucer rooms-icons"></i>
    <i class="fa-solid fa-vault rooms-icons"></i>
    <i class="fa-solid fa-chair rooms-icons"></i>
    <i class="fa-solid fa-bath rooms-icons"></i>
    <i class="fa-solid fa-soap rooms-icons"></i>
   </div>
      <div class='card-btns'>
        <a class='bookingbutton' href="" ><button class='btn btn-primary button' name='bookbtn' onclick='openBookingModal()'>Book Now</button> </a>
      </div>
    </div>
    @endforeach
  </div>
</div>
</section>

{{-- ----------------------- Footer -------------------- --}}
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