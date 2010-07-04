<?php
App::import('Core', array('View', 'Controller'));
App::import('Helper', array('Country.Country', 'Html'));

class CountryHelperTestCase extends CakeTestCase {

/**
 * Start function. Gets Helper.
 *
 * @access public
 * @return null
 */ 
    function start() {
        $this->View = new View(new Controller());
        $array = array();
        $this->Helpers = $this->View->_loadHelpers($array, array('Country.Country'));
        $this->Helper = $this->Helpers['Country'];
        $this->Helper->beforeRender();
    }

/**
 * testFlagImage
 */
    function testFlagImage() {
        
        $result = $this->Helper->flag('gb');
        $expected = '<img src="/country/img/transparent.png" title="United Kingdom" alt="United Kingdom" class="c_f c_f_GB" />';
        $this->assertEqual($result, $expected);

        $result = $this->Helper->flag('gbr');
        $expected = '<img src="/country/img/transparent.png" title="United Kingdom" alt="United Kingdom" class="c_f c_f_GB" />';
        $this->assertEqual($result, $expected);

        $result = $this->Helper->flag('us');
        $expected = '<img src="/country/img/transparent.png" title="United States" alt="United States" class="c_f c_f_US" />';
        $this->assertEqual($result, $expected);

        $result = $this->Helper->flag('usa');
        $expected = '<img src="/country/img/transparent.png" title="United States" alt="United States" class="c_f c_f_US" />';
        $this->assertEqual($result, $expected);

        $result = $this->Helper->flag('cgt');
        $expected = '<img src="/country/img/transparent.png" title="Unknown Country" alt="Unknown Country" class="c_f c_f_00" />';
        $this->assertEqual($result, $expected);

    }

/**
 * testContinentSelect
 */
    function testContinentSelect() {

        $result = $this->Helper->continentSelect('continent');
        $expected = '<div class="input select"><label for="continent">Continent</label><select name="data[continent]" id="continent">' . "\n"
            . '<option value="AF">Africa</option>' . "\n" . '<option value="AN">Antarctica</option>' . "\n" . '<option value="AS">Asia</option>'
            . "\n" . '<option value="EU">Europe</option>' . "\n" . '<option value="NA">North America</option>' . "\n"
            . '<option value="OC">Oceania</option>' . "\n" . '<option value="SA">South America</option>' . "\n" . '</select></div>';
        $this->assertEqual($result, $expected);

        $this->Helpers['Form']->create('Model', array('url' => true));
        $result = $this->Helper->continentSelect('continent');
        $expected = '<div class="input select"><label for="ModelContinent">Continent</label><select name="data[Model][continent]" id="ModelContinent">' . "\n"
            . '<option value="AF">Africa</option>' . "\n" . '<option value="AN">Antarctica</option>' . "\n" . '<option value="AS">Asia</option>'
            . "\n" . '<option value="EU">Europe</option>' . "\n" . '<option value="NA">North America</option>' . "\n"
            . '<option value="OC">Oceania</option>' . "\n" . '<option value="SA">South America</option>' . "\n" . '</select></div>';
        $this->assertEqual($result, $expected);
        $this->Helpers['Form']->end();

        $result = $this->Helper->continentSelect('continent', array('continents' => 1));
        $expected = '<div class="input select"><label for="continent">Continent</label><select name="data[continent]" id="continent">' . "\n"
            . '<option value="AF">Africa</option>' . "\n" . '</select></div>';
        $this->assertEqual($result, $expected);

        $result = $this->Helper->continentSelect('continent', array('continents' => array(1)));
        $expected = '<div class="input select"><label for="continent">Continent</label><select name="data[continent]" id="continent">' . "\n"
            . '<option value="AF">Africa</option>' . "\n" . '</select></div>';
        $this->assertEqual($result, $expected);

        $result = $this->Helper->continentSelect('continent', array('continents' => array('AF')));
        $expected = '<div class="input select"><label for="continent">Continent</label><select name="data[continent]" id="continent">' . "\n"
            . '<option value="AF">Africa</option>' . "\n" . '</select></div>';
        $this->assertEqual($result, $expected);

        $result = $this->Helper->continentSelect('continent', array('continents' => array(1, 'NA')));
        $expected = '<div class="input select"><label for="continent">Continent</label><select name="data[continent]" id="continent">' . "\n"
            . '<option value="AF">Africa</option>' . "\n" . '<option value="NA">North America</option>' . "\n" . '</select></div>';
        $this->assertEqual($result, $expected);

    }

/**
 * testCountrySelect
 */
    function testCountrySelect() {

        $result = strlen($this->Helper->countrySelect('country'));
        $expected = 9720;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('continents' => 2)));
        $expected = 392;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('continents' => array(2))));
        $expected = 392;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('continents' => array(2,3))));
        $expected = 2352;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('continents' => array('AN'))));
        $expected = 392;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('continents' => array(2,'AS'))));
        $expected = 2352;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('countries' => array(2))));
        $expected = 169;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('countries' => array(2,3))));
        $expected = 209;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('countries' => array('ae'))));
        $expected = 169;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('countries' => array(2,'af'))));
        $expected = 209;
        $this->assertEqual($result, $expected);

        $result = strlen($this->Helper->countrySelect('country', array('continents' => array(2,3), 'countries' => array(2,'gb'))));
        $expected = 169;
        $this->assertEqual($result, $expected);

    }

}
