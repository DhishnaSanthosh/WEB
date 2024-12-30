<?php
$num=152;
echo "number=".$num;
echo "<br>";
$total=0;
$x=$num;
while($x!=0)
{
$rem=$x%10;
$total=$total+$rem*$rem*$rem;
$x=$x/10;
}
if($num==$total)
{
echo "it is an amstrong number";
}
else
{
echo "it is not an amstrong number";
}
?>
