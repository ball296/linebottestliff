<?php
$conn=mysqli_connect("ballstudio.ceolfzqm6b95.us-west-2.rds.amazonaws.com","root","freedom4506296","demo");
$result=mysqli_query($conn,"SELECT*FROM voctable");
$data = array();
while ($row = mysqli_fetch_assoc($result))
{
    $data[]=$row;

}
#print (count($data));
$namepea1="namepea";
$typevoc="Group1";
$stw="statusvoc";
$numdata=count($data);
for ($x = 0; $x <= $numdata; $x++) {
    if ($data[$x][$typevoc]<>"ร้องเรียน" and $data[$x][$stw]=="กำลังดำเนินการ" ){
    $data2[]= $data[$x][$namepea1]." ".$data[$x][$stw]."\n\n" ;
  }
}
$newccAddress = implode('\n\n', $data2); 
#print $newccAddress ;
?>

