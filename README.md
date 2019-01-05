# MTN
MTN irancell new Generic Api php webservice client

Installation

```
	composer require eskandari/mtn_generic
```

Usage:

```
$context = stream_context_create([
    'ssl' => [
        // set some SSL/TLS specific options
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);
$req  = new \eskandari\MtnGenericAPI\GenericServiceWebAdapterService([
    'stream_context' => $context
]);
$data = new \eskandari\MtnGenericAPI\processRequest();
$clientRequest = new \eskandari\MtnGenericAPI\clientRequest('TOPUP', '1234', '6', 'USERNAME', '***', date('Y-m-d  H:i:s.u'), '9339901311', '9339901311', '1234', 10000);
$data->setClientRequest($clientRequest);
$response = $req->processRequest($data);
var_dump(json_encode($response->getClientResponse()));

```
