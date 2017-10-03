<?php
$prices=[120, 130, 250, 130, 100];
$prices[0]=50;
$prices[]=200;
$prices[100]=150;
$max=0;
foreach($prices as $price) {
	if ($max<$price) {
	$max=$price;
	}
}
echo "Максимальное значение $max";
?>