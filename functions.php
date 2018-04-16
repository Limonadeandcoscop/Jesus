<?php


/**
 * Return an array with ordered values of the application with correct labels
 * @param Item $item The item object
 * @return An array
 */
function jesus_get_values($item) {
	
	$mapping = JesusPlugin::getMapping();

	$elementsTexts = $item->getAllElementTextsByElement();
	
	$res = array();
	foreach ($mapping as $section => $map) {
		foreach ($map as $label => $id) {
			if (array_key_exists($id, $elementsTexts)) {
				$res[$section][$label] = $elementsTexts[$id];
			}
		}
	}
	return $res;
}


/**
 * Retrun values of application with html formatting
 * @param Item $item The item object
 * @return An array
 */
function jesus_display_values($item) {

	$res = jesus_get_values($item);

	$html = '<div class="values">';
	foreach ($res as $key => $values) {
		foreach ($values as $label => $value) {
			$html .= '<div class="field">';
			$html .= '	<div class="label">'.__($label).'</div>';
			$html .= '	<ul>';
			foreach($value as $v) {
				$html.= '	<li>'.$v.'</li>';
			}
			$html .= '	</ul>';
			$html .= '</div>';
		}
	}
	$html .= '</div>';
	return $html;
}