<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{asset('assets/login.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <form action="/register" method="post">
                    @csrf

                    <h1 class="h3 mb-3 fw-normal text-center"> <b>Form Pendaftaran</b></h1>

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-bottom rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{old('name')}}">
                        <label for=" name">Name</label>
                        @error('name')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-bottom rounded-top @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" placeholder="jenis_kelamin" autofocus required value="{{old('jenis_kelamin')}}">
                        <label for=" jenis_kelamin">Jenis Kelamin</label>
                        @error('jenis_kelamin')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-4">
                        <input type="text" name="username" class="form-control rounded-bottom rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{old('username')}}">
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-4">
                        <input type="email" name="email" class="form-control rounded-bottom rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
                        <label for=" email">Email address</label>
                        @error('email')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mt-4">
                        <input type="text" name="role" class="form-control rounded-bottom rounded-top @error('role') is-invalid @enderror" id="role" placeholder="Role" required value="{{old('role')}}">
                        <label for=" role">Role</label>
                        @error('role')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating mt-4">
                        <input type="password" name="password" class="form-control rounded-bottom rounded-top @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required value="{{old('password')}}">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-tooltip">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-4 ">Sudah punya akun? <a href="/login" class="text-decoration-none ">Masuk</a></small>
            </main>

        </div>
    </div>
</body>

</html>