@extends('layout')
@section('content')
<h2 class="sub-header">Agents</h2>
<form class="form" method="post">
    {!! csrf_field() !!}
    <div class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="nameAgent1" >Agent 1 Name</label>
            <input type="text" class="form-control" name="nameAgent1" placeholder="Agent Name 1">
        </div>
        <div class="form-group">
            <label class="sr-only" for="zipCodeAgent1" >Agent 1 Zip Code</label>
            <input type="text" class="form-control" name="zipCodeAgent1" placeholder="Zip Code Agent 1">
        </div>
    </div>
    <div class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="nameAgent2">Agent 2 Name</label>
            <input type="text" name="nameAgent2" class="form-control" placeholder="Agent Name 2" >
        </div>
        <div class="form-group">
            <label class="sr-only" for="zipCodeAgent2">Agent 2 Zip Code</label>
            <input type="text" class="form-control" name="zipCodeAgent2" placeholder="Zip Code Agent 2">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">MATCH</button>
</form>
<table></table>
<h2 class="sub-header">Clients</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Zip Code</th>
            <th>Agent</th>
            <th>Distance to Agent</th>
            <th>Latitude</th>
            <th>Longitude</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->zip_code }}</td>
            <td>{{ $client->agent->name }}</td>
            <td>{{ $client->distance }}</td>
            <td>{{ $client->latitude }}</td>
            <td>{{ $client->longitude }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection