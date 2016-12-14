<?php use App\Common; ?>

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
<div class="row">
            <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <h3 class="panel-title">Giới Thiệu Bản Thân</h3>
              </div>
              <div class="panel-body">
                {!! $detailCompany->intro !!}
                <div class="pull-right">
      <button type="button" class="btn btn-xs btn-primary">Chỉnh Sửa</button>
    </div>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <h3 class="panel-title">Kinh Nghiệm Làm Việc</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <th>Tên Công Ty</th>
                        <th>{!! $detailCompany->company !!}</th>
                      </tr>
                      <tr>
                        <th>Chức Vụ</th>
                        <th>{!! $detailCompany->position !!}</th>
                      </tr>
                      <tr>
                        <th>Thời Gian Làm</th>
                        <th>Từ {!! $detailCompany->start_time . ' Đến ' .  $detailCompany->end_time !!}</th>
                      </tr>
                      <tr>
                        <th>Lương Được Hưởng</th>
                        <th>{!! number_format($detailCompany->wage, 0, '.', ',')  !!}</th>
                      </tr>
                      <tr>
                        <th>Mô Tả Công Việc</th>
                        <th>{!! $detailCompany->description_job !!}</th>
                      </tr>
                      <tr>
                        <th>Thành Tích</th>
                        <th>{!! $detailCompany->achieve !!}</th>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="pull-right">
      <button type="button" class="btn btn-xs btn-primary">Chỉnh Sửa</button>
    </div>
              </div>
              
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <h3 class="panel-title">Trình Độ & Bằng Cấp</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <th>Trình Độ</th>
                        <th>{!! Common::getNameById($detailCompany->level) !!}</th>
                      </tr>
                      <tr>
                        <th>Đơn Vị Đào Tạo</th>
                        <th>{!! $detailCompany->school_name !!}</th>
                      </tr>
                      <tr>
                        <th>Thời Gian Đào Tạo</th>
                        <th>Từ {!! $detailCompany->start_time_school . ' Đến ' . $detailCompany->end_time_school !!}</th>
                      </tr>
                      <tr>
                        <th>Chuyên Ngành</th>
                        <th>{!! $detailCompany->description_diploma !!}</th>
                      </tr>
                      <tr>
                        <th>Tốt Nghiệp Loại</th>
                        <th>{!! Common::getNameById($detailCompany->loai_tn) !!}</th>
                      </tr>
                      <tr>
                        <th>Bằng Tốt Nghiệp</th>
                        <th>{!! $detailCompany->image_tn !!}</th>
                      </tr>
                      <tr>
                        <th>Ngoại Ngữ</th>
                        <th>{!! Common::getNameById($detailDiploma->language) !!}</th>
                      </tr>
                      <tr>
                        <th>Trình Độ Ngoại Ngữ</th>
                        <th>{!! Common::getNameById($detailDiploma->language_level) !!}</th>
                      </tr>
                      <tr>
                        <th>Chi Tiết Ngoại Ngữ</th>
                        <td>
                          <ul>
                            <li> Nghe : {!! Common::getTypeLanguageAndTech($detailDiploma->listen) !!}</li>
                            <li> Nói : {!! Common::getTypeLanguageAndTech($detailDiploma->speak) !!}</li>
                            <li> Đọc : {!! Common::getTypeLanguageAndTech($detailDiploma->read ) !!}</li>
                            <li> Viết : {!! Common::getTypeLanguageAndTech($detailDiploma->write) !!}</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <th>Tin Học Văn Phòng</th>
                        <td>
                          <ul>
                            <li> MS Word : {!! Common::getTypeLanguageAndTech($detailDiploma->ms_word) !!}</li>
                            <li> MS Excel : {!! Common::getTypeLanguageAndTech($detailDiploma->ms_excel) !!}</li>
                            <li> MS Power Point : {!! Common::getTypeLanguageAndTech($detailDiploma->ms_power_point ) !!}</li>
                            <li> MS Outlook : {!! Common::getTypeLanguageAndTech($detailDiploma->ms_outlook) !!}</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <th>Kỹ Năng Khác</th>
                        <th>{!! $detailDiploma->others !!}</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="pull-right">
      <button type="button" class="btn btn-xs btn-primary">Chỉnh Sửa</button>
    </div>
              </div>
            </div>
</div>
<div class="col-sm-4">
@include('page.blocks.job')
</div>
</div>

@endsection

@section('javascript')
 
</script>
@endsection
