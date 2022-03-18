	<div class="row" style="padding: 0px; margin: 0px;">
		<div class="col-sm-12 banner" style="padding-top: 2em;">
            @if($pl == 'iphone')
            <form method="post" action="{{route('admin/actionthemspiphone')}}" enctype="multipart/form-data" style="margin-left: 100px;">
                @csrf
                {{ csrf_field() }}
                <h3 align='center'>Thêm sản phẩm iPhone</h3>
                <table class="table">
                    <tr>
                        <th>
                            <h5>ID sản phẩm</h5>
                            <input type="text" class="input-themsanpham colorbg"  name="idsp">
                        </th>
                        <th>
                            <h5>Tên sản phẩm</h5>
                            <input type="text" class="input-themsanpham colorbg" name="tensp">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>Giá</h5>
                            <input type="text" class="input-themsanpham colorbg" name="giasp">
                        </th>
                        <th>
                            <h5>Màn hình</h5>
                            <input type="text" class="input-themsanpham colorbg" name="manhinh">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>Hệ điều hành</h5>
                            <input type="text" class="input-themsanpham colorbg" name="hdh">
                        </th>
                        <th>
                            <h5>CPU</h5>
                            <input type="text" class="input-themsanpham colorbg" name="cpu">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>RAM</h5>
                            <input type="text" class="input-themsanpham colorbg" name="ram">
                        </th>
                        <th>
                            <h5>Bộ nhớ trong</h5>
                            <input type="text" class="input-themsanpham colorbg" name="bonhotrong">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>Cam sau</h5>
                            <input type="text" class="input-themsanpham colorbg" name="camerasau">
                        </th>
                        <th>
                            <h5>Cam trước</h5>
                            <input type="text" class="input-themsanpham colorbg" name="cameratruoc">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>Thẻ sim</h5>
                            <input type="text" class="input-themsanpham colorbg" name="thesim">
                        </th>
                        <th>
                            <h5>Dung lượng pin</h5>
                            <input type="text" class="input-themsanpham colorbg" name="dungluongpin">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>Ảnh</h5>
                            <input type="file" name="hinhanh"></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <h5>Thông tin SP</h5>
                            <textarea name="ttsp" id="ttsp"></textarea>
                            <script>CKEDITOR.replace('ttsp',config);</script>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2"><button class="btnthem">Thêm</button></th>
                    </tr>
                </table>

                 </form>
            @endif
            @if ($pl == 'ipad')
            <form method="get" style="margin-left: 100px;">
					<h3>iPad</h3>
					<h5>ID sản phẩm</h5>
				 	<input type="text" name="idsp">
				 	<h5>Tên sản phẩm</h5>
				 	<input type="text" name="tensp">
				 	<h5>Giá</h5>
				 	<input type="text" name="giasp">
				 	<h5>Màn hình</h5>
				 	<input type="text" name="manhinh">
				 	<h5>Hệ điều hành</h5>
				 	<input type="text" name="hdh">
				 	<h5>Cam sau</h5>
				 	<input type="text" name="camerasau">
				 	<h5>Cam trước</h5>
				 	<input type="text" name="cameratruoc">
				 	<h5>CPU</h5>
				 	<input type="text" name="cpu">
				 	<h5>RAM</h5>
				 	<input type="text" name="ram">
				 	<h5>Bộ nhớ trong</h5>
				 	<input type="text" name="bonhotrong">
				 	<h5>Kết nối mạng</h5>
				 	<input type="text" name="ketnoimang">
				 	<h5>Trọng lượng</h5>
				 	<input type="text" name="trongluong">
				 	<h5>Ảnh</h5>
				 	<input type="text" name="hinhanh">
				 	<h5>Thông tin SP</h5>
				 	<textarea name="ttsp" id="ttsp"></textarea>
				 	 <script>CKEDITOR.replace('ttsp');</script>
				 	 <button name="them" class="btnthem">Thêm</button>
				 </form>
            @else
            @endif
		</div>
	</div>
