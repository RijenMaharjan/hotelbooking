@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Room Type
                              <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
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
                              <form method="post" enctype="multipart/form-data" action="{{url('admin/roomtype')}}">
                                @csrf
                                <table class="table table-bordered">
                                  <tr>
                                    <th>Title</th>
                                    <th><input name="title" type="text" class="form-control"></th>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <th><input name="price" type="number" class="form-control"></th>
                                  </tr>
                                  <tr>
                                    <th>Details</th>
                                    <th><textarea name="detail" class="form-control"></textarea></th>
                                  </tr>
                                  <tr>
                                    <th>Gallery</th>
                                    <th><input type="file" multiple name="imgs[]"></th>
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