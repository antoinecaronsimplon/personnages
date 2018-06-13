@extends('layouts.layouts')

@section('listpage')
<h1>Personnes</h1>
<div>
    @foreach ($character as $value)
        <span>{{ $value->Name }}</span>
        <input type="submit" value="Voir">
    @endforeach
</div>
@endsection