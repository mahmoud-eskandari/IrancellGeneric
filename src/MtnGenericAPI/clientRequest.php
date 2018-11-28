<?php

namespace eskandari\MtnGenericAPI;

class clientRequest
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
     * @var string $ClientUsername
     */
    protected $ClientUsername = null;

    /**
     * @var string $ClientPassword
     */
    protected $ClientPassword = null;

    /**
     * @var string $RequestTimestamp
     */
    protected $RequestTimestamp = null;

    /**
     * @var string $OriginatingMsisdn
     */
    protected $OriginatingMsisdn = null;

    /**
     * @var string $DestinationMsisdn
     */
    protected $DestinationMsisdn = null;

    /**
     * @var string $TransactionPin
     */
    protected $TransactionPin = null;

    /**
     * @var string $TransactionAmount
     */
    protected $TransactionAmount = null;

    /**
     * @var string $ProfileId
     */
    protected $ProfileId = null;

    /**
     * @var details $Details
     */
    protected $Details = null;

    /**
     * @param string $FeatureId
     * @param string $ClientTxnId
     * @param int $ChannelId
     * @param string $ClientUsername
     * @param string $ClientPassword
     * @param string $RequestTimestamp
     * @param string $OriginatingMsisdn
     * @param string $DestinationMsisdn
     * @param string $TransactionPin
     * @param string $TransactionAmount
     */
    public function __construct($FeatureId, $ClientTxnId, $ChannelId, $ClientUsername, $ClientPassword, $RequestTimestamp, $OriginatingMsisdn, $DestinationMsisdn, $TransactionPin, $TransactionAmount)
    {
      $this->FeatureId = $FeatureId;
      $this->ClientTxnId = $ClientTxnId;
      $this->ChannelId = $ChannelId;
      $this->ClientUsername = $ClientUsername;
      $this->ClientPassword = $ClientPassword;
      $this->RequestTimestamp = $RequestTimestamp;
      $this->OriginatingMsisdn = $OriginatingMsisdn;
      $this->DestinationMsisdn = $DestinationMsisdn;
      $this->TransactionPin = $TransactionPin;
      $this->TransactionAmount = $TransactionAmount;
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
     * @return \eskandari\MtnGenericAPI\clientRequest
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
     * @return \eskandari\MtnGenericAPI\clientRequest
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
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setChannelId($ChannelId)
    {
      $this->ChannelId = $ChannelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientUsername()
    {
      return $this->ClientUsername;
    }

    /**
     * @param string $ClientUsername
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setClientUsername($ClientUsername)
    {
      $this->ClientUsername = $ClientUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientPassword()
    {
      return $this->ClientPassword;
    }

    /**
     * @param string $ClientPassword
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setClientPassword($ClientPassword)
    {
      $this->ClientPassword = $ClientPassword;
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
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setRequestTimestamp($RequestTimestamp)
    {
      $this->RequestTimestamp = $RequestTimestamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginatingMsisdn()
    {
      return $this->OriginatingMsisdn;
    }

    /**
     * @param string $OriginatingMsisdn
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setOriginatingMsisdn($OriginatingMsisdn)
    {
      $this->OriginatingMsisdn = $OriginatingMsisdn;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationMsisdn()
    {
      return $this->DestinationMsisdn;
    }

    /**
     * @param string $DestinationMsisdn
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setDestinationMsisdn($DestinationMsisdn)
    {
      $this->DestinationMsisdn = $DestinationMsisdn;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionPin()
    {
      return $this->TransactionPin;
    }

    /**
     * @param string $TransactionPin
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setTransactionPin($TransactionPin)
    {
      $this->TransactionPin = $TransactionPin;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionAmount()
    {
      return $this->TransactionAmount;
    }

    /**
     * @param string $TransactionAmount
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setTransactionAmount($TransactionAmount)
    {
      $this->TransactionAmount = $TransactionAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileId()
    {
      return $this->ProfileId;
    }

    /**
     * @param string $ProfileId
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setProfileId($ProfileId)
    {
      $this->ProfileId = $ProfileId;
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
     * @return \eskandari\MtnGenericAPI\clientRequest
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

}
