@extends("layouts.main")
@section("title","Manage Products")
@include('layouts.shared.msg')
@section("content")

<a href='{{route("products.create")}}' class='btn btn-success'>Create New product</a>

<table class="table table-striped table-sm mt-3">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th>product Name</th>
            <th>products image</th>
            <th>products price</th>
            <th width="20%">Options</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->image }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <form method='post' action='{{asset("products/".$item->id)}}'>
                    @csrf
                    @method("delete")
                    <a href='{{ route("products.show",$item->id) }}' class='btn btn-sm btn-info'>Show</a>
                    <a href='{{ route("products.edit",$item->id) }}' class='btn btn-sm btn-primary'>Edit <i class="fa fa-edit"></i></a>
                    <input type='submit' onclick='return confirm("Are you sure Dude?")' value='Delete' class='btn btn-danger btn-sm ' />                </form>    
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection