<?php

namespace App;

class Agent
{
    public $latitude;
    public $longitude;
    public $zip_code;
    public $name;

    /**
     * getLatLong Function: is used to get the latitude and longitude from google maps API
     * the zip code of the agent should be correct
     *
     */
    
    function getLatLong(){
        if(!empty($this->zip_code)){
            if(empty($latitude)||empty($longitude)){
                $zip=$this->zip_code;
                $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$zip."&sensor=false";
                $details=file_get_contents($url);
                $result = json_decode($details,true);
                $lat=$result['results'][0]['geometry']['location']['lat'];
                $lng=$result['results'][0]['geometry']['location']['lng'];
                $this->latitude=$lat;
                $this->longitude=$lng;
            }
        }
    }
}