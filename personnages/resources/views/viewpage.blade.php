@extends('layouts.layouts')

@section('viewpage')
@foreach ($character as $value)
    <div class="profil">
        <img src="" alt="Profil">
        <span>{{ $value->Name }}</span>
        <span>{{ $value->Job }}</span>
        <div class="profil-border"></div>
    </div>
    <div>
        <p>{{ $value->Biography }}</p>
    </div>
    <div>
        <div>
            <span>{{ $value->Address }}</span>
            <div>
                <span>{{ $value->Postalcode }}</span>
                <span>{{ $value->Town }}</span>
            </div>
        </div>
        <div>
            <span>{{ $value->Mail }}</span>
            <span>{{ $value->Phone }}</span>
        </div>
    </div>
@endforeach
@stop