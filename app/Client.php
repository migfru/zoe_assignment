<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name','zip_code','latitude','longitude'];

    //public $latitude,$longitude,$zip_code, $distance, $agent;

    function getLatLong(){
        if(!empty($this->zip_code)||!isEmptyString($this->zip_code)) {
            if (empty($latitude) || empty($longitude)) {
                $zip = $this->zip_code;
                $url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $zip . "&sensor=false";
                $details = file_get_contents($url);
                $result = json_decode($details, true);
                $lat = $result['results'][0]['geometry']['location']['lat'];
                $lng = $result['results'][0]['geometry']['location']['lng'];
                $this->latitude = $lat;
                $this->longitude = $lng;
                $this->save();
            }
        }
    }

    function setAgent($agent1,$agent2){
        $d1=$this->haversineGreatCircleDistance($this->latitude,$this->longitude,$agent1->latitude,$agent1->longitude);
        $d2=$this->haversineGreatCircleDistance($this->latitude,$this->longitude,$agent2->latitude,$agent2->longitude);
        if($d1<$d2){
            $this->agent=$agent1;
            $this->distance=$d1;
        }else{
            $this->agent=$agent2;
            $this->distance=$d2;
        }
    }

    function haversineGreatCircleDistance(
        $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }
}
