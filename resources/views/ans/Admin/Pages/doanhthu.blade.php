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

<script>
$(function(){
    var seYear = $('#years');
                var date = new Date();
                var cur = date.getFullYear();

                seYear.append('<option value="">--Năm--</option>');
                for (i = cur; i >= 1900; i--) {
                    seYear.append('<option value="'+i+'">'+i+'</option>');
                };

                //Tháng tự động điền vào select
                var seMonth = $('#months');
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

                $('#years, #months').change(function(){
                    //Đoạn code lấy id không viết bằng jQuery để phù hợp với đoạn code bên dưới
                    var y = document.getElementById('years');
                    var m = document.getElementById('months');
                    var d = document.getElementById('days');

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
            $(function(){
    var seYear = $('#yeare');
                var date = new Date();
                var cur = date.getFullYear();

                seYear.append('<option value="">--Năm--</option>');
                for (i = cur; i >= 1900; i--) {
                    seYear.append('<option value="'+i+'">'+i+'</option>');
                };

                //Tháng tự động điền vào select
                var seMonth = $('#monthe');
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

                $('#yeare, #monthe').change(function(){
                    //Đoạn code lấy id không viết bằng jQuery để phù hợp với đoạn code bên dưới
                    var y = document.getElementById('yeare');
                    var m = document.getElementById('monthe');
                    var d = document.getElementById('daye');

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
</head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<body style="background-color: #ecf0f1; padding:0;margin 0;">
	<div class="row" style="padding: 0px; margin: 0px;">
        <div class="col-sm-12 banner" style="padding-top: 1em;">
            <h2>Doanh thu</h2>
            <h3>Xem doanh thu:</h3>
            @if (isset($tg))
                <h3>{{$tg}}</h3>
            @endif
            <form method="POST" action="{{url('admin/xemdoanhthu')}}" class="xemdoanhthu">
                @csrf
                <select name="locdoanhthu" class="colorbg custom-select ">
                    <option value="">--Chọn--</option>
                    <option value="ngay">Ngày vừa rồi</option>
                    <option value="tuan">Tuần vừa rồi</option>
                    <option value="thang">Tháng vừa rồi</option>
                    <option value="quy">Quý vừa rồi</option>
                    <option value="nam">Năm vừa rồi</option>
                </select>
                <button class="submit-phanloai">Xem</button>
            </form>
            <form action="{{url('admin/xemdoanhthu2')}}" method="POST">
                @csrf
                <span>Từ</span>
                <input type="date" name='datestart' class="colorbg xemdoanhthu2">
                <span>Đến</span>
                <input type="date" name='dateend' class="colorbg xemdoanhthu2">
                <button class="submit-phanloai">Xem</button>
            </form>
			<table class="table table-bordered table-striped table-hover">
                <tr>
                    @php
                        $totalprice = 0;
                    @endphp
                    @foreach ($data as $key => $item)
                        @php
                            $totalprice += $item->tongtien;
                        @endphp
                    @endforeach
                    <th colspan="4" style="background-color:#f6e58d">Tổng doanh thu: @php echo number_format($totalprice); @endphp VNĐ</th>
                </tr>
				<tr style="background-color:#eb4d4b">
                    <th>Mã đơn hàng</th>
                    <th>Tên khách hàng</th>
					<th>Ngày lập hóa đơn</th>
					<th>Tổng tiền</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <th>{{$item->mahd}}</th>
                    <th>{{$item->user()->get()->first()->tenkh}}</th>
                    <th>{{date("d-m-Y",strtotime($item->ngayhd))}}</th>
                    <th>{{number_format($item->tongtien)}} VNĐ</th>
                </tr>

                @endforeach
			</table>
		</div>
	</div>
</body>
</html>

