<?php

function getyelp2($latitude,$longitude,$category,$radius){
//
// From http://non-diligent.com/articles/yelp-apiv2-php-example/
//

$category = "term=" . $category . "&";

// Enter the path that the oauth library is in relation to the php file
require_once ('lib/OAuth.php');

// For example, request business with id 'the-waterboy-sacramento'
//$unsigned_url = "http://api.yelp.com/v2/business/the-waterboy-sacramento";

// For examaple, search for 'tacos' in 'sf'
$unsigned_url = "http://api.yelp.com/v2/search?sort=2&offset=20&radius_filter=" . $radius . "&" . $category . "ll=" . $latitude . "," . $longitude . "";


// Set your keys here
$consumer_key = "ho0pNfHtbRimd-vSaTtykQ";
$consumer_secret = "2fyaNEjynrq03hiAEsNj8-FhNRU";
$token = "6bH4Xmcu2y4C5bBNGyijjUzY1Z1qo1zW";
$token_secret = "ZaZCsL2Jm3mRXUovY99E_PYUE3s";

// Token object built using the OAuth library
$token = new OAuthToken($token, $token_secret);

// Consumer object built using the OAuth library
$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

// Yelp uses HMAC SHA1 encoding
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();

// Build OAuth Request using the OAuth PHP library. Uses the consumer and token object created above.
$oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $unsigned_url);

// Sign the request
$oauthrequest->sign_request($signature_method, $consumer, $token);

// Get the signed URL
$signed_url = $oauthrequest->to_url();

// Send Yelp API Call
$ch = curl_init($signed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch); // Yelp response
curl_close($ch);

return $data;
}

?>