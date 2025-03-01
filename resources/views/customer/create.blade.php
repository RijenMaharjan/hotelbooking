@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Customer
                              <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">

                          @if($errors->any())
                            @foreach($errors->all() as $error)
                              <p class="text-danger">{{$error}}</p>
                            @endforeach
                          @endif

                          @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                          @endif
                          <div class="table-responsive">
                              <form method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                                @csrf
                                <table class="table table-bordered">
                                  <tr>
                                    <th>Full Name <span class="text-danger">*</span> </th>
                                    <th><input name="full_name" type="text" class="form-control"></th>
                                  </tr>
                                  <tr>
                                    <th>Email <span class="text-danger">*</span></th>
                                    <th><input name="email" type="text" class="form-control"></th>
                                  </tr>
                                  <tr>
                                  <tr>
                                    <th>Password <span class="text-danger">*</span></th>
                                    <th><input name="password" type="password" class="form-control"></th>
                                  </tr>
                                  <tr>
                                    <th>Mobile <span class="text-danger">*</span></th>
                                    <th><input name="mobile" type="text" class="form-control"></th>
                                  </tr>
                                  <tr>
                                    <th>Photo</th>
                                    <th><input name="photo" type="file"></th>
                                  </tr>
                                  <tr>
                                    <th>Address</th>
                                    <th><textarea name="address" class="form-control"></textarea></th>
                                  </tr>
                                  <tr>
                                    <td colspan="2">
                                      <input type="submit" class="btn btn-primary"/>
                                    </td>
                                  </tr>
                                </table>
                              </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

  @endsection