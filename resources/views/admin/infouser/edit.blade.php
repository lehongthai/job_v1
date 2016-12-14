@extends('layouts.admin')
@section('body_right')
    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.infouser.postEdit') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/info/list/'.$data['alias']) !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>

            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="alias" value="{!! $data['alias'] !!}">
            <input type="hidden" name="id" value="{!! $data['id'] !!}">
            <div class="form-group">
                <label>Tên</label>
                <input class="form-control" name="txtName" placeholder="Vui lòng nhập tên" value="{!! old('txtName', $data['name']) !!}" />
                <div style="color:red">{!! $errors->first('txtName') !!}</div>
            </div>
            <div class="form-group">
                <label>Vị trí</label>
                <input class="form-control" name="txtOrder" placeholder="Vui lòng nhập vị trí" value="{!! old('txtOrder', $data['orders']) !!}" />
                <div style="color:red">{!! $errors->first('txtOrder') !!}</div>
            </div>
        <form>
    </div>
@endsection()
