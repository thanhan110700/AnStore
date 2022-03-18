@extends('templates.chitietiphone')
@section('title')
    AnStore
@endsection
@section('content')
<div class="row" style="padding: 0px; margin: 0px;">
    <div class="card">
        <div class="container-fliud">
         <div class="wrapper row">
          <div class="preview col-md-4 aloo">
           <div class="preview-pic tab-content">
            <div class="tab-pane active" id="pic-1"><img src="{{asset('img/Sanpham/'.$ttsp->hinhanh)}}" class="img-main">
            </div>
            <div class="tab-pane" id="pic-2"><img src="{{asset('img/Sanpham/aklnj.png')}}" class="img-main">
            </div>
            <div class="tab-pane" id="pic-3"><img src="{{asset('img/Sanpham/kjjnjj.png')}}" class="img-main">
            </div>
            <div class="tab-pane" id="pic-4"><img src="{{asset('img/Sanpham/kuasdjbx.png')}}" class="img-main">
            </div>

           </div>
           <ul class="preview-thumbnail nav nav-tabs">
            <li class="active imgphu"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('img/Sanpham/'.$ttsp->hinhanh)}}" class="imgchitiet"></a>
            </li>
            <li class="imgphu"><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('img/Sanpham/aklnj.png')}}" class="imgchitiet"></a>
            </li>
            <li class="imgphu"><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('img/Sanpham/kjjnjj.png')}}" class="imgchitiet"></a>
            </li>
            <li class="imgphu"><a data-target="#pic-4" data-toggle="tab"><img src="{{asset('img/Sanpham/kuasdjbx.png')}}" class="imgchitiet"></a>
            </li>

           </ul>
          </div>
          <div class="details col-md-5">
           <h3 class="product-title"><p><b class="name-ip">{{$ttsp->tensp}}</b></p></h3>
           <p><h4 class="price">Giá bán: <b class="gia-ip">{{number_format($ttsp->giasp)}} đ</b></h4></p>
           <h5 class="div-mau colors">Màu: 
               <?php
                    foreach($mausp as $key){
                        ?>
                        <div class="mausp" style='background:<?php echo $key?>'></div> 
                <?php }
               ?>
               <div class="mausp" style='background:'></div> 
               
           </h5>
            <a href="{{url('addtocart',$ttsp->idsp)}}" style="text-decoration:none">
                <button class="btnthemgiohang" type="button">THÊM GIỎ HÀNG</button>
            </a>
            </div>

          <div class="col-sm-3 goiy">
            <h3 align='center'>Gợi ý</h3>
            <hr>
            @foreach ($sanpham as $item)
            <a style="text-decoration:none;" href="{{url('xemchitietiphone',$item->idsp)}}">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('img/Sanpham/'.$item->hinhanh)}}" class="media-object" style="width:70px">
                        </div>
                        <div class="media-body" style="width:70%;">
                            <h4 class="media-heading">{{$item->tensp}}</h4>
                            <p style="color:red">{{number_format($item->giasp)}} VNĐ</p>
                            <p><i>lượt xem ({{$item->view}})</i></p>
                        </div>
                    </div>
                </a><br>
            @endforeach
        </div>
         </div>
        </div>
       </div>
       

       <div class="container">
        <div class="row" style="padding-bottom: 2em;">
            <div class="col-sm-8">

                <p><b class="dd-ip"  style="font-size: 30px;text-align:center;">Những điểm nổi bật của {!! $ttsp->tensp !!} </b></p>
                <div class="xemchitiet">
                 <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal" style="width: 9em;height: 3em;margin: 0em 18em 0em 0em;">Xem chi tiết</button>
                </div>
                <div class="modal fade" id="myModal" role="dialog" style="height:100%">
                 <div class="modal-dialog">

                   <!-- Modal content-->
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" style="margin-right: -4em;">&times;</button>
                       <h4 class="modal-title">{{$ttsp->tensp}}</h4>
                     </div>
                     <div class="modal-body">
                       {!! $ttsp->thongtinsp !!}
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-danger btn-close"  data-dismiss="modal">Close</button>
                     </div>
                   </div>

                 </div>
               </div>

            </div>
            <div class="col-sm-4 tskt" >

                <p style="text-align:center;font-size:30px;margin-top:1em;"><b class="dd-ip">Thông số kỹ thuật</b></p><hr>
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        Màn hình:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->manhinh}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        Hệ điều hành:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->hdh}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        Camera sau:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->camerasau}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        Camera trước:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->cameratruoc}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        CPU:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->cpu}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        RAM:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->ram}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        Bộ nhớ trong:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->bonhotrong}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        Thẻ Sim:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->thesim}}
                    </div>
                </div>
                
                <div class="row txt-tskt" >
                    <div class="col-sm-4">
                        Dung lượng pin:
                    </div>
                    <div class="col-sm-8">
                            {{$ttsp->dungluongpin}}

                    </div>
                </div>
            </div>
        </div>
       </div>
