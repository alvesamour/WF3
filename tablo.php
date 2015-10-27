<?php
include "header.php";
$sbr ="<br/>"."<hr>";
$t2Dim = array( array('Buire', array(880, 4.13)),
		 		array('Hirson',array(9348, 33.77)),
		 		array('Reims',array(181893, 47.02)),
		 		array('Paris',array(2240621, 105.4))
);
echo $t2Dim[0][0];
echo $t2Dim[0][1][1].$sbr;
echo $sbr;
echo "<pre>";
print_r($t2Dim);
echo "<pre>".$sbr;

echo '<table>
		<tr>
			<th>Ville</th>
			<th>Population</th>
			<th>Superficie</th>
		</tr>';
$iNbEnreg = count($t2Dim);
for($i=0; $i<$iNbEnreg;$i++)
{
	echo "<tr>";
	foreach($t2Dim[$i] as $Dim2)
	{
	if(is_string($Dim2))
		 echo "<td>".$Dim2."</td>";
	else foreach ($Dim2 as $Dim3)
		{
		echo "<td>".$Dim3."</td>";
		}

	}
	echo"</tr>";
}
echo "</table>";

include "footer.php";
?>