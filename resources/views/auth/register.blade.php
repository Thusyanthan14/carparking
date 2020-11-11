@extends('layouts.app')

@section('content')

@include('layouts.navigation')

<div class="loginpagecontainer">
        <img src="/images/carlogin.png">

        <div class="registerpart">
            <div class="loginhead">Register</div>

            <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                       
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                        
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

                        
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" placeholder="Enter mobile" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                        
                                <input id="regno" type="text" class="form-control @error('regno') is-invalid @enderror" placeholder="Enter security register number" name="regno" value="{{ old('regno') }}" required autocomplete="regno" autofocus>

                                @error('regno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                        
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                       
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                           
                        
                                <button type="submit" class="submitbtn">
                                    {{ __('Register') }}
                                </button>
                            
                    </form>
                    </div>
</div>
@endsection
