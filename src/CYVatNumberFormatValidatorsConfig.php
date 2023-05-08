<?php

namespace rocketfellows\CYVatNumberFormatValidatorsConfig;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface;
use rocketfellows\CYVatFormatValidator\CYVatFormatValidator;
use rocketfellows\SpecificCountryVatNumberFormatValidatorsConfig\SpecificCountryVatNumberFormatValidatorsConfig;

class CYVatNumberFormatValidatorsConfig extends SpecificCountryVatNumberFormatValidatorsConfig
{
    public function getCountry(): Country
    {
        return ISO3166::CY();
    }

    protected function getDefaultValidator(): CountryVatFormatValidatorInterface
    {
        return new CYVatFormatValidator();
    }
}
