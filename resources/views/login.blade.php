<head>
  <title>Shoppers | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
         

    
  </style>

  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/authstyle.css">
</head>
<body>
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{route('index.home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Login</strong></div>
      </div>
    </div>
  </div>
<div class="login">
  <div>
    <div class="mt-5">
      @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
              <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
      @endif
      @if(session()->has('error'))
      <div class="alert alert-danger">{{session('error')}}</div>
      @endif
      @if(session()->has('success'))
      <div class="alert alert-success">{{session('error')}}</div>
      @endif
  </div>
  <form action="{{route('login')}}" method="POST">
      @csrf
    <p class="title">Log In</p>

    <input placeholder="Email" name="email" required />
    <input placeholder="Password" name="password" type="password" required />
    <button class="loader">Sign in</button>
    <a href="#">Forgot your password?</a>
  </form>
    <p class="text">Don't have an account?</p>
    <button class="buttonShadow" ><a style="font-size:14px;color:#181717;" href="{{route('inscription')}}">Create new account </a></button>
 
  </div>
</div>
 
</body> 

  
<script>
    const loaders = document.querySelectorAll(".loader");
  loaders.forEach((loader, index) => {
    loader.addEventListener("click", handleOnClickLoad);
  });

  function handleOnClickLoad(e) {
    e.target.innerHTML = "<i class='bx bx-loader-alt bx-spin'></i>";
  }
</script>