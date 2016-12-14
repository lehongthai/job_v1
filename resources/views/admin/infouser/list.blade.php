@extends('layouts.admin')

@section('body_right')
    <button type="button" onclick="window.location='{!! url('admin/info/add/'.$check) !!}'" class="btn btn-success">Thêm mới</button>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <td style="display: none"></td>
                <td style="display: none"></td>
                <th>Tên</th>
                <th>Vị trí</th>
                <th>Danh mục</th>
                <th>Edit</th>
                <th>Delete</th>   
            </tr>
        </thead>
        <tbody>
        @if(isset($data) && $data != NULL)
        @foreach($data as $index => $item)
            <tr class="odd gradeX" align="center">
                <td style="display: none">{!! $item['id'] !!}</td>
                <td style="display: none">{!! csrf_token() !!}</td>
                <td>{!! $item['name'] !!}</td>
                <td>{!! $item['orders'] !!}</td>
                <td>
                    @if($item['alias'] == 'level')
                    Bằng Cấp
                    @elseif($item['alias'] == 'empirical')
                    Kinh nghiệm 
                    @elseif($item['alias'] == 'diploma')
                    Cấp bậc hiện tại
                    @elseif($item['alias'] == 'diploma_wish')
                    Cấp bậc mong muốn
                    @elseif($item['alias'] == 'exigency')
                    Nhu cầu làm việc
                    @elseif($item['alias'] == 'type')
                    Loại việc làm
                    @endif
                </td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.infouser.getEdit', $item['id']) !!}">Edit</a></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! URL::route('admin.infouser.getDelete', $item['id']) !!}"> Delete</a></td>
            </tr>
        @endforeach()
        @endif
        </tbody>
    </table>

<script src="{!! url('public/admin') !!}/js/jquery.tabledit.js"></script>
<script type="text/javascript">
    $('#dataTables-example').Tabledit({
    url: '{!! url('admin/info/action') !!}',
    deleteButton: false,
    columns: {
        identifier: [0, 'id'],
        editable: [[1, '_token'],  [3, 'orders']]
    },
    action: 'Sửa Nhanh',
    onDraw: function() {
    },

    onSuccess: function(data, textStatus, jqXHR) {
        //window.location.href="{!! url('admin/info/list/') !!}";
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        $(function() {
        $('#dialog-message').empty();
          $('#dialog-message').append(jqXHR['responseJSON']['code']);
          $( "#dialog-message" ).dialog({
                modal: true,
                buttons: [
                          {
                              text: "OK",
                              click: function() {                     
                                  $(this).dialog("close"); 
                                  var row_fail = $('.danger').index();
                                  $('.tabledit-edit-button')[row_fail].click();
                                  $('input[name="'+ jqXHR['responseJSON']['position_error'] +'"]').focus();
                              }
                          }
                        ]
          });
        });
        },
    onAlways: function() {
    },
    onAjax: function(action, serialize) {
    }
});
</script>
@endsection