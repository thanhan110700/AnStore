@extends('templates.thanhtoan')
@section('title')
    AnStore
@endsection
@section('content')
<div id="listcart">
    <div style="overflow-x:auto;">
    <table class="table table-bordered tablehoadon" id="cart">
        <tr class="topp">
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa</th>
        </tr>
        @php
            $dssp = request()->session()->get('cart');
            $i = 1;
            $tongtien=0;
        @endphp
        @foreach ($dssp as $item)
        <tr class="bott">
            <th>{{$i}}</th>
            <th><img style="width: 150px;height: 160px;" src="img/Sanpham/{{$item['hinhanh']}}"></th>
            <th>{{$item['tensp']}}</th>
            <th>{{number_format($item['giasp'])}} VNĐ</th>
            <th>{{$item['qty']}}</th>
            <th>{{number_format($item['qty']*$item['giasp'])}} VNĐ</th>
            <th><a href="{{url('deletetocart',$item['idsp'])}}"><span class="glyphicon glyphicon-trash"></span></a></th>
            </tr>
            @php
                $i++;
                $tongtien += $item['qty']*$item['giasp'];
            @endphp
        @endforeach
        <tr style="height:4em">
            <th colspan="7" style="background-color:#7ed6df;"><b style="margin-right: 5em;float: right;font-size: 1.5em;">Tổng tiền: {{number_format($tongtien)}} VNĐ</b></th>
        </tr>
        </table>
    </div>
        <div class="cnttkh">
            <div class="row" align="center">
                <div class="col-sm-6" style="background-color:#f6e58d;">
                    @if (Session::has('role'))
                        <form method="get" action="{{url('update',$user->makh)}}">
                            <div class="col-sm-12 tieude" style="background-color:#f9ca24;margin-bottom: 1em;">
                                <h3 style="font-family: Anton, sans-serif;">Thông tin khách hàng</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 ttkh2"><h5>Tên người nhận:</h5></div>
                                <div class="col-sm-8"><input class="ttkh" type="text" placeholder="Họ và tên" name="tenkh"  value= "{{$user->tenkh}}" ></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 ttkh2"><h5>SDT người nhận:</h5></div>
                                <div class="col-sm-8"><input class="ttkh" type="text" placeholder="Số điện thoại" name="sdt" value="{{$user->sdt}}"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 ttkh2"><h5>Địa chỉ người nhận:</h5></div>
                                <div class="col-sm-8"> <input class="ttkh" type="text" placeholder="Địa chỉ" name="diachi" value="{{$user->diachi}}"><br></div>
                            </div>
                            <button class="btncapnhat">Cập nhật</button>
                            </form>

                    @else
                        <h3 align='center'>Đăng nhập để tiếp tục</h3>
                    @endif
                </div>
                <div class="col-sm-6">
                <form method="get" action="{{url('muahang',$user->makh)}}"><button class="btnmuahang">Mua Hàng</button></form>
                </div>
            </div>
        </div>
</div>
@endsection
