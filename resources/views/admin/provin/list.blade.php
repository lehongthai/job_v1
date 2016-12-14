@extends('layouts.admin')

@section('body_right')
    
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <td style="display: none"></td>
                <td style="display: none"></td>
                <th>Tên</th>
                <th>Miền</th>
                <th>Search</th>
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
                <td>
                    @if($item['compass'] == 1)
                    Miền Nam
                    @elseif($item['compass'] == 2)
                    Miền Trung
                    @elseif($item['compass'] == 3)
                    Miền Bắc
                    @endif
                </td>
                 <td>
                 @if($item['search'] == 1)
                 Có
                 @else
                 Không
                 @endif
                 </td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.provin.getEdit', $item['id']) !!}">Edit</a></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! URL::route('admin.provin.getDelete', $item['id']) !!}"> Delete</a></td>
            </tr>
        @endforeach()
        @endif
        </tbody>
    </table>

<script src="{!! url('public/admin') !!}/js/jquery.tabledit.js"></script>
<script type="text/javascript">
    $('#dataTables-example').Tabledit({
    url: '{!! url('admin/provin/action') !!}',
    deleteButton: false,
    columns: {
        identifier: [0, 'id'],
        editable: [[1, '_token'],  [4, 'search', '{"1": "Có", "2": "Không"}']]
    },
    action: 'Sửa Nhanh',
    onDraw: function() {
    },

    onSuccess: function(data, textStatus, jqXHR) {
        window.location.href="{!! url('admin/provin/list') !!}";
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