@extends('templates.cthoadon')
@section('title')
    AnStore
@endsection
@section('content')

    <table class="table table-bordered tablehoadon">
        <tr class="topp">
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
        </tr>
        @php
            $tongtien = 0;
        @endphp
        @foreach ($hoadon as $key => $item)
            <tr>
                <th>{{$item->tensp}}</th>
                <th>{{$item->soluong}}</th>
                <th>{{number_format($item->giasp)}} VNĐ</th>
            </tr>
            @php
            $tongtien += $item->soluong*$item->giasp;
            @endphp
        @endforeach
        <tr class="ttdh">
            <th colspan="3"><b>Trạng thái đơn hàng:</b><i style="color:green">
                @if ($item->ttdonhang==1)
                    Đang chờ xác nhận
                @endif
                @if ($item->ttdonhang==2)
                    Đã xác nhận
                @endif
                @if ($item->ttdonhang==3)
                    Đang đóng gói
                @endif
                @if ($item->ttdonhang==4)
                    Đang giao hàng
                @endif
                @if ($item->ttdonhang==5)
                    Đã nhận hàng
                @endif
                </i>
            </th>
        </tr>
    <th colspan="3" class="tt"><h3>Tổng tiền: <b style="color:red"> {{number_format($tongtien)}} VNĐ</b></h3></th>

    </tr>
    </table>
@endsection
