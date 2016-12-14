@extends('page.master')
@section('content')
<div class="row" style="margin-top: 100px">
<div class="col-sm-8">

{{-- add info user --}}
@include('page.blocks.info_user')
{{-- end info user --}}

{{-- add info user --}}
@include('page.blocks.info_resume_user')
{{-- end info user --}}

{{-- add menu user --}}
@include('page.blocks.menu_bottom_user')
{{-- end menu user --}}

<h2>Hồ Sơ Chi Tiết</h2>
<form action="{!! url('/ung-vien/ho-so/ho-so-chi-tiet') !!}" method="POST" class="form-horizontal" role="form">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Giới Thiệu Bản Thân
                      <i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                  <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="intro">Giới Thiệu</label><span class="require">*</span>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <textarea name="intro" id="intro" class="form-control" rows="3">{!! old('intro') !!}</textarea>
                          <span style="color:red">{!! $errors->first('intro') !!}</span>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Kinh Nghiệm Làm Việc
                      <i class="indicator glyphicon glyphicon-chevron-down pull-right"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Hãy liệt kê những công việc, nhiệm vụ mà bạn đã từng đảm nhận và thực hiện. Chú ý liệt kê kinh nghiệm làm việc từ thời gian gần đây nhất trở về trước. </p>
                    <hr style="margin-bottom: 2px;margin-top: -12px">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="company">Tên Công Ty <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <input type="text" name="company" id="company" class="form-control" value="{!! old('company') !!}">
                          <span style="color:red">{!! $errors->first('company') !!}</span>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="position">Chức Vụ <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <input type="text" name="position" id="position" class="form-control" value="{!! old('position') !!}">
                          <span style="color:red">{!! $errors->first('position') !!}</span>
                        </div>
                      </div>
                    </div> 
                    
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label>Thời Gian <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <table style="width: 100%">
                            <tr>
                              <td>Từ: </td>
                              <td>
                                <select name="start_month" id="start_month" class="form-control">
                                  @for($i = 1; $i < 13; $i++)
                                  <option value="{!! $i !!}" @if(old('start_month') == $i) selected @endif>Tháng {!! $i !!}</option>
                                  @endfor
                                </select>
                              </td>
                              <td>&nbsp;</td>
                              <td>
                                <select name="start_year" id="start_year" class="form-control">
                                  @for($i = 1940; $i <= date('Y'); $i++)
                                  <option value="{!! $i !!}" @if(old('start_year') == $i) selected @endif>{!! $i !!}</option>
                                  @endfor
                                </select>
                              </td>
                              <td>&nbsp;</td>
                              <td>Đến: </td>
                              <td>
                                <select name="end_month" id="end_month" class="form-control">
                                  @for($i = 1; $i < 13; $i++)
                                  <option value="{!! $i !!}" @if(old('end_month') == $i) selected @endif>Tháng {!! $i !!}</option>
                                  @endfor
                                </select>
                              </td>
                              <td>&nbsp;</td>
                              <td>
                                <select name="end_year" id="end_year" class="form-control">
                                  @for($i = 1940; $i <= date('Y'); $i++)
                                  <option value="{!! $i !!}" @if(old('end_year') == $i) selected @endif>{!! $i !!}</option>
                                  @endfor
                                </select>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label>Mức Lương</label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <table style="width: 100%">
                            <tr>
                              <td>
                                <select name="type_wage" id="type_wage" class="form-control">
                                  <option value="vnd">VND</option>
                                  <option value="usd">USD</option>
                                </select>
                              </td>
                              <td>&nbsp; &nbsp;</td>
                              <td>
                                <input type="text" name="wage" id="wage" class="form-control" value="{!! old('wage') !!}">
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="description_job">Mô Tả Công Việc</label><span class="require">*</span>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <textarea name="description_job" id="description_job" class="form-control" rows="3">{!! old('description_job') !!}</textarea>
                          <span style="color:red">{!! $errors->first('description_job') !!}</span>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="achieve">Thành Tích</label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <textarea name="achieve" id="achieve" class="form-control" rows="3">{!! old('achieve') !!}</textarea>
                          <span style="color:red">{!! $errors->first('achieve') !!}</span>
                    </div>
                    </div>
                  </div>
                    
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Trình độ & Bằng cấp 
                      <i class="indicator glyphicon glyphicon-chevron-down pull-right"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Hãy liệt kê đầy đủ thông tin các bằng cấp/chứng chỉ mà bạn có (kể cả bằng cấp/ chứng chỉ đào tạo ngắn hạn) </p>
                     <hr style="margin-bottom: 2px;margin-top: -12px">
                      <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="level">Trình Độ <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <select name="level" id="level" class="form-control">
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
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="school_name">Đơn Vị Đào Tạo <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <input type="text" name="school_name" id="school_name" class="form-control" value="{!! old('school_name') !!}">
                          <span style="color:red">{!! $errors->first('school_name') !!}</span>
                        </div>
                      </div>
                    </div> 
                    
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label>Thời Gian <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <table style="width: 100%">
                            <tr>
                              <td>Từ: </td>
                              <td>
                                <select name="start_time_school" id="start_time_school" class="form-control">
                                  @for($i = 2000; $i < date('Y'); $i++)
                                  <option value="{!! $i !!}" @if(old('start_time_school') == $i) selected @endif>{!! $i !!}</option>
                                  @endfor
                                </select>
                                <span style="color:red">{!! $errors->first('start_time_school') !!}</span>
                              </td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>Đến: </td>
                              <td>
                                <select name="end_time_school" id="end_time_school" class="form-control">
                                  @for($i = 2000; $i < date('Y'); $i++)
                                  <option value="{!! $i !!}" @if(old('end_time_school') == $i) selected @endif>{!! $i !!}</option>
                                  @endfor
                                </select>
                                 <span style="color:red">{!! $errors->first('end_time_school') !!}</span>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="description_diploma">Chuyên Ngành <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <input type="text" name="description_diploma" id="description_diploma" class="form-control" value="{!! old('description_diploma') !!}">
                          <span style="color:red">{!! $errors->first('description_diploma') !!}</span>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label>Loại Tốt Nghiệp <span class="require">*</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <select name="loai_tn" id="input" class="form-control">
                            <option>-- Vui Lòng Chọn Một --</option>
                            @foreach($listLoaiTn as $loai_tn)
                             <option value="{!! $loai_tn->id !!}" @if(old('loai_tn') == $loai_tn->id) selected @endif>-- {!! $loai_tn->name !!} --</option>
                            @endforeach
                          </select>
                          <span style="color:red">{!! $errors->first('loai_tn') !!}</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="image_tn">Tải Bằng Tốt Nghiệp <span>(nếu có)</span></label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                         <input type="file" name="image_tn" id="image_tn" class="form-control" value="{!! old('image_tn') !!}">
                         <span style="color:red">{!! $errors->first('image_tn') !!}</span>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="language">Ngoại Ngữ </label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <select name="language" id="language" class="form-control">
                            <option>-- Vui Lòng Chọn Một --</option>
                            @foreach($listLanguage as $language)
                             <option value="{!! $language->id !!}" @if(old('language') == $language->id) selected @endif>-- {!! $language->name !!} --</option>
                            @endforeach
                          </select>
                          <span style="color:red">{!! $errors->first('language') !!}</span>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <label for="language_level">Trình Độ </label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <div class="form-group">
                          <select name="language_level" id="language_level" class="form-control">
                            <option>-- Vui Lòng Chọn Một --</option>
                            @foreach($listLanguageLevel as $language_level)
                             <option value="{!! $language_level->id !!}" @if(old('language_level') == $language_level->id) selected @endif>-- {!! $language_level->name !!} --</option>
                            @endforeach
                          </select>
                           <span style="color:red">{!! $errors->first('language_level') !!}</span>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <table style="text-align: center; width: 100%">
                          <tr>
                            <td>&nbsp;</td>
                            <td>Tốt</td>
                            <td>Khá</td>
                            <td>Trung Bình</td>
                            <td>Kém</td>
                          </tr>
                          <tr>
                            <td>Nghe</td>
                            <td><input type="checkbox" value="1" name="listen_language" @if(old('listen_language') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="listen_language" @if(old('listen_language') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="listen_language" @if(old('listen_language') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="listen_language" @if(old('listen_language') == 4) checked @endif></td>
                          </tr>
                          <tr>
                            <td>Nói</td>
                            <td><input type="checkbox" value="1" name="speak_language" @if(old('speak_language') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="speak_language" @if(old('speak_language') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="speak_language" @if(old('speak_language') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="speak_language" @if(old('speak_language') == 4) checked @endif></td>
                          </tr>
                          <tr>
                            <td>Đọc</td>
                            <td><input type="checkbox" value="1" name="read_language" @if(old('read_language') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="read_language" @if(old('read_language') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="read_language" @if(old('read_language') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="read_language" @if(old('read_language') == 4) checked @endif></td>
                          </tr>
                          <tr>
                            <td>Viết</td>
                            <td><input type="checkbox" value="1" name="write_language" @if(old('write_language') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="write_language" @if(old('write_language') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="write_language" @if(old('write_language') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="write_language" @if(old('write_language') == 4) checked @endif></td>
                          </tr>
                        </table>
                      </div>
                      </div>
                      <hr>
                      <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                      <label>Tin Học Văn Phòng</label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <table style="text-align: center; width: 100%">
                          <tr>
                            <td>&nbsp;</td>
                            <td>Tốt</td>
                            <td>Khá</td>
                            <td>Trung Bình</td>
                            <td>Kém</td>
                          </tr>
                          <tr>
                            <td>MS word</td>
                            <td><input type="checkbox" value="1" name="ms_word" @if(old('ms_word') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="ms_word" @if(old('ms_word') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="ms_word" @if(old('ms_word') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="ms_word" @if(old('ms_word') == 4) checked @endif></td>
                          </tr>
                          <tr>
                            <td>MS Excel</td>
                            <td><input type="checkbox" value="1" name="ms_excel" @if(old('ms_excel') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="ms_excel" @if(old('ms_excel') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="ms_excel" @if(old('ms_excel') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="ms_excel" @if(old('ms_excel') == 4) checked @endif></td>
                          </tr>
                          <tr>
                            <td>MS Power Point</td>
                            <td><input type="checkbox" value="1" name="ms_power_point" @if(old('ms_power_point') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="ms_power_point" @if(old('ms_power_point') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="ms_power_point" @if(old('ms_power_point') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="ms_power_point" @if(old('ms_power_point') == 4) checked @endif></td>
                          </tr>
                          <tr>
                            <td>MS Outlook</td>
                            <td><input type="checkbox" value="1" name="ms_outlook" @if(old('ms_outlook') == 1) checked @endif></td>
                            <td><input type="checkbox" value="2" name="ms_outlook" @if(old('ms_outlook') == 2) checked @endif></td>
                            <td><input type="checkbox" value="3" name="ms_outlook" @if(old('ms_outlook') == 3) checked @endif></td>
                            <td><input type="checkbox" value="4" name="ms_outlook"> @if(old('ms_outlook') == 4) checked @endif</td>
                          </tr>
                        </table>
                      </div>
                      </div>
                      <hr>
                      <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                      <label for="others">Kỹ Năng Khác</label>
                      </div>
                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                      <div class="form-group">
                          <input type="text" name="others" id="others" class="form-control" value="{!! old('others') !!}">
                          <span style="color:red">{!! $errors->first('others') !!}</span>
                        </div>
                      </div>
                </div>
                </div>
              </div>
            </div>
           
            </div>

            </div>
             <div class="row">
             <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <button type="submit" class="btn btn-large btn-block btn-success"><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;&nbsp;Lưu & Công Khai</button>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <button type="button" class="btn btn-large btn-block btn-primary"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;Xem Trước</button>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <button type="button" class="btn btn-large btn-block btn-warning"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;Hủy</button>
              </div>
              </div>
             </form>
</div>
<div class="col-sm-4">
@include('page.blocks.job')
</div>
</div>


@endsection
