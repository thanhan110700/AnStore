@if($pl=='iphone')
    <div align='center'>
        <button style="margin-bottom: 20px;margin-top:5px;border-radius: 8px;outline:none;" class="btn-themsanpham" type="button" data-toggle="modal" data-target="#themsp">Thêm sản phẩm</button>
    </div>

            <div class="modal" id="themsp">
                <div class="modal-dialog">
                  <div class="modal-content formtsp" >

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Thêm sản phẩm iPhone</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form method="post" action="{{url('admin/actionthemspiphone')}}" enctype="multipart/form-data" align='center'>
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body" align='center'>

                                @csrf
                                {{ csrf_field() }}
                                <h3 align='center'>Thêm sản phẩm iPhone</h3>
                                <h5>ID sản phẩm</h5>
                                <input type="text" class="input-themsanpham colorbg"  name="idsp">
                                <h5>Tên sản phẩm</h5>
                                <input type="text" class="input-themsanpham colorbg" name="tensp">
                                <h5>Giá</h5>
                                <input type="text" class="input-themsanpham colorbg" name="giasp">
                                <h5>Màn hình</h5>
                                <input type="text" class="input-themsanpham colorbg" name="manhinh">
                                <h5>Hệ điều hành</h5>
                                <input type="text" class="input-themsanpham colorbg" name="hdh">
                                <h5>CPU</h5>
                                <input type="text" class="input-themsanpham colorbg" name="cpu">
                                <h5>RAM</h5>
                                <input type="text" class="input-themsanpham colorbg" name="ram">
                                <h5>Bộ nhớ trong</h5>
                                <input type="text" class="input-themsanpham colorbg" name="bonhotrong">
                                <h5>Cam sau</h5>
                                <input type="text" class="input-themsanpham colorbg" name="camerasau">
                                <h5>Cam trước</h5>
                                <input type="text" class="input-themsanpham colorbg" name="cameratruoc">
                                <h5>Thẻ sim</h5>
                                <input type="text" class="input-themsanpham colorbg" name="thesim">
                                <h5>Dung lượng pin</h5>
                                <input type="text" class="input-themsanpham colorbg" name="dungluongpin">
                                <h5>Ảnh</h5>
                                <input type="file" name="hinhanh">
                                <h5>Thông tin SP</h5>
                                <textarea name="ttsp" id="ttsp"></textarea>
                                <script>CKEDITOR.replace('ttsp',config);</script>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                            <button class="btn btn-success">Thêm</button>
                </form>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                  </div>
                </div>



<table class="table table-bordered">
           <tr>
                <th>Hình ảnh</th>
                <th>Tên Sản phẩm</th>
                <th>Lượt xem</th>
                <th></th>
           </tr>


                @foreach ($data as $key => $item)
                <tr>
                        <th style="width:20%"><img style="width: 150px;height: 160px;" src="{{asset("img/Sanpham/".$item->hinhanh)}}"></th>
                        <th style="width:45%">{{$item->tensp}}</th>
                        <th style="width:13%">{{number_format($item->view)}}</th>
                        <th style="width:17%">
                            <form action="{{url('admin/suathongtinspiphone')}}" method="POST" style="margin-right:2px;">
                                @csrf
                                <input type="hidden" name="idsp" value="{{$item->idsp}}">
                                <input class="btn btn-warning" type="submit" value="Sửa">
                            </form>
                            <form action="xoaspiphone" method="POST">
                                @csrf
                                <div style="display:inline-block">
                                    <input type="hidden" name="idsp" value="{{$item->idsp}}">
                                    <input type="submit" class="btn btn-danger" style="margin-left:4px" value="Xóa">
                                </div>
                            </form>

                        </th>
                    </tr>
                @endforeach

</table>
@endif

@if($pl=='ipad')

    <div align='center'>
        <button style="margin-bottom: 20px;margin-top:5px;border-radius: 8px;outline:none;" class="btn-themsanpham" type="button" data-toggle="modal" data-target="#themsp">Thêm sản phẩm</button>
    </div>

            <div class="modal" id="themsp">
                <div class="modal-dialog ">
                  <div class="modal-content formtsp" >

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Thêm sản phẩm iPad</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form method="post" action="{{url('admin/actionthemspipad')}}" enctype="multipart/form-data" align='center'>
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body" align='center'>

                                @csrf
                                {{ csrf_field() }}
                                <h3 align='center'>Thêm sản phẩm iPad</h3>
                                <h5>ID sản phẩm</h5>
                                <input type="text" class="input-themsanpham colorbg"  name="idsp">
                                <h5>Tên sản phẩm</h5>
                                <input type="text" class="input-themsanpham colorbg" name="tensp">
                                <h5>Giá</h5>
                                <input type="text" class="input-themsanpham colorbg" name="giasp">
                                <h5>Màn hình</h5>
                                <input type="text" class="input-themsanpham colorbg" name="manhinh">
                                <h5>Hệ điều hành</h5>
                                <input type="text" class="input-themsanpham colorbg" name="hdh">
                                <h5>CPU</h5>
                                <input type="text" class="input-themsanpham colorbg" name="cpu">
                                <h5>RAM</h5>
                                <input type="text" class="input-themsanpham colorbg" name="ram">
                                <h5>Bộ nhớ trong</h5>
                                <input type="text" class="input-themsanpham colorbg" name="bonhotrong">
                                <h5>Cam sau</h5>
                                <input type="text" class="input-themsanpham colorbg" name="camerasau">
                                <h5>Cam trước</h5>
                                <input type="text" class="input-themsanpham colorbg" name="cameratruoc">
                                <h5>Kết nối mạng</h5>
                                <input type="text" class="input-themsanpham colorbg" name="ketnoimang">
                                <h5>Trọng lượng</h5>
                                <input type="text" class="input-themsanpham colorbg" name="trongluong">
                                <h5>Ảnh</h5>
                                <input type="file" name="hinhanh">
                                <h5>Thông tin SP</h5>
                                <textarea name="ttsp" id="ttsp"></textarea>
                                <script>CKEDITOR.replace('ttsp',config);</script>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                            <button class="btn btn-success">Thêm</button>
                </form>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                  </div>
                </div>



<table class="table table-bordered">
           <tr>
                <th>Hình ảnh</th>
                <th>Tên Sản phẩm</th>
                <th>Lượt xem</th>
                <th></th>
           </tr>

                @foreach ($data as $key => $item)
                <tr>
                        <th style="width:20%"><img style="width: 150px;height: 160px;" src="{{asset("img/Sanpham/".$item->hinhanh)}}"></th>
                        <th style="width:45%">{{$item->tensp}}</th>
                        <th style="width:13%">{{number_format($item->view)}}</th>
                        <th style="width:17%">
                            <form action="{{url('admin/suathongtinspipad')}}" method="POST" style="margin-right:2px;">
                                @csrf
                                <input type="hidden" name="idsp" value="{{$item->idsp}}">
                                <input class="btn btn-warning" type="submit" value="Sửa">
                            </form>
                            <form action="{{url('admin/xoaspipad')}}" method="POST">
                                @csrf
                                <div style="display:inline-block">
                                    <input type="hidden" name="idsp" value="{{$item->idsp}}">
                                    <input type="submit" class="btn btn-danger" style="margin-left:4px" value="Xóa">
                                </div>
                            </form>

                        </th>
                    </tr>
                @endforeach

</table>
@endif




