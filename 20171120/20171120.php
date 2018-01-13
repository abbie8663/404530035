<?php
	$data=array(
		array("Volvo",22,18),
		array("BMW",15,13),
		array("Saab",5,2),
		array("Land Rover",17,15)
	)
?>
<html>
	<head>
		<title>20171120HW</title>
	</head>
	<body>
		<table border=2>
			<caption>Use "for loop" </caption>
			<tr>
				<td>Name</td>
				<td>Stock</td>
				<td>Sold</td>
			</tr>
			<?php 
				for($i=0;$i<count($data);$i++){
					echo "<tr>";
					for($j=0;$j<count($data[$i]);$j++)
						echo "<td>".$data[$i][$j]."</td>";
					echo "</tr>";
				}
			?>
		</table>
		<table border=2>
			<caption>use "foreach"</caption>
			<tr>
				<td>Name</td>
				<td>Stock</td>
				<td>Sold</td>
			</tr>
			<?php
				foreach($data as $value ){
					echo "<tr>";
					foreach($value as $value1)
						echo "<td>".$value1."</td>";
					echo "</tr>";
				}
			?>
		</table>
		<table border=2>
			<caption>use "array_map+join"</caption>
			<tr>
				<td>Name</td>
				<td>Stock</td>
				<td>Sold</td>
			</tr>
			<?php
				function Array_join($data){
					return join("</td><td>",$data);
				}
				foreach(array_map("Array_join",$data) as $newdata)
					echo "<tr><td>".$newdata."</td></tr>";
			?>
		</table>
	</body>
</html>