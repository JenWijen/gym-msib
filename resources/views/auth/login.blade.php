<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('LoginAccount') }}/styles.css">
    <title>Sign-in Sign-up</title>
</head>

<body>
    <div class="container">
        <div class="signin-sign-up">
            <!-- Sign-in Form -->
            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username" placeholder="Email" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <x-text-input id="password" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <div class="remember-me">
                    <label class="switch">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span class="slider"></span>
                    </label>
                    <span>{{ __('Remember me') }}</span>
                </div>

                @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <input type="submit" value="Login" class="btn">
                <p>Don't have an account? <a href="{{ route('register') }}" class="account-text" id="sign-up-link">Sign
                        up</a></p>
            </form>
        </div>
    </div>

    <script src="{{ asset('LoginAccount') }}/app.js"></script>
</body>

</html>
