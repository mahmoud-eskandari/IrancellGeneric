<?php

namespace eskandari\MtnGenericAPI;

class offer
{

    /**
     * @var string $OfferCode
     */
    protected $OfferCode = null;

    /**
     * @var string $OfferDescription
     */
    protected $OfferDescription = null;

    /**
     * @var string $OfferName
     */
    protected $OfferName = null;

    /**
     * @var string $OfferAmount
     */
    protected $OfferAmount = null;

    /**
     * @var string $roleid
     */
    protected $roleid = null;

    /**
     * @param string $OfferCode
     * @param string $OfferDescription
     * @param string $OfferName
     * @param string $OfferAmount
     * @param string $roleid
     */
    public function __construct($OfferCode, $OfferDescription, $OfferName, $OfferAmount, $roleid)
    {
        $this->OfferCode = $OfferCode;
        $this->OfferDescription = $OfferDescription;
        $this->OfferName = $OfferName;
        $this->OfferAmount = $OfferAmount;
        $this->roleid = $roleid;
    }

    /**
     * @return string
     */
    public function getOfferCode()
    {
        return $this->OfferCode;
    }

    /**
     * @param string $OfferCode
     * @return \eskandari\MtnGenericAPI\offer
     */
    public function setOfferCode($OfferCode)
    {
        $this->OfferCode = $OfferCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfferDescription()
    {
        return $this->OfferDescription;
    }

    /**
     * @param string $OfferDescription
     * @return \eskandari\MtnGenericAPI\offer
     */
    public function setOfferDescription($OfferDescription)
    {
        $this->OfferDescription = $OfferDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfferName()
    {
        return $this->OfferName;
    }

    /**
     * @param string $OfferName
     * @return \eskandari\MtnGenericAPI\offer
     */
    public function setOfferName($OfferName)
    {
        $this->OfferName = $OfferName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfferAmount()
    {
        return $this->OfferAmount;
    }

    /**
     * @param string $OfferAmount
     * @return \eskandari\MtnGenericAPI\offer
     */
    public function setOfferAmount($OfferAmount)
    {
        $this->OfferAmount = $OfferAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * @param string $roleid
     * @return \eskandari\MtnGenericAPI\offer
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;
        return $this;
    }

}
