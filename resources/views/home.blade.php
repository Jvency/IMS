@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 leftpanel">
            
        <h5 id="title">Explore Your Inventories </h5> 
        <br>

        <button class="btn btn-panel" a="#"> Explore By Types </button>
    </div>
    
    <div class="col-md-8">

        <div class="container-fluid">
            <div class="row justify-content-center" >
            <img src="{{ asset('images/vectors.png') }}" id="vecimg" >
            </img>
                
            </div>
        </div>
    </div>
</div>
@endsection