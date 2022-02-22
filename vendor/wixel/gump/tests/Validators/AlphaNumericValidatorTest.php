<?php

namespace Tests\Validators;

use GUMP;
use Exception;
use Tests\BaseTestCase;

/**
 * Class AlphaNumericValidatorTest
 *
 * @package Tests
 */
class AlphaNumericValidatorTest extends BaseTestCase
{
    public function testSuccess()
    {
        $this->assertTrue($this->validate('alpha_numeric', 'username123'));
    }

    public function testError()
    {
        $this->assertNotTrue($this->validate('alpha_numeric', 'hello *(^*^*&'));
    }

    public function testWhenInputIsEmptyAndNotRequiredIsSuccess()
    {
         $this->assertTrue($this->validate('alpha_numeric', ''));
    }
}