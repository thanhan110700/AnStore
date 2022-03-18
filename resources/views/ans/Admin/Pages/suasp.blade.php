@if ($pl=='iphone')
@foreach ($data as $key => $item)
<div class="container container1">
    <div class="row" style="padding: 0px; margin: 0px;">
        <form method="post" action="{{url('admin/actionsuathongtinspiphone')}}" enctype="multipart/form-data" style="margin-left: 100px;">
            @csrf
            {{ csrf_field() }}
            <h2 align="center" class="titlessp" style="padding-top:2em">Sửa sản phẩm : {{$item->tensp}}</h2>
                <input type="hidden" name='idsp' value="{{$item->idsp}}">
                <input type="hidden" name='phanloai' value="iphone">
            <div >
                <table class="table table-responsive">
                    <tr>
                        <th>
                            <h5>Giá</h5>
                            <input type="text" class="input-suasanpham" name="giasp" value="{{$item->giasp}}">
                        </th>
                        <th>
                            <h5>Màn hình</h5>
                                <input type="text" class="input-suasanpham" name="manhinh" value="{{$item->manhinh}}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>CPU</h5>
                                <input type="text" class="input-suasanpham" name="cpu" value="{{$item->cpu}}">
                        </th>
                        <th>
                            <h5>Hệ điều hành</h5>
                            <input type="text" class="input-suasanpham" name="hdh" value="{{$item->hdh}}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>RAM</h5>
                                <input type="text" class="input-suasanpham" name="ram" value="{{$item->ram}}">
                        </th>
                        <th>
                            <h5>Bộ nhớ trong</h5>
                                <input type="text" class="input-suasanpham" name="bonhotrong" value="{{$item->bonhotrong}}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>Cam sau</h5>
                            <input type="text" class="input-suasanpham" name="camerasau" value="{{$item->camerasau}}">
                        </th>
                        <th>
                            <h5>Cam trước</h5>
                            <input type="text" class="input-suasanpham" name="cameratruoc" value="{{$item->cameratruoc}}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>Dung lượng pin</h5>
                            <input type="text" class="input-suasanpham" name="dungluongpin" value="{{$item->dungluongpin}}">
                        </th>
                        <th>
                            <h5>Thẻ sim</h5>
                            <input type="text" class="input-suasanpham" name="thesim" value="{{$item->thesim}}">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <h5>Ảnh</h5>
                            <input class="anhanh" type="file" name="hinhanh" value="{{$item->hinhanh}}">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <h5>Thông tin SP</h5>
                            <textarea name="ttsp" id="ttsp">{{$item->thongtinsp}}</textarea>
                             <script>CKEDITOR.replace('ttsp');</script>
                            </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <button class="btn btn-info" name="sua" style="width:7em;height:3em;"><b>Sửa</b></button>
                        </th>
                    </tr>
                </table>
            </div>

         </form>
    </div>

@endforeach
@endif


@if ($pl=='ipad')
@foreach ($data as $key => $item)
<div class="row" style="padding: 0px; margin: 0px;">
        <form method="post" action="{{url('admin/actionsuathongtinspipad')}}" enctype="multipart/form-data" style="margin-left: 100px;">
            @csrf
            {{ csrf_field() }}
            <h2 align="center" class="titlessp" style="padding-top:2em">Sửa sản phẩm : {{$item->tensp}}</h2>
                <input type="hidden" name='idsp' value="{{$item->idsp}}">
            <table class="table table-responsive">
                <tr>
                    <th>
                        <h5>Giá</h5>
                        <input type="text" class="input-suasanpham" name="giasp" value="{{$item->giasp}}">
                    </th>
                    <th>
                        <h5>Màn hình</h5>
                            <input type="text" class="input-suasanpham" name="manhinh" value="{{$item->manhinh}}">
                    </th>
                </tr>
                <tr>
                    <th>
                        <h5>CPU</h5>
                            <input type="text" class="input-suasanpham" name="cpu" value="{{$item->cpu}}">
                    </th>
                    <th>
                        <h5>Hệ điều hành</h5>
                        <input type="text" class="input-suasanpham" name="hdh" value="{{$item->hdh}}">
                    </th>
                </tr>
                <tr>
                    <th>
                        <h5>RAM</h5>
                            <input type="text" class="input-suasanpham" name="ram" value="{{$item->ram}}">
                    </th>
                    <th>
                        <h5>Bộ nhớ trong</h5>
                            <input type="text" class="input-suasanpham" name="bonhotrong" value="{{$item->bonhotrong}}">
                    </th>
                </tr>
                <tr>
                    <th>
                        <h5>Cam sau</h5>
                        <input type="text" class="input-suasanpham" name="camerasau" value="{{$item->camerasau}}">
                    </th>
                    <th>
                        <h5>Cam trước</h5>
                        <input type="text" class="input-suasanpham" name="cameratruoc" value="{{$item->cameratruoc}}">
                    </th>
                </tr>
                <tr>
                    <th>
                        <h5>Trọng lượng</h5>
                        <input type="text" class="input-suasanpham" name="trongluong" value="{{$item->trongluong}}">
                    </th>
                    <th>
                        <h5>Kết nối mạng</h5>
                        <input type="text" class="input-suasanpham" name="ketnoimang" value="{{$item->ketnoimang}}">
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <h5>Ảnh</h5>
                        <input type="file" name="hinhanh" value="{{$item->hinhanh}}">
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <h5>Thông tin SP</h5>
                        <textarea name="ttsp" id="ttsp">{{$item->thongtinsp}}</textarea>
                         <script>CKEDITOR.replace('ttsp');</script>
                        </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <button class="btn btn-info" name="sua" style="width:7em;height:3em;"><b>Sửa</b></button>
                    </th>
                </tr>
            </table>

         </form>
    </div>
</div>

@endforeach
@endif

