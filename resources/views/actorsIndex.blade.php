<h1>Vista de actores</h1>

@foreach ($actors as $actor)
  <ul>
    <li>{{ $actor->getFullName() }} </li>
  </ul>
@endforeach
