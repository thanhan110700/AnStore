@extends('templates.thongtinnguoidung')
@section('title')
    Thông tin người dùng
@endsection
@section('content')
    @foreach ($ttnd as $key => $item)
        @endforeach
    <div class="container" style="margin-top: 4em;">
		<div class="row">
			<div class="col-11 mx-auto profile" style="background-color: #ffb;">
				<div class="py-3 px-2 px-lg-4 py-lg-5">

					<div class="row">
						<div class="avatarBox col-12 col-lg-5" >
                            <img src="{{asset('img/avatar/'.$item->anhdaidien)}}" class="img-fluid">
                            <a href="#"><div class="change-avatar"><i class="glyphicon glyphicon-camera" style="font-size:6em;color:white;"></i></div></a>
						</div>

						<div class="infoBox col-12 col-lg-6 mt-2 mt-lg-0">
							<p class="sayHi">Hello</p>

							<div class="name">
								<p><span>I'm</span> {{$item->tenkh}}</p>
								<p class="s">Online
									<span class="ion-ios-checkmark-outline"></span>
								</p>
							</div>
							<hr>
							<div class="detailInfo">
								<div class="row my-2">
									<div class="col-lg-4 col-12 boldd">Tên</div>
                                    <div class="col-lg-8 col-12 b">{{$item->tenkh}}</div>
								</div>
								<div class="row my-2">
									<div class="col-lg-4 col-12 boldd">Địa chỉ</div>
									<div class="col-lg-8 col-12 b">{{$item->diachi}}</div>
								</div>
								<div class="row my-2">
									<div class="col-lg-4 col-12 boldd">Số điện thoại</div>
									<div class="col-lg-8 col-12 b">{{$item->sdt}}</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-12 boldd">Tuổi</div>
									<div class="col-lg-8 col-12 b">19 Years Old</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-11 mx-auto bg-danger contact text-center">
				<div class="social col-12">
                    <button type="button" class="btn btn-info btn-lg btndtt" data-toggle="modal" data-target="#myModal1" style="">Đổi mật khẩu</button>
                    <button type="button" class="btn btn-info btn-lg btndtt btnsttkh" data-toggle="modal" data-target="#myModal2">Đổi Thông tin cá nhân</button>
                </div>
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                            <h4 align='center' class="modal-title" style="">Đổi mật khẩu</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body" style="background-color: tomato;">
                            <form method='get' action="{{url('doimatkhau',$item->makh)}}">
                                <span class="ttnd">Nhập mật khẩu cũ: </span>
                                <span class="input-ttnd"> <input type="password" autocomplete="off" class="input-mk" name="mkc" placeholder="Mật khẩu cũ" style="border: none;background-color: turquoise;height: 3em;border-radius: 9px;"> </span><br>
                                <span class="ttnd">Nhập mật khẩu mới: </span>
                                <span class="input-ttnd"> <input type="password" autocomplete="off" class="input-mk" name="mkm" placeholder="Mật khẩu mới" style="border: none;background-color: turquoise;height: 3em;border-radius: 9px;"> </span><br>
                                <span class="ttnd">Nhập lại mật khẩu mới: </span>
                                <span class="input-ttnd"> <input type="password" autocomplete="off" class="input-mk" name="nlmkm" placeholder="Nhập lại mật khẩu cũ" style="border: none;background-color: turquoise;height: 3em;border-radius: 9px;"> </span> <br>
                                <button class="btn btn-success" style="margin-right:13em;margin-top:1em;">Đổi mật khẩu</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                            <h4 align='center' class="modal-title" style="">Đổi thông tin cá nhân</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body" style="background-color: tomato;">
                            <form method='get' action="{{url('update',$item->makh)}}">
                                <span class="ttnd">Họ và Tên: </span><br>
                                <span class="input-ttnd"> <input type="text" autocomplete="off" class="input-mk" name="tenkh" placeholder="Họ và tên" value= "{{$item->tenkh}}" style="border: none;background-color: turquoise;height: 3em;border-radius: 9px;"> </span><br>
                                <span class="ttnd">Địa chỉ: </span><br>
                                <span class="input-ttnd"> <input type="text" autocomplete="off" class="input-mk" name="diachi" placeholder="Địa chỉ" value="{{$item->diachi}}" style="border: none;background-color: turquoise;height: 3em;border-radius: 9px;"> </span><br>
                                <span class="ttnd">Số điện thoại: </span>
                                <span class="input-ttnd"> <input type="text" autocomplete="off" class="input-mk" name="sdt" placeholder="Số điện thoại" value="{{$item->sdt}}" style="border: none;background-color: turquoise;height: 3em;border-radius: 9px;"> </span> <br>


                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" style="outline:none">Lưu</button>
                        </form>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
			</div>
		</div>
	</div>

@endsection
