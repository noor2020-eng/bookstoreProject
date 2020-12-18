@extends("layouts.main")
@section("title","Create Product")

@section("content")

<form method='post' action='{{asset("products")}}'>
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name">Product Name</label>
            <input autofocus='true' value='{{ old("name") }}' type="text" class="form-control" name="name" id="name" placeholder="Enter product Name">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="image">Product image</label>
            <input  value='{{ old("image") }}' type="file" class="form-control" name="image" id="image" placeholder="Enter Last Name">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="price">products price</label>
            <input type="text" value='{{ old("price") }}' class="form-control" name="price" id="price" placeholder="Enter price Address">
            
        </div>
    </div>
    
    <button class="btn btn-primary" type="submit">Create</button>
    <a class='btn btn-light' href='{{route("products.index")}}'>Cancel</a>

</form>
@endsection