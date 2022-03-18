<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>AnStore</title>
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Mukta|Anton&display=swap" rel="stylesheet">

</head>
<body style="background-color: #ecf0f1;">
	<div class="row" style="padding: 0px; margin: 0px;">
		<div class="col-sm-12 banner" style="padding-top: 1em;">
			<form method="GET" action="./admin.php">
				Ngày:<select name="ngay">
					<option></option>
					<?php for($i =1;$i <= 31;$i++){
						if ($i<10) {
							$i = "0".$i;
						}
						echo "<option>".$i."</option>";
					} ?>
				</select>
				Tháng:<select name="thang">
					<option></option>
					<?php for($i =1;$i <= 12;$i++){
						if ($i<10) {
							$i = "0".$i;
						}
						echo "<option>".$i."</option>";
					} ?>
				</select>
				Năm:<select name="nam">
					<option></option>
					<?php for($i =2019;$i >= 1990;$i--){
						echo "<option>".$i."</option>";
					} ?>
				</select>
				<input type="text" name="btn" value="locdoanhthu" style="opacity: 0;width: 1px;">
				<button name="locdoanhthu">Lọc</button>
			</form>

			
			<?php 
				$con = mysqli_connect('localhost','root','','anstore');
				mysqli_set_charset($con, 'UTF8');
				$sql="select hdon.*, sum(giasp*soluong) as thanhtien, customers.* from cthoadon inner join customers on cthoadon.makh = customers.makh inner join hdon on cthoadon.mahd = hdon.mahd where hdon.ngayhd like'%".$_GET['nam']."%-%".$_GET['thang']."%-%".$_GET['ngay']."' and hdon.ttdonhang = '5' group by hdon.mahd";
				
				if ($_SESSION['username']=='admin') {
					
				$kqsql = mysqli_query($con,$sql);
				$tongdoanhthu =0;
					?>
					<table class="table table-bordered">
			            <tr>
			              <th>Mã đơn hàng</th>
			              <th>Ngày lập hóa đơn</th>
			              <th>Tên khách hàng</th>
			              <th>Tổng tiền</th>
			              <th>Trạng thái</th>
			            </tr>
			            <?php while ($rowkq = mysqli_fetch_array($kqsql)) {
			              $tongdoanhthu += $rowkq['thanhtien']; 
			              $ngayhd = date("d-m-Y",strtotime($rowkq['ngayhd']));
			              ?>
			            <tr>
			              <th><?php echo $rowkq['mahd']; ?></th>
			              <th><?php echo $ngayhd ?></th>
			              <th><?php echo $rowkq['tenkh']; ?></th>
			              <th><?php echo number_format($rowkq['thanhtien'])." VNĐ"; ?></th>
			              
			                <th>Đã nhận hàng</th>
			            
			              
			              </form>
			            </tr>
			            <?php
			        }

			        
			       ?>
			          </table>
					<?php
				}
				echo "<h2 style='float:right'>Tổng doanh thu: ".number_format($tongdoanhthu)." VNĐ</h2>";

				?>			
		</div>
	</div>
</body>
</html>
