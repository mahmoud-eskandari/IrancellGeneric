<?php

namespace eskandari\MtnGenericAPI;

class offerList
{

    /**
     * @var offer[] $Offer
     */
    protected $Offer = null;


    public function __construct()
    {

    }

    /**
     * @return offer[]
     */
    public function getOffer()
    {
        return $this->Offer;
    }

    /**
     * @param offer[] $Offer
     * @return \eskandari\MtnGenericAPI\offerList
     */
    public function setOffer(array $Offer = null)
    {
        $this->Offer = $Offer;
        return $this;
    }

}
