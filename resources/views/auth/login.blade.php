@extends('layouts.master')
@section('title', 'Login - ' )

@section('content')
<?php
use Illuminate\Support\Facades\DB;
 ?>
  <main>
    <section class="section-auth" id='app'>
        <div class="container">
            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                    Sign In or Join Now
                </h2>
                <p> You must be signed in to continue. Sign In or Join below.</p>
            </div>
            <div class="row">
                <div class="auth-controller text-center" >
                    <form id="login" v-if='login' method="post" action="{{route('login')}}" v-if=''>
                      @csrf
                        <div class="signin-image">
                            <figure><img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signin-image.jpg" alt="sing up image"></figure>
                        </div>
                        <div class="signin-form u-margin-top-medium">
                          <div class="form__group">
                              <input name="email" type="email" id="name" class="form__input {{ $errors->has('email') ? 'is-invalid' : 'valid-input' }}" value="{{ old('email') }}" placeholder="Email" required>
                              @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                  <strong> {{ $errors->first('email') }} </strong>
                                </span>
                              @endif
                          </div>
                          <div class="form__group">
                              <input name="password" type="password" id="email" class="form__input {{ $errors->has('password') ? 'is-invalid' : 'valid-input' }}" value="{{ old('password') }}" placeholder="Password" required>
                              @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                  <strong> {{ $errors->first('password') }} </strong>
                                </span>
                              @endif
                          </div>
                            <!-- @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                            @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                            @endif -->
                            <!-- <div class="error-container">
                                <ul class="list">
                                    <li class="item">* Invalid email</li>
                                    <li class="item">* Invalid password</li>
                                    <li class='item'>* Something went wrong</li>
                                </ul>
                            </div> -->
                            <div class="form-btn-align" style="padding-top: 30px;">
                              <div>
                                <a  @click="authPage('signup')" class="btn btn-default btn-orange">Create an account</a>
                              </div>
                              <div style="margin-right: 20px;">
                                  <button type="submit" name="submit" class="btn btn--green">Login &rarr;</button>
                              </div>
                            </div>
                        </div>
                    </form>

                    <!-- signup form  -->
                    <form method="POST" v-if='!login' class="form" action="{{route('register')}}"  id="signup">
                      @csrf
                      <div class="signup-content">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input name="username" type="text" id="name" class="form__input {{ $errors->has('username') ? 'is-invalid' : 'valid-input' }}" value="{{ old('username') }}" placeholder="Your Username" required>
                                      @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('username') }} </strong>
                                        </span>
                                      @endif
                                  </div>
                                  <div class="form__group">
                                      <input  name="email" type="email" id="email" class="form__input {{ $errors->has('email') ? 'is-invalid' : 'valid-input' }}" value="{{ old('email') }}" placeholder="Email" required>
                                      @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('email') }} </strong>
                                        </span>
                                      @endif
                                  </div>
                                  <div class="form__group">
                                      <input name="password" type="password" id="password" class="form__input {{ $errors->has('password') ? 'is-invalid' : 'valid-input' }}" value="{{ old('password') }}" placeholder="Password" required>
                                      @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('password') }} </strong>
                                        </span>
                                      @endif
                                  </div>
                                  <div class="form__group">
                                      <input name="password_confirmation" type="password" id="confirm_password" class="form__input {{ $errors->has('name') ? 'is-invalid' : 'valid-input' }}" value="{{ old('name') }}" placeholder="Confirm Password" required>
                                  </div>
                                  <div class="form__group">
                                    <div class="phone-input-group">
                                      <input name="phone1" type="text" id="phone_number" class="form__input {{ $errors->has('phone1') ? 'is-invalid' : 'valid-input' }}" value="{{ old('phone1') }}" placeholder="880" required> -
                                      <input name="phone2" type="text" id="phone_number" class="form__input {{ $errors->has('phone2') ? 'is-invalid' : 'valid-input' }}" value="{{ old('phone2') }}" placeholder="501" required> -
                                      <input name="phone" type="text" id="phone_number" class="form__input {{ $errors->has('phone') ? 'is-invalid' : 'valid-input' }}" value="{{ old('phone') }}" placeholder="1025" required>
                                      @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('phone') }} </strong>
                                        </span>
                                      @endif
                                    </div>
                                  </div>
                                  <input type="hidden" name="package_id" value="{{$package_id}}">
                              </div>
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input name="name" type="text" id="contact_name" class="form__input {{ $errors->has('name') ? 'is-invalid' : 'valid-input' }}" value="{{ old('name') }}" placeholder="Your Full Name" required>
                                      @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('name') }} </strong>
                                        </span>
                                      @endif
                                  </div>

                                  <div class="form__group">
                                      <input name="company" type="text" id="company_name" class="form__input {{ $errors->has('company') ? 'is-invalid' : 'valid-input' }}" value="{{ old('company') }}" placeholder="Company Name (Optional)" >
                                      @if ($errors->has('company'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('company') }} </strong>
                                        </span>
                                      @endif
                                  </div>
                                  <div class="form__group">
                                      <input name="address" type="text" id="company_name" class="form__input {{ $errors->has('address') ? 'is-invalid' : 'valid-input' }}" value="{{ old('address') }}" placeholder="Address">
                                      @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('address') }} </strong>
                                        </span>
                                      @endif
                                  </div>

                                  <div class="form__group">
                                      <input name="city" type="text" id="city" class="form__input {{ $errors->has('city') ? 'is-invalid' : 'valid-input' }}" value="{{ old('city') }}" placeholder="City" required>
                                      @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong> {{ $errors->first('city') }} </strong>
                                        </span>
                                      @endif
                                  </div>
                                  <div class="form__group select-box">
                                      <select name="country" class="form__select" id="" required>
                                        <option value="">Select Country</option>
                                        <?php $countries = DB::table('countries')->get(); ?>

                                        @if(count($countries) > 0)
                                          @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                          @endforeach
                                        @endif

                                      </select>
                                      <label for="country" class="form__label">&nbsp;</label>
                                  </div>


                                  <div class="form-btn-align">
                                    <div style="margin-right: 20px;">
                                      <a  @click="authPage('login')" class="btn btn-default btn-orange">Im already a member</a>
                                    </div>
                                    <div>
                                        <button type="submit" name="submit" class="btn btn--green">Register &rarr;</button>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  </main>

 @endsection

 @section('script')

    <script>
        window.onload = function () {
            new Vue({
            el: '#app',
            data: {
                countryList: null,
                login:true
            },
            methods: {
                authPage(stat){
                    if (stat == 'signup') {
                        this.login =false;
                    }else if(stat == 'login'){
                        this.login =true;
                    }
                }
            },
            created: function () {
                const THIS = this;
               axios.get('https://restcountries.eu/rest/v2/all').then(res =>{
                THIS.countryList= res.data;
               }).catch(err => console.log(err));
            }
        })
}

    </script>
    <script type="text/javascript">
    var path = "{{ url('livesearch') }}";
    $('#city').typeahead({
         minLength: 2,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

 @endsection
