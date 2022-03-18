@extends('templates.giohang')
@section('title')
    AnStore
@endsection
@section('content')
		<div class='col-sm-12 banner' >
            @if (Session::has('cart'))
            <h3>Danh sách sản phẩm</h3>
			<div class="container" id="listcart" style="overflow-x:auto;">
				<table class="table table-bordered tablehoadon" id="cart">
				<tr class="topp">
					<th>STT</th>
					<th>Hình ảnh</th>
					<th>Tên</th>
					<th>Giá</th>
					<th>Số lượng</th>
					<th>Thành tiền</th>
					<th></th>
                </tr>
                @php
                    $dssp = request()->session()->get('cart');
                    $i = 1;
                    $tongtien=0;
                @endphp
                <form method="POST">

                @foreach ($dssp as $item)
                <tr class="bott">
                    <th style="width:1%">{{$i}}</th>
                    <th style="width:10%"><img style="width:100%;" src="img/Sanpham/{{$item['hinhanh']}}"></th>
                    <th style="width:20%">{{$item['tensp']}}</th>
                    <th style="width:11%">{{number_format($item['giasp'])}} VNĐ</th>
                    <th style="width:10%"><input class="qty" type="number" size="3" value="{{$item['qty']}}"></th>
                    <th style="width:11%">{{number_format($item['qty']*$item['giasp'])}} VNĐ</th>
                    <th style="width:10%;">
                        <a href="#" class="updatecart" id="{{$item['idsp']}}"><span class="glyphicon glyphicon-refresh"></span>Cập nhật</a>|
                        <a href="{{url('deletetocart',$item['idsp'])}}"><span class="glyphicon glyphicon-trash"></span>Xóa</a>
                    </th>
                    </tr>
                    @php
                        $i++;
                        $tongtien += $item['qty']*$item['giasp'];
                    @endphp
                @endforeach
                </form>
				<tr>
                    <th colspan="7"><h4 style="margin-left: 48em;" class="ttgh">Tổng tiền: {{number_format($tongtien)}} VNĐ</h4></th>
                </tr>
            </table>
            </div>
            <div style="margin-left:48em">
                @if (Session::has('role'))
                    <form action="{{url('thanhtoan')}}">
                        <button class="btn btn-thanhtoan">Thanh toán</button>
                    </form>
                @else
                    <h3>Đăng nhập để thanh toán</h3>
                @endif
                <form method="get" action="{{url('deleteallcart')}}">
                        <input type="submit" class="btn btn-xoagiohang" name="xoagiohang"  value="Xóa giỏ hàng">
                </form>
        </div>
            @else
                <div>
                    <p class="glyphicon glyphicon-shopping-cart icon"></p>
                    <br>
                    <p align="center" class="giohangtrong">Giỏ hàng trống</p>
                </div>

            @endif

		</div>

@endsection
