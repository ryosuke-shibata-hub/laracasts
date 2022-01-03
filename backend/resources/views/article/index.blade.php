@extends('layouts')
@section('content')

<div id="welcome">
  @foreach($articles as $article)
    <div class="container">
		<div class="title">
			<h2>
        <a href="/Article/{{ $article->id }}">{{ $article->title }}</a>
      </h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<p>{{ $article->body }}</p>
	</div>
  @endforeach
</div>

@endsection
