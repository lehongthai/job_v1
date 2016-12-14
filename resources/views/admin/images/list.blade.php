@extends('layouts.admin')
@section('body_right')
@if($data)
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $item->content !!}</td>
                                <td><img src="{!! $item->image_thumb !!}"></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.image.getEdit', $item->id) !!}">Edit</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! URL::route('admin.image.getDelete', $item->id) !!}"> Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
@endif()
@endsection