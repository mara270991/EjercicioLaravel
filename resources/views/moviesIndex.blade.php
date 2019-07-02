<h1>Vista de peliculas</h1>

@foreach ($TheMovie as $movie)
  <ul>
    <li>{{ $movie->getTitleAndRating() }} </li>
  </ul>
@endforeach
