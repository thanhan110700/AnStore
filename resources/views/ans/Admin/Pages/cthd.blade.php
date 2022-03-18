	<div class="row" style="padding: 0px; margin: 0px;">
		<div class="col-sm-12 banner" style="padding-top: 1em;">
                @foreach ($data as $key => $item)
                @endforeach
                <h3>Mã đơn hàng: {{$item->mahd}}</h3>
				<h3>Tên khách hàng: {{$item->tenkh}}</h3>
				<h4>Ngày lập hóa đơn: {{date("d-m-Y",strtotime($item->ngayhd))}}</h4>
				<h5><a href='{{url('admin/dsdh')}}'> <<< Quay lại</a></h5>

				<table class="table table-bordered">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                        </tr>
                        @php
                            $tongtien = 0;
                        @endphp
                        @foreach ($data as $key => $item)
                            <tr>
                                <th>{{$item->tensp}}</th>
                                <th>{{$item->soluong}}</th>
                                <th>{{number_format($item->giasp)}} VNĐ</th>
                            </tr>
                            @php
                            $tongtien += $item->soluong*$item->giasp;
                            @endphp
                        @endforeach
                        <tr><th colspan="3"></th></tr>
                        <tr>
                            <th colspan="3"><b>Trạng thái đơn hàng: </b>
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
                        </tr>
                    <th colspan="3"><h3>Tổng tiền: {{number_format($tongtien)}} VNĐ</h3></th>

                    </tr>
                    </table>

			</div>
		</div>
	</div>
