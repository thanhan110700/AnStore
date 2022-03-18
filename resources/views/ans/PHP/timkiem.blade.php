@extends('templates.timkiem')
@section('title')
    AnStore
@endsection
@section('content')
	<div class="row" style="padding: 0px; margin: 0px;">
        <h3>Bạn đã tìm kiếm "{{$tensearch}}"</h3>
        @foreach ($dssp as $ds)
        <div class="col-sm-4">
            <div class="thumbnail">
              <a href="{{url('xemchitiet',$ds->idsp)}}">
              <img src="img/iPhone/{{$ds->hinhanh}}" class="img-ip" style="height: 300px">
               </a>
                <div class="caption">
                  <b>{{$ds->tensp}}</b>
                  <hr>
                    <p>Màn hình: {{$ds->manhinh}}</p>
                    <p>HĐH: {{$ds->hdh}}</p>
                    <p>CPU: {{$ds->cpu}}</p>
                    <p>Camera: {{$ds->camerasau}}, Selfie: {{$ds->cameratruoc}}</p>
                    <p>PIN: {{$ds->dungluongpin}}</p>
                    <hr>
                <p align="center"><a  href="{{url('xemchitiet',$ds->idsp)}}" style ="color: blue"><input type="submit" name="btn-xct" class="btn-abc btnxct" value="Xem chi tiết" ></a></p>
                <p align="center"><a href="{{url('addtocart',$ds->idsp)}}" style="color: orange"><input type="submit" name="btn-xct" class="btn-abc btntgh" value="Thêm giỏ hàng" ></a></p>
                </div>
            </div>
    </div>
    @endforeach
	</div>
@endsection
