@section('title', 'Kokborok Language | Registration')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register bg-custom">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>You are few minutes away from joining a great community!</p>
                <a class="btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                <br/>
            </div>
            <div class="col-md-9 register-right bg-word-list">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading text-white">Join as a Contributor</h3>

                            <div class="row register-form text-center">
                                <div class="col-md-6">

                                    <div class="form-group">

                                        <input id="name" placeholder="Full Name *" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">

                                        <input id="email" placeholder="Email *" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">

                                        <input id="password" placeholder="Password *" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">

                                        <input id="password-confirm" placeholder="Confirm Password *" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                    </div>

                                    <div class="form-group">
                                        <div class="text-white">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female" checked>
                                                <span>Female</span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male">
                                                <span>Male</span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="other">
                                                <span>Other</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <input id="address" placeholder="Address *" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>


                                    <div class="form-group">

                                        <input type="text" minlength="11" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Your Phone *" value="{{ old('phone') }}" required autocomplete="phone" autofocus/>

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <select name="genus" class="form-control @error('genus') is-invalid @enderror" required autocomplete="genus" autofocus>
                                            <option hidden selected disabled value="">Please select your Genus</option>
                                            <option @if (old('genus')  == "A") {{ 'selected' }} @endif value="A">A</option>
                                            <option @if (old('genus') == "B") {{ 'selected' }} @endif value="B">A</option>
                                            <option @if (old('genus') == "C") {{ 'selected' }} @endif value="C">C</option>
                                            <option @if (old('genus') == "D") {{ 'selected' }} @endif value="D">D</option>
                                        </select>

                                        @error('genus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="profession" class="form-control @error('profession') is-invalid @enderror" placeholder="Profession *" value="{{ old('profession') }}" required autocomplete="profession" autofocus/>

                                        @error('profession')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
