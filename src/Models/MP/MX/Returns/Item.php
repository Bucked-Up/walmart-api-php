<?php

/**
 * Item
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Returns;
use Walmart\Models\BaseModel;

/**
 * Item Class Doc Comment
 *
 * @category Class

 * @description Details of the item to be returned

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Item extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'upc' => 'string',
        'offerId' => 'string',
        'productName' => 'string',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'upc' => null,
        'offerId' => null,
        'productName' => null,
        'sku' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'upc' => false,
        'offerId' => false,
        'productName' => false,
        'sku' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'upc' => 'upc',
        'offerId' => 'offerId',
        'productName' => 'productName',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'upc' => 'setUpc',
        'offerId' => 'setOfferId',
        'productName' => 'setProductName',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'upc' => 'getUpc',
        'offerId' => 'getOfferId',
        'productName' => 'getProductName',
        'sku' => 'getSku'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('upc', $data ?? [], null);
        $this->setIfExists('offerId', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }
    /**
     * Gets upc
     *
     * @return string|null
    
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string|null $upc upc
     *
     * @return self
    
     */
    public function setUpc($upc)
    {
        if (is_null($upc)) {
            throw new \InvalidArgumentException('non-nullable upc cannot be null');
        }

        $this->container['upc'] = $upc;
        return $this;
    }

    /**
     * Gets offerId
     *
     * @return string|null
    
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param string|null $offerId offerId
     *
     * @return self
    
     */
    public function setOfferId($offerId)
    {
        if (is_null($offerId)) {
            throw new \InvalidArgumentException('non-nullable offerId cannot be null');
        }

        $this->container['offerId'] = $offerId;
        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName The name of the product associated with the line item. Example: 'Kenmore CF1' or '2086883 Canister Secondary Filter Generic 2 Pack'
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item. Special characters hyphen (-), space ( ), and period (.) are not allowed.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }
}

