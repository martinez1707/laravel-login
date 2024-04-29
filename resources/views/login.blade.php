<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Template · Bootstrap v5.1</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .form-signin .form-floating input[type="email"],
        .form-signin .form-floating input[type="password"] {
            height: calc(1.5em + 0.75rem + 2px);
            margin-top: 10px;
            font-size: 1rem;
            border-color: #ced4da;
        }
        .form-signin .form-floating input[type="email"]:focus,
        .form-signin .form-floating input[type="password"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }
        .form-signin .form-floating label {
            color: #495057;
        }
        .form-signin .checkbox {
            font-weight: 400;
            color: #495057;
        }
        .form-signin button[type="submit"] {
            margin-top: 20px;
            font-size: 1rem;
            padding: 10px;
            background-color: #007bff;
            border: none;
        }
        .form-signin button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .form-signin .invalid-feedback {
            display: block;
            margin-top: 5px;
            color: #dc3545;
        }
        .mt-5 {
            margin-top: 5rem;
        }
        .text-muted {
            color: #6c757d;
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="{{ route('auth.authenticate') }}" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022–2025</p>
        </form>
    </main>
</body>
</html>
