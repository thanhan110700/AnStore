@extends('templates.hoadon')
@section('title')
    AnStore
@endsection
@section('content')
<h3 align="center" style="font-family: 'Oswald', sans-serif;font-size:4em;">Hóa đơn</h3>
    <table class="table table-bordered tablehoadon">
        <tr class="topp">
            <th>Mã đơn hàng</th>
            <th>Ngày lập hóa đơn</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
        @foreach ($hoadon as $key => $item)
        <tr class="bott">
            <th>{{$item->mahd}}</th>
            @php
                $ngay = date("d-m-Y",strtotime($item->ngayhd))
            @endphp
            <th>{{$ngay}}</th>

            <th>{{number_format($item->tongtien)}} VNĐ</th>
            <th>
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
            </th>
            <th><a href="{{url('chitiethoadon',$item->mahd)}}">Xem chi tiết >> </a></th>
        </tr>
    @endforeach

    </table>


@endsection

