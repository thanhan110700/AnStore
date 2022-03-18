<!DOCTYPE html>
<html>
<head>
	<title>AnStore</title>
	<link rel="stylesheet" type="text/css" href="../CSS/qlsp.css">

  	<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>
<body style="background-color: #ecf0f1;">
	<div class="row" style="padding: 0px; margin: 0px;">
		<?php if ($_SESSION['username']=='admin') {
			?>
		<div class="col-sm-12 banner" style="padding-top: 1em;">
			<a href='./admin.php?btn=tsp'><button style="margin-bottom: 20px;">Thêm sản phẩm</button></a>
			<?php 
				$con = mysqli_connect('localhost','root','','anstore');
				mysqli_set_charset($con, 'UTF8');
				$sql="select * from spiphone";
				$kqsql = mysqli_query($con,$sql);

			?>
				<table class="table table-bordered" id="cart">
						<tr>
							<th>Hình ảnh</th>
							<th>Tên Sản phẩm</th>
							<th></th>
						</tr>
				<?php
				while ($rowkq = mysqli_fetch_array($kqsql)) {
					?>
						<tr>
							<th><img style="width: 150px;height: 160px;" src="<?php echo $rowkq['hinhanh']; ?>"></th>
							<th><?php echo $rowkq['tensp']; ?></th>
							<th><a href="./admin.php?btn=stt&idsp=<?php echo $rowkq['idsp']; ?>">Sửa thông tin</a>|
								<a href="../PHP/xsp.php?idsp=<?php echo $rowkq['idsp']; ?>">Xóa sản phẩm</a>
							</th>
						</tr>
					<?php
				}
			?>
				</table>
			
		</div>
	<?php } ?>
	</div>	

</body>
</html>