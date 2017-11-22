@extends("layouts.page")
@section('title', 'Login Page')
@section("content")
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                padding-top: 0;
                          }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

           

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30p x;
            }
        </style>
        <div class="flex-center position-ref full-height">
          
                <div class="top-right links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
          

            <div class="content">
                <div id="app" >
                </div>
                <div class="title m-b-md">
                    Login Form 
                </div>
                <div class="login-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form method="POST" name="loginForm" action="{{ action('Auth\LoginController@login') }}"  accept-charset="UTF-8" >
                         {{ csrf_field() }}
                        <div class="form-group" >
                            <label for="usernameId">Username: </label>
                            <input type="text" name="username" id="usernameId" >
                        </div>
                        <div class="form-group" >
                            <label for="passwordId">Password: </label>
                            <input type="password" name="password" id="passwordId" />
                        </div>
                        <div class="form-group" >
                            <input type="checkbox" name="remember" id="rememberId" /> Remember Me!
                        </div>
                        <div class="form-group" >
                            <button type="submit" name="loginButton" id="btnLogin" >Login</button>
                        </div>
                        <p><a href="{{ url('password/reset') }}">Forgot password?</a></p>

                        <p class="or-social">Or Use Social Login</p>

                        @include('partials.socials')
                    </form>
                    
                </div>        
                <div class="links">
                    <a href="#">Documentation</a>
                    <a href="#">Laracasts</a>
                    <a href="#">News</a>
                    <a href="#">Forge</a>
                    <a href="#">GitHub</a>
                </div>
            </div>
        </div>
@endsection
