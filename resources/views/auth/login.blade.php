<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Login | {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <!-- CoreUI CSS -->
    @vite('resources/sass/app.scss')
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if(Session::has('account_deactivated'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('account_deactivated') }}
                </div>
            @endif
            <div class="card p-4 border-0 shadow-sm">
                <div class="card-body">
                    <form id="login" method="post" action="{{ url('/login') }}">
                        @csrf
                        <center><img width="200" class="my-3" src="{{ asset('images/logo-dark.png') }}" alt="Logo"></center>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="bi bi-person"></i>
                                    </span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}"
                                   placeholder="Email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="bi bi-lock"></i>
                                    </span>
                            </div>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Password" name="password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <a class="btn btn-link px-0 my-2" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                        <div class="row">
                            <div class="col-12">
                                <button id="submit" class="btn btn-primary btn-block btn-lg"
                                        type="submit">
                                        <span class="button-text">Login</span>
                                    <span id="spinner" class="spinner-border spinner-border-sm mb-1 d-none" role="status">
                                    </span>
                                    <span class="sr-only">Loading...</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

           
        </div>
    </div>
</div>

<!-- CoreUI -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    let login = document.getElementById('login');
    let submit = document.getElementById('submit');
    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let spinner = document.getElementById('spinner')

    login.addEventListener('submit', (e) => {
        submit.disabled = true;
        email.readonly = true;
        password.readonly = true;

        spinner.classList.remove('d-none');
        submit.querySelector('.button-text').style.display = 'none';

        login.submit();
    });

    setTimeout(() => {
        submit.disabled = false;
        email.readonly = false;
        password.readonly = false;

        spinner.classList.add('d-none');
        submit.querySelector('.button-text').style.display = 'inline';
    }, 3000);
</script>

</body>
</html>
