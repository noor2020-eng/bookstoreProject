@extends("layouts.main")
@section("content")

<h1 class="mb-4">Show Products</h1>
<div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name">product Name</label>
        <input readonly autofocus='true' value='{{ $item->name}}' type="text" class="form-control" name="name" id="name" placeholder="Enter products Name">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="image">Employee image</label>
            <input readonly type="file" value='{{ $item->image }}' class="form-control" name="image" id="image" placeholder="Enter image Address">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="price">Employee price</label>
            <input readonly type="text" value='{{ $item->price }}' class="form-control" name="price" id="price" placeholder="Enter price Number">
            
        </div>
    </div>
    
    
    <a href='{{ route("products.edit",$item->id) }}' class='btn btn-sm btn-info'>Edit</a>
    <a class='btn btn-light' href='{{route("products.index")}}'>Cancel</a>

</form>
@endsection