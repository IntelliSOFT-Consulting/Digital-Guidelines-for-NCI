@extends('layouts.simple')

@section('content')
@include('common/nci_custom_styles')
<style>
    .row {
    margin-right: 40px;
    margin-left: 15px;
}
@media screen and (max-width: 600px){
.signup-connect {
    display: none;
    width: 100%;
}
.signup-classic {
    margin: 5px;
    margin-left: 20px;
    width: 100%;
    border: 13px solid #FBF4F4;
}
}
</style>
    <!-- <div class="container very-small">

        <div class="my-l">&nbsp;</div>

        <div class="card content-wrap auto-height">
            <h1 class="list-heading">{{ Str::title(trans('auth.sign_up')) }}</h1>

            <form action="{{ url("/register") }}" method="POST" class="mt-l stretch-inputs">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">{{ trans('auth.name') }}</label>
                    @include('form.text', ['name' => 'name'])
                </div>

                <div class="form-group">
                    <label for="email">{{ trans('auth.email') }}</label>
                    @include('form.text', ['name' => 'email'])
                </div>

                <div class="form-group">
                    <label for="password">{{ trans('auth.password') }}</label>
                    @include('form.password', ['name' => 'password', 'placeholder' => trans('auth.password_hint')])
                </div>

                <div class="grid half collapse-xs gap-xl v-center mt-m">
                    <div class="text-small">
                        <a href="{{ url('/login') }}">{{ trans('auth.already_have_account') }}</a>
                    </div>
                    <div class="from-group text-right">
                        <button class="button">{{ trans('auth.create_account') }}</button>
                    </div>
                </div>

            </form>

            @if(count($socialDrivers) > 0)
                <hr class="my-l">
                @foreach($socialDrivers as $driver => $name)
                    <div>
                        <a id="social-register-{{$driver}}" class="button outline svg" href="{{ url("/register/service/" . $driver) }}">
                            @icon('auth/' . $driver)
                            <span>{{ trans('auth.sign_up_with', ['socialDriver' => $name]) }}</span>
                        </a>
                    </div>
                @endforeach
            @endif

        </div>
    </div> -->
    <div class="signup row">
<div class="signup-classic col-md-6" style="  border: 13px solid #FBF4F4;">
<h1 style="text-align: center" class="list-heading">{{ Str::title(trans('auth.register')) }}</h1>
<form action="{{ url('/register') }}" method="POST" class="mt-l stretch-inputs">
                {!! csrf_field() !!}

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="email">{{ trans('auth.name') }}:</label>
                    <div class="col-sm-9">
                    @include('form.text', ['name' => 'name'])
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"  for="email">{{ trans('auth.email') }}:</label>
                   <div class="col-sm-9">
                   @include('form.text', ['name' => 'email'])
                   </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"  for="designation">{{ trans('auth.designation') }}:</label>
                    <div class="col-sm-9">
                    <select style="display: inline"class="form-select"  name="designation" id="email">
                    <option selected disabled></option>
                    <option value="1">Health worker</option>
                    <option value="2">Public</option>
                </select>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"  for="designation">{{ trans('auth.county') }}:</label>
                    <div class="col-sm-9">
                    <select style="display: inline"id="email"  name="country">
                    <option selected disabled></option>
                    @foreach ($countes as $county)
                    <option value="{{$county->id}}">{{$county->name}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="password">{{ trans('auth.password') }}:</label>
                    <div class="col-sm-9">
                    @include('form.password', ['name' => 'password', 'autocomplete' => 'off'])
                    
                    <!-- <input type="password" name= "password" class="form-control" placeholder=""/> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="confirm_password">{{ trans('auth.confirm_password') }}:</label>
                    <div class="col-sm-9">
                    @include('form.password', ['name' => 'password_confirmed', 'placeholder' => ''])

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col from-group text-right" style="margin-left:50px;margin-right:80px">
                        <button class="button" style="background-color: #D820C5;border:none;border-radius:10px;width:100px;margin-right: 60px;">{{ trans('auth.create_account') }}</button>
                        <p>Already have an account? <a href="{{ url('/login') }}"><span style="color:#D820C5"><u>{{trans('auth.already_have_account')}}</u></span></a></p>

                    </div>
                </div>

            </form>
  </div>
  <div class="signup-connect col-md-6">
  <h1 style="text-align: center"class="list-heading">{{ Str::title(trans('auth.welcomer')) }}</h1>
  <div class="sidestyle">
  <img src="{{ asset('/uploads/welcome.png') }}" width="420" height="350">
    <h4 class="b-title">National Guidelines for
    Establishment of Cancer
    Management Centers in
    Kenya</h4>
  </div>
  </div>
</div>
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#email').on('input',function(){
            let regex = new RegExp("([!#-'*+/-9=?A-Z^-~-]+(\.[!#-'*+/-9=?A-Z^-~-]+)*|\"\(\[\]!#-[^-~ \t]|(\\[\t -~]))+\")@([!#-'*+/-9=?A-Z^-~-]+(\.[!#-'*+/-9=?A-Z^-~-]+)*|\[[\t -Z^-~]*])");
$('#email').val();
let testEmails = $('#email').val();//["notanemail.com", "workingexample@stackabuse.com", "example@yale.edu.com"];
console.log(regex.test(testEmails))

// testEmails.forEach((address) => {
//     console.log(regex.test(testEmails))
// });
        })   

    });

</script>