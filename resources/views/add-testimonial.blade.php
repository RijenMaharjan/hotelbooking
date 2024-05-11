@include('header')

<div class="  testimonial">
    <form id="login-form" class="" action="{{url('customer/save-testimonial')}}" method="POST">
      @csrf
      {{-- <div class="formHeader">
          <h4>User Login</h4>
        <i class="fa-solid fa-x lclose"></i>
      </div> --}}
      <div class="formContent">
        <div class="email">
          @if(Session::has('customerlogin')&& count(session('data')) > 0)
          <label for="email">User: </label>
          <input type="text" value="{{ session('data')[0]->full_name }}" disabled style="border:none; font-size:16px">
          @endif
        </div>
        <div class="email">
          <label for="email">Testimonial</label>
          <textarea name="testi_cont" rows="8" required> </textarea>
        </div>
        <input type="submit"  class="btn" name="loginbtn">
        </div>
        </form>
    </div>