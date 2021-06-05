<html>
<head>
<h2 align="center"> Employee Report</h2>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style> 
</head>
<body>
             <div class="container">
<table>
<tr>
                        <th>Full_name</th>
			<th>First_in</th>
			<th>last_out</th>
			<th>Total_working_hour</th>
</tr>


<tr class="text-center">
<?php
			
			include "work.php";
			$query="select * from report";
			$result=mysqli_query($conn,$query);
			while($res = mysqli_fetch_array($result)){
					
		?>
		</tr>
			<td><?php echo $res['Full_name']; ?></td>
			<td><?php echo $res['First_in']; ?></td>
			<td><?php echo $res['Last_out']; ?></td>
			<td><?php echo $res['Total_working_hours']; ?></td>
			
			
		</tr>
                
                
		
		<?php
					
			}
		?>
	
		
		</table>
	</div>	
</body>
</html>