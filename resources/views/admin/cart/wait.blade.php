@extends('admin.main')


@section('content')
    {{-- @if ($customers->status === 1) --}}
        <table class="table">
            <thead>
                <tr> 
                    <th></th>
                    <th style="width: 50px">ID</th>
                    <th>Tên khách hàng </th>
                    <th>Số điện thoại </th>
                    <th>Email </th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                    <th style="width: 100px">&nbsp</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 0;
                @endphp
                    @foreach ($customers as $key => $customer)          
                        @if ($customer->status == 0)
                            <tr>
                                <td><input  class="check" type="checkbox" ></td>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->created_at }}</td>
                                <td style="color: blue">
                                    @if ($customer->status == 0)
                                        <strong>Chờ phê duyệt</strong>
                                        @php
                                            $count++;
                                        @endphp
                                    @endif
                                </td>
                                <td>
                                    {{-- <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{ $customer->id }}" >
                                        <i class="fa-solid fa-eye"> </i> 
                                        
                                    </a> --}}
                                    <a class="btn btn-danger btn-sm" href ="/admin/customers/edit/{{ $customer->id }}" >
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                        @endif
                    @endforeach
            </tbody>
        </table>
        <div class="approve_order1">
            <div class="left">
                <input onclick="checkAll()" type="checkbox" class="check-all" ><span>Chọn tất cả</span>
            </div>
            <div class="right" id="right">
                <a class="btn btn-danger btn-sm" href ="">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </div>
        </div>
        <div class="approve_order">
            <h3 style="color: blue" class="p-2">Tổng có {{ $count++ }} đang chờ</h3>
        </div>   
    {{-- @endif --}}
{!! $customers->links() !!}
@endsection

<script>
    
    function checkAll() {
        var checkboxes = document.querySelectorAll('.check');
        var check = document.querySelector('.check-all');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = check.checked;
        });
    }
</script>