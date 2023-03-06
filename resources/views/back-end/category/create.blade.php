@extends('back-end.layout.master')

@section('content')
    <div class="from-container">
        <form method="post" action="{{ route('admin.category.store') }}">
            <div class="from-left">
               
                @csrf
                <div class="form-group">
                    <label for="txt-name">Title</label>
                    <input type="text" class="form-control" id="txt-title" class="txt-title" name="txt_title">
                </div>
                <div class="form-group">
                    <label for="txt-od">Order</label>
                    <input type="number" class="form-control" id="txt-od" class="txt-od" name="txt_od">
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
                
            </div>
            <button type="submit" class="btn btn-success btnAdd">Save</button>
        </form>
    </div>
@endsection