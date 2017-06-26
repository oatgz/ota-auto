<?php
$access_token = '4sg8B4QIZnyEQVeBzYlZU4QBvoeuS0wMm6PJBJqb0LDRqmQMqogil+fMMjn7TSZjntodbXoWIGqylElEi4AIWALHvtxqTTblL0Vofrwa9qIzTI7F5XPRum6fCocWOtzZkeJtDXOSVI7/M+qt1PmBugdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;