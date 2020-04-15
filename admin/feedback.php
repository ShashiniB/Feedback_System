<?php 
$q=mysqli_query($conn,"select * from feedback");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>	


<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Feedback</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<th>Student</th>
		<th>Teacher</th>
		<th>Quest1</th>
		<th>Quest2</th>
		<th>Quest3</th>
		<th>Quest4</th>
		<th>Quest5</th>
		<th>Quest6</th>
		<th>Quest7</th>
		<th>Quest8</th>
		<th>Quest9</th>
		<th>Quest10</th>
		<th>Quest11</th>
		<th>Quest12</th>
		<th>Quest13</th>
		<th>Date</th>
		<th>result</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			$a = (int)$row[3];
            $b = (int)$row[4];
			$c = (int)$row[5];
			$d = (int)$row[6];
			$e = (int)$row[7];
			$f = (int)$row[8];
			$g = (int)$row[9];
			$h = (int)$row[10];
			$j = (int)$row[11];
			$k = (int)$row[12];
			$l = (int)$row[13];
			$m = (int)$row[14];
		
		$sum = $a +$b+$c +$d+$e +$f+$g +$h+$j +$k+$l +$m;
		$answer = ($sum/84)*100;
			echo "<td>$answer</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		
		
		}
		
		?>
		
	
		
</table>
</div>
</div>
<?php }?>