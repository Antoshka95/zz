<?php
$prices=[120, 130, 150, 130, 100];
$summ=0;
for ($i=0; $i<count($prices); $i++) {
	$summ+=$prices[$i];
}
$avg=$summ/count($prices);
echo "Среднее арифметическое $avg";
?>