@extends('layouts.admin')
@section('body_right')

                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!! route('admin.catepost.getAdd') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label>Tên Danh Mục</label>
                                <input class="form-control" name="txtCateName" placeholder="Tên Danh Mục" value="{!! old('txtCateName') !!}" />
                                <div style="color:red">{!! $errors->first('txtCateName') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Đường Dẫnc</label>
                                <input class="form-control" name="txtUrl" placeholder="Đường Dẫn" value="{!! old('txtUrl') !!}" />
                                <div style="color:red">{!! $errors->first('txtUrl') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Vị Trí</label>
                                <input class="form-control" name="txtOrder" placeholder="Vị Trí" value="{!! old('txtOrder') !!}" />
                            </div>
                            <!-- <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="txtKeywords" placeholder="Keywords" value="{!! old('txtKeywords') !!}" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription') !!}</textarea>
                            </div> -->
                            <button type="submit" class="btn btn-default">Thêm Mới</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
@endsection()