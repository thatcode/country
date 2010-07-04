<?php
App::import('Core', 'Model');
App::import('Model', 'ModelBehavior');
App::import('Behavior', 'Country.Country');

class CountryTestModel extends Model {

    var $useTable = false;
    var $actsAs = array('Country.Country');
    var $hasField = false;

    function hasField($name, $checkVirtual = false) {
        return $this->hasField;
    }

}

class CountryBehaviorTestCase extends CakeTestCase {

/**
 * Start function. Gets Behavior.
 *
 * @access public
 * @return null
 */ 
    function start() {
        $this->Model = new CountryTestModel();
        $this->Behavior = new CountryBehavior();
        $this->Behavior->setup($this->Model);
    }

/**
 * testValidISO2
 */
    function testValidISO2() {
        
        $result = $this->Behavior->countryValidISO2($this->Model, array('gb'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidISO2($this->Model, array('GB'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidISO2($this->Model, array('GBR'));
        $this->assertIdentical(false, $result);

    }

/**
 * testValidISO3
 */
    function testValidISO3() {
        
        $result = $this->Behavior->countryValidISO3($this->Model, array('gbr'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidISO3($this->Model, array('GBR'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidISO3($this->Model, array('GB'));
        $this->assertIdentical(false, $result);

    }

/**
 * testValidISONum
 */
    function testValidISONum() {
        
        $result = $this->Behavior->countryValidISONum($this->Model, array('20'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidISONum($this->Model, array(20));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidISONum($this->Model, array(5000));
        $this->assertIdentical(false, $result);

    }

/**
 * testValidFIPS
 */
    function testValidFIPS() {
        
        $result = $this->Behavior->countryValidFIPS($this->Model, array('uk'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidFIPS($this->Model, array('UK'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidFIPS($this->Model, array('FD'));
        $this->assertIdentical(false, $result);

    }

/**
 * testValidPostalCodeFixedCounty
 */
    function testValidPostalCodeFixedCountry() {

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('iso' => 'gb'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('iso3' => 'gbr'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('numeric' => '826'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('fips' => 'uk'));
        $this->assertIdentical(true, $result);

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34ftry4GF'), array('iso' => 'gb'));
        $this->assertIdentical(false, $result);

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34yvtvtyh4GF'), array('iso3' => 'gbr'));
        $this->assertIdentical(false, $result);

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34tyvvty4GF'), array('numeric' => '826'));
        $this->assertIdentical(false, $result);

        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34vytvyt4GF'), array('fips' => 'uk'));
        $this->assertIdentical(false, $result);

    }

/**
 * testValidPostalCodeVariableCounty
 */
    function testValidPostalCodeVariableCountry() {

        $this->Model->hasField = true;

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'gb'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('iso' => 'country_code'));
        $this->assertIdentical(true, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'gbr'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('iso3' => 'country_code'));
        $this->assertIdentical(true, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => '826'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('numeric' => 'country_code'));
        $this->assertIdentical(true, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'uk'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('fips' => 'country_code'));
        $this->assertIdentical(true, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'gbr'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('iso' => 'country_code'));
        $this->assertIdentical(false, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'gb'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('iso3' => 'country_code'));
        $this->assertIdentical(false, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => '455454'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('numeric' => 'country_code'));
        $this->assertIdentical(false, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'ukrc'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34 4GF'), array('fips' => 'country_code'));
        $this->assertIdentical(false, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'gb'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34vthydvthyd4GF'), array('iso' => 'country_code'));
        $this->assertIdentical(false, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'gbr'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34tyvhdvyht4GF'), array('iso3' => 'country_code'));
        $this->assertIdentical(false, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => '826'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T3vythvthy44GF'), array('numeric' => 'country_code'));
        $this->assertIdentical(false, $result);

        $this->Model->data = array(
            'CountryTestModel' => array(
                'country_code' => 'uk'
            )
        );
        $result = $this->Behavior->countryValidPostalCode($this->Model, array('T34vytvthy4GF'), array('fips' => 'country_code'));
        $this->assertIdentical(false, $result);

    }

/**
 * testValidPostalCodeFixedCountyValidate
 */
    function testValidPostalCodeFixedCountryValidate() {

        $this->Model->hasField = false;

        $this->Model->set(array(
            'CountryTestModel' => array(
                'postal_code' => 'T34 4GF'
            )
        ));

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('iso' => 'gb'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('iso3' => 'gbr'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('numeric' => '826'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('fips' => 'uk'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'postal_code' => 'T34ctgcgtctgrcgrtcgt4GF'
            )
        ));

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('iso' => 'gb'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('iso3' => 'gbr'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('numeric' => '826'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('fips' => 'uk'))
            )
        );
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

    }

/**
 * testValidPostalCodeVariableCountyValidate
 */
    function testValidPostalCodeVariableCountryValidate() {

        $this->Model->hasField = true;

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('iso' => 'country_code'))
            )
        );

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'gb',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'gbr',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'gb',
                'postal_code' => 'T34vtgvt4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('iso3' => 'country_code'))
            )
        );

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'gbr',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'gb',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);
        
        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'gbr',
                'postal_code' => 'T34vtgvt4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('numeric' => 'country_code'))
            )
        );

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => '826',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => '455454',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => '826',
                'postal_code' => 'T34vtgvt4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->validate = array(
            'postal_code' => array(
                'rule' => array('countryValidPostalCode', array('fips' => 'country_code'))
            )
        );

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'uk',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(true, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'ukrc',
                'postal_code' => 'T34 4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

        $this->Model->set(array(
            'CountryTestModel' => array(
                'country_code' => 'uk',
                'postal_code' => 'T34vtgvt4GF'
            )
        ));
        $result = $this->Model->validates();
        $this->assertIdentical(false, $result);

    }

}
