<div class="form-container login-form">
    <form id="login-form" class="login-form" action="{{url('customer/login')}}" method="POST">
      @csrf
      <div class="formHeader">
          <h4>User Login</h4>
        <i class="fa-solid fa-x lclose"></i>
      </div>
      <div class="formContent">
        <div class="email">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="password">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
        </div>
        <input type="submit"  name="loginbtn">
        </div>
        </form>
    </div>