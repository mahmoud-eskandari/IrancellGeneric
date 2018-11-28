<?php

namespace eskandari\MtnGenericAPI;

class offers
{

    /**
     * @var string $offerID
     */
    protected $offerID = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $expiryDate
     */
    protected $expiryDate = null;

    /**
     * @var string $productId
     */
    protected $productId = null;

    /**
     * @var string $accountValue
     */
    protected $accountValue = null;

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @param string $offerID
     * @param string $startDate
     * @param string $expiryDate
     * @param string $productId
     */
    public function __construct($offerID, $startDate, $expiryDate, $productId)
    {
        $this->offerID = $offerID;
        $this->startDate = $startDate;
        $this->expiryDate = $expiryDate;
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getOfferID()
    {
        return $this->offerID;
    }

    /**
     * @param string $offerID
     * @return \eskandari\MtnGenericAPI\offers
     */
    public function setOfferID($offerID)
    {
        $this->offerID = $offerID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \eskandari\MtnGenericAPI\offers
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param string $expiryDate
     * @return \eskandari\MtnGenericAPI\offers
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     * @return \eskandari\MtnGenericAPI\offers
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountValue()
    {
        return $this->accountValue;
    }

    /**
     * @param string $accountValue
     * @return \eskandari\MtnGenericAPI\offers
     */
    public function setAccountValue($accountValue)
    {
        $this->accountValue = $accountValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \eskandari\MtnGenericAPI\offers
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

}
