<?php
class lastfmController extends Controller{
    public $result;

    public function index(){
        $this->set(result,false);
    }
    public function getresults() {
        $worky = "http://ws.audioscrobbler.com/2.0/?method=geo.gettoptracks&country=spain&api_key=6dc14ba1fc546a1561573a1d2f4a8182";
        $xml = simplexml_load_file($worky);
        $this->set(result,true);
        $this->set(tracks,$xml);
    }

}
?>