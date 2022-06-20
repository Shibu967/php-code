<?php
function vote($age)
{
    if($age>=18 && $age<=65){
        return "Yes you can vote";
    }else{
        return"No you cannot vote";
    }
}
echo"Age 24:"vote(24)"<br/>";
echo "Age 16: " vote(16) "<br/>";
?>