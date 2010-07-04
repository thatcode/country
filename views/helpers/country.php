<?php
class CountryHelper extends AppHelper {
    var $helpers = array('Html', 'Form');
    var $_modelMethods = array();
    var $Country = null;

    function beforeRender() {
        $this->Country = ClassRegistry::init('Country.Country');
        $this->_modelMethods = get_class_methods('CountryAppModel');
    }

    function flag($code, $options = array()) {
        $iso2 = $this->Country->findISO2($code);
        $data = $this->countryName($iso2);
        if (!isset($options['title'])) {
            $options['title'] = $data;
        }
        if (!isset($options['alt'])) {
            $options['alt'] = $data;
        }
        if (!isset($options['class'])) {
            $options['class'] = 'c_f c_f_' . substr($iso2, 0, 3);
        } else {
            $options['class'] .= ' c_f c_f_' . substr($iso2, 0, 3);
        }
        $this->Html->css('/country/css/flags.css', null, array('inline' => false));
        return $this->Html->image('/country/img/transparent.png', $options);
    }

    function countrySelect($name, $options = array()) {
        $conditions = array(
            'Country.id !=' => 0
        );
        $new_conditions = array();
        if (isset($options['continents'])) {
            $continents = array();
            foreach((array)$options['continents'] as $continent) {
                if (is_numeric($continent)) {
                    $continents[] = (int)$continent;
                } elseif (is_string($continent)) {
                    $continent = $this->Country->Continent->find('first', array(
                        'fields' => array(
                            'Continent.id'
                        ),
                        'conditions' => array(
                            'Continent.iso' => strtoupper($continent)
                        )
                    ));
                    if ($continent !== false) {
                        $continents[] = $continent['Continent']['id'];
                    }
                }
            }
            $new_conditions['Country.continent_id'] = $continents;
            unset($options['continents']);
        }
        if (isset($options['countries'])) {
            $countries = array();
            foreach((array)$options['countries'] as $country) {
                if (is_numeric($country)) {
                    $countries[] = (int)$country;
                } elseif (is_string($country)) {
                    $country = $this->Country->find('first', array(
                        'fields' => array(
                            'Country.id'
                        ),
                        'conditions' => array(
                            'Country.iso' => strtoupper($country)
                        )
                    ));
                    if ($country !== false) {
                        $countries[] = $country['Country']['id'];
                    }
                }
            }
            $new_conditions['Country.id'] = $countries;
            unset($options['countries']);
        }
        if ($new_conditions !== array()) {
            $conditions = $new_conditions;
        }
        $options['options'] = $this->Country->find('list', array(
            'fields' => array(
                'Country.iso',
                'Country.name'
            ),
            'order' => 'Country.name ASC',
            'conditions' => $conditions
        ));
        $options['type'] = 'select';
        return $this->Form->input($name, $options);
    }

    function continentSelect($name, $options = array()) {
        $conditions = array(
            'Continent.id !=' => 0
        );
        if (isset($options['continents'])) {
            $conditions = array();
            foreach((array)$options['continents'] as $continent) {
                if (is_numeric($continent)) {
                    $conditions[] = (int)$continent;
                } elseif (is_string($continent)) {
                    $continent = $this->Country->Continent->find('first', array(
                        'fields' => array(
                            'Continent.id'
                        ),
                        'conditions' => array(
                            'Continent.iso' => strtoupper($continent)
                        )
                    ));
                    if ($continent !== false) {
                        $conditions[] = $continent['Continent']['id'];
                    }
                }
            }
            $conditions = array(
                'Continent.id' => $conditions
            );
            unset($options['continents']);
        }
        $options['options'] = $this->Country->Continent->find('list', array(
            'fields' => array(
                'Continent.iso',
                'Continent.name'
            ),
            'order' => 'Continent.name ASC',
            'conditions' => $conditions
        ));
        $options['type'] = 'select';
        return $this->Form->input($name, $options);
    }

    function __call($method, $params) {
        if (!in_array($method, $this->_modelMethods) && method_exists($this->Country, $method)) {
            return call_user_func_array(array($this->Country, $method), $params);
        }
        trigger_error(__('Call to Unknown method CountryHelper::' . $method, true), E_USER_ERROR);
    }

}
