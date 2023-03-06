@extends('back-end.layout.master')
@section('content')
    <!-- <div class="from-container"> -->
        <a href="{{route('admin.category.create')}}" type="button" class="btn btn-success mb-2">Create</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Order</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $item)

                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->order }}</td>
                    <td>{{ $item->status }}</td>
                  
                    <td><a href="{{ route('admin.category.edit',$item->id) }}">Edit</a> | <a href="{{ route('admin.category.delete',$item->id) }}">Delete</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>
    <!-- </div> -->
@endsection