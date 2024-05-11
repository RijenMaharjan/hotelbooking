@include('header')
<h3 class="headingg h-fonts">Your Booking</h3>
<table class="table" id="dataTable" width="90%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            {{-- <th>#</th> --}}
                                            {{-- <th>Customer</th> --}}
                                            <th>Room No.</th>
                                            <th>Room Type</th>
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            {{-- <th>Ref</th> --}}
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        {{-- <tr>
                                            <th>#</th>
                                            <th>Customer</th>
                                            <th>Room No.</th>
                                            <th>Room Type</th>
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            <th>Ref</th>
                                        </tr> --}}
                                    </tfoot>
                                    <tbody>
                                        @if(isset($data) && count($data) > 0)
                                        @foreach($data as $booking)
                                        <tr>
                                            {{-- <td>{{$booking->id}}</td> --}}
                                            {{-- <td>{{$booking->customer->full_name}}</td> --}}
                                            <td>{{$booking->room->title}} </td>
                                            <td>{{$booking->room->Roomtype->title}}</td>
                                            <td>{{$booking->checkin_date}}</td>
                                            <td>{{$booking->checkout_date}}</td>
                                            {{-- <td>{{$booking->ref}}</td> --}}
                                            {{-- <td><a href="{{url('admin/booking/'.$booking->id).'/delete'}}" class="text-danger" onclick="return confirm('Are you sure you want to delete this data?')"><i class="fa fa-trash"></i></a></td> --}}
                                            {{-- <td>{{ session('customerlogin') }}</td> --}}
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>