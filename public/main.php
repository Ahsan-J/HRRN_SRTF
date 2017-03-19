<?php
	include 'Abstract.php';
	$p = array();
	$q=2;
	$P_ins = 5;
	$P_no = 3;
	$count=0;
	$Int_index=0;
	$at_index = 2;
	if(isset ($_POST['Edit'])){
	$q = $_POST['Quantum'];
	$P_ins = $_POST['Instruction'];
	$P_no = $_POST['Process'];
	$Int_index = $_POST['Interrupt'];
	$at_index = $_POST['Interrupt_Instruction'];
	}
	
	$count = 0;
	for($w=0;$w<$P_no;$w++){
	$p[$w] = new process_block($w+1,$P_ins);
	$count = $count + count($p[$w]->P_arr);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>PCB | FCFS</title>
<link href="main_CSS.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<h1>The Process Control Block System</h1>
	<h3>(Fitst Come First Serve (FCFS) implementation)</h3>
	<br/>
	<p style = "<?php echo $p[rand(0,2)]->getStyle();?>">Start</p>
<?php 
$N_index=0;
for($i=0;$i<(count($p[0]->P_arr)+count($p[1]->P_arr)+count($p[2]->P_arr));$i++){
	$p[0]->Arrival=true;
	for($j=0;$j<$P_no;$j++){
		if($p[$j]->Arrival==true){
			break;
		}
	}
	while(count($p[$N_index]->P_arr)>$p[$N_index]->PC&&$p[$N_index]->Flag==false&&$p[$N_index]->Arrival==true){
			if(count($p[$N_index]->P_arr)>$p[$N_index]->PC&&$p[$N_index]->Flag==false){
				echo $p[$N_index]->PrintBlock();
				$p[$N_index]->PC++;
		}
	}

}

echo Timeline($count);
?>
<br/><br/><br/><br/><br/><br/>
<ul> 
	<li>The Interrupt was generated in <q>P1</q> at its Instruction Quantum no 3</li>
	<li>The Process <q>P1</q> was resolved when all the Remaining Process was successfully Executed</li>
</ul>
<a href = "form.html"><p class = "button">Change</p></a>
</body>
</html>
