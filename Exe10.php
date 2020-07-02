<?php
	function totalCostCalculator($hamburger = 1, $milkshake = 1, $cola = 1)
	{
		$ham_price = 4.95;
		$ms_price = 1.95;
		$cola_price = 0.85;
		$sale_tax = 7.5;
		$pre_tax = 16;

		$before_tax = ($hamburger * $ham_price) + ($milkshake * $ms_price) + ($cola * $cola_price);
		$tip_amount = $before_tax * 0.16;
		$tax = $before_tax * 0.075;
		$total = $before_tax + $tax + $tip_amount;
		return $total;
	}
	echo totalCostCalculator(2, 1, 1);
?>