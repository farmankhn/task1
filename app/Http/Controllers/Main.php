<?php  namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Citydetail;

class Main extends Controller {


	public function index(){

		return view('welcome');
	}

	public function weather(){
		return view('weather.getDetails');
	}

	public function getDetails(Request $request){
		$city = $request->input('city_name');
		$zip = $request->input('zip_code');

		$loc_array= Array($city);		//data validated in foreach. 
		$api_key="2b1eb542fcdb43429ee62333160407"; //should be embedded in your code, so no data validation necessary, otherwise if(strlen($api_key)!=24)
		$num_of_days=2;					//data validated in sprintf

		$loc_safe=Array();
		foreach($loc_array as $loc){
			$loc_safe[]= urlencode($loc);
		}
		$loc_string=implode(",", $loc_safe);

		//To add more conditions to the query, just lengthen the url string
		$basicurl=sprintf('http://api.worldweatheronline.com/premium/v1/weather.ashx?key=%s&q=%s&num_of_days=%s&format=json', 
		$api_key, $loc_string, intval($num_of_days));

		//Premium API
		$premiumurl=sprintf('http://api.worldweatheronline.com/premium/v1/premium-weather-V2.ashx?key=%s&q=%s&num_of_days=%s&format=json', 
		$api_key, $loc_string, intval($num_of_days));

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $basicurl);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1); 
		$json_reply =curl_exec($ch);
		curl_close($ch);

		$json=json_decode($json_reply);
		
		$resData = array();
		$resData['city'] =  $city;
		$resData['observation_time'] = $json->data->current_condition[0]->observation_time;
		$resData['temp_C'] = $json->data->current_condition[0]->temp_C;
		$resData['weatherCode'] = $json->data->current_condition[0]->weatherCode;
		$resData['weatherIconUrl'] = $json->data->current_condition[0]->weatherIconUrl[0]->value;
		$resData['weatherDesc'] = $json->data->current_condition[0]->weatherDesc[0]->value;
		echo json_encode($resData);

		//Citydetail::create($resData);
	}

} 