<?php


 function autoload_ed296bebee2f0c623924f9eb8eb9c091($class)
{
    $classes = array(
        'eskandari\MtnGenericAPI\GenericServiceWebAdapterService' => __DIR__ .'/GenericServiceWebAdapterService.php',
        'eskandari\MtnGenericAPI\processRequest' => __DIR__ .'/processRequest.php',
        'eskandari\MtnGenericAPI\clientRequest' => __DIR__ .'/clientRequest.php',
        'eskandari\MtnGenericAPI\details' => __DIR__ .'/details.php',
        'eskandari\MtnGenericAPI\param' => __DIR__ .'/param.php',
        'eskandari\MtnGenericAPI\processRequestResponse' => __DIR__ .'/processRequestResponse.php',
        'eskandari\MtnGenericAPI\clientResponse' => __DIR__ .'/clientResponse.php',
        'eskandari\MtnGenericAPI\offerList' => __DIR__ .'/offerList.php',
        'eskandari\MtnGenericAPI\offer' => __DIR__ .'/offer.php',
        'eskandari\MtnGenericAPI\offers' => __DIR__ .'/offers.php',
        'eskandari\MtnGenericAPI\CommandStatusType' => __DIR__ .'/CommandStatusType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ed296bebee2f0c623924f9eb8eb9c091');

// Do nothing. The rest is just leftovers from the code generation.
{
}
