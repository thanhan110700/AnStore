<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/index.css')}}">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Mukta|Anton&display=swap" rel="stylesheet">
</head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
$(function(){
    var seYear = $('#year');
    var date = new Date();
    var cur = date.getFullYear();

    seYear.append('<option value="">--Năm--</option>');
    for (i = cur; i >= 1900; i--) {
        seYear.append('<option value="'+i+'">'+i+'</option>');
    };

    //Tháng tự động điền vào select
    var seMonth = $('#month');
    var date = new Date();

    var month=new Array();
    month[1]="1";
    month[2]="2";
    month[3]="3";
    month[4]="4";
    month[5]="5";
    month[6]="6";
    month[7]="7";
    month[8]="8";
    month[9]="9";
    month[10]="10";
    month[11]="11";
    month[12]="12";

    seMonth.append('<option value="">--Tháng--</option>');
    for (i = 12; i > 0; i--) {
        seMonth.append('<option value="'+i+'">'+month[i]+'</option>');
    };

    //Ngày tự động điền vào select
    function dayList(month,year) {
        var day = new Date(year, month, 0);
        return day.getDate();
    }

    $('#year, #month').change(function(){
        //Đoạn code lấy id không viết bằng jQuery để phù hợp với đoạn code bên dưới
        var y = document.getElementById('year');
        var m = document.getElementById('month');
        var d = document.getElementById('day');

        var year = y.options[y.selectedIndex].value;
        var month = m.options[m.selectedIndex].value;
        var day = d.options[d.selectedIndex].value;
        if (day == ' ') {
            var days = (year == ' ' || month == ' ')? 31 : dayList(month,year);
            d.options.length = 0;
            d.options[d.options.length] = new Option('--Ngày--',' ');
            for (var i = 1; i <= days; i++)
            d.options[d.options.length] = new Option(i,i);
        }
    });
});
</script>
<body style="background-color: #ecf0f1; padding:0;margin 0;">
    <div class="row" style="padding: 0px; margin: 0px;">

        <div class="col-sm-12 banner" style="padding-top: 1em;">
                <h2 align="center">Danh sách hóa đơn</h2>
            <form method="GET" action="{{url('admin/lochoadon')}}" style="margin-bottom:10px;padding-left: 21em;">
                <select class="select-date colorbg" name="year" id="year" size="1"></select>
                <select class="select-date colorbg" name="month" id="month" size="1"></select>
                <select class="select-date colorbg" name="day" id="day" size="1">
                    <option value=" " selected="selected">--Ngày--</option>
                </select>
                <button class="submit-phanloai">Lọc</button>
			</form>
			<table class="table table-bordered table-hover">
						<tr>
							<th>Mã đơn hàng</th>
							<th>Ngày lập hóa đơn</th>
							<th>Tổng tiền</th>
							<th>Trạng thái</th>

							<th></th>
                        </tr>

                        @foreach ($data as $key => $item)
                        <tr>
                            <th style="width:15%">{{$item->mahd}}</th>
                            <th style="width:18%">{{date("d-m-Y",strtotime($item->ngayhd))}}</th>
                            <th style="width:19%">{{number_format($item->tongtien)}} VNĐ</th>
                            <th style="width:33%">
                                    <form method="get" action="{{url('admin/xlcnttdonhang')}}">
                                        <input type="hidden" name="mahd" value="{{$item->mahd}}">
                                        <select class="ttdonhang" name="ttdonhang">
                                            <option value="1" {{$item->ttdonhang==1?'selected=selected':''}} >Đang chờ xác nhận</option>
                                            <option value="2" {{$item->ttdonhang==2?'selected=selected':''}} >Đã xác nhận</option>
                                            <option value="3" {{$item->ttdonhang==3?'selected=selected':''}} >Đang đóng gói</option>
                                            <option value="4" {{$item->ttdonhang==4?'selected=selected':''}} >Đang giao hàng</option>
                                            <option value="5" {{$item->ttdonhang==5?'selected=selected':''}} >Đã nhận hàng</option>
                                        </select>
                                        <button class="btn btn-success" style="margin-left:-50px;">Cập nhật</button>
                                    </form>
                            </th>
                            <th style="width:15%"><a href="{{url('admin/chitiethoadon',$item->mahd)}}">Xem chi tiết>>> </a></th>
                        </tr>
                    @endforeach

					</table>
		</div>
	</div>
</body>
</html>

