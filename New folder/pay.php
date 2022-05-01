       
<?php $message = "{\"Status\":\"SUCCESS\",\"amount\":\"10.01\",\"txnRef\":\"test reference      id\",\"toVpa\":\"merchant3@icici\",\"txnId\":\"ICI6a88c3ae581649f7b0e2157504358ead\",\"responseCode\":\"0\"}";

$publicKey = file_get_contents("/var/www/html/php/googlepayPublicKeyV1.pem"); // a valid path to public key

$signature = "30450221008f32b3ac01a00e5b3c1f53e71e6f111546b60a9f6911df2ad75af5921f8681d002203b090e25a1b6dc7132530116d03024f8ab25795931f34a1724bed8f7389909cc";

$alg = OPENSSL_ALGO_SHA256;

// verify using openssl library
$success = openssl_verify(hash("sha256", $message), hex2bin($signature), $publicKey, $alg);

if ($success === -1) {
echo "openssl_verify() failed with error. " . openssl_error_string() . "\n";
} elseif ($success === 1) {
echo "signature verification was successful\n";
} else {
echo "signature verification failed. \n";
}

?>
