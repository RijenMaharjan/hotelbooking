<!-- BOOKING AVAILABILITY -->
<div class="booking-availability">
  <h4>CHECK AVAILABLE ROOMS</h4>
  <div class="booking-content">
     <form method="get" enctype="multipart/form-data" action="{{url('checkroom')}}">
       @csrf
      <div class="content checkin">
        <label for="checkin">Check-in</label>
        <input class="booking checkin-date" type="date" name="checkin_date" id="checkin">
      </div>
      <div class="content checkout">
        <label for="checkout">Check-out</label>
        <input class="booking checkout-date" type="date" name="checkout_date" id="checkout">
      </div>
      
  <div class="content adult">
    <label for="adult">Adult</label>
    <input name="total_adults" type="text" class="booking" id="adult" />
  </div>

  <div class="content children">
    <label for="children">children</label>
    <input name="total_children" type="text" class="booking" id="childern" />
  </div>
  {{-- <div >
        <label >Available Rooms</label>
        <select class="booking room-list" name="room_id">

        </select>
      </div> --}}
  @if(session('data') && count(session('data')) > 0 && isset(session('data')[0]->id))
    <input type="hidden" name="customer_id" value="{{ session('data')[0]->id }}">
  @endif
  <input type="hidden" name="reff" value="front">
   <input type="submit" class="btn-checkroom" name="booking">
</form>
</div>
</div>

 <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('input',function(){
            var _checkindate=$(this).val();
            // Ajax
            $.ajax({
                url:"{{url('admin/booking')}}/available-rooms/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                  console.log(res);
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option data-price="'+row.price+'" value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.title+'</option>';
                        // _html+='<option data-price="'+row.roomtype.price+'" value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.title+'</option>';
                    });
                    $(".room-list").html(_html);

                    var _selectedPrice=$(".room-list").find('option:selected').attr('data-price');
                    $(".room-price").val(_selectedPrice);
                    $(".show-room-price").text(_selectedPrice);
                }
            });
        });

        // $(document).on("change",".room-list",function(){
        //     var _selectedPrice=$(this).find('option:selected').attr('data-price');
        //     $(".room-price").val(_selectedPrice);
        //     $(".show-room-price").text(_selectedPrice);
        // });
          $("form").submit(function () {
            var formData = $(this).serializeArray();
            $.each(formData, function (index, field) {
                sessionStorage.setItem(field.name, field.value);
            });
        });
    });
    
</script>