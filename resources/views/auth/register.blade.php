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
            <form method="POST" action="{{ route('register') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Sign Up</h2>

                <!-- Nama -->
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <x-input-label for="name" :value="__('')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Username" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="input-field mt-4">
                    <i class="fas fa-envelope"></i>
                    <x-input-label for="email" :value="__('')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="input-field mt-4">
                    <i class="fas fa-lock"></i>
                    <x-input-label for="password" :value="__('')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="input-field mt-4">
                    <i class="fas fa-lock"></i>
                    <x-input-label for="password_confirmation" :value="__('')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <x-primary-button class="ms-4 btn">
                    {{ __('Register') }}
                </x-primary-button>

                <p>Already have an account? <a href="{{ route('login') }}" class="account-text" id="sign-in-link">Sign
                        in</a></p>
            </form>
        </div>
    </div>
    <script src="{{ asset('LoginAccount') }}/app.js"></script>
</body>

</html>
