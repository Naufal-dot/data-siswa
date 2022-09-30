<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('assets/login.css')}}">

    <!-- My Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="row all justify-content-center mt-5">
        <div class="col-md-5">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="POST">
                    @csrf

                    <h1 class="h3 mb-3 fw-normal text-center"> <b>Login</b></h1>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control rounded-bottom rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-4">
                        <input type="password" name="password" class="form-control rounded-bottom rounded-top" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-4">Belum punya akun? <a href="/register" class="text-decoration-none">Daftar sekarang!</a></small>
            </main>
      
          

        </div>
    </div>
</body>

</html>