</div>
@endsection
<style>
body {
font-family:Arial, Helvetica, sans-serif;
overflow-x: hidden;
}

img {
max-width: 100%;
}

.preview {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-webkit-flex-direction: column;
-ms-flex-direction: column;
flex-direction: column;
}

@media screen and (max-width: 996px) {
.preview {
margin-bottom: 20px;
}
}

.preview-pic {
-webkit-box-flex: 1;
-webkit-flex-grow: 1;
-ms-flex-positive: 1;
flex-grow: 1;
}

.preview-thumbnail.nav-tabs {
border: none;
margin-top: 15px;
}

.preview-thumbnail.nav-tabs li {
width: 18%;
margin-right: 2.5%;
}

.preview-thumbnail.nav-tabs li img {
max-width: 100%;
display: block;
}

.preview-thumbnail.nav-tabs li a {
padding: 0;
margin: 0;
cursor:pointer;
}

.preview-thumbnail.nav-tabs li:last-of-type {
margin-right: 0;
}

.tab-content {
overflow: hidden;
}

.tab-content img {
width: 100%;
-webkit-animation-name: opacity;
animation-name: opacity;
-webkit-animation-duration: .3s;
animation-duration: .3s;
}

.card {
margin-top: 0px;
background: #eee;
padding: 3em;
line-height: 1.5em;
}

@media screen and (min-width: 997px) {
.wrapper {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
}
}

.details {
display: -webkit-box;
    display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-webkit-flex-direction: column;
-ms-flex-direction: column;
flex-direction: column;
}

.colors {
-webkit-box-flex: 1;
-webkit-flex-grow: 1;
-ms-flex-positive: 1;
flex-grow: 1;
}

.product-title, .price, .sizes, .colors {
text-transform: UPPERCASE;
font-weight: bold;
}

.checked, .price span {
color: #ff9f1a;
}

.product-title, .rating, .product-description, .price, .vote, .sizes {
margin-bottom: 15px;
}

.product-title {
margin-top: 0;
}

.size {
    margin-right: 10px;
}

.size:first-of-type {
margin-left: 40px;
}

.color {
display: inline-block;
vertical-align: middle;
margin-right: 10px;
height: 2em;
width: 2em;
border-radius: 2px;
}

.color:first-of-type {
margin-left: 20px;
}

.add-to-cart, .like {
background: #ff9f1a;
padding: 1.2em 1.5em;
border: none;
text-transform: UPPERCASE;
font-weight: bold;
color: #fff;
text-decoration:none;
-webkit-transition: background .3s ease;
transition: background .3s ease;
}

.add-to-cart:hover, .like:hover {
background: #b36800;
color: #fff;
text-decoration:none;
}

.not-available {
text-align: center;
line-height: 2em;
}

.not-available:before {
font-family: fontawesome;
content: "\f00d";
color: #fff;
}

.orange {
background: #ff9f1a;
}

.green {
background: #85ad00;
}

.blue {
background: #0076ad;
}

.tooltip-inner {
padding: 1.3em;
}

@-webkit-keyframes opacity {
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);}
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
}

@keyframes opacity {
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);}
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
}</style>

