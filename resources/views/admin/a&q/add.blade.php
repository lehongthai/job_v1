@extends('layouts.admin')
@section('body_right')

    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.aq.getAdd') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/a&q/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
                <label>Câu hỏi</label>
                <input class="form-control" name="txtAnswer" placeholder="Câu hỏi" value="{!! old('txtAnswer') !!}" />
                <div style="color:red">{!! $errors->first('txtAnswer') !!}</div>
            </div>
            <div class="form-group">
                <label>Keywords</label>
                <input class="form-control" name="txtKeyword" placeholder="Vui lòng nhập Keywords" value="{!! old('txtKeyword') !!}" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription') !!}</textarea>
            </div>
            <div class="form-group">
                <label>Vị trí</label>
                <input class="form-control" name="txtOrder" placeholder="Vị trí" value="{!! old('txtOrder') !!}" />
                <div style="color:red">{!! $errors->first('txtOrder') !!}</div>
            </div>
            <div class="form-group">
                <label>Trả lời</label>
                <textarea class="form-control" rows="3" name="txtQuestion">{!! old('txtQuestion') !!}</textarea>
                <div style="color:red">{!! $errors->first('txtQuestion') !!}</div>
                <script type="text/javascript">ckeditor('txtQuestion')</script>
            </div>
        <form>
    </div>
@endsection()
