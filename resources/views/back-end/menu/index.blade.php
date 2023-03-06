@extends('back-end.layout.master')

@section('title')
    Menu Page
@endsection
@section('content')
    <!-- <div class="from-container"> -->
        <a href="{{route('admin.menu.create')}}" type="button" class="btn btn-success mb-2">Create</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Desciption</th>
                    <th scope="col">Order</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Other</th>
                </tr>
            </thead>
            <tbody>
            @foreach($menus as $menu)

                <tr>
                    <th scope="row">{{ $menu->id }}</th>
                    <td>{{ $menu->title }}</td>
                    <td>{{ $menu->des }}</td>
                    <td>{{ $menu->od }}</td>
                    <td>{{ $menu->status }}</td>
                    <td>
                        <img class="w-25" src="{{ url('news').'/'.$menu->img }}" alt="">
                    </td>
                    <td><a href="{{ route('admin.menu.edit',$menu->id) }}">Edit</a> | <a href="{{ route('admin.menu.delete',$menu->id) }}">Delete</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>
    <!-- </div> -->
@endsection