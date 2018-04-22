<?php
class WeatherController extends Controller{
    public $result;

    public function index(){
        $this->set(result,false);
    }
    public function getresults() {
        $worky = "http://api.wunderground.com/api/9275ef0b6f8bd4ea/conditions/q/".$_POST['zip'].".xml";
        $xml = simplexml_load_file($worky);
        $this->set(result,true);
        $this->set(weather,$xml);
    }

}
?>