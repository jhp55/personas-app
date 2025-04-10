<!doctype html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Listado de pais</title>
  </head>

  <body>
    <div class="container">
        <h1>Listado de pais</h1>
        {{-- <a href="{{ route('pais.create')}}" class="btn btn-success">Add</a> --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Country</th>
                <th scope="col">Capital</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($paises as $pais)
                    <tr>
                        <th scope="row">{{ $pais->pais_codi }}</th>
                        <td>{{ $pais->pais_nomb }}</td>
                        <td>{{ $pais->pais_capi }}</td>
                        <td>
                            {{-- <a href="{{route('pais.edit', ['pais' => $pais->pais_codi])}}"
                            class="btn btn-info">Edit</a></li>

                          <form action="{{route('pais.destroy',['pais' => $pais->pais_codi])}}"
                            method="POST" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                          </form> --}}
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
