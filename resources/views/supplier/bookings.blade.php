@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('My Bookings') }}</div>

                <div class="card-body">
                   <div class="grid" >
                    <div class="flex items-center "style="overflow-x: scroll;">
                      <table class="table">
                        <thead>
                          <th>Customer Name</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>Aadhar No.</th>
                          <th>Covid Status</th>
                          <th>Address</th>
                          <th>State</th>
                          <th>City</th>
                          <th>Phone</th>
                          <th>Cylinder</th>
                          <th>Status</th>
                          <th>action</th>
                        </thead>
                                              
                        <tbody>
                          @foreach($bookings as $val)
                           <tr>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->gender }}</td>
                            <td>{{ $val->age }}</td>
                            <td>{{ $val->aadhar_number }}</td>
                            <td>{{ $val->covid_status }} {{($val->covid_status == 'positive') ? $val->covid_positive : ''}}</td>
                            <td>{{ $val->address }}</td>
                            <td>{{ $val->state_name->name }}</td>
                            <td>{{ $val->city_name->name }}</td>
                            <td>{{ $val->phone }}</td>
                            <td>{{ $val->cylinder }} Ltr</td>
                            <td>{{ $val->status }}</td>
                            <td><select class="form-control  booking_status" placeholder="Select" name="booking_status" id="booking_status" data-id="{{ $val->id }}">
                                <option value="">Select</option>
                                <option value="1">Processing</option>
                                <option value="2">Delivered</option>
                                <option value="3">Cancelled</option>
                            </select></td>
                           </tr>
                          @endforeach
                        </tbody>      
                      </table>        
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>            

    <script src="{{ asset('js/cityStateAjaxList.js') }}" ></script> 
@endsection


