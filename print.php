<?php 

$name = @$_GET['name'];
$kolvo = @$_GET['kol-vo'];
$vesnesto = @$_GET['ves-nesto'];
$vesbrutto = @$_GET['ves-brutto'];
$tsenazaed = @$_GET['tsena-za-ed'];
$tsena = @$_GET['tsena'];

$sendername = @$_GET['sendername'];
$senderphone = @$_GET['senderphone'];
$senderkontrakt = @$_GET['senderkontrakt'];

$receivername = @$_GET['receivername'];
$receiverphone = @$_GET['receiverphone'];
$receiverpassport = @$_GET['receiverpassport'];
$receiveraddress = @$_GET['receiveraddress'];



$total_kolvo = 0;
$total_vesnesto=0;
$total_vesbrutto=0;
$total_tsenazaed=0;
$total_tsena=0;

foreach ($kolvo as $key => $value) {
	if ($value != '') {
		$total_kolvo += $value;
	}
}

foreach ($vesnesto as $key => $value) {
	if ($value != '') {
		$total_vesnesto += $value;
	}
}

foreach ($tsena as $key => $value) {
	if ($value != '') {
		$total_tsena += $value;
	}
}
	
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Invoice</title>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="assets/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="assets/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="assets/bootstrap.min.js"></script>

	
			<style type="text/css">
				body{
				font-size: 10px !important;
			}
			</style>
	
	</head>
	<body  style="padding:15px !important;">
		<div class="container-fluid">
			<br>
			<div class="row">
				<div class="col-md-12" style="background-color:#E9E5E5;
					border: 1px solid #000000">
					<div class="row">
						<div class="col-md-6" >
							<h1>EXPRESS KARGO</h1>
						</div>
						<div class="col-md-6" >
							<h1>INVOICE No :&nbsp;&nbsp;&nbsp; 
								<?php echo  @$_GET['invoicenumber'] ?></h1>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<br>
					
					<table class="table-bordered" style="width:100%;" >
						<tr>
							<td style="padding-left: 15px;padding-right: 15px;">No:</td>
							<td style="padding-left: 15px;padding-right: 15px;"><b>НАЗВАНИЕ</b></td>
							<td style="padding-left: 15px;padding-right: 15px;"><b>Кол-в</b></td>
							<td style="padding-left: 15px;padding-right: 15px;"><b>Весь несто</b></td>
							<td style="padding-left: 15px;padding-right: 15px;"><b>Вес брутто</b></td>
							<td style="padding-left: 15px;padding-right: 15px;"><b>Цена за ед.</b></td>
							<td style="padding-left: 15px;padding-right: 15px;"><b>Цена</b></td>
						</tr>
						<?php $count = 1; ?>
						<?php for($i=0; $i< 25; $i++) {?>	
						<tr>
							<td><center><?php echo $count++ ?></center></td>
							<td style="padding-left: 15px;"><?php echo @$name[$i] ?></td>
							<td style="padding-left: 15px;"><?php echo @$kolvo[$i] ?></td>
							<td style="padding-left: 15px;"><?php echo @$vesnesto[$i] ?></td>
							<td style="padding-left: 15px;"><?php echo @$vesbrutto[$i] ?></td>
							<td><center>
<?php echo @$tsenazaed[$i] ? $tsenazaed[$i].'$':'' ?></center></td>
							<td><center>
<?php echo @$tsena[$i] ? $tsena[$i].'$':'-' ?></center></td>
						</tr>
						<?php } ?>
						
						<tr>
							<td colspan="2"><b><center>Total / Итог </center></b></td>
							<td><b><center><?php echo $total_kolvo ?></center></b></td>
							<td colspan="3"><b>
								<center><?php echo $total_vesnesto ?></center></b></td>
							<td colspan="3"><b><center>
								<?php echo $total_tsena ?>$</center></b></td>

						</tr>
					</table>
					
				</div>
				
				<div class="col-md-4">
					<br>
					<div class="row">
						<div class="col-md-12 " style="width:100%">
							<div class="border border-dark">
								<center>
							<b>Sender Company Info</b><br>
							</center>
							</div>
							IDEAL EXPRESS KARGO <br>
							SEVINCH QOSIMOVA OSMANAGA MAH <br>
							SOGUTLUCESME XAD. SEVIL PASAJI <br>
							NO: 74/31  KADIKOY / ISTANBUL<br>
							ISTANBUL TURKEY <br>
							<hr>
							<div class="border border-dark">
								<center>
							<b>Receiver Company Info</b>
							</center>
							</div>
							IDEAL EXPRESS KARGO <br>
							SEVINCH QOSIMOVA OSMANAGA MAH <br>
							SOGUTLUCESME XAD. SEVIL PASAJI <br>
							NO: 74/31  KADIKOY / ISTANBUL<br>
							ISTANBUL TURKEY <br>
						</div>
						<div class="col-md-12">
							<br>
							<table class="table-bordered" style="width:100%" >
								<tr>
									<td>Отправитель</td>
									<td style="padding-left: 15px;">
										<?php echo @$sendername ?>
									</td>
								</tr>
								<tr>
									<td>Телефон</td>
									<td style="padding-left: 15px;">
										<?php echo @$senderphone ?>
									</td>
								</tr>
								<tr>
									<td>Номер Контракта</td>
									<td style="padding-left: 15px;">
										<?php echo @$senderkontrakt ?>
									</td>
								</tr>
							</table>
						</div>
						<div class="col-md-12">
							<br>
							<table class = "table-bordered" style="width:100%" >
								<tr>
									<td>Получатель</td>
									<td style="padding-left: 15px;" ><?php echo @$receivername ?></td>
								</tr>
								<tr>
									<td>Телефон</td>
									<td style="padding-left: 15px;">
										<?php echo @$receiverphone ?></td>
								</tr>

								<tr>
									<td>Телефон</td>
									<td style="padding-left: 15px;">
										<?php echo @$receiverpassport ?></td>
								</tr>

								<tr>
									<td>Получатель адреса</td>
									<td style="padding-left: 15px;">
										<?php echo @$receiveraddress ?></td>
								</tr>
							</table>
							<br><br><br>
							Подпись и печать отправителя <br>
							<hr>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
		setTimeout(function(){
			window.print();
		},1000);
		
		</script>
	</body>
</html>