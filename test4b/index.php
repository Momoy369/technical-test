<!DOCTYPE html>
<html lang="en">
<head>
    <title>DW Heroes</title>
</head>
<body>
<div class="container table-responsive">
		<h1>7DW</h1>
		
		<table id="myTb" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th width="5%">id</th>
					<th>name</th>
					<th>type_id</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	<script>
	$(document).ready(function() {
		$('#myTb').dataTable( {
			"bProcessing": true,
		} );
	} );
	</script>
</body>
</html>