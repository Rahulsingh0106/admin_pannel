<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Home</title>
</head>

<body>
    <!-- starting an signup form -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto mt-5">
                <div class="card" id="registration">
                    <div class="card-header">
                        <h3>Sign Up</h3>
                    </div>
                    <form method="post" id="frm-signup">
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="text" id="name" name="name" class="form-control name" placeholder="name">
                                <div class="invalid-feedback" style="font-size:16px;">Name is required</div>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control email" id="email"
                                    placeholder="email">
                                <div class="invalid-feedback emailError" style="font-size:16px;">Email is required</div>

                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control password" id="password"
                                    placeholder="password">
                                <div class="invalid-feedback" style="font-size:16px;">Password is required</div>
                                <input type="hidden" name="signup" value="manish">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup" id="signup" class="btn btn-info">Signup &rarr;</button>
                            <a href="#login" onclick="signup()">Already have an account</a>

                        </div>
                    </form>
                </div>

            </div>
            <!-- ending an signup form -->

            <!-- starting an login form-->
            <div class="row">
                <div class="col-md-5 mx-auto mt-5">
                    <div class="card" style="display:none" id="login">
                        <div class="card-header">
                            <h3>Log In</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" id="frm-login">
                                <div class="mb-3">
                                    <input type="email" class="form-control email1" name="email1" id="email1"
                                        placeholder="email">
                                    <div class="invalid-feedback emailError1" style="font-size:16px;">Email is required
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="password1" class="form-control password1" name="password1"
                                        id="password1" placeholder="password">
                                    <div class="invalid-feedback passwordError" style="font-size:16px;">Password is
                                        required
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="login" id="login" class="btn btn-info">Login
                                        &rarr;</button>
                                    <a href="#registration" onclick="login()">Create an acount</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ending an login form -->

            </div>



            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>
            <script src="../js/script.js"></script>
            <!-- Option 2: Separate Popper and Bootstrap JS 
            -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>