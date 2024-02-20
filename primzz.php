<?php
error_reporting(0);
if (isset($_REQUEST['zahl1']))
{
	for($i=$_REQUEST['zahl1'];$i<=$_REQUEST['zahl2'];$i++)
	{
		$prim=true;
		for($j=2;$j<$i;$j++)
		{
			// echo $i.' '.($i % $j)."<br>";
			if (($i % $j) == 0) $prim=false;
		}
	if ($prim==true) echo $i." ist ein primzahl <br>";
	}
}


?>
<html>
<body>
   <form action="primzz.php" method=POST>
   <input type=text name="zahl1" value="<?php echo $_REQUEST['zahl1']; ?>">
		<br>
   <input type=text name="zahl2" value="<?php echo $_REQUEST['zahl2']; ?>">
		<br>
  
  <input type="submit" name="Primzahlen" value="Primzahlen"><br>
   </form>
</body>
</html>


