@extends('layouts.admin')
@section('body_right')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th style="width: 8%">Ảnh</th>
                <th>Tên</th>
                <th>Vị trí</th>
                <th>Edit</th>
                <th>Delete</th>   
            </tr>
        </thead>
        <tbody>
        @if(isset($data) && $data != NULL)
        @foreach($data as $index => $item)
            <tr class="odd gradeX" align="center">
                <td><img src="{!! $item['image_thumb'] !!}" class="img-responsive"></td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! $item['orders'] !!}</td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.job.getEdit', $item['id']) !!}">Edit</a></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! URL::route('admin.job.getDelete', $item['id']) !!}"> Delete</a></td>
            </tr>
        @endforeach()
        @endif
        </tbody>
    </table>
@endsection