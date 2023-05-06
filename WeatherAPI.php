<?php
$api_key = 'YOUR_API_KEY'; // API anahtarınızı buraya girin
$city_name = 'Istanbul'; // İlgili şehir adını buraya girin

$url = "http://api.openweathermap.org/data/2.5/weather?q=$city_name&appid=$api_key&units=metric";
$data = json_decode(file_get_contents($url), true);

$description = $data['weather'][0]['description'];
$temp = $data['main']['temp'];

echo "Şu an $city_name'da hava $description ve sıcaklık $temp derece.";

?>
