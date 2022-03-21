<?php
$connect = mysqli_connect("localhost", "root", "root", "testing");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM solucoes 
	WHERE descricao LIKE '%".$search."%'
	OR solucao LIKE '%".$search."%' 
	OR data_lancamento LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM solucoes ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th>Descrição</th>
							<th>Solução</th>
							<th>Data Lançamento</th>
							<th>Image</th>
							<th>Update</th>
							<th>Delete</th>
					
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '

			<tr>
				<td>'.$row["descricao"].'</td>
				<td>'.$row["solucao"].'</td>
				<td>'.$row["data_lancamento"].'</td>
				<td><img src='.$row['image'].' width = "200px" height= "200px"></td>
				<td><a href="update.php? .$row[id]." class = "btn btn-danger">Update</a></td>
				<td><a href="delete.php? .$row[id]." class = "btn btn-danger">Delete</a></td>

				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>