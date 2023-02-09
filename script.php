<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">
</head>
<body>

<script type="text/javascript">
		Swal.fire({
		title: 'Warning!',
		text: 'Please, Login before Starting Booking Process',
		icon: 'warning',
		confirmButtonText: 'Ok'
}).then((result) => {
  if (result.value) {
    location.href = "index.php";
  }
})

	</script>
	
</body>
</html>