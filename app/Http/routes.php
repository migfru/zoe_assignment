<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Client;
use App\Agent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clients',function(){
    $agent1=new Agent();
    $agent1->name='';
    $agent1->zip_code='';
    $agent2=new Agent();
    $agent2->name='';
    $agent2->zip_code='';
    $clients=array();
    //$data=array('agent1'=>$agent1,'agent2'=>$agent2,'clients'=>$clients);
    return view('clients',compact('clients'));
});

Route::post('clients',function(){
    $clients = Client::all();
    $agent1=new Agent();
    $agent1->name=Input::get('nameAgent1');
    //$agent1->zipcode=85750;
    $agent1->zip_code=Input::get('zipCodeAgent1');

    $agent2=new Agent();
    $agent2->name=Input::get('nameAgent2');
    //$agent2->zipcode=92260;
    $agent2->zip_code=Input::get('zipCodeAgent2');;

    
    $agent1->getLatLong();
    $agent2->getLatLong();

    foreach($clients as $client){
        $client->getLatLong();
        $client->setAgent($agent1,$agent2);
    }
    //$data=array('agent1'=>$agent1,'agent2'=>$agent2,'clients'=>$clients);
    return view('clients',compact('clients'));
});

Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);


