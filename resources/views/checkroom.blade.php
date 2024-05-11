 @include('header')
 {{-- @foreach($roomTypes as $room)
 <div class="room-card product-card">
   <div class="room-details">
     <div class="room-image">
          @foreach($room->roomtypeimgs as $img)
              <div class="imgcol{{$img->id}}">
                <img src="{{ asset('storage/' . $img->img_src) }}" alt=""  >
              </div>
            @endforeach
        </div>
        <h4>{{$room->title}}</h4>
        <p><span class="room-price">{{$room->price}}</span> per night</p>
        <ul class="room-full-detail">
          <li><sup class="superscript">2</sup>{{$room->detail}}</li>
        </ul>
          
        </div> --}}
        {{-- <div class="facility-icons"> --}}

            {{-- // Loop through the room facilities and create the icons --}}
            {{-- $facilities = explode(",", $room_facilities);
            foreach ($facilities as $facility) {
                echo '<i class="fa-solid fa-' . $facility . ' room-icons"></i>';
            } --}}

          {{-- </div> --}}
        {{-- <div class="rating-stars">';

            // Loop through the room rating and create the stars
            for ($i = 0; $i < $room_rating; $i++) {
                echo '<i class="fas fa-star"></i>';
            }</div> --}}
        {{-- <div class='card-btns'>
        <a class='bookingbutton' href='"><button class='btn btn-primary button' name='bookbtn' >Book Now</button> </a>
        </div>
      </div>
      </div>
@endforeach --}}
{{-- @php
    $availableRoomsData = session('availableRooms');
    dd($availableRoomsData);
@endphp --}}
<h3 class="section-title h-fonts head-check">Available Rooms</h3>
<div class="section-checkroom">
@if(session('availableRooms') && count(session('availableRooms')) > 0)
    @foreach(session('availableRooms') as $room)
        <div class="room-card product-card">
            <div class="room-details">
                <div class="room-image">
                    @foreach($room->roomTypeImgs as $img)
                        <div class="imgcol{{ $img->id }}">
                            <img src="{{ asset('storage/' . $img->img_src) }}" alt="">
                        </div>
                    @endforeach
                </div>
                <h4>{{ $room->title }}</h4>
                <p><span class="room-price">{{ $room->price }}</span> per night</p>
                <ul class="room-full-detail">
                    <li>{{ $room->detail }}</li>
                </ul>
            </div>
            <div class='card-btns'>
                <form method="post" action="{{ url('admin/booking') }}">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                   <input type="hidden" name="checkin_date" id="checkin_date">
                <input type="hidden" name="checkout_date" id="checkout_date">
                <input type="hidden" name="total_adults" id="total_adults">
                <input type="hidden" name="total_children" id="total_children">
                    @if(session('data') && count(session('data')) > 0 && isset(session('data')[0]->id))
                        <input type="hidden" name="customer_id" value="{{ session('data')[0]->id }}">
                    @endif
                    <input type="hidden" name="reff" value="front">
                    <input type="submit" class='btn btn-primary button'>
                </form>
            </div>
        </div>
        {{-- <a class='bookingbutton' href='#'> --}}
             {{-- <button type="submit" class='btn btn-primary button' name='bookbtn'>Book Now</button> --}}
        {{-- </a> --}}
    @endforeach
@else
    <p>No available rooms found.</p>
@endif
</div>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // Retrieve data from sessionStorage
        var checkinDate = sessionStorage.getItem('checkin_date');
        var checkoutDate = sessionStorage.getItem('checkout_date');
        var totalAdults = sessionStorage.getItem('total_adults');
        var totalChildren = sessionStorage.getItem('total_children');

        // Set values for hidden inputs
        $('#checkin_date').val(checkinDate);
        $('#checkout_date').val(checkoutDate);
        $('#total_adults').val(totalAdults);
        $('#total_children').val(totalChildren);

        // Submit the form when the page is loaded (you may want to trigger this based on some event)
        $('#myForm').submit();
    });
</script>
 