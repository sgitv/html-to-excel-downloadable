<?php 
require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();
?>
<!DOCTYPE html>
<html>
<head>
	<title>faker</title>
	<link rel="stylesheet" type="text/css" href="bower_components\bootstrap\dist\css\bootstrap.css">
</head>
<body class="container">
<table id="tbl1" border="1" >
<tr>
    <th>employee Id</th>
    <th>employee name</th>
    <th>phone No.</th>
    <th>email</th>
    <th>address</th>
    <th>date of joined</th>
</tr>
<?php foreach (range(1,20) as $key): ?>
<tr>
    <td><?php echo $faker ->randomNumber($nbDigits = NULL) ?></td>
    <td><?php echo $faker ->name ?></td>
    <td><?php echo $faker ->phoneNumber ?></td>
    <td><?php echo $faker ->email ?></td>
    <td><?php echo $faker ->address ?></td>
    <td><?php echo $faker ->date ?> </td>
</tr>

<?php endforeach ?>
</table>

<button onclick="downloadAsExcel()">Download As Excel</button>
<script src="download.js"></script>
</body>
</html>