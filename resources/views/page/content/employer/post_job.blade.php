@extends('page.master')
@section('content')

<div class="row" style="margin-top: 100px">
<div class="col-sm-8">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Đăng Tin Tuyển Dụng</h3>
  </div>
  <div class="panel-body">
    <form action="" method="POST" class="form-horizontal" role="form">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="row">
    <div class="col-sm-4">
    <label>Tiêu Đề <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <input type="text" name="" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Số Lượng Cần Tuyển</label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <input type="text" name="" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Giới Tính <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="1">-- Nam --</option>
          <option value="2">-- Nữ --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Mô Tả Công Việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <textarea name="" id="input" class="form-control" rows="5" required="required"></textarea>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Yêu Cầu Công Việc</label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <textarea name="" id="input" class="form-control" rows="5" required="required"></textarea>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Tính Chất Công Việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Trình Độ <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Kinh Nghiệm <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Mức Lương <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>


    <div class="row">
    <div class="col-sm-4">
    <label>Hoa Hồng <span>(nếu có)</span></label>
    </div>
    <div class="col-sm-1">
    Từ:
    </div>
    <div class="col-sm-3">
        <div class="form-group">
        <input type="text" name="" id="input" class="form-control" value="">
        </div>
        </div>
        <div class="col-sm-1">
    Đến:
    </div>
        <div class="col-sm-3">
        <div class="form-group">
        <input type="text" name="" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Hình Thức Làm Việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Thời Gian Thử Việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Quyền Lợi</label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <textarea name="" id="input" class="form-control" rows="5" required="required"></textarea>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Ngành Nghề <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" multiple id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Nơi Làm Việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="" multiple id="input" class="form-control">
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
          <option value="">-- Select One --</option>
        </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Hết Hạn <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <input type="date" name="" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    
        <div class="form-group text-center">
          <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i>Lưu</button>
                            <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i>Hủy</button>
          </div>
        </div>
    </form>
  </div>
</div>

</div>
  <div class="col-sm-4">
		
</div>
</div>
@endsection

@section('javascript')
<script src="{!! url('public/admin') !!}/js/select2.min.js"></script>
@endsection
