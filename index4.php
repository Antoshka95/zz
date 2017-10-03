<?php
$prices=[120, 130, 150, 130, 100];
$prices[0]=50;
$prices[]=200;
$summ=0;

foreach($prices as $price) {
$summ+=	$price;
}
$avg=$summ/count($prices);
echo "Среднее арифметическое $avg";
?>