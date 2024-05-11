@include('header')
<section class="contact-page">
@if(Session::has('contact_success'))
    <div id='sucessalert' class='sucessalert'>
                <p class='alert-heading'>{{session('contact_success')}}</p>
                <button class='close-btn'  onclick='closeCustomAlert()'>&times;</button>
            </div>
    @endif

  <div class="contact-div">
  <div class="contact-page-detail">
    <div class="cdetails">
  <h3 class="secondary-title">Kimdo hotel and resort</h3>
  <ul>
    <li><strong>Street Name:</strong>UttarDhoka</li>
    <li><strong>District:</strong>Kathmandu</li>
    <li><strong>Ward No:</strong>2</li>
    <li><strong>Phone:</strong>01-441234</li>
    <li><strong>Email:</strong> info@hotelheranya.com.np</li>
  </ul>
  </div>

  <div class="cicons">
  <h3 class="secondary-title">Follow us on</h3>
  <ul class="contact-social-icons">
        <li><a href="#"><i class="fb fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-twitter bird"></i></a></li>
        <li><a href="#"><i class="insta fab fa-instagram"></i></a></li>
      </ul>
      </div>
  </div>

  <div class="contact-page-form">
  <h3 class="secondary-title">write to us</h3>
  <p>We are eager to hear from you; Please fill in your contact information and our staff members wil contact you shortly.</p>
    <form action="{{url('save-contactus')}}" method="post">
      @csrf
      <div class="contact-form-container">

          <div class="cf fname">
            <input type="text" name="full_name" id="fullname" placeholder="FULLNAME">
          </div>

        <div class="email-phone">
          <div class="cf email">
            <input type="email" name="email" id="email" placeholder="EMAIL ADDRESS">
          </div>

          <div class="cf phone">
            <input type="phone" name="phone" id="phone" placeholder="PHONE NUMBER">
          </div>
        </div>
        <div class="cf messagebox">
          <textarea name="msg" id="mbox" cols="20" rows="10" placeholder="YOUR MESSAGE"></textarea>
        </div>
        <div class="cform-button">
          <span >*Please fill in all of the required fields.</span>
          <button class="btn">Submit</button>
        </div>
        </div>
    </form>
  </div>
  </div>


<div class="map">
<h3 class="secondary-title">Map</h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.181470627915!2d85.31778034999999!3d27.71168275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1903e6900cab%3A0x766dfc1380113615!2sDurbarmarg%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1673624215125!5m2!1sen!2snp"
    width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
  </div>

  </section>