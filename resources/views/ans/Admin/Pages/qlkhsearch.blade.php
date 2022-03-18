<div class="row" style="padding: 0px; margin: 0px;">
		<div class="col-sm-12 banner" style="padding-top: 1em;">
            <form method="GET" action="{{url('admin/timtheoten')}}">
                <input type="text" class="input-search" name="inputsearch" placeholder="Tên khách hàng">
                <input type="submit" class="submit-search" name="search" value="Search">
            </form>


					<table class="table table-bordered">
				<tr>
					<th>Tên khách hàng</th>
					<th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Số đơn hàng đã mua</th>
				</tr>




                @foreach ($data as $key => $item)
                    <tr>
                        <th>{{$item->tenkh}}</th>
                        <th>{{$item->sdt}}</th>
                        <th>{{$item->diachi}}</th>
                        <th>{{$item->hdon()->count('makh')}}</th>
                    </tr>
                @endforeach


			</table>
		</div>
	</div>
