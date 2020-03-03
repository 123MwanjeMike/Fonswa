<?php
include("../session.php");
include("../config.php");
?>

<?php

$tables = array();
$query = mysqli_query($mysqli, 'SHOW TABLES');
while($row = mysqli_fetch_row($query)){
     $tables[] = $row[0];
}

$result = "";
foreach($tables as $table){
$query = mysqli_query($mysqli, 'SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($query);

$result .= 'DROP TABLE IF EXISTS '.$table.';';
$row2 = mysqli_fetch_row(mysqli_query($mysqli, 'SHOW CREATE TABLE '.$table));
$result .= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++) {
while($row = mysqli_fetch_row($query)){
   $result .= 'INSERT INTO '.$table.' VALUES(';
     for($j=0; $j<$num_fields; $j++){
       $row[$j] = addslashes($row[$j]);
       $row[$j] = str_replace("\n","\\n",$row[$j]);
       if(isset($row[$j])){
		   $result .= '"'.$row[$j].'"' ;
		}else{
			$result .= '""';
		}
		if($j<($num_fields-1)){
			$result .= ',';
		}
    }
   	$result .= ");\n";
}
}
$result .="\n\n";
}

//Create Folder
$folder = 'Fonswa_Back_Up_Files/';
if (!is_dir($folder))
mkdir($folder, 0777, true);
chmod($folder, 0777);

$date = date('d-m-Y');
$filename = $folder."Fonswa Electricals and Electronics offline backup".$date;

$handle = fopen($filename.'.sql','w+');
fwrite($handle,$result);
fclose($handle);
?>
 <script>
  alert(' Backup Successful ');
  window.location=' index.php';
 </script>
