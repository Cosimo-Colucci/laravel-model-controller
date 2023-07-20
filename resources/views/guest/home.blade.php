@extends ('layouts.app')

@section('title', 'Homepage')
@section('main-content')
<h1>
    Home Page
</h1>
<div>
    @foreach($movies as $movie)
    <h2>
        {{$movie->title}}
    </h2>
    <h3>
        {{$movie->original_title}}
    </h3>
    <sub>
        {{$movie->nationality}}
</sub>
    @endforeach
</div>
@endsection