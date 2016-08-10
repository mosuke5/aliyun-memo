<?php
include_once '../../aliyun-openapi-php-sdk/aliyun-php-sdk-core/Config.php';
use Ecs\Request\V20140526 as Ecs;

$iClientProfile = DefaultProfile::getProfile("ap-southeast-1", $_SERVER['ALIYUN_KEY'], $_SERVER['ALIYUN_SECRET']);
$client = new DefaultAcsClient($iClientProfile);

$request = new Ecs\DescribeInstancesRequest();
$request->setMethod("GET");
$response = $client->getAcsResponse($request);

$instances = $response->Instances->Instance;
foreach($instances as $i) {
    echo $i->InstanceId;
    echo "\n";
}
