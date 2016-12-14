@extends('layouts.admin')

@section('body_right')
    
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>Tên Công Việc</th>
                <th>Tên Công Ty</th>
                <th>Loại</th>
                <th>Delete</th>   
            </tr>
        </thead>
        <tbody>
        @if(isset($data) && $data != NULL)
        @foreach($data as $index => $item)
            <tr class="odd gradeX" align="center">
                <td>{!! $item['title'] !!}</td>
                <td>{!! $item['employer_id'] !!}</td>
                <td>{!! $item['type_job'] !!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! URL::route('admin.postjob.getDelete', $item['id']) !!}"> Delete</a></td>
            </tr>
        @endforeach()
        @endif
        </tbody>
    </table>
@endsection