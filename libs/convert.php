<?php
/**
 * @copyright http://download.geonames.org/export/dump/countryInfo.txt http://github.com/debuggable/php_arrays/tree http://github.com/josegonzalez/php_arrays/tree Felix Geisendörfer (felix@debuggable.com)
 * @link http://github.com/thatcode/country/tree
 * @author Robert Sworder (robert@thatcode.com)
 * @description Takes the countries array from php_arrays and formats in suitable way to form the records for the models. First array is Country, second is Language, third is CountriesLanguage, fourth is CountriesNeighbour
 */
require './raw.txt';
if (!isset($items)) {
    die('items array not set');
}
$continents = array(
    'AF' => 1,
    'AN' => 2,
    'AS' => 3,
    'EU' => 4,
    'NA' => 5,
    'OC' => 6,
    'SA' => 7
);
$languages = array();
$neighbours = array();
$isoLookUp = array();
$langLookUp = array();
$neighHABTM = array();
$langHABTM = array();
$i = 1;
foreach ($items as &$item) {
    $item['id'] = $i;
    $isoLookUp[$item['iso']] = $i;
    $item['continent_id'] = $continents[$item['continent']];
    unset($item['continent']);
    $lang = explode(',', $item['languages']);
    foreach ($lang as $la) {
        if (!isset($langLookUp[$la])) {
            $langLookUp[$la] = count($languages) + 1;
            $languages[] = array('id' => $langLookUp[$la], 'language' => $la);
        }
        $langHABTM[] = array('country_id' => $i, 'language_id' => $langLookUp[$la]);
    }
    unset($item['languages']);
    $neigh = explode(',', $item['neighbours']);
    foreach ($neigh as $nei) {
        if (strlen($nei) !== 0) {
            if (!isset($neighbours[$nei])) {
                $neighbours[$nei] = array();
            }
            $neighbours[$nei][] = $i;
        }
    }
    unset($item['neighbours']);
    $i++;
    ksort($item);
}
foreach ($neighbours as $nei_id => $neigh) {
    $nei_id = $isoLookUp[$nei_id];
    foreach ($neigh as $nei) {
        $neighHABTM[] = array('country_id' => $nei, 'neighbour_id' => $nei_id);
    }
}
$content = var_export($items, true) . "\r\n" . var_export($languages, true) . "\r\n" . var_export($langHABTM, true) . "\r\n" . var_export($neighHABTM, true);
$content = preg_replace(array("#\n(\s+)\d{1,3} =>\s*#", '#array \(#'), array("\n$1", 'array('), $content);
file_put_contents('./out.txt', $content);
