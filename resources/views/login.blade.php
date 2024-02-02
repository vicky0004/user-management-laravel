<!DOCTYPE html>
<html lang="en">

<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>login form design</title>
</head> -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title> chaintech login</title>
</head>

<style>
    .login-card {
        width: 25%;
    }


    @media screen and (max-width: 768px) {
        .login-card {
            width: 75%;
        }
    }
</style>

<body>

    <div class="container-fluid  bg-dark">
        <div class="container">


            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color: white">Chaintech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}" style="color: white">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}" style="color: white">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="bardbox d-flex justify-content-center" style="height:90vh;">
        <div class="card my-auto shadow login-card">
            <div class="card-header text-center  text-white" style="background-color: #A41034;">
                <h2>Student Login</h2>
            </div>
            <div class="card-body">
                <form id="login-form" action="{{url('/')}}/login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">User Id</label>
                        <input type="email" id="email5" class="form-control" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" id="password5" class="form-control" name="password" required />
                    </div>
                    <br>
                    <button type="submit" class="btn w-100 text-white"
                        style="background-color: #A41034;">Login</button>
                </form>
            </div>
            <div class="card-footer text-end">

                <small>&copy; ChainTech co.</small>
            </div>
        </div>
    </div>

</body>

</html>
