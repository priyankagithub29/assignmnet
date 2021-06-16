
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header warning text-center">{{ __('Book Your Oxygen Cylinder') }}</div>
                  @include('layouts.flash-message')
                <div class="card-body">

                    <form method="POST" action="{{ route('booking-create') }}" id="bookingForm">
                        @csrf
                         <div class="form-group row">
                            <label for="supplier_id" class="col-md-4 col-form-label text-md-right">{{ __('Supplier') }}</label>

                            <div class="col-md-6">
                               
                                <select id="supplier_id"  class="form-control select2 @error('supplier_id') is-invalid @enderror" name="supplier_id" value="{{ old('supplier_id') }}"   autocomplete="supplier_id">
                                    @foreach ($supplier as $key=> $val)

                                    <option value="{{$key}}">{{$val}}</option>
                                    @endforeach
                                </select>

                                @error('supplier_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="cylinder" class="col-md-4 col-form-label text-md-right">{{ __('Cylinder') }}</label>

                            <div class="col-md-6">
                                <select id="cylinder_id"  class="form-control select2 @error('cylinder') is-invalid @enderror" name="cylinder" value="{{ old('cylinder') }}"   autocomplete="cylinder">
                                   
                                </select>

                                @error('cylinder')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- //---------------------------? -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"   autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"   autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="male"   autocomplete="gender" autofocus {{(old('gender') == 'male') ? 'checked' : ''}}>  Male 

                                <input id="gender" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="female"   autocomplete="gender" autofocus {{(old('gender') == 'female') ? 'checked' : ''}}>  Female 

                                <input id="gender" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="other"   autocomplete="gender" autofocus {{(old('gender') == 'other') ? 'checked' : ''}}>  Other 

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}"   autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aadhar_number" class="col-md-4 col-form-label text-md-right">{{ __('Aadhar number') }}</label>

                            <div class="col-md-6">
                                <input id="aadhar_number" type="number" class="form-control @error('aadhar_number') is-invalid @enderror" name="aadhar_number" value="{{ old('aadhar_number') }}"   autocomplete="aadhar_number" autofocus >

                                @error('aadhar_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="identity_proof" class="col-md-4 col-form-label text-md-right">{{ __('Identity Proof') }}</label>

                            <div class="col-md-6">
                                <input id="identity_proof" type="text" class="form-control @error('identity_proof') is-invalid @enderror" name="identity_proof" value="{{ old('identity_proof') }}"   autocomplete="identity_proof" autofocus>

                                @error('identity_proof')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Covid-19 Status') }}</label>

                            <div class="col-md-6">
                                <input id="covid_status" type="radio" class="covid_status @error('covid_status') is-invalid @enderror" name="covid_status"   autocomplete="new-password" value="positive" {{(old('covid_status') == 'positive') ? 'checked' : ''}}>  Positive(+ve)

                                <input id="covid_status" type="radio" class="covid_status @error('covid_status') is-invalid @enderror" name="covid_status"   autocomplete="new-password" value="negative" {{(old('covid_status') == 'negative') ? 'checked' : ''}}>  Negative(+ve)

                                @error('covid_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row covid_date" style="display: none" {{(old('covid_status') == 'positive') ? 'style="display: none"' : 'style="display: block"'}}>
                            <label for="covid_positive" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="covid_positive" type="date" class="form-control @error('covid_positive') is-invalid @enderror" name="covid_positive" value="{{ old('covid_positive') }}"   autocomplete="covid_positive" autofocus>

                                @error('covid_positive')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address"  class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"   autocomplete="address" autofocus>{{ old('address') }}</textarea>

                                @error('identity_proof')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                               
                                <select id="state_id"  class="form-control select2 @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}"   autocomplete="state">
                                    @foreach ($state as $key=> $val)

                                    <option value="{{$key}}">{{$val}}</option>
                                    @endforeach
                                </select>

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select id="city_id"  class="form-control select2 @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"   autocomplete="city">
                                   
                                </select>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                       

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Book') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/cityStateAjaxList.js') }}" ></script> 

    <script>
    $(document).ready(function() {
    $('#bookingForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       
       fields: {
            supplier_id: {
                validators: {
                        notEmpty: {
                        message: 'Please select supplier name'
                    }
                }
            },
            cylinder: {
                validators: {
                        notEmpty: {
                        message: 'Please select cylinder'
                    }
                }
            },
            name: {
                validators: {
                        notEmpty: {
                        message: 'Please enter name'
                    }
                }
            },
            phone: {
                validators: {
                        notEmpty: {
                        message: 'Please enter phone'
                    }
                }
            },
            gender: {
                validators: {
                        notEmpty: {
                        message: 'Please select gender'
                    }
                }
            },
            age: {
                validators: {
                        notEmpty: {
                        message: 'Please select age'
                    }
                }
            },
            aadhar_number: {
                stringLength: {
                        min: 12,
                        max: 12,
                        message: 'The aadhar number must be 12 number'
                    },
                validators: {
                        notEmpty: {
                        message: 'Please select aadhar number'
                    }
                }
            },
            identity_proof: {
                validators: {
                        notEmpty: {
                        message: 'Please select identity proof'
                    }
                }
            },
            covid_status: {
                validators: {
                        notEmpty: {
                        message: 'Please select covid status'
                    }
                }
            },
            address: {
                validators: {
                        notEmpty: {
                        message: 'Please enter address'
                    }
                }
            },
             state: {
                validators: {
                        notEmpty: {
                        message: 'Please select state'
                    }
                }
            },
             city: {
                validators: {
                        notEmpty: {
                        message: 'Please select city'
                    }
                }
            },
            
        }
        })
     
});


    </script>
@endsection
