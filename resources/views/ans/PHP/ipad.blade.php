@extends('templates.ipad')
@section('title')
    iPad
@endsection
@section('content')
@foreach ($dssp as $ds)
        <div class="col-sm-4 clgt">
                <div class="thumbnail">
                  <a href="{{url('xemchitietipad',$ds->idsp)}}">
                  <img src="img/Sanpham/{{$ds->hinhanh}}" class="img-ip" style="height: 20em;">
                   </a>
                    <div class="caption">
                        <b style="font-size:1em">{{$ds->tensp}}</b>
                        <h5 style="color:red">{{number_format($ds->giasp)}} VNĐ</h5>
                      <hr>
                        <p>Màn hình: {{$ds->manhinh}}</p>
                        <p>HĐH: {{$ds->hdh}}</p>
                        <p>CPU: {{$ds->cpu}}</p>
                        <p>Camera: {{$ds->camerasau}}, Selfie: {{$ds->cameratruoc}}</p>
                        <p>Trọng lượng: {{$ds->trongluong}}</p>
                        <hr>
                    <p align="center"><a  href="{{url('xemchitietipad',$ds->idsp)}}" style ="color: blue"><input type="submit" name="btn-xct" class="btn-abc btnxct" value="Xem chi tiết" ></a></p>
                    <p align="center"><a href="{{url('addtocart',$ds->idsp)}}" style="color: orange"><input type="submit" name="btn-xct" class="btn-abc btntgh" value="Thêm giỏ hàng" ></a></p>
                        <hr>
                        <i>lượt xem ({{$ds->view}})</i>
                </div>
                </div>
              </div>
@endforeach
@endsection
