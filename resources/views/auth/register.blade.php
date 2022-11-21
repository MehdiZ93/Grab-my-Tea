<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Album example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
</head>
<body >

 <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}">
                  <hr>
                  @csrf  

                <!-- name -->

                <div class="d-flex flex-row align-items-center mb-4">
                  <iconify-icon class="fas fa-user fa-lg me-4 fa-fw " icon="fa:user" width="20" height="40"></iconify-icon>
                    <div class="form-outline flex-fill mb-0">
                        <input placeholder="Your Name" id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                  </div>

                <!-- lastname -->

                  <div class="d-flex flex-row align-items-center mb-4">
                  <iconify-icon class="fas fa-envelope fa-lg me-3 fa-fw" icon="heroicons:users-20-solid" width="30" height="40"></iconify-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input placeholder="Lastname" id="lastname"  class="form-control" type="text" name="lastname" :value="old('lastname')" required  />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                    </div>
                  </div>

                <!-- Email Address -->

                  <div class="d-flex flex-row align-items-center mb-4">
                  <iconify-icon class="fas fa-lock fa-lg me-3 fa-fw"icon="ic:round-email" width="30" height="40"></iconify-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input placeholder="Your Email" id="email" type="email" name="email" :value="old('email')" required  class="form-control" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                  </div>

                <!-- Password -->
                
                  <div class="d-flex flex-row align-items-center mb-4">
                  <iconify-icon class="fas fa-key fa-lg me-3 fa-fw" icon="ri:lock-password-fill" width="30" height="40"></iconify-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input placeholder="Password" id="password"  class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                  </div>

                <!-- Confirm Password -->
                  <div class="d-flex flex-row align-items-center mb-4">
                  <iconify-icon class="fas fa-key fa-lg me-3 fa-fw" icon="ic:sharp-repeat" width="30" height="40"></iconify-icon>
                    <div class="form-outline flex-fill mb-0">
                      <input placeholder="Confirm password" id="password_confirmation" type="password" name="password_confirmation" required class="form-control"/>
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                  </div>

<hr>
                  
                  <!-- <a href="{{ route('login') }}"><button class="btn btn-primary"  type="button">Connexion</button></a> -->
                  <a href="{{ route('login') }}" class="btn btn-light btn-sm" role="button">Connexion</a>     
                  <button class="btn btn-info ">{{ __('Register') }}</button>
              


                </form>
              </div>

              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="/img/img2.png"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
