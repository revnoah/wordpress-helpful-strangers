<?php

/**
 * Dump-And-Die - A common alternative to print_r or vardump in Laravel
 *
 * @param [type] $var
 * @param boolean $plain
 * @return void
 */
function dd($var, bool $fancy = false) {
	$styles = [
		'background-color' => '#0a0a0a',
		'padding' => '10px',
		'color' => '#fafafa',
		'font-size' => '16px'
	];
	echo '<style>';
	echo 'body { margin: 0; }' . "\n";
	echo '#dd-dump {';
	foreach ($styles as $key => $style) {
		echo $key . ': ' . $style . ";\n";
	}
	echo '}';
	echo '</style>';
	echo '<div id="dd-dump">';

	if ($fancy) {
		var_dump($var);
	} else {
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
	echo '</div>';

	die;
}
