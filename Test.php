<? 
$data_file = 'http://export.yandex.ru/weather-ng/forecasts/'.$city.'.xml';    
$xml = simplexml_load_file($data_file); 

$get_date = explode ("-" , $day['date']); 
$day_of_week = date("N", mktime(0, 0, 0, $get_date[1], $get_date[2], $get_date[0]));
 
$out[$counter]['day'] = $get_date[2];
$out[$counter]['month'] = $get_date[1];
$out[$counter]['year'] = $get_date[0];
$out[$counter]['day_of_week'] = $day_of_the_week_array[$day_of_week]; 


?>