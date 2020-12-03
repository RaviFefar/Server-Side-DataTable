<!DOCTYPE html>
<html>
	<title>How to add Custom column in Server side DataTable</title>
	<head>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<style>
			h2{
				text-align: center;
			}
			.container {
			    margin: 0 auto;
			    max-width: 800px;
			}
		</style>
	</head>
	<body>
		<h2>How to add Custom column in Server side DataTable</h2>
		<div class="container">
			<table id="student" class="display" width="100%" border="0" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th>Student name</th>
						<th>Student fee</th>
						<th>Student Age</th>
					</tr>
				</thead>
				<thead>
					<tr>
						<td><input type="text" data-column="0"  class="input-search"></td>
						<th><input type="text" data-column="1"  class="input-search"></td>
						<td>
							<select data-column="2"  class="select-input">
								<option value="">(Select a age)</option>
								<option value="16-26">16 - 26</option>
								<option value="27-37">27 - 37</option>
								<option value="38-48">38 - 48</option>
								<option value="49-59">49 - 59</option>
							</select>
						</td>
					</tr>
				</thead>
			</table>
		</div>
		<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $('#student').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"student-data.php",
						type: "post",
						error: function(){
							$(".student-error").html("");
							$("#student").append('<tbody class="student-error"><tr><th colspan="3">No data found</th></tr></tbody>');
							$("#student_processing").css("display","none");	
						}
					}
				});

				$("#student_filter").css("display","none");  // hide global search box

				$('.input-search').on('keyup click', function (){ 
					var data_column =$(this).attr('data-column');
					var input_val =$(this).val();
					dataTable.columns(data_column).search(input_val).draw();
				});

				$('.select-input').on('change', function (){ 
					var data_column =$(this).attr('data-column');
					var select_val =$(this).val();
					dataTable.columns(data_column).search(select_val).draw();
				});
			} );
		</script>
	</body>
</html>
