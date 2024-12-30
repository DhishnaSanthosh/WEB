<?php
function palindrome($num)
{
$temp=$num;
$new=0;
while(floor($temp))
{
$d=$temp%10;
$new=$new*10+$d;
$temp=$temp/10;
}
if($new==$num)
{
return 1;
}
else
{
return 0;
}
}
$original=34;
echo "number=".$original;
echo "<br>";
if(palindrome($original))
{
echo "palindrome";
}
else
{
echo "not palindrome";
}
?>
