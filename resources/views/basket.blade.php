@include('navbar') 

<!--Add panier GRABMYTEA -->
@if(session()->has("success"))
<div class="alert alert-success">
    <h5>
        {{session()->get('success')}}
    </h5>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>

        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
  <section class="card-intro">            
                <div class="card col-5 shadow-lg card-home">
                    <img class="card-img-top" src="{{$bubbletea->image}}" alt="Card image cap">
                    <h5 class="text-center font-weight-bold" style="margin-top: 2%;">Base</h5>
                    <div class="card-body">
                        <h5 class="card-title">Nom :  {{$bubbletea->name}} -</h5>
                        <p class="card-text"> {{$bubbletea->description}}</p>
                        <p class="card-text"> Prix: {{$bubbletea->price}} €</p>         
                    </div>
                </div>
                <div class="card-img col-1">
                </div>
                <!--Form choix Sugar/Popping // Page Basket -->
              <form action="{{route('basket')}}" method="post"  class="form-panier">
               @csrf
                     <select name="sugar_id"  class="form-select" aria-label="Default select example">
                                  <option selected>Sucre</option>
                                  @Foreach($sugars as $sugar)
                                  <option value="{{$sugar->id}}">>{{$sugar->name}}</option>
                                  @endforeach
                      </select>
                      <select name="popping_id" class="form-select" aria-label="Default select example">
                                  <option selected>Popping</option>
                                  @Foreach($poppings as $popping)
                                  <option  value="{{$popping->id}}">{{$popping->name}}</option>
                                  @endforeach
                      </select>
                      <input name="bubble_tea_id" type="hidden" value="{{$bubbletea->id}}" >
                      <input type="submit" class="btn btn-primary btn-lg btn-block font-weight-bold shadow-lg  btn-home">Valider son Bubble Tea         
              </form> 
     </section>
<!-- FIN GRABMYTEA -->
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>
