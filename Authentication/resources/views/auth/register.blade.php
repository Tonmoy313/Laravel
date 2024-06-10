<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid ">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-auto">
                <div class="card border-success" style="width: 30rem;">
                    <div class="card-header text-center">
                        <h1>Register User</h1>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger " aria-label="Validation errors">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-gorup">
                                <label for="name" class="form-text">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    placeholder="User name" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-gorup">
                                <label for="email" class="form-text">Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror "
                                    value="{{ old('email') }}" placeholder="example@gmail.com" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-gorup">
                                <label for="password" class="form-text">Password<span
                                        class="text-danger">*</span></label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" placeholder="Must be 4 letters" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-gorup">
                                <label for="password_confirmation" class="form-text">Confirm Password<span
                                        class="text-danger">*</span></label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" placeholder="Must be same as password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row justify-content-between mt-3">
                                <div class="col-auto">
                                    <a href="{{ route('home') }}" class="btn btn-outline-warning">Back</a>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-outline-primary">Register</button>
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
