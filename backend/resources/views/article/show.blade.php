@extends('layouts')
@section('content')

<div id="welcome">
	<div class="container">
		<div class="title">
			<h2>{{ $article->title }}</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<p>{{ $article->body }}</p>
	</div>
</div>

@endsection
