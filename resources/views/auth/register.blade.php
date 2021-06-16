
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('supplier-create') }}" id="registrationForm">
                        @csrf

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email">

                                @error('email')
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
                                <input id="phone" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="male"   autocomplete="gender" autofocus {{(old('gender') == 'male') ? 'checked' : ''}}>  Male 

                                <input id="phone" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="female"   autocomplete="gender" autofocus {{(old('gender') == 'female') ? 'checked' : ''}}>  Female 

                                <input id="phone" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="other"   autocomplete="gender" autofocus {{(old('gender') == 'other') ? 'checked' : ''}}>  Other 

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
                                <input id="aadhar_number" type="number" class="form-control @error('aadhar_number') is-invalid @enderror" name="aadhar_number" value="{{ old('aadhar_number') }}"   autocomplete="aadhar_number" autofocus>

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
                       
                       

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
    $('#registrationForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
       
       fields: {
            name: {
                validators: {
                        notEmpty: {
                        message: 'Please enter name'
                    }
                }
            },
             email: {
                validators: {
                        notEmpty: {
                        message: 'Please enter phone'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
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
            password: {
                validators: {
                    identical: {
                        field: 'password_confirmation',
                        message: 'The password and its confirm are not the same'
                    },
                    notEmpty: {
                        message: 'Please enter password'
                    }
                }
            },
            password_confirmation: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    notEmpty: {
                        message: 'Please enter confirm password'
                    }
                }
            },
             
            
        }
        })
     
});


    </script>
@endsection
