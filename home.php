<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"> -->
<title>Document</title>
</head>
<body>
    <!--START Navigation bar-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <div id="nav-placeholder">
    </div>

    <script>
    $(function(){
    $("#nav-placeholder").load("navbar.html");
    });
    </script>
    <!--end of Navigation bar-->

<div class="row">
    <div align="center">
		<h1> Graph Generator</h1>
		<body>Pilih dibawah ini!</body>
		<link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
		<script src="https://unpkg.com/flatpickr"></script> 

		<form action="" method="POST">
			Select:
			<select name="server" id="server_select">
				<option disabled selected> Pilih </option>
				<!-- GET THE SERVER NAME OPTION FROM MYSQL -->
				<?php include 'fetch_servername.php';?>
			</select>
			<select name="object" id="object_select">
				<option disabled selected> Pilih </option>
				<!-- GET THE ID PRTG OPTION FROM MYSQL -->
				<?php include 'fetch_id_prtg.php';?>
			</select>
			<input class="flatpickr" type="text" name="sdate" placeholder="Select Date..">
			<input class="flatpickr" type="text" name="edate" placeholder="Select Date..">
			<button class="btn btn-primary btn-sm" name="submit" value="Submit">Submit</button>
		</form>
		<!-- LOAD THE IMAGE (USING URL) -->
		<?php include 'load_image.php';?>
    </div>
</div>
</body>
</html>

<script>
flatpickr(".flatpickr", {
    enableTime: true,
	time_24hr: true
});
</script>
<?php

function pre_r( $array ){
	// echo '<pre>';
	// print_r($array);
	// echo '<pre>';
}
?>