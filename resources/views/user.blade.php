<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {

      padding: 25px;
    }
    .affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;

  }

  .affix + .container-fluid {
    padding-top: 70px;
  }
  </style>
</head>
<body style="background-color: white">

<div class="jumbotron" style="background-color:  rgb(129, 233, 247)">
  <div class="container text-center" style="color: rgb(16, 16, 16)">
    <h1>BEBY SHOP</h1>
    <p>Mission, Vission & Values</p>
    <form >
      <div class="input-group">
        <input type="search" class="form-control" size="50" placeholder="search" required>
        <div class="input-group-btn">
          <button type="button" class="btn btn-black">search</button>
        </div>
      </div>
    </form>
  </div>
</div>

   <div class="" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: rgb(245, 240, 240)">

      <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background-color:aliceblue">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" style="background-color: aliceblue; color:black" >Home</a></li>
          <li><a href="#">Produk</a></li>
          <li><a href="#">Soucess</a></li>
          <li><a href="#">Search</a></li>
        </ul>

      <ul class="nav navbar-nav navbar-right" style="margin-inline: 2%">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" ></span> Cart</a></li>
        <a href="/logout"><span class="glyphicon" style="padding-top: 12%"></span>Logout</a>
      </ul>
    </nav>
   </div>
  </nav>
<br>


<div class="row text-center" style="padding-left: 4% ; width:50%; height:100%">
    <div class="col-sm-25">
        <div class="card">
        <img src="https://titoo-theme.myshopify.com/cdn/shop/files/home-01_48757f55-15b2-4f11-9608-74c7fa4956cc.jpg?v=1620728215&width=2000" class="img-rounded" alt="Cinque Terre" width="1430" height="400px" style="margin-right: 20%;">
     </div>
    </div>
    </div>

</div>
<br>
<br>
<br>
    <div class="row-2 text-center" style="padding-left: 2% "  >
        @foreach ($produk as $item)
            <div class="col-sm-2" >
            <div class="thumbnail">
                <img src="{{ asset('/foto/'.$item->foto) }}" alt="Paris" width="400" height="300">
                <br>
                <p><strong>{{ $item->name }}</strong></p>
                <p>Rp.{{ $item->harga }}</p>
                <img src="https://st4.depositphotos.com/2046901/19949/v/450/depositphotos_199492008-stock-illustration-five-stars-rating-icon-vector.jpg" alt=""  width="70" height="50">
                <form action="/user/show/{{$item->id}}" method="get" >
                    @csrf
                    <button typpe="submit" class="btn btn-success">Beli Sekarang</button>
                </form>
            </div>
            </div>
        @endforeach
  <br>

    <br>
    <div class="row" style="padding-left: 13%; padding-top:25%">
        <div class="col-sm-5">
          <img src="https://i.pinimg.com/564x/50/e8/f1/50e8f15ebd8fb9f8b37af9607cde1263.jpg" class="img-responsive" style="width:200%" alt="Image">

        </div>
            <div class="col-sm-5">
              <img src="https://i.pinimg.com/564x/22/b3/2f/22b32fa3637d89984d93eff47c5253d4.jpg" class="img-responsive" style="width:200%" alt="Image">

            </div>
    </div>
        <br>
        <div id="band" class="container text-center">
            <h3>TENTANG KAMI</h3>
            <p><em>We love bebyshop!</em></p>
            <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <br>
            <div class="row">
              <div class="col-sm-4">
                <p class="text-center"><strong>Boneka</strong></p><br>
                <a href="#demo" data-toggle="collapse">
                  <img src="https://cocco.qodeinteractive.com/wp-content/uploads/2018/05/shop-19-img.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo" class="collapse">
                  <p>Guitarist and Lead Vocalist</p>
                  <p>Loves long walks on the beach</p>
                  <p>Member since 1988</p>
                </div>
              </div>
              <div class="col-sm-4">
                <p class="text-center"><strong>Boneka</strong></p><br>
                <a href="#demo2" data-toggle="collapse">
                  <img src="https://cocco.qodeinteractive.com/wp-content/uploads/2018/05/shop-9-img.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo2" class="collapse">
                  <p>Drummer</p>
                  <p>Loves drummin'</p>
                  <p>Member since 1988</p>
                </div>
              </div>
              <div class="col-sm-4">
                <p class="text-center"><strong>Sepatu</strong></p><br>
                <a href="#demo3" data-toggle="collapse">
                  <img src="https://cocco.qodeinteractive.com/wp-content/uploads/2018/05/shop-26-img.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo3" class="collapse">
                  <p>Bass player</p>
                  <p>Loves math</p>
                  <p>Member since 2005</p>
                </div>
              </div>
            </div>
          </div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Theme Made By <a href="BEBY SHOP" title="BELANJA JADI MUDAH">BEBY SHOP</a></p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
