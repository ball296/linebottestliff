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
$k=1;
$j=1;
for ($x = 0; $x <= $numdata; $x++) {
    if ($data[$x][$typevoc]<>"ร้องเรียน" and $data[$x][$stw]=="กำลังดำเนินการ" ){
      if($data[$x][$numdaydata]>=15){
    $data2[]= ($k)." ".$data[$x][$namepea1]." เลขที่ร้อง ".$data[$x][$numvocdata]." ชื่อผู้ร้อง ".$data[$x][$namedata]." ร้องแล้ว ".$data[$x][$numdaydata]." วัน สถานะ "."'".$data[$x][$stw]."'" ;
    $k=$k+1;
  }
  }
    if ($data[$x][$typevoc]<>"ร้องเรียน" and $data[$x][$stw]=="รอดำเนินการ" ){ 
    $data3[]=($j)." ".$data[$x][$namepea1]." เลขที่ร้อง ".$data[$x][$numvocdata]." ชื่อผู้ร้อง ".$data[$x][$namedata]." ร้องแล้ว ".$data[$x][$numdaydata]." วัน สถานะ "."'".$data[$x][$stw]."'" ;
    $j=$j+1;
    }
}

$newccAddress = implode('\n\n', $data3);
$newccAddress2=implode('\n\n',$data2); 
#print $newccAddress ;
?>
