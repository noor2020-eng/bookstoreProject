@extends("layouts.main")
@section("title","Edit Product")
@section("content")

<form method='post' action='{{asset("products/".$item->id)}}'>
    @csrf
    @method("put")

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name">Products Name</label>
            <input autofocus='true' value='{{ old("name",$item->name) }}' type="text" class="form-control" name="name" id="name" placeholder="Enter First Name">   
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="image">Products image</label>
            <input value='{{ old("image",$item->image) }}' type="text" class="form-control" name="image" id="image" placeholder="Enter last Name">   
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="price">Products price</label>
            <input type="text" value='{{ old("price",$item->price) }}' class="form-control" name="price" id="price" placeholder="Enter price Address">
            
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Update</button>
    <a class='btn btn-light' href='{{route("products.index")}}'>Cancel</a>

</form>
@endsection