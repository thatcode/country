<?php
App::import('Model', 'Country.Country');

class CountryModelTestCase extends CakeTestCase {

/**
 * Start function. Gets Model.
 *
 * @access public
 * @return null
 */ 
    function start() {
        $this->Model = ClassRegistry::init('Country.Country');
    }

/**
 * testGetIso2FromCode
 */
    function testGetIso2FromCode() {
        
        $result = $this->Model->findISO2('gb');
        $expected = 'GB';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('GB');
        $expected = 'GB';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('gbr');
        $expected = 'GB';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('GBR');
        $expected = 'GB';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('us');
        $expected = 'US';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('US');
        $expected = 'US';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('usa');
        $expected = 'US';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('USA');
        $expected = 'US';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('20');
        $expected = 'AD';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2(20);
        $expected = 'AD';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('ft');
        $expected = '00';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('cetcr');
        $expected = '00';
        $this->assertEqual($result, $expected);

    }

/**
 * testGetIso3FromCode
 */
    function testGetIso3FromCode() {
        
        $result = $this->Model->findISO3('gb');
        $expected = 'GBR';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('GB');
        $expected = 'GBR';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('gbr');
        $expected = 'GBR';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('GBR');
        $expected = 'GBR';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('us');
        $expected = 'USA';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('US');
        $expected = 'USA';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('usa');
        $expected = 'USA';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('USA');
        $expected = 'USA';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('20');
        $expected = 'AND';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3(20);
        $expected = 'AND';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('ft');
        $expected = '000';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('cetcr');
        $expected = '000';
        $this->assertEqual($result, $expected);

    }

/**
 * testGetCountryNameFromCode
 */
    function testGetCountryNameFromCode() {
        
        $result = $this->Model->countryName('gb');
        $expected = 'United Kingdom';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('GB');
        $expected = 'United Kingdom';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('gbr');
        $expected = 'United Kingdom';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('GBR');
        $expected = 'United Kingdom';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('us');
        $expected = 'United States';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('US');
        $expected = 'United States';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('usa');
        $expected = 'United States';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('USA');
        $expected = 'United States';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('20');
        $expected = 'Andorra';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName(20);
        $expected = 'Andorra';
        $this->assertEqual($result, $expected);

    }
    
/**
 * testGetContinentNameFromCode
 */
    function testGetContinentNameFromCode() {
        
        $result = $this->Model->continentName('gb');
        $expected = 'Europe';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('GB');
        $expected = 'Europe';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('gbr');
        $expected = 'Europe';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('GBR');
        $expected = 'Europe';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('us');
        $expected = 'North America';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('US');
        $expected = 'North America';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('usa');
        $expected = 'North America';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('USA');
        $expected = 'North America';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('20');
        $expected = 'Europe';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName(20);
        $expected = 'Europe';
        $this->assertEqual($result, $expected);

    }
}
