@extends('layouts.admin')
@section('body_right')

    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.provin.postEdit') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/provin/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
        <input type="hidden" name="id" value="{!! $data['id'] !!}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
                <label>Tên</label>
                <input class="form-control" name="txtName" placeholder="Vui lòng nhập tiêu đề" value="{!! old('txtName', $data['name']) !!}" />
                <div style="color:red">{!! $errors->first('txtName') !!}</div>
            </div>
            <div class="form-group">
                <label>Chọn Miền</label>
                <select class="form-control" name="txtCompass">
                    <option value="">Vui Lòng Chọn</option>
                    <option value="1" @if(old('txtCompass') == 1 || $data['compass'] == 1) selected  @endif>Miền Nam</option>
                    <option value="2" @if(old('txtCompass') == 2 || $data['compass'] == 2) selected  @endif>Miền Trung</option>
                    <option value="3" @if(old('txtCompass') == 3 || $data['compass'] == 3) selected  @endif>Miền Bắc</option>
                </select>
                <div style="color:red">{!! $errors->first('txtCompass') !!}</div>
             </div>
            <div class="form-group">
                <label>Keywords</label>
                <input class="form-control" name="txtKeyword" placeholder="Vui lòng nhập Keywords" value="{!! old('txtKeyword', $data['keywords']) !!}" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', $data['description']) !!}</textarea>
            </div>
            <div class="form-group">
                <div class="radio">
                    <label>
                        <input type="radio" name="txtSearch" id="inputSearch" value="1" @if(old('search') == 1 || $data['search'] == 1) checked="checked" @endif>
                        Search
                    </label>
                    <label>
                        <input type="radio" name="txtSearch" id="inputSearch" value="0"  @if(old('search') == 2 || $data['search'] == 2) checked="checked" @endif>
                        Không Search
                    </label>
                </div>
                
            </div>
        <form>
    </div>
@endsection()
