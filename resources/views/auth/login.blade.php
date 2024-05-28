<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('LoginAccount')}}/styles.css">
    <title>Sign in / Sign up</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <input type="submit" value="Login" class="btn">
                
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            
            
            <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                @csrf
                <h2 class="title">Register</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="name" type="text" name="name" :value="old('name')" required placeholder="Username">
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" name="email" :value="old('email')" required placeholder="Email">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <input type="submit" value="Sign up" class="btn">

                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="{{ route('login') }}" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of GymFit?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="{{asset('LoginAccount')}}/signin.svg" alt="Sign In" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to GymFit?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="{{asset('LoginAccount')}}/signup.svg" alt="Register" class="image">
            </div>
        </div>
    </div>
    <script src="{{asset('LoginAccount')}}/app.js"></script>
</body>
</html>
