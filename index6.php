<?php
$prices=[120, 130, 250, 130, 100];
$prices[0]=50;
$prices[]=200;
$prices[100]=150;
$max=0;
$maxindex=-1;
foreach($prices as $index => $price) {
	if ($max<$price) {
	$max=$price;
	$maxindex=$index;
	}
}
echo "Максимальное элемент №$maxindex равен $max";
?>