<?php
$cars=array(
0=>"car1",
1=>"car2",
3=>"car3",
4=>"car4"
);
$x=5;
//if(is_array($cars)){
  //  echo"cars is an array";
//}else{
  ///  echo"cars is not an array";
//}
echo array_search('car4',$cars);

echo"<pre>";
print_r($cars);
echo"</pre>";
?>