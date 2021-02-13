<html>
<body>
<form method='post'>
sayi gir<input type="text" name="a">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
$b=$_POST["a"];
$c=0;
if(isset($_POST["submit"]))
{
if($b==0)
{
  echo "0 dan büyük sayi gir";
  exit();
}
for($i=2;$i<$b;$i++)
{
  if($b%$i==0)
  $c++;
}
if($c==0)
  echo "$b asal sayi";
else
  echo "$b asal sayi degil";
}?>
