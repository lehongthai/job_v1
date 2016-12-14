@extends('layouts.admin')

@section('body_right')

    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{!! route('admin.image.getEdit') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="id" value="{!! $data['id'] !!}">
             <div class="form-group">
                <label>Tên</label>
                <input class="form-control" name="txtName" placeholder="Nhập Tên" value="{!! old('txtName', $data['name']) !!}" />
            </div>
            <div class="form-group">
                <label>Tiêu Đề</label>
                <input class="form-control" name="txtTitle" placeholder="Nhập Tiêu Đề" value="{!! old('txtTitle', $data['content']) !!}" />
            </div>
            <div class="form-group">
                <label>Link kết nối</label>
                <input class="form-control" name="txtLink" placeholder="Nhập Link Kết Nối" value="{!! old('txtLink', $data['link']) !!}" />
            </div>
            <div class="form-group">
                <label>Slider</label>
                <div class="col-xs-12 thumbnail">
                    <img src="{!! old('images', $data['image_link']) !!}" id="avatar">
                </div>
                <input type="hidden" name="images" id="link_avatar" value="{!! old('images', $data['image_link']) !!}" >
                <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
                <div style="color:red">{!! $errors->first('images') !!}</div>
            </div>
                <button type="submit" class="btn btn-default">Cập Nhật</button>
                <button type="reset" class="btn btn-default" onclick="window.location='{!! URL('admin/image/list') !!}'">Cancel</button>
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
      document.getElementById( 'avatar' ).src = document.getElementById( 'link_avatar' ).value;
    }
</script>
@endsection()