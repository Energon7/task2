<?php
function xmltocsv($file, $xPath) {

	$xml = simplexml_load_file($file);

	$path = $xml->xpath($xPath);

	foreach($path as $item) {

			foreach($item as $value) {
				$csvData .= '"' . trim($value) . '"' . ',';

			}


		$csvData = trim($csvData, ',');
		$csvData .= "\n";

	}

	return $csvData;
}
echo xmltocsv('cd_catalog.xml', '/CATALOG/CD');
?>
