<html>
    <head>
        <title>Agregar Actor</title>
    </head>
    <body>
        <form id="agregarActor" name="agregarActor" method="POST" action="/actor">
          @csrf

            @if (count($errors))
              <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                      @endforeach
                    </ul>
              </div>

            @endif

            <div>
                <label for="first_name">Nombre</label>
                <input type="text" name="first_name" id="first_name" value="{{old('first_name')}}" class="form-control">
            </div>
            <div>
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" id="last_name" value="{{old('last_name')}}" class="form-control">
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" value="{{old('rating')}}" class="form-control">
            </div>
            <div>
                <label for="favorite_movie">Pelicula Favorita</label>
                <input type="text" name="favorite_movie" id="favorite_movie" value="{{old('favorite_movie')}}" class="form-control">
            </div>


            <input type="submit" value="Agregar Actor" name="submit"/>
        </form>
    </body>
</html>
