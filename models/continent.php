<?php
class Continent extends CountryAppModel {

    var $name = 'Continent';

    var $displayField = 'name';

    var $records = array(
        array(
            'id' => 0,
            'iso' => '',
            'name' => 'Unknown Continent'
        ),
        array(
            'id' => 1,
            'iso' => 'AF',
            'name' => 'Africa'
        ),
        array(
            'id' => 2,
            'iso' => 'AN',
            'name' => 'Antarctica'
        ),
        array(
            'id' => 3,
            'iso' => 'AS',
            'name' => 'Asia'
        ),
        array(
            'id' => 4,
            'iso' => 'EU',
            'name' => 'Europe'
        ),
        array(
            'id' => 5,
            'iso' => 'NA',
            'name' => 'North America'
        ),
        array(
            'id' => 6,
            'iso' => 'OC',
            'name' => 'Oceania'
        ),
        array(
            'id' => 7,
            'iso' => 'SA',
            'name' => 'South America'
        )
    );

    var $hasMany = array(
        'Country' => array(
            'className' => 'Country.country',
            'foreign_key' => 'continent_id'
        )
    );

}
