<?php

namespace eskandari\MtnGenericAPI;

class processRequest
{

    /**
     * @var clientRequest $ClientRequest
     */
    protected $ClientRequest = null;


    public function __construct()
    {

    }

    /**
     * @return clientRequest
     */
    public function getClientRequest()
    {
        return $this->ClientRequest;
    }

    /**
     * @param clientRequest $ClientRequest
     * @return \eskandari\MtnGenericAPI\processRequest
     */
    public function setClientRequest($ClientRequest)
    {
        $this->ClientRequest = $ClientRequest;
        return $this;
    }

}
