@include('navbar') 


<!--HEADER  -->
<header class="header-product text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="text-dark fs-1 masthead-heading mb-0 font-weight-bold">Grab ton Buble tea ! </h1>
                    <h2 class="text-dark fs-1 masthead-subheading mb-0">Choisis ta base.</h2>
                </div>
            </div>
</header>
<!--FIN HEADER  -->

<!--CARD PRODUCT LIST GRABMYTEA -->
  <main>
      <section class="background">
       
         <div class="album py-5 ">
            <section class="py-1 text-center container  ">
                      <div class="card shadow-lg">
                          <div class="card-body">
                          <h1 class="fw-light">LES BASES</h1>
                          </div>
                     </div>
            </section>
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
              @foreach($bubbletea as $item)
                <div class="col-6">
                  <div class="card shadow-lg card-product">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{ $item->image }}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                              <p class="card-text">Parfum : {{ $item->name }}</p>
                              <p class="card-text">{{ $item->description }}</p>
                              <p class="card-text">{{ $item->price }} €</p>
                              <p class="card-text"></p>
                              <div class="d-flex justify-content-between align-items-center">
                                 
                                <a href="{{route('bubbletea.basket', ['id'=>$item->id])}}" >Ajouter au panier</a>                              </div>
                      </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
    </section>
</main>
<!--FIN CARD PRODUCT LIST GRABMYTEA -->
<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Retour haut de page.</a>
    </p>
  </div>
</footer>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    </body>
</html>
