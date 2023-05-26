<?php

/**
 * Price
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;
use Walmart\Models\BaseModel;

/**
 * Price Class Doc Comment
 *
 * @category Class

 * @description Specifies item purchase price information, including currency and amount.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Price extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Price';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'unit' => 'string',
        'amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'unit' => null,
        'amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'unit' => false,
        'amount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'unit' => 'unit',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'unit' => 'setUnit',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'unit' => 'getUnit',
        'amount' => 'getAmount'
    ];
    public const UNIT_AED = 'AED';

    public const UNIT_AFN = 'AFN';

    public const UNIT_ALL = 'ALL';

    public const UNIT_AMD = 'AMD';

    public const UNIT_ANG = 'ANG';

    public const UNIT_AOA = 'AOA';

    public const UNIT_ARS = 'ARS';

    public const UNIT_AUD = 'AUD';

    public const UNIT_AWG = 'AWG';

    public const UNIT_AZN = 'AZN';

    public const UNIT_BAM = 'BAM';

    public const UNIT_BBD = 'BBD';

    public const UNIT_BDT = 'BDT';

    public const UNIT_BGN = 'BGN';

    public const UNIT_BHD = 'BHD';

    public const UNIT_BIF = 'BIF';

    public const UNIT_BMD = 'BMD';

    public const UNIT_BND = 'BND';

    public const UNIT_BOB = 'BOB';

    public const UNIT_BRL = 'BRL';

    public const UNIT_BSD = 'BSD';

    public const UNIT_BTN = 'BTN';

    public const UNIT_BWP = 'BWP';

    public const UNIT_BYR = 'BYR';

    public const UNIT_BZD = 'BZD';

    public const UNIT_CAD = 'CAD';

    public const UNIT_CDF = 'CDF';

    public const UNIT_CHF = 'CHF';

    public const UNIT_CLP = 'CLP';

    public const UNIT_CNY = 'CNY';

    public const UNIT_COP = 'COP';

    public const UNIT_CRC = 'CRC';

    public const UNIT_CUP = 'CUP';

    public const UNIT_CVE = 'CVE';

    public const UNIT_CZK = 'CZK';

    public const UNIT_DJF = 'DJF';

    public const UNIT_DKK = 'DKK';

    public const UNIT_DOP = 'DOP';

    public const UNIT_DZD = 'DZD';

    public const UNIT_EGP = 'EGP';

    public const UNIT_ERN = 'ERN';

    public const UNIT_ETB = 'ETB';

    public const UNIT_EUR = 'EUR';

    public const UNIT_FJD = 'FJD';

    public const UNIT_FKP = 'FKP';

    public const UNIT_GBP = 'GBP';

    public const UNIT_GEL = 'GEL';

    public const UNIT_GHS = 'GHS';

    public const UNIT_GIP = 'GIP';

    public const UNIT_GMD = 'GMD';

    public const UNIT_GNF = 'GNF';

    public const UNIT_GTQ = 'GTQ';

    public const UNIT_GYD = 'GYD';

    public const UNIT_HKD = 'HKD';

    public const UNIT_HNL = 'HNL';

    public const UNIT_HRK = 'HRK';

    public const UNIT_HTG = 'HTG';

    public const UNIT_HUF = 'HUF';

    public const UNIT_IDR = 'IDR';

    public const UNIT_ILS = 'ILS';

    public const UNIT_INR = 'INR';

    public const UNIT_IQD = 'IQD';

    public const UNIT_IRR = 'IRR';

    public const UNIT_ISK = 'ISK';

    public const UNIT_JMD = 'JMD';

    public const UNIT_JOD = 'JOD';

    public const UNIT_JPY = 'JPY';

    public const UNIT_KES = 'KES';

    public const UNIT_KGS = 'KGS';

    public const UNIT_KHR = 'KHR';

    public const UNIT_KMF = 'KMF';

    public const UNIT_KPW = 'KPW';

    public const UNIT_KRW = 'KRW';

    public const UNIT_KWD = 'KWD';

    public const UNIT_KYD = 'KYD';

    public const UNIT_KZT = 'KZT';

    public const UNIT_LAK = 'LAK';

    public const UNIT_LBP = 'LBP';

    public const UNIT_LKR = 'LKR';

    public const UNIT_LRD = 'LRD';

    public const UNIT_LSL = 'LSL';

    public const UNIT_LTL = 'LTL';

    public const UNIT_LVL = 'LVL';

    public const UNIT_LYD = 'LYD';

    public const UNIT_MAD = 'MAD';

    public const UNIT_MDL = 'MDL';

    public const UNIT_MGA = 'MGA';

    public const UNIT_MKD = 'MKD';

    public const UNIT_MMK = 'MMK';

    public const UNIT_MNT = 'MNT';

    public const UNIT_MOP = 'MOP';

    public const UNIT_MRO = 'MRO';

    public const UNIT_MUR = 'MUR';

    public const UNIT_MVR = 'MVR';

    public const UNIT_MWK = 'MWK';

    public const UNIT_MXN = 'MXN';

    public const UNIT_MYR = 'MYR';

    public const UNIT_MZN = 'MZN';

    public const UNIT_NAD = 'NAD';

    public const UNIT_NGN = 'NGN';

    public const UNIT_NIO = 'NIO';

    public const UNIT_NOK = 'NOK';

    public const UNIT_NPR = 'NPR';

    public const UNIT_NZD = 'NZD';

    public const UNIT_OMR = 'OMR';

    public const UNIT_PAB = 'PAB';

    public const UNIT_PEN = 'PEN';

    public const UNIT_PGK = 'PGK';

    public const UNIT_PHP = 'PHP';

    public const UNIT_PKR = 'PKR';

    public const UNIT_PLN = 'PLN';

    public const UNIT_PYG = 'PYG';

    public const UNIT_QAR = 'QAR';

    public const UNIT_RON = 'RON';

    public const UNIT_RSD = 'RSD';

    public const UNIT_RUB = 'RUB';

    public const UNIT_RUR = 'RUR';

    public const UNIT_RWF = 'RWF';

    public const UNIT_SAR = 'SAR';

    public const UNIT_SBD = 'SBD';

    public const UNIT_SCR = 'SCR';

    public const UNIT_SDG = 'SDG';

    public const UNIT_SEK = 'SEK';

    public const UNIT_SGD = 'SGD';

    public const UNIT_SHP = 'SHP';

    public const UNIT_SLL = 'SLL';

    public const UNIT_SOS = 'SOS';

    public const UNIT_SRD = 'SRD';

    public const UNIT_STD = 'STD';

    public const UNIT_SYP = 'SYP';

    public const UNIT_SZL = 'SZL';

    public const UNIT_THB = 'THB';

    public const UNIT_TJS = 'TJS';

    public const UNIT_TMT = 'TMT';

    public const UNIT_TND = 'TND';

    public const UNIT_TOP = 'TOP';

    public const UNIT__TRY = 'TRY';

    public const UNIT_TTD = 'TTD';

    public const UNIT_TWD = 'TWD';

    public const UNIT_TZS = 'TZS';

    public const UNIT_UAH = 'UAH';

    public const UNIT_UGX = 'UGX';

    public const UNIT_USD = 'USD';

    public const UNIT_UYU = 'UYU';

    public const UNIT_UZS = 'UZS';

    public const UNIT_VEF = 'VEF';

    public const UNIT_VND = 'VND';

    public const UNIT_VUV = 'VUV';

    public const UNIT_WST = 'WST';

    public const UNIT_XAF = 'XAF';

    public const UNIT_XAG = 'XAG';

    public const UNIT_XAU = 'XAU';

    public const UNIT_XBA = 'XBA';

    public const UNIT_XBB = 'XBB';

    public const UNIT_XBC = 'XBC';

    public const UNIT_XBD = 'XBD';

    public const UNIT_XCD = 'XCD';

    public const UNIT_XDR = 'XDR';

    public const UNIT_XFU = 'XFU';

    public const UNIT_XOF = 'XOF';

    public const UNIT_XPD = 'XPD';

    public const UNIT_XPF = 'XPF';

    public const UNIT_XPT = 'XPT';

    public const UNIT_XTS = 'XTS';

    public const UNIT_XXX = 'XXX';

    public const UNIT_YER = 'YER';

    public const UNIT_ZAR = 'ZAR';

    public const UNIT_ZMK = 'ZMK';

    public const UNIT_ZWL = 'ZWL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_AED,
            self::UNIT_AFN,
            self::UNIT_ALL,
            self::UNIT_AMD,
            self::UNIT_ANG,
            self::UNIT_AOA,
            self::UNIT_ARS,
            self::UNIT_AUD,
            self::UNIT_AWG,
            self::UNIT_AZN,
            self::UNIT_BAM,
            self::UNIT_BBD,
            self::UNIT_BDT,
            self::UNIT_BGN,
            self::UNIT_BHD,
            self::UNIT_BIF,
            self::UNIT_BMD,
            self::UNIT_BND,
            self::UNIT_BOB,
            self::UNIT_BRL,
            self::UNIT_BSD,
            self::UNIT_BTN,
            self::UNIT_BWP,
            self::UNIT_BYR,
            self::UNIT_BZD,
            self::UNIT_CAD,
            self::UNIT_CDF,
            self::UNIT_CHF,
            self::UNIT_CLP,
            self::UNIT_CNY,
            self::UNIT_COP,
            self::UNIT_CRC,
            self::UNIT_CUP,
            self::UNIT_CVE,
            self::UNIT_CZK,
            self::UNIT_DJF,
            self::UNIT_DKK,
            self::UNIT_DOP,
            self::UNIT_DZD,
            self::UNIT_EGP,
            self::UNIT_ERN,
            self::UNIT_ETB,
            self::UNIT_EUR,
            self::UNIT_FJD,
            self::UNIT_FKP,
            self::UNIT_GBP,
            self::UNIT_GEL,
            self::UNIT_GHS,
            self::UNIT_GIP,
            self::UNIT_GMD,
            self::UNIT_GNF,
            self::UNIT_GTQ,
            self::UNIT_GYD,
            self::UNIT_HKD,
            self::UNIT_HNL,
            self::UNIT_HRK,
            self::UNIT_HTG,
            self::UNIT_HUF,
            self::UNIT_IDR,
            self::UNIT_ILS,
            self::UNIT_INR,
            self::UNIT_IQD,
            self::UNIT_IRR,
            self::UNIT_ISK,
            self::UNIT_JMD,
            self::UNIT_JOD,
            self::UNIT_JPY,
            self::UNIT_KES,
            self::UNIT_KGS,
            self::UNIT_KHR,
            self::UNIT_KMF,
            self::UNIT_KPW,
            self::UNIT_KRW,
            self::UNIT_KWD,
            self::UNIT_KYD,
            self::UNIT_KZT,
            self::UNIT_LAK,
            self::UNIT_LBP,
            self::UNIT_LKR,
            self::UNIT_LRD,
            self::UNIT_LSL,
            self::UNIT_LTL,
            self::UNIT_LVL,
            self::UNIT_LYD,
            self::UNIT_MAD,
            self::UNIT_MDL,
            self::UNIT_MGA,
            self::UNIT_MKD,
            self::UNIT_MMK,
            self::UNIT_MNT,
            self::UNIT_MOP,
            self::UNIT_MRO,
            self::UNIT_MUR,
            self::UNIT_MVR,
            self::UNIT_MWK,
            self::UNIT_MXN,
            self::UNIT_MYR,
            self::UNIT_MZN,
            self::UNIT_NAD,
            self::UNIT_NGN,
            self::UNIT_NIO,
            self::UNIT_NOK,
            self::UNIT_NPR,
            self::UNIT_NZD,
            self::UNIT_OMR,
            self::UNIT_PAB,
            self::UNIT_PEN,
            self::UNIT_PGK,
            self::UNIT_PHP,
            self::UNIT_PKR,
            self::UNIT_PLN,
            self::UNIT_PYG,
            self::UNIT_QAR,
            self::UNIT_RON,
            self::UNIT_RSD,
            self::UNIT_RUB,
            self::UNIT_RUR,
            self::UNIT_RWF,
            self::UNIT_SAR,
            self::UNIT_SBD,
            self::UNIT_SCR,
            self::UNIT_SDG,
            self::UNIT_SEK,
            self::UNIT_SGD,
            self::UNIT_SHP,
            self::UNIT_SLL,
            self::UNIT_SOS,
            self::UNIT_SRD,
            self::UNIT_STD,
            self::UNIT_SYP,
            self::UNIT_SZL,
            self::UNIT_THB,
            self::UNIT_TJS,
            self::UNIT_TMT,
            self::UNIT_TND,
            self::UNIT_TOP,
            self::UNIT__TRY,
            self::UNIT_TTD,
            self::UNIT_TWD,
            self::UNIT_TZS,
            self::UNIT_UAH,
            self::UNIT_UGX,
            self::UNIT_USD,
            self::UNIT_UYU,
            self::UNIT_UZS,
            self::UNIT_VEF,
            self::UNIT_VND,
            self::UNIT_VUV,
            self::UNIT_WST,
            self::UNIT_XAF,
            self::UNIT_XAG,
            self::UNIT_XAU,
            self::UNIT_XBA,
            self::UNIT_XBB,
            self::UNIT_XBC,
            self::UNIT_XBD,
            self::UNIT_XCD,
            self::UNIT_XDR,
            self::UNIT_XFU,
            self::UNIT_XOF,
            self::UNIT_XPD,
            self::UNIT_XPF,
            self::UNIT_XPT,
            self::UNIT_XTS,
            self::UNIT_XXX,
            self::UNIT_YER,
            self::UNIT_ZAR,
            self::UNIT_ZMK,
            self::UNIT_ZWL,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unit', must be one of '%s'",
                $this->container['unit'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }
    /**
     * Gets unit
     *
     * @return string|null
    
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit The currency type. Example: USD for US Dollars
     *
     * @return self
    
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $allowedValues = $this->getUnitAllowableValues();
        if (!in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unit', must be one of '%s'",
                    $unit,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['unit'] = $unit;
        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
    
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The numerical amount of the price. Example: 9.99
     *
     * @return self
    
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;
        return $this;
    }
}

