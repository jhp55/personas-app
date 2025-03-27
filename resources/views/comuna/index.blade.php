<!doctype html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Listado de Comunas</title>
  </head>

  <body>
    <div class="container">
        <h1>Listado de Comunas</h1>
        <a href="{{ route('comunas.create')}}" class="btn btn-success">Add</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Commune</th>
                <th scope="col">Municipality</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comunas as $comuna)
                    <tr>
                        <th scope="row">{{ $comuna->comu_codi }}</th>
                        <td>{{ $comuna->comu_nomb }}</td>
                        <td>{{ $comuna->muni_nomb }}</td>
                        <td>
                          <form action="{{route('comunas.destroy',['comuna' => $comuna->comu_codi])}}"
                            method="POST" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                          </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
