<?php 	
include 'bootstrap.php';


function getReport()
{
include("../db/connection.php");
$conn = $connect;

if (isset($_POST['salesreport'])) {
	$beg = $_POST['startres'];
	$end = $_POST['endres'];

	$beg0 = $beg[0] - 1;
	$end0 = $end[0] + 1;

	$beg1 = $beg[1] - 1;
	$end1 = $end[1] + 1;

	$beg2 = $beg[2] - 1;
	$end2 = $end[2] + 1;

	$sql = "SELECT payment_date, customer_name, category, amount 
	FROM customer_payment 
	WHERE day1 > $beg0 AND day1 < $end0
	AND month1 > $beg1 AND month1 < $end1
	AND year1 > $beg2 AND year1 < $end2";

$result = $conn->query($sql);
$answer = [];
if ($result) {

	while($row = $result->fetch_assoc()) {
		array_push($answer, $row);
    		#print_r ($row);
    		}
    	return $answer;
    }
}

}

 ?>
 <style type="text/css">
 	label{
 		color: black;
 	}
 </style>

 <body class="">
 	<center>
 	<form method="POST" class="form-group text-white">
 		<caption class="">Sales Report</caption>
 		<br>
 		<label>START PERIOD</label>
 		<br>
 		<label>Day</label> 
 		<select name="startres[]">
 			<?php 
 				for ($var1=1; $var1 < 32; $var1++) { 
 					echo"<option>$var1</option>";
 				}
 			 ?>
 		</select>
 		<label class="text-dark">Month</label> 
 		<select name="startres[]">
 			<?php 
 				for ($var1=1; $var1 < 13; $var1++) { 
 					echo"<option>$var1</option>";
 				}
 			 ?>
 		</select >
 		<label class="text-dark">Year</label> 
 		<select name="startres[]">
 			<option>0</option>
 			<?php 
 				$dd1 = date("Y") + 2;
 				$st1 = $dd1 - 10;
 				for ($var1 = $st1; $var1 < $dd1; $var1++) { 
 					echo"<option>$var1</option>";
 				}
 			 ?>
 			 <br>
 		</select>
 		<br>	
 		<label>END PERIOD</label>
 		<br>
 		 		<label class="text-dark">Day</label> 
 		<select name="endres[]" id="sell0">
 			<?php 
 				for ($var1=1; $var1 < 32; $var1++) { 
 					echo"<option>$var1</option>";
 				}
 			 ?>
 		</select>
 		<label class="text-dark">Month</label> 
 		<select name="endres[]">
 			<?php 
 				for ($var1=1; $var1 < 13; $var1++) { 
 					echo"<option>$var1</option>";
 				}
 			 ?>
 		</select>
 		<label class="text-dark">Year</label> 
 		<select name="endres[]">
 			<option>0</option>
 			<?php 
 				$dd1 = date("Y") + 2;
 				$st1 = $dd1 - 10;
 				for ($var1 = $st1; $var1 < $dd1; $var1++) { 
 					echo"<option>$var1</option>";
 				}
 			 ?>
 		</select>
 		<br>
 		<input type="submit" name="salesreport" value="Get Report" onclick="Alert()">
 	</form>
 	</center>

 <div class="row">
 	<div class="col"></div>
 	<div class="col">
 	<center>
 <table class="table caption-top table-dark">
 	<?php 
 		if(isset($_POST['salesreport'])){
 			$dates1 = $_POST['startres'];
 			$dates2 = $_POST['endres'];

 			echo"
 <caption class='text-warning' id=''><center>SALES REPORT FROM: $dates1[0]-$dates1[1]-$dates1[2] TO: $dates2[0]-$dates2[1]-$dates2[2]</center></caption>
 			";
 		}
 	 ?>
 
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Customer</th>
      <th scope="col">Details</th>
      <th scope="col">Amount</th>
      </tr>
  </thead>
  <tbody>
  	<?php 
  		$report = getReport();
  		if ($report){
  		$total = 0;
  		$counter = 0;
  		foreach ($report as $key => $value) {

  			$date = $value['payment_date'];
  			$name = $value['customer_name'];
  			$categ = $value['category'];
  			$amt = $value['amount'];
  			$total += $amt;
  			$counter +=1;
  			echo "
  		<tr>
          <th scope='row'>$counter</th>
          <td>$date</td>
          <td>$name</td>
          <td>$categ</td>
          <td>$amt</td>
      </tr>
  			";
  		}
  		echo "
			</tbody>
			  <tfoot>
			  	<tr>
			  		<td>TOTAL</td>
			  		<td></td>
			  		<td></td>
			  		<td></td>
			  		<td>$total</td>
			  	</tr>
			  </tfoot>
			</table>
  		";
  	}
  	else

  	{
  		 echo 	"<tr>
          <th scope='row'>0</th>
          <td>None</td>
          <td>None</td>
          <td>None</td>
          <td>00</td>
      </tr>
  			";
  		
  		echo "
			</tbody>
			  <tfoot>
			  	<tr>
			  		<td>TOTAL</td>
			  		<td></td>
			  		<td></td>
			  		<td></td>
			  		<td>00</td>
			  	</tr>
			  </tfoot>
			</table>
  		";

  	}
  	 ?>
 
 
 	</center>
</div>
 		
<div class="col">
</div>
 </div>

 <script type="text/javascript">
 	function Alert(){
 		value = document.getElementById("sell0").value
 		document.getElementById("sell0").value = value
 	}
 </script>
 </body>