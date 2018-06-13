@extends('layouts.layouts')

@section('listpage')
<div>
	<h1>Personnes</h1>
	@foreach ($character as $value)
		<div class="listpage-name">        
			<span>{{ $value->Name }}</span>
			<input type="submit" value="Voir">        
		</div>
	@endforeach
@endsection