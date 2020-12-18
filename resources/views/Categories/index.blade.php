@extends("layouts.main")

@section("content")

<h1 class="mb-4">Catigories</h1>
        <a class="btn btn-primary btn-sm mb-2 " href="{{ route('categories.creat') }}">Creat Categoty</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{ route('categories.edit', [$cat->id]) }}">Edit</a>
                            <form method="post" action="{{ route('categories.delete',[$cat->id]) }}">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                
            </tbody>

        </table>
        @endsection