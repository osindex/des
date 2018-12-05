## config
```
#config/app.php
Osi\Des\DesServiceProvider::class,

...

'Des' => Osi\Des\Facades\DesFacade::class,
'Des3' => Osi\Des\Facades\Des3Facade::class,
```

## init
```
#.env
#.env
DES_MODE=des-ecb
DES3_MODE=des-ede3-cbc

DES_RES=
// base64,hex,''
DES_KEY=FFFFFFFFFFFFFFFFFFFFFFFF
DES_IV=FFFFFFFF
```

## use
```
// $encrypt = \Des3::encrypt($key);
// $decrypt = \Des3::decrypt($encrypt);
$encrypt = \Des::encrypt($key);
$decrypt = \Des::decrypt($encrypt);
echo $encrypt . PHP_EOL . $decrypt;
```
