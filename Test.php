<?php
$apiKey = "72f259ba4f74e5a8d0cbdcebe3a564bd";
$cityId = "542420";
$apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=ru&units=metric&APPID=" . $apiKey;
$crequest = curl_init();

curl_setopt($crequest, CURLOPT_HEADER, 0);
curl_setopt($crequest, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($crequest, CURLOPT_URL, $apiUrl);
curl_setopt($crequest, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($crequest, CURLOPT_VERBOSE, 0);
curl_setopt($crequest, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($crequest);

curl_close($crequest);
$data = json_decode($response);
$currentTime = time();
?>

<div class="weather">

    <div class="weather__time">
    <?php echo date("jS F, Y",$currentTime); ?><br><?   //текущая дата
            
            if($data->weather[0]->description=="облачно с прояснениями"){ // Облачность
                ?> <img src="file/icons/weather/partly cloudy.jpg" width="20px"><?
            }else{
            echo ucwords($data->weather[0]->description); } 
            ?>
        <?php echo $data->main->temp_max; ?>°C <br><!-- Температура -->
    <img src="file/icons/weather/wett.png" width="20px"> <?php echo $data->main->humidity; ?> % <br><!-- Влажность -->
    <img src="file/icons/weather/wind.png" width="20px"><?php echo $data->wind->speed; ?> км/ч<br><!-- Скорость ветра -->

</div>