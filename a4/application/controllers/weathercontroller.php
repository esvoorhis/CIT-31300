<?php
class WeatherController extends Controller{
    public $result;

    public function index(){
        $this->set(result,false);
    }
    public function getresults() {
        $xml = simplexml_load_file("http://api.wunderground.com/api/139eb04e4a31e2f6/conditions/q/".$_POST('zip').".xml");
        $this->set(result,true);
        $this->set(weather,$xml);
    }

}
?>