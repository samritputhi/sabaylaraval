@extends('back-end.layout.master')
@section('content')
    <!-- <div class="from-container"> -->
        <a href="{{route('admin.news.create')}}" type="button" class="btn btn-success mb-2">Create</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th  scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Order</th>
                    <th scope="col">Status</th>
                    <th >Image</th>
                    <th class="w-25">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($news as $item)
           
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td> {{ Str::limit($item->title, 25) }}</td>
                    <td>{{ $item->category->title }}</td>
                    <td> {{ Str::limit($item->des, 25) }} </td>
                    <td>{{ $item->order }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <img class="w-25" src="{{ url('news').'/'.$item->img }}" alt="">
                    </td>
                    <td><a href="{{ route('admin.news.edit',$item->id) }}">Edit </a> | <a href="{{ route('admin.news.delete',$item->id) }}">Delete</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>
    <!-- </div> -->
@endsection