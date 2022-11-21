@include('navbar')

<div class="d-flex" style="margin-top:50px;">



    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>

        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link text-white" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Bubble Tea
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('popping') }}" class="nav-link text-white" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Popping
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('sugar') }}" class="nav-link text-white active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Sugar
                </a>
            </li>



        </ul>
    </div>

    <!-- ============================  CRUD bubbletea =================================== -->
    <div class="container">

        <table class="table table-striped thead-dark">
            <h2 class="mt-4">All Sugars</h2>
            <thead>
            <div class="d-flex justify-content-end mb-4">
                <a href="{{ route('createSugar') }}" class="btn btn-primary">Add a new Sugar</a>
            </div>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $datasugar as $sugar )
                <tr>
                    <th scope="row">{{ $loop -> index + 1 }}</th>
                    <th scope="row">{{ $sugar->name }}</th>
                    <td>{{ $sugar->price / 100 }}€</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                        </div>
                        <div>
                            <a href="{{ route('editSugar', ['id'=>$sugar->id])}}" class="btn btn-primary">Edit</a>
                        </div>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
