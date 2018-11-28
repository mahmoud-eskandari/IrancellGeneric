<?php

namespace eskandari\MtnGenericAPI;

class clientResponse
{

    /**
     * @var string $FeatureId
     */
    protected $FeatureId = null;

    /**
     * @var string $ClientTxnId
     */
    protected $ClientTxnId = null;

    /**
     * @var int $ChannelId
     */
    protected $ChannelId = null;

    /**
     * @var string $RequestTimestamp
     */
    protected $RequestTimestamp = null;

    /**
     * @var string $ResponseTimestamp
     */
    protected $ResponseTimestamp = null;

    /**
     * @var string $ResponseTxnId
     */
    protected $ResponseTxnId = null;

    /**
     * @var CommandStatusType $CommandStatus
     */
    protected $CommandStatus = null;

    /**
     * @var string $ResultCode
     */
    protected $ResultCode = null;

    /**
     * @var string $ResponseMessage
     */
    protected $ResponseMessage = null;

    /**
     * @var details $Details
     */
    protected $Details = null;

    /**
     * @var offerList $OfferList
     */
    protected $OfferList = null;

    /**
     * @var offers[] $INOffersList
     */
    protected $INOffersList = null;

    /**
     * @param string $FeatureId
     * @param string $ClientTxnId
     * @param int $ChannelId
     * @param string $RequestTimestamp
     * @param string $ResponseTimestamp
     * @param string $ResponseTxnId
     * @param CommandStatusType $CommandStatus
     * @param string $ResultCode
     */
    public function __construct($FeatureId, $ClientTxnId, $ChannelId, $RequestTimestamp, $ResponseTimestamp, $ResponseTxnId, $CommandStatus, $ResultCode)
    {
        $this->FeatureId = $FeatureId;
        $this->ClientTxnId = $ClientTxnId;
        $this->ChannelId = $ChannelId;
        $this->RequestTimestamp = $RequestTimestamp;
        $this->ResponseTimestamp = $ResponseTimestamp;
        $this->ResponseTxnId = $ResponseTxnId;
        $this->CommandStatus = $CommandStatus;
        $this->ResultCode = $ResultCode;
    }

    /**
     * @return string
     */
    public function getFeatureId()
    {
        return $this->FeatureId;
    }

    /**
     * @param string $FeatureId
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setFeatureId($FeatureId)
    {
        $this->FeatureId = $FeatureId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientTxnId()
    {
        return $this->ClientTxnId;
    }

    /**
     * @param string $ClientTxnId
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setClientTxnId($ClientTxnId)
    {
        $this->ClientTxnId = $ClientTxnId;
        return $this;
    }

    /**
     * @return int
     */
    public function getChannelId()
    {
        return $this->ChannelId;
    }

    /**
     * @param int $ChannelId
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setChannelId($ChannelId)
    {
        $this->ChannelId = $ChannelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestTimestamp()
    {
        return $this->RequestTimestamp;
    }

    /**
     * @param string $RequestTimestamp
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setRequestTimestamp($RequestTimestamp)
    {
        $this->RequestTimestamp = $RequestTimestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseTimestamp()
    {
        return $this->ResponseTimestamp;
    }

    /**
     * @param string $ResponseTimestamp
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setResponseTimestamp($ResponseTimestamp)
    {
        $this->ResponseTimestamp = $ResponseTimestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseTxnId()
    {
        return $this->ResponseTxnId;
    }

    /**
     * @param string $ResponseTxnId
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setResponseTxnId($ResponseTxnId)
    {
        $this->ResponseTxnId = $ResponseTxnId;
        return $this;
    }

    /**
     * @return CommandStatusType
     */
    public function getCommandStatus()
    {
        return $this->CommandStatus;
    }

    /**
     * @param CommandStatusType $CommandStatus
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setCommandStatus($CommandStatus)
    {
        $this->CommandStatus = $CommandStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }

    /**
     * @param string $ResultCode
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setResultCode($ResultCode)
    {
        $this->ResultCode = $ResultCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }

    /**
     * @param string $ResponseMessage
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setResponseMessage($ResponseMessage)
    {
        $this->ResponseMessage = $ResponseMessage;
        return $this;
    }

    /**
     * @return details
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param details $Details
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setDetails($Details)
    {
        $this->Details = $Details;
        return $this;
    }

    /**
     * @return offerList
     */
    public function getOfferList()
    {
        return $this->OfferList;
    }

    /**
     * @param offerList $OfferList
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setOfferList($OfferList)
    {
        $this->OfferList = $OfferList;
        return $this;
    }

    /**
     * @return offers[]
     */
    public function getINOffersList()
    {
        return $this->INOffersList;
    }

    /**
     * @param offers[] $INOffersList
     * @return \eskandari\MtnGenericAPI\clientResponse
     */
    public function setINOffersList(array $INOffersList = null)
    {
        $this->INOffersList = $INOffersList;
        return $this;
    }

}
