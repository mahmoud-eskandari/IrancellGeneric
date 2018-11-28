<?php

namespace eskandari\MtnGenericAPI;

class details
{

    /**
     * @var param[] $Param
     */
    protected $Param = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return param[]
     */
    public function getParam()
    {
      return $this->Param;
    }

    /**
     * @param param[] $Param
     * @return \eskandari\MtnGenericAPI\details
     */
    public function setParam(array $Param = null)
    {
      $this->Param = $Param;
      return $this;
    }

}
