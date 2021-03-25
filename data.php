<?php
$conn=pg_connect("host='abc.ceolfzqm6b95.us-west-2.rds.amazonaws.com' port='5432' dbname='demo' user='postgres' password='freedom4506296'");
$result=pg_query($conn,"SELECT*FROM voctable");
$data = array();
while ($row = pg_fetch_assoc($result))
{
    $data[]=$row;

}
#print (count($data));
$namepea1="pea";
$typevoc="group1";
$stw="statusvoc";
$numvocdata="numvoc";
$numdata=count($data);
$numdaydata="numday";
$namedata="namecus";
$k=1;
$j=1;
#เรื่อง ร้องขอเสนอแนะ
for ($x = 0; $x <= $numdata; $x++) {
    if ($data[$x][$typevoc]<>"ร้องเรียน" and $data[$x][$stw]=="กำลังดำเนินการ" ){
      if($data[$x][$numdaydata]>=15){
    $data2[]= ($k)." ".$data[$x][$namepea1]." เลขที่ร้อง ".$data[$x][$numvocdata]." ชื่อผู้ร้อง ".$data[$x][$namedata]." ร้องแล้ว ".$data[$x][$numdaydata]." วัน สถานะ "."'".$data[$x][$stw]."'" ;
    $k=$k+1;
  }}
  
    if ($data[$x][$typevoc]<>"ร้องเรียน" and $data[$x][$stw]=="รอดำเนินการ" ){ 
    $data3[]=($j)." ".$data[$x][$namepea1]." เลขที่ร้อง ".$data[$x][$numvocdata]." ชื่อผู้ร้อง ".$data[$x][$namedata]." ร้องแล้ว ".$data[$x][$numdaydata]." วัน สถานะ "."'".$data[$x][$stw]."'" ;
    $j=$j+1;
    }
}
#เรื่อง ร้องเรียน
$r=1;
$n=1;
for ($x = 0; $x <= $numdata; $x++) {
    if ($data[$x][$typevoc]=="ร้องเรียน" and $data[$x][$stw]=="กำลังดำเนินการ" ){
      if($data[$x][$numdaydata]>=15){
    $data4[]= ($r)." ".$data[$x][$namepea1]." เลขที่ร้อง ".$data[$x][$numvocdata]." ชื่อผู้ร้อง ".$data[$x][$namedata]." ร้องแล้ว ".$data[$x][$numdaydata]." วัน สถานะ "."'".$data[$x][$stw]."'" ;
    $r=$r+1;
  }}
  
    if ($data[$x][$typevoc]=="ร้องเรียน" and $data[$x][$stw]=="รอดำเนินการ" ){ 
    $data5[]=($n)." ".$data[$x][$namepea1]." เลขที่ร้อง ".$data[$x][$numvocdata]." ชื่อผู้ร้อง ".$data[$x][$namedata]." ร้องแล้ว ".$data[$x][$numdaydata]." วัน สถานะ "."'".$data[$x][$stw]."'" ;
    $n=$n+1;
    }
}

if (count($data2)<>0){
#echo count($newccAddress1);
$newccAddress2 = implode('\n\n', $data2);
}else{
  $newccAddress2="data2 ไม่มีข้อมูล";
}
if (count($data3)<>0){
$newccAddress = implode('\n\n',$data3); 
}else{
  $newccAddress="data3 ไม่มีข้อมูล";
}
#echo $newccAddress;
#echo $newccAddress2;
?>

