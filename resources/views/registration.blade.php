{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
    <style>
        .required label::after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-dark">
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
                            <a class="nav-link" href="{{ url('/login') }}" style="color: white">login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </nav>
    </div>
    
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                User Registration
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control" />
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="" class="form-control" />
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Password:</label>
                    <input type="Password" name="password" id="" class="form-control" />
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password:</label>
                    <input type="password" name="password_confirm" id="" class="form-control" />
                    <span class="text-danger">
                        @error('password_confirm')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-6 required">
                    <label for="">State:</label>
                    <input type="text" name="state" id="" class="form-control" />
                    <span class="text-danger">
                        @error('state')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Country:</label>
                    <input type="text" name="country" id="" class="form-control" />
                    <span class="text-danger">
                        @error('country')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="form-group  required">
                    <label for="">Address:</label>
                    <textarea name="address" class="form-control" id="" ></textarea>
                    <span class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Gender:</label>
                    <div class="form-control border-0">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M"
                            
                            />
                            <label class="form-check-label" for="inlineRadio1">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F"
                            
                            />
                            <label class="form-check-label" for="inlineRadio2">F</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O"
                            
                            />
                            <label class="form-check-label" for="inlineRadio3">O</label>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Date of birth:</label>
                    <input type="date" name="dob" id="" class="form-control" />
                    <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{$title}}</title>
    <style>
        .required label::after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color: white">Vicky</a>
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
                            <a class="nav-link" href="{{ url('/login') }}" style="color: white">login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </nav>
    </div>
    {{-- <form action="{{url('/')}}/$user" method="post"> --}}
    <form action="{{$url}}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{$title}}
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control" value="{{$new=="1"?"":$user->name}}"/>
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="" class="form-control" value="{{$new=="1"?"":$email}}"/>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Password:</label>
                    <input type="Password" name="password" id="" class="form-control" />
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password:</label>
                    <input type="password" name="password_confirm" id="" class="form-control" />
                    <span class="text-danger">
                        @error('password_confirm')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-6 required">
                    <label for="">State:</label>
                    <input type="text" name="state" id="" class="form-control" value="{{$new=="1"?"":$user->state}}"/>
                    <span class="text-danger">
                        @error('state')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Country:</label>
                    <input type="text" name="country" id="" class="form-control" value="{{$new=="1"?"":$user->country}}"/>
                    <span class="text-danger">
                        @error('country')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            {{-- address div --}}
            <div class="row">
                <div class="form-group  required">
                    <label for="">Address:</label>
                    <textarea name="address" class="form-control" id="" > {{$new=="1"?"":$user->address}}</textarea>
                    <span class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Gender:</label>
                    <div class="form-control border-0">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M"
                            @if ($new != "1")
                            {{$user->gender=="M"?"checked":""}}
                            @endif
                            />
                            <label class="form-check-label" for="inlineRadio1">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F"
                            @if($new != "1")
                            {{$user->gender=="F"?"checked":""}}
                            @endif
                            />
                            <label class="form-check-label" for="inlineRadio2">F</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O"
                            @if($new != "1")
                            {{$user->gender=="O"?"checked":""}}
                            @endif
                            />
                            <label class="form-check-label" for="inlineRadio3">O</label>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Date of birth:</label>
                    <input type="date" name="dob" id="" class="form-control" value="{{$new=="1"?"":$user->dob}}"/>
                    <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
