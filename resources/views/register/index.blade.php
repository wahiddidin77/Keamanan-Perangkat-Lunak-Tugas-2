<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="/register" method="POST" autocomplete="">
                    @csrf
                    <h2 class="text-center mb-4">Signup</h2>
                    <div class="form-group">
                        <input class="form-control @error('email')is-invalid @enderror" type="email" name="email" placeholder="Email" required>
                        @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control @error('username')is-invalid @enderror" type="text" name="username" placeholder="Username" required>
                        @error('username')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control @error('nomer')is-invalid @enderror" type="number" name="nomer" placeholder="No Hp" required>
                        @error('nomer')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control @error('password')is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row form-group mt-3">
                        <div class="col-sm-12">
                                <input type="datetime-local" class="form-control" placeholder="Enter Date">
                        </div>
                    </div>
                    <script type="text/javascript">
                      $(function() {
                          $('#datepicker').datepicker();
                      });
                    </script>
                    <div class="form-group">
                        <button class="w-100 btn btn-lg btn-primary">Register</button>
                    </div>
                    <div class="link login-link text-center">Have an account? <a href="/">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>