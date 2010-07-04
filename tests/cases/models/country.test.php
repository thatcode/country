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
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('gbr');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('GBR');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('us');
        $expected = 'US';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('US');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('usa');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('USA');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('20');
        $expected = 'AD';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2(20);
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('ft');
        $expected = '00';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO2('cetcr');
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
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('gbr');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('GBR');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('us');
        $expected = 'USA';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('US');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('usa');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('USA');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('20');
        $expected = 'AND';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3(20);
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('ft');
        $expected = '000';
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISO3('cetcr');
        $this->assertEqual($result, $expected);

    }

/**
 * testGetIsoNumFromCode
 */
    function testGetIsoNumFromCode() {
        
        $result = $this->Model->findISONum('gb');
        $expected = 826;
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('GB');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('gbr');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('GBR');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('us');
        $expected = 840;
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('US');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('usa');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('USA');
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('20');
        $expected = 20;
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum(20);
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('ft');
        $expected = 0;
        $this->assertEqual($result, $expected);

        $result = $this->Model->findISONum('cetcr');
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
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('gbr');
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('GBR');
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('us');
        $expected = 'United States';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('US');
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('usa');
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('USA');
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName('20');
        $expected = 'Andorra';
        $this->assertEqual($result, $expected);

        $result = $this->Model->countryName(20);
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
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('gbr');
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('GBR');
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('us');
        $expected = 'North America';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('US');
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('usa');
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('USA');
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName('20');
        $expected = 'Europe';
        $this->assertEqual($result, $expected);

        $result = $this->Model->continentName(20);
        $this->assertEqual($result, $expected);

    }
}
