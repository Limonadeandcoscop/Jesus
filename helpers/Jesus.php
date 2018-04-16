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


