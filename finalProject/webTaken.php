<?php include 'dependency.php'; ?>
<?php

$websiteRequest = new websiteModel();
$websiteRequest->setWebsite(filter_input(INPUT_POST, 'website'));
        
$checkWebsite = array(  "taken" => 'Available', 
                        "website" => $websiteRequest->getWebsite() );

$signup = new Login();

if ( $signup->webTaken($websiteRequest) ){
    $checkWebsite["taken"] = 'Unavailable';
}

echo json_encode($checkWebsite);

