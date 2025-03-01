@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Customer
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
                              <form method="post" enctype="multipart/form-data" action="{{url('admin/customer/'.$data->id)}}">
                                @csrf
                                @method('put')
                                <table class="table table-bordered">
                                  <tr>
                                    <th>Full Name <span class="text-danger">*</span> </th>
                                    <th><input value="{{$data->full_name}}" name="full_name" type="text" class="form-control"></th>
                                  </tr>
                                  <tr>
                                    <th>Email <span class="text-danger">*</span></th>
                                    <th><input value="{{$data->email}}" name="email" type="text" class="form-control"></th>
                                  </tr>
                                  <tr>
                                  <tr>
                                  <tr>
                                    <th>Mobile <span class="text-danger">*</span></th>
                                    <th><input value="{{$data->mobile}}" name="mobile" type="text" class="form-control"></th>
                                  </tr>
                                  <tr>
                                    <th>Photo</th>
                                    <th>
                                      <input name="photo" type="file">
                                      <input name="prev_photo" type="hidden" value="{{$data->photo}}">
                                      <img width="100px" height="100px" src="{{asset('storage/app/'.$data->photo)}}">
                                    </th>
                                  </tr>
                                  <tr>
                                    <th>Address</th>
                                    <th><textarea name="address" class="form-control">{{$data->address}}</textarea></th>
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