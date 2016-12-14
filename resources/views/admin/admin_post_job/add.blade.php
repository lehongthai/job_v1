@extends('layouts.admin')
@section('body_right')

    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.postjob.postAdd') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/provin/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
<hr>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="row">
    <div class="col-sm-4">
    <label>Tiêu Đề <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <input type="text" name="title" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Số Lượng Cần Tuyển</label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <input type="text" name="quanlity" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Giới Tính <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="sex" id="input" class="form-control">
          <option value="">-- Không yêu cầu --</option>
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
        <textarea name="description" id="input" class="form-control" rows="5"></textarea>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Yêu Cầu Công Việc</label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <textarea name="require" id="input" class="form-control" rows="5"></textarea>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Tính Chất Công Việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="attribute" id="input" class="form-control">
          <option value="">-- Select One --</option>
          @foreach($listAttribute as $attribute)
          <option value="{!! $attribute->id !!}">-- {!! $attribute->name !!} --</option>
          @endforeach
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
        <select name="level" id="input" class="form-control">
          <option value="">-- Select One --</option>
          @foreach($listLevel as $level)
          <option value="{!! $level->id !!}">-- {!! $level->name !!} --</option>
          @endforeach
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
        <select name="empirical" id="input" class="form-control">
          <option value="">-- Select One --</option>
          @foreach($listEmpirical as $empirical)
          <option value="{!! $empirical->id !!}">-- {!! $empirical->name !!} --</option>
          @endforeach
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
        <select name="wage" id="input" class="form-control">
          <option value="">-- Select One --</option>
          @foreach($listWage as $wage)
          <option value="{!! $wage->id !!}">-- {!! $wage->name !!} --</option>
          @endforeach
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
        <input type="text" name="min_kickback" id="input" class="form-control" value="">
        </div>
        </div>
        <div class="col-sm-1">
    Đến:
    </div>
        <div class="col-sm-3">
        <div class="form-group">
        <input type="text" name="max_kickback" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Hình Thức Làm Việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select name="type" id="input" class="form-control">
          <option value="">-- Select One --</option>
          @foreach($listType as $type)
          <option value="{!! $type->id !!}">-- {!! $type->name !!} --</option>
          @endforeach
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
        <select name="probation_time" id="input" class="form-control">
          <option value="">-- Select One --</option>
          @foreach($listProbationTime as $probation_time)
          <option value="{!! $probation_time->id !!}">-- {!! $probation_time->name !!} --</option>
          @endforeach
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
        <textarea name="benefit" id="input" class="form-control" rows="5"></textarea>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Ngành Nghề <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <select data-placeholder="Chọn tối đa 3 việc" name="job[]" multiple id="input" class="form-control multiple-select2">
          <option value="">-- Select One --</option>
          @foreach($listJob as $job)
          <option value="{!! $job->id !!}">-- {!! $job->name !!} --</option>
          @endforeach
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
        <select data-placeholder="Chọn tối đa 3 tỉnh" name="provin[]" multiple='multiple' id="input" class="form-control multiple-select2">
          <option value="">-- Select One --</option>
          @foreach($listProvin as $provin)
          <option value="{!! $provin->id !!}">-- {!! $provin->name !!} --</option>
          @endforeach
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
        <input type="date" name="expired_at" id="input" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Cho xem đăng việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <div class="radio">
            <label>
                <input type="radio" name="status" id="inputStatus" value="1" checked="checked">
                Cho Xem
            </label>
            <label>
                <input type="radio" name="status" id="inputStatus" value="2" checked="checked">
                Không Cho Xem
            </label>
        </div>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <label>Thể loại việc <span class="require">*</span></label>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
        <div class="radio">
            <label>
                <input type="radio" name="type_job" id="inputStatus" value="1" checked="checked">
                Mới
            </label>
            <label>
                <input type="radio" name="type_job" id="inputStatus" value="2" checked="checked">
                Hot
            </label>
        </div>
        </div>
        </div>
    </div>
    
</div>
        <form>
    </div>
@endsection()

@section('javascript')
<script type="text/javascript">
    $('.multiple-select2').select2({
        maximumSelectionLength: 3,
        "language": "pt-BR"
    });
</script>
@endsection
