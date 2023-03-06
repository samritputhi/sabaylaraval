@extends('back-end.layout.master')
@section('title')
    Edit From Menu
@endsection


@section('content')
    <div class="from-container">
        <form method="post" action="{{ route('admin.menu.update',$menu->id) }}" enctype="multipart/form-data">
            <div class="from-left">
                @csrf
                <div class="form-group">
                    <label for="txt-name">Title</label>
                    <input type="text" value="{{$menu->title}}" class="form-control" id="txt-title" class="txt-title" name="txt_title">
                </div>
                <div class="form-group">
                    <label for="txt-od">Order</label>
                    <input type="number" value="{{$menu->od}}" class="form-control" id="txt-od" class="txt-od" name="txt_od">
                </div>
                <div class="form-control img-box">
                    <input type="file" value="{{$menu->img}}" name="txt_img" id="txt-img" class="txt_img">
                </div>
            </div>
            <div class="from-right">
                <div class="form-group">
                    <label for="txt-status">Status</label>
                    <select class="form-control" id="txt-status" name="txt_status">
                        <option {{ $menu->status == 1 ? 'selected' : '' }} value="1">Active</option>  
                        <option {{ $menu->status == 0 ? 'selected' : '' }} value="0">Disable</option> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="txt-des">Description</label>
                    <textarea class="form-control"  id="txt-des" rows="7" name="txt_des">{{$menu->des}}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btnAdd">Save</button>
        </form>
    </div>
@endsection