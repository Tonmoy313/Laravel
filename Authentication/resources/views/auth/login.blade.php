<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid ">
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        @if (session('notUser'))
            <div class="alert alert-danger">{{  session()->get('notUser') }}</div>
        @endif
        <div class="row bg-dark justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-auto">
                <div class="card" style="width: 30rem;">
                    <div class="card-header text-center">
                        <h1>Login User</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-gorup">
                                <label for="email" class="form-text">Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid
                                @enderror" value="{{ old('email') }}"
                                    placeholder="example@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-gorup">
                                <label for="password" class="form-text">Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control @error('password')
                                    is-invalid
                                @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mt-3">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-outline-primary">Login</button>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('registerPg') }}" class="btn btn-outline-success">Register</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
