<?php

/**
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInner
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;
use Walmart\Models\BaseModel;

/**
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInner Class Doc Comment
 *
 * @category Class

 * @description Fulfillment details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'promiseFulfillments_200_response_payload_fulfillmentPlans_inner_fulfillmentModules_inner_fulfillmentGroups_inner_fulfillmentOptions_inner_fulfillments_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentId' => 'string',
        'lineItemAttributesList' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerLineItemAttributesListInner[]',
        'sla' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerSla',
        'nodeType' => 'string',
        'accessMode' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerAccessMode',
        'fulfillmentTime' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTime',
        'errors' => '\Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentId' => null,
        'lineItemAttributesList' => null,
        'sla' => null,
        'nodeType' => null,
        'accessMode' => null,
        'fulfillmentTime' => null,
        'errors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentId' => false,
        'lineItemAttributesList' => false,
        'sla' => false,
        'nodeType' => false,
        'accessMode' => false,
        'fulfillmentTime' => false,
        'errors' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentId' => 'fulfillmentId',
        'lineItemAttributesList' => 'lineItemAttributesList',
        'sla' => 'sla',
        'nodeType' => 'nodeType',
        'accessMode' => 'accessMode',
        'fulfillmentTime' => 'fulfillmentTime',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentId' => 'setFulfillmentId',
        'lineItemAttributesList' => 'setLineItemAttributesList',
        'sla' => 'setSla',
        'nodeType' => 'setNodeType',
        'accessMode' => 'setAccessMode',
        'fulfillmentTime' => 'setFulfillmentTime',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentId' => 'getFulfillmentId',
        'lineItemAttributesList' => 'getLineItemAttributesList',
        'sla' => 'getSla',
        'nodeType' => 'getNodeType',
        'accessMode' => 'getAccessMode',
        'fulfillmentTime' => 'getFulfillmentTime',
        'errors' => 'getErrors'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentId', $data ?? [], null);
        $this->setIfExists('lineItemAttributesList', $data ?? [], null);
        $this->setIfExists('sla', $data ?? [], null);
        $this->setIfExists('nodeType', $data ?? [], null);
        $this->setIfExists('accessMode', $data ?? [], null);
        $this->setIfExists('fulfillmentTime', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
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
     * Gets fulfillmentId
     *
     * @return string|null
    
     */
    public function getFulfillmentId()
    {
        return $this->container['fulfillmentId'];
    }

    /**
     * Sets fulfillmentId
     *
     * @param string|null $fulfillmentId The identifier to identify fulfillment.
     *
     * @return self
    
     */
    public function setFulfillmentId($fulfillmentId)
    {
        if (is_null($fulfillmentId)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentId cannot be null');
        }

        $this->container['fulfillmentId'] = $fulfillmentId;
        return $this;
    }

    /**
     * Gets lineItemAttributesList
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerLineItemAttributesListInner[]|null
    
     */
    public function getLineItemAttributesList()
    {
        return $this->container['lineItemAttributesList'];
    }

    /**
     * Sets lineItemAttributesList
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerLineItemAttributesListInner[]|null $lineItemAttributesList Line item attribute details.
     *
     * @return self
    
     */
    public function setLineItemAttributesList($lineItemAttributesList)
    {
        if (is_null($lineItemAttributesList)) {
            throw new \InvalidArgumentException('non-nullable lineItemAttributesList cannot be null');
        }

        $this->container['lineItemAttributesList'] = $lineItemAttributesList;
        return $this;
    }

    /**
     * Gets sla
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerSla|null
    
     */
    public function getSla()
    {
        return $this->container['sla'];
    }

    /**
     * Sets sla
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerSla|null $sla sla
     *
     * @return self
    
     */
    public function setSla($sla)
    {
        if (is_null($sla)) {
            throw new \InvalidArgumentException('non-nullable sla cannot be null');
        }

        $this->container['sla'] = $sla;
        return $this;
    }

    /**
     * Gets nodeType
     *
     * @return string|null
    
     */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
     * Sets nodeType
     *
     * @param string|null $nodeType Fulfillment node type details. For example : 'FC'
     *
     * @return self
    
     */
    public function setNodeType($nodeType)
    {
        if (is_null($nodeType)) {
            throw new \InvalidArgumentException('non-nullable nodeType cannot be null');
        }

        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
     * Gets accessMode
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerAccessMode|null
    
     */
    public function getAccessMode()
    {
        return $this->container['accessMode'];
    }

    /**
     * Sets accessMode
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerAccessMode|null $accessMode accessMode
     *
     * @return self
    
     */
    public function setAccessMode($accessMode)
    {
        if (is_null($accessMode)) {
            throw new \InvalidArgumentException('non-nullable accessMode cannot be null');
        }

        $this->container['accessMode'] = $accessMode;
        return $this;
    }

    /**
     * Gets fulfillmentTime
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTime|null
    
     */
    public function getFulfillmentTime()
    {
        return $this->container['fulfillmentTime'];
    }

    /**
     * Sets fulfillmentTime
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInnerFulfillmentTime|null $fulfillmentTime fulfillmentTime
     *
     * @return self
    
     */
    public function setFulfillmentTime($fulfillmentTime)
    {
        if (is_null($fulfillmentTime)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentTime cannot be null');
        }

        $this->container['fulfillmentTime'] = $fulfillmentTime;
        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]|null $errors Error list details.
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }
}

