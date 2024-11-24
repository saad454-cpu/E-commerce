<head>
  <title>SignUp | BeBuy</title>
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
        <div class="col-md-12 mb-0 "><a href="{{route('index.home')}}">Home</a> <span class="mx-2 mb-0">></span> <strong class="text-black">register</strong></div>
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
     
      <form action="{{route('inscription')}}" method="POST">
        @csrf
    <p class="title">Create Your Account Now !</p>

    <input placeholder="name" name="name" required />
    <input placeholder="phone" name="phone" required />
     
    <input placeholder="Email" name="email" required />
    <input placeholder="Password" name="password" type="password" required />
    <button class="loader">Create</button>
    <p class="text">Already have an account?</p>
      </form>
      <form action="{{route('login.show')}}" >
        @csrf
        <button type="submit"    >Sign In </button>
      </form>
    
    

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


































{{-- <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Register</strong></div>
      </div>


      
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Create Your Account Now </h2>
          </div>
          <div class="col-md-6">
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
            <form action="{{route('auth.register.post')}}" method="post">
              @csrf
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
              
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                  </div>
                 
                </div>
                

                <div class="form-group row">
                <div class="col-md-6">
                    <label for="c_subject" class="text-black">Password </label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Create">
                  </div>
                </div>
              </div>
            </form>
          </div>
         

          </div>
        </div>
      </div>
    </div> --}}
