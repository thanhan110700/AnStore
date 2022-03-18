@extends('templates.iphone')
@section('title')
    iPhone
@endsection
@section('content')

@foreach ($dssp as $ds)
        <div class="col-sm-4 clgt">
                <div class="thumbnail">
                  <a href="{{url('xemchitietiphone',$ds->idsp)}}">
                  <img src="img/Sanpham/{{$ds->hinhanh}}" class="img-ip" style="height: 20em;">
                   </a>
                    <div class="caption">
                      <b style="font-size:1.5em">{{$ds->tensp}}</b>
                      <h5 style="color:red">{{number_format($ds->giasp)}} VNĐ</h5>
                      <hr>
                        <p>Màn hình: {{$ds->manhinh}}</p>
                        <p>HĐH: {{$ds->hdh}}</p>
                        <p>CPU: {{$ds->cpu}}</p>
                        <p>Camera: {{$ds->camerasau}}, Selfie: {{$ds->cameratruoc}}</p>
                        <p>PIN: {{$ds->dungluongpin}}</p>
                        <hr>
                    <p align="center"><a  href="{{url('xemchitietiphone',$ds->idsp)}}" style ="color: blue"><input type="submit" name="btn-xct" class="btn-abc btnxct" value="Xem chi tiết" ></a></p>
                    <p align="center"><a href="{{url('addtocart',$ds->idsp)}}" style="color: orange"><input type="submit" name="btn-xct" class="btn-abc btntgh" value="Thêm giỏ hàng" ></a></p>
                        <hr>
                        <i>lượt xem ({{$ds->view}})</i>
                </div>
                </div>
              </div>
@endforeach
@endsection
