<?php 	
$tipo = htmlentities($_GET['tipo']); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	</title>
	<link rel="stylesheet" href="">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
	<script type="text/javascript">
		Swal.fire({
  icon: '<?php 	echo $tipo; ?>',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href>Why do I have this issue?</a>'
})

	</script>
</body>
</html>