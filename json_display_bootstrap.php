<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>

</head>
<body>

<script>
$.getJSON("json_forbootstrap.php", function (jsonFromFile) {
	$('#table').bootstrapTable({
		data: jsonFromFile.rows
	})
});
document.write(getJSON);
</script>

<div class="container">
	<table id="table">
		<thead>
			<tr>
				<th data-field="name">Name</th>
				<th data-field="email">Email</th>

			</tr>
		</thead>
	</table>
</div>

</body>
</html>
