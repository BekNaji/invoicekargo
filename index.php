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
	<body>

		<form action="print.php" method="GET">
		<div class="container-fluid">
			<br>
			<div class="row">
				<div class="col-md-12" style="background-color:#E9E5E5;
					border: 1px solid #000000; padding: 5px;">
					<div class="row">
						<div class="col-md-6" >
							<h1>EXPRESS KARGO</h1>
						</div>
						<div class="col-md-6" >
							<h1>INVOICE No :&nbsp;&nbsp;&nbsp;
								<input 
								type="text" 
								name="invoicenumber"
								required 
								> </h1>
						</div>
						
					</div>
				</div>
				<div class="col-md-8">
					<br>
					
					<table class="table-bordered" style="width:100%;" >
						<tr>
							<td style="padding-left: 15px;padding-right: 15px;">No:</td>
							<td style="padding-left: 15px;padding-right: 15px;">НАЗВАНИЕ</td>
							<td style="padding-left: 15px;padding-right: 15px;">Кол-в</td>
							<td style="padding-left: 15px;padding-right: 15px;">Весь несто</td>
							<td style="padding-left: 15px;padding-right: 15px;">Вес брутто</td>
							<td style="padding-left: 15px;padding-right: 15px;">Цена за ед.</td>
							<td style="padding-left: 15px;padding-right: 15px;">Цена</td>
						</tr>
						
							<?php for($i=1; $i<25; $i++){ ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><input style="width:100%;" name="name[]" type="text"></td>
								<td>
									<input style="width:100%;" name="kol-vo[]" type="number" step="0.1">
								</td>
								<td><input type="number" step="0.1" style="width:100%;" name="ves-nesto[]" type="text"></td>
								<td><input style="width:100%;" name="ves-brutto[]" type="text"></td>
								<td>
									<input type="number" step="0.1" style="width:100%;" name="tsena-za-ed[]" type="text">
								</td>
								<td><input type="number" step="0.1" style="width:100%;" name="tsena[]" type="text"></td>
							</tr>
							<?php } ?>
							
						</table>
					</div>
					
					<div class="col-md-4">
						<br>
						<div class="row">
							<div class="col-md-12 " style="width:100%">
								<b>Sender Company Info</b><br>
								IDEAL EXPRESS KARGO <br>
								SEVINCH QOSIMOVA OSMANAGA MAH <br>
								SOGUTLUCESME XAD. SEVIL PASAJI <br>
								NO: 74/31  KADIKOY / ISTANBUL<br>
								ISTANBUL TURKEY <br>
								<hr>
								<b>Receiver Company Info</b>
								<b>Sender Company Info</b><br>
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
										<td><input style="width:100%" type="text" name="sendername" required></td>
									</tr>
									<tr>
										<td>Телефон</td>
										<td><input style="width:100%" type="text" name="senderphone" required></td>
									</tr>
									<tr>
										<td>Номер Контракта</td>
										<td><input style="width:100%" type="text" name="senderkontrakt"></td>
									</tr>
								</table>
							</div>
							<div class="col-md-12">
								<br>
								<table class = "table-bordered" style="width:100%" >
									<tr>
										<td>Получатель</td>
										<td><input style="width:100%" type="text" name="receivername" required></td>
									</tr>
									<tr>
										<td>Телефон</td>
										<td><input style="width:100%" type="text" name="receiverphone" required></td>
									</tr>
									<tr>
										<td>Пасспорт  получителя </td>
										<td><input style="width:100%" type="text" name="receiverpassport" required></td>
									</tr>
									<tr>
										<td>Получатель адреса</td>
										<td><input style="width:100%" type="text" name="receiveraddress"></td>
									</tr>
								</table>
								<br>
								<button type="submit" class="btn btn-primary" href="print.php?count=25">Print</button>
								
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</body>
</html>