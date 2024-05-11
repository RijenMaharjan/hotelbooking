
<div class="form-container register-form">
    <form class="model-form" action="{{url('admin/customer')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="formHeader">
          <h4>User Registration</h4>
        <i class="fa-solid fa-x rclose"></i>
      </div>
      <div class="formContent">
        <div class="username">
            <label>Username:</label>
            <input type="text" name="full_name" id="username" required>
        </div>
        <div class="email">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="password">
          <label>Password</label>
          <input type="password" name="password" id="password" required>
        </div>
        <div class="password">
          <label>Mobile</label>
          <input type="number" name="mobile" id="mobile" required>
        </div>
        <div class="password">
          <label>Address</label>
          <input type="text" name="address" id="address" required>
        </div>
        <input type="hidden" name="ref" value="front">
        <input type="submit"  name="registerbtn">
        </div>
        </form>
    </div>