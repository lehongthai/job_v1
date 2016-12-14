@extends('layouts.admin')
@section('body_right')

    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.job.getAdd') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/job/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
                <label>Tên công việc</label>
                <input class="form-control" name="txtName" placeholder="Tên công việc" value="{!! old('txtName') !!}" />
                <div style="color:red">{!! $errors->first('txtName') !!}</div>
            </div>
            <div class="form-group">
                <label>Ảnh hiển thị</label>
                <div class="col-xs-12 thumbnail">
                    <img src="{!! old('image_link') !!}" id="image_link">
                    <hr>
                <input class="form-control" name="txtAltImage" placeholder="Chú thích ảnh" value="{!! old('txtAltImage') !!}"  />
                </div>
                <input type="hidden" name="image_link" id="link_avatar" value="{!! old('image_link') !!}" >
                <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
                <div style="color:red">{!! $errors->first('image_link') !!}</div>
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
                <label>Đường dẫn</label>
                <input class="form-control" name="txtUrl" placeholder="Đường dẫn" value="{!! old('txtUrl') !!}" />
                <div style="color:red">{!! $errors->first('txtUrl') !!}</div>
            </div>
        <form>
    </div>
<script type="text/javascript">
    function BrowseServer()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }
    // This is a sample function which is called when a file is selected in CKFinder.
    function SetFileField( fileUrl )
    {
      document.getElementById( 'link_avatar' ).value = fileUrl;
      document.getElementById( 'image_link' ).src = document.getElementById( 'link_avatar' ).value;
    }

    
</script>
@endsection()
