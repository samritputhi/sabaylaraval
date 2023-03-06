@extends('back-end.layout.master')

@section('title')
    From Menu
@endsection
@section('content')
    <div class="from-container">
        <form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
            <div class="from-left">
               
                @csrf
                <div class="form-group">
                    <label for="txt-name">Title</label>
                    <input type="text" class="form-control" id="txt-title" class="txt-title" name="txt_title">
                </div>
                <div class="form-group">
                    <label for="txt-name">Category</label>
                    <select name="txt_category_id" id="txt_category_id" class="form-control">
                        @foreach($category as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="txt-od">Order</label>
                    <input type="number" class="form-control" id="txt-od" class="txt-od" name="txt_od">
                </div>
                <div class="form-control img-box">
                    <input type="file" name="txt_img" id="txt-img" class="txt_img">
                </div>
            </div>
            <div class="from-right">
                <div class="form-group">
                    <label for="txt-status">Status</label>
                    <select class="form-control" id="txt-status" name="txt_status">
                        <option value="1">Active</option>
                        <option value="0">Disable</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txt-des">Description</label>
                    <textarea class="form-control" id="txt-des" rows="7" name="txt_des"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btnAdd">Save</button>
        </form>
    </div>
@endsection