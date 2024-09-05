<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href= "{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>

    @if (Session::has('pesanlogin'))
    {{ Session::get('pesanlogin') }}
    @endif
    <body style="background-color: rgb(90, 109, 251)">
    </div>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-body">
        <form action="/user" method="get">
        @csrf
        <div class="container"><br>
            <div class="logo">
         <img src="Soft Blue Cute Baby Shop Logo.png" alt="">
        </img>
                <h2 class="text-center" style="padding-bottom: 40px"><br>Aplikasi  Baby Shop</h2>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="text" class="form-control" placeholder="Nama" required="">
                       </div>
           <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required="">
           </div>
           <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
        </div>
        <br>

        <div class="row mb-4">
            <div class="col d-flex justify-content-center">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
            </div>

            <div class="col">
              <a href="#!">Forgot password?</a>
            </div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
        <hr>
        <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
    </form>
</div>
</div>


<script src="{{asset('/asset/bootstrap/js/bootstrap.min.js')}}"></script>


</body>
</html>
