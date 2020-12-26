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
$numvocdata="numvoc";
$numdata=count($data);
$numdaydata="numday";
$namedata="namecus";

for ($x = 0; $x <= $numdata; $x++) {
    if ($data[$x][$typevoc]<>"ร้องเรียน" and $data[$x][$stw]=="กำลังดำเนินการ" ){
      if($data[$x][$numdaydata]<=15){
    $data2[]= $data[$x][$namepea1]." เลขที่ร้อง ".$data[$x][$numvocdata]." ชื่อผู้ร้อง ".$data[$x][$namedata]." ร้องแล้ว ".$data[$x][$numdaydata]." วัน สถานะ "."'".$data[$x][$stw]."'" ;
  }
  }
}
}
#$newccAddress = implode('\n\n', $data2); 
#print $newccAddress ;
?>

