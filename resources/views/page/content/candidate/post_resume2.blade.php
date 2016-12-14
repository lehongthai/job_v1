@extends('page.master')
@section('content')
<div class="row" style="margin-top: 100px">
<div class="col-sm-8">

{{-- add info user --}}
@include('page.blocks.info_user')
{{-- end info user --}}

{{-- add menu user --}}
@include('page.blocks.menu_bottom_user')
{{-- end menu user --}}
<div class="row">
            <div class="col-sm-6">
              <h2>Tạo hồ sơ</h2>
            </div>
          </div>
<form method="post" action="{!! url('ung-vien/resume') !!}">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group" id="resume-title-group">
                <label for="resume-title">Tiêu Đề Hồ Sơ</label><span class="require">*</span>
                <input type="text" class="form-control" id="resume-title" placeholder="Tiêu Đề Hồ Sơ" name="title" value="{!! old('title') !!}">
                <span style="color:red">{!! $errors->first('title') !!}</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group" id="resume-category-group">
                <label for="resume-category">Trình Độ Cao Nhất</label><span class="require">*</span>
                <select class="form-control select-level" id="resume-category" name="level">
                  <option>-- Vui Lòng Chọn Một --</option>
                  @foreach($listLevel as $level)
                  <option value="{!! $level->id !!}" @if(old('level') == $level->id) selected @endif>-- {!! $level->name !!} --</option>
                  @endforeach
                </select>
                <span style="color:red">{!! $errors->first('level') !!}</span>
              </div>
            </div>
          
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group" id="resume-category-group">
                <label for="resume-category">Số Năm Kinh Nghiệm</label><span class="require">*</span>
                <select name="empirical" class="form-control select-level" id="resume-category">
                  <option>-- Vui Lòng Chọn Một --</option>
                  @foreach($listEmpirical as $empirical)
                  <option value="{!! $empirical->id !!}" @if(old('empirical') == $empirical->id) selected @endif>-- {!! $empirical->name !!} --</option>
                  @endforeach
                </select>
                <span style="color:red">{!! $errors->first('empirical') !!}</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group" id="resume-category-group">
                <label for="resume-category">Cấp Bậc Hiện Tại</label><span class="require">*</span>
                <select name="diploma" class="form-control select-level" id="resume-category">
                  <option>-- Vui Lòng Chọn Một --</option>
                  @foreach($listDiploma as $diploma)
                  <option value="{!! $diploma->id !!}" @if(old('diploma') == $diploma->id) selected @endif>-- {!! $diploma->name !!} --</option>
                  @endforeach
                </select>
                <span style="color:red">{!! $errors->first('diploma') !!}</span>
              </div>
            </div>
          
          </div>
          
          <div class="row social-network">
          <div class="col-sm-6">
              <div class="form-group" id="resume-category-group">
                <label for="resume-category">Cấp Bậc Mong Muốn</label><span class="require">*</span>
                <select name="diploma_wish" class="form-control select-level" id="resume-category">
                  <option>-- Vui Lòng Chọn Một --</option>
                  @foreach($listDiplomaWish as $diploma_wish)
                  <option value="{!! $diploma_wish->id !!}" @if(old('diploma_wish') == $diploma_wish->id) selected @endif>-- {!! $diploma_wish->name !!} --</option>
                  @endforeach
                </select>
                <span style="color:red">{!! $errors->first('diploma_wish') !!}</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group" id="resume-social-network-group">
                <label for="resume-social-network">Ngành Nghề Mong Muốn</label><span class="require">*</span>
                <select name="job[]" multiple class="form-control js-example-basic-multiple-limit" data-tags="true" data-placeholder="Chọn công việc (tối đa 3 việc)" data-allow-clear="true">
                  @foreach($listJob as $job)
                  <option value="{!! $job->id !!}" @if(old('job') == $job->id) selected @endif>{!! $job->name !!}</option>
                  @endforeach
                </select>
                <span style="color:red">{!! $errors->first('job') !!}</span>
              </div>
            </div>
            
          </div>
          <div class="row social-network">
          <div class="col-sm-6">
              <div class="form-group" id="resume-category-group">
                <label for="resume-category">Nhu Cầu Làm Việc</label><span class="require">*</span>
                <select name="exigency" class="form-control select-level" id="resume-category">
                  <option>-- Vui Lòng Chọn Một --</option>
                  @foreach($listExigency as $exigency)
                  <option value="{!! $exigency->id !!}" @if(old('exigency') == $exigency->id) selected @endif>-- {!! $exigency->name !!} --</option>
                  @endforeach
                </select>
                <span style="color:red">{!! $errors->first('exigency') !!}</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group" id="resume-social-network-group">
                <label for="resume-social-network">Nơi Làm Việc Mong Muốn</label><span class="require">*</span>
                <select name="provin[]" multiple class="form-control js-example-basic-multiple-limit" data-tags="true" data-placeholder="Chọn Nơi Làm Việc" data-allow-clear="true">
                  @foreach($listProvin as $provin)
                  <option value="{!! $provin->id !!}" @if(old('provin') == $provin->id) selected @endif>{!! $provin->name !!}</option>
                  @endforeach
                  <option value="100" @if(old('provin') == 100) selected @endif>Tất cả</option>
                </select>
                <span style="color:red">{!! $errors->first('provin') !!}</span>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group" id="resume-social-network-group">
                <label for="resume-social-network">Kiểu Làm Việc</label><span class="require">*</span>
                <select name="type[]" multiple class="form-control js-example-basic-multiple-limit" data-tags="true" data-placeholder="Chọn Kiểu Làm Việc" data-allow-clear="true" style="height: 100px">
                  @foreach($listType as $type)
                  <option value="{!! $type->id !!}" @if(old('type') == $provin->id) selected @endif>{!! $type->name !!}</option>
                  @endforeach
                  <option value="100" @if(old('type') == 100) selected @endif>Tất cả</option>
                </select>
                <span style="color:red">{!! $errors->first('type') !!}</span>
              </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group" id="resume-wage-group">
                <label for="resume-wage">Tiền Lương Mong Muốn</label><span class="require">*</span>
                <input type="text" class="form-control" id="resume-wage" placeholder="Vui Lòng Nhập Số" name="wage" value="{!! old('wage') !!}">
                <span style="color:red">{!! $errors->first('wage') !!}</span>
              </div>
            </div>
          
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group wysiwyg" id="resume-content-group">
                <label>Giới Thiệu Bản Thân</label>

                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#resume-content">
                  <div class="btn-group">
                    <a class="btn" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                    <a class="btn" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                  </div>
                  <div class="btn-group">
                    <a class="btn" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="fa fa-list-ul"></i></a>
                    <a class="btn" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="fa fa-list-ol"></i></a>
                  </div>
                  <div class="btn-group">
                    <a class="btn" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                    <a class="btn" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                    <a class="btn" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                  </div>
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="fa fa-link"></i></a>
                    <div class="dropdown-menu input-append">
                      <input class="form-control pull-left" placeholder="http://" type="text" data-edit="createLink">
                      <button class="btn btn-primary" type="button">Add</button>
                    </div>
                    <a class="btn" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="fa fa-unlink"></i></a>
                  </div>
                  <input type="text" data-edit="inserttext" id="voiceBtn" style="display: none;">
                </div>

                <div class="editor" id="resume-content" contenteditable="true">Write something about yourself...</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <hr class="dashed">
            </div>
          </div>
          <div class="checkbox">
            <label style="color:red">
              <input type="checkbox" value="1" name="status" @if(old('status') == 1) checked @endif>
              Cho phép nhà tuyển dụng xem hồ sơ
            </label>
          </div>
          <input type="hidden" name="description" id="inputIntro" value="">
          <div class="row text-center">
            <div class="col-sm-12">
              <p>&nbsp;</p>
              <button type="submit" class="btn btn-large btn-block btn-primary" id="submit-form">Tạo Hồ Sơ</button>
            </div>
          </div>
  </form>
</div>
<div class="col-sm-4">
@include('page.blocks.job')
</div>
</div>

@endsection

@section('javascript')
 <script src="{!! url('public/admin') !!}/js/select2.min.js"></script>
 <script type="text/javascript">

$(document).ready(function() {
  $(".js-example-basic-multiple-limit").select2({
  maximumSelectionLength: 3
  });
});

$( "#submit-form" ).click(function() {
  var intro = $('#resume-content').html();
  document.getElementById("inputIntro").value = intro;
});
 </script>
@endsection
