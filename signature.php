<?php
$api_key='LBSKFTAUTl20BbDvk5w5Hw';
$api_secret='dPtRELo1oDNI92dy68xPQlxiUAhfqvE1spua';
$meeting_number='87165578112';
$role=1;
echo $signature=generate_signature($api_key,$api_secret,$meeting_number,$role);
function generate_signature ( $api_key, $api_secret, $meeting_number, $role){

	$time = time() * 1000 - 30000;//time in milliseconds (or close enough)
	
	$data = base64_encode($api_key . $meeting_number . $time . $role);
	
	$hash = hash_hmac('sha256', $data, $api_secret, true);
	
	$_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
	
	//return signature, url safe base64 encoded
	return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
}

?>