<?php
App::import('Model', 'Country.Country');
class CountryBehavior extends ModelBehavior {

    var $Country = null;

    function setup(&$model, $config = array()) {
        $this->Country = ClassRegistry::init('Country.Country');
    }

    function countryValidISO2(&$model, $data) {
        $value = current($data);
        return (bool)$this->Country->find('count', array(
            'conditions' => array(
                'Country.iso' => strtoupper($value),
                'Country.iso !=' => '00'
            )
        ));
    }

    function countryValidISO3(&$model, $data) {
        $value = current($data);
        return (bool)$this->Country->find('count', array(
            'conditions' => array(
                'Country.iso3' => strtoupper($value),
                'Country.iso3 !=' => '000'
            )
        ));
    }

    function countryValidISONum(&$model, $data) {
        $value = current($data);
        return (bool)$this->Country->find('count', array(
            'conditions' => array(
                'Country.iso_numeric' => (int)$value,
                'Country.iso_numeric !=' => 0
            )
        ));
    }

    function countryValidFIPS(&$model, $data) {
        $value = current($data);
        return (bool)$this->Country->find('count', array(
            'conditions' => array(
                'Country.fips' => strtoupper($value),
                'Country.fips !=' => ''
            )
        ));
    }

    function countryValidPostalCode(&$model, $data, $type = array('iso' => '')) {
        $value = strtoupper(current($data));
        $country = current($type);
        $type = strtolower(key($type));
        if (!in_array($type, array('iso', 'iso3', 'numeric', 'fips'))) {
            return false;
        }
        $methods = array(
            'iso' => array(
                'method' => 'countryValidISO2',
                'field' => 'iso'
            ),
            'iso3' => array(
                'method' => 'countryValidISO3',
                'field' => 'iso3'
            ),
            'numeric' => array(
                'method' => 'countryValidISONum',
                'field' => 'iso_numeric'
            ),
            'fips' => array(
                'method' => 'countryValidFIPS',
                'field' => 'fips'
            )
        );
        $type = $methods[$type];
        if ($model->hasField($country)) {
            if (!isset($model->data[$model->alias][$country])) {
                return false;
            }
            $country = $model->data[$model->alias][$country];
        }
        if (!$this->{$type['method']}($model, array($country))) {
            return false;
        }
        $postal = $this->Country->find('first', array(
            'conditions' => array(
                'Country.' . $type['field'] => strtoupper($country)
            ),
            'fields' => array(
                'Country.postal_code_regex'
            )
        ));
        if ($postal === false) {
            return false;
        }
        return (bool)preg_match('#' . $postal['Country']['postal_code_regex'] . '#', str_replace(' ', '', $value));
    }

}
