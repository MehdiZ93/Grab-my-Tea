@include('navbar')


<div class="d-flex" style="margin-top:50px;">


<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; margin-top:100px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Welcome name</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link text-white active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          BubbleTea
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('popping') }}" class="nav-link text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Popping
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('sugar') }}" class="nav-link text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Sugar
        </a>
      </li>
 

    
    </ul>
    </div>

<!-- ============================  CRUD bubbletea =================================== -->



<div class="my-3 p-3 bg-body rounded shadow-sm container">

<h3 class="border-bottom pb-2 mb-4">Add new Bubble tea</h3>
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
<form method="post" action = "{{ route('addBubble') }}">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
</div>

<div class="form-group">
      <label class="form-check-label" for="price">Price</label>
    <input type="text" class="form-control" placeholder="Price" name="price">
 </div>

 <div class="form-group">
    <label for="Description">Description</label>
    <textarea class="form-control" rows="3" placeholder="Your Description" name="description"></textarea>
  </div>

  <div class="form-group">
      <label class="form-check-label" for="image">Image</label>
    <input type="text" class="form-control" placeholder="image" name="image">
 </div>
  
  
  <button type="submit" class="btn btn-primary">Add Bubble</button>
  <a href="{{ url('/admin') }}" class="btn btn-danger">Cancel</a>
</form>
</div>

