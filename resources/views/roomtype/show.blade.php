@extends('layout')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$data->title}}
                              <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
                            </h6>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                                <table class="table table-bordered">
                                  <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td>{{$data->price}}</td>
                                  </tr>
                                  <tr>
                                    <th>Details</th>
                                    <td>{{$data->detail}}</td>
                                  </tr>
                                  <tr>
                                    <th>Gallery Images</th>
                                    <td><table class="table tablebordered mt-2">
                                        <tr>
                                          @foreach($data->roomtypeimgs as $img)
                                            <td class="imgcol{{$img->id}}">
                                              <img src="{{ asset('storage/' . $img->img_src) }}" alt="" width="100px" height="100px">
                                            </td>
                                          @endforeach
                                        </tr>
                                        {{-- 'storage/app/storage/'. --}}
                                      </table></td>
                                  </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

  @endsection