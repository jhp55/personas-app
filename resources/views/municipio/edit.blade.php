<!doctype html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Edit de Municipios</title>
  </head>

  <body>
    <div class="container">
        <h1>Edit de Municipios</h1>

        <form method="POST" action="{{ route('municipios.update', ['municipio' => $municipio->muni_codi]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="codigo" class="form-label">Id</label>
              <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disabled"
              value="{{$municipio->muni_codi}}">
              <div id="codigoHelp" class="form-text">municipio Id.</div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Commune</label>
              <input type="text" required class="form-control" id="name" placeholder="municipio name"
                name="name" value="{{$municipio -> muni_nomb}}">
            </div>

            <label for="department">department:</label>
            <select class="form-select" name="code" id="department" required>
                <option selected disabled value="">Choose one...</option>
                @foreach($departamentos as $departamento)
                    @if ($departamento->depa_codi == $municipio->depa_codi)
                        <option selected value="{{ $departamento -> depa_codi }}">{{ $departamento -> depa_nomb }}</option>
                    @else
                        <option value="{{ $departamento -> depa_codi }}">{{ $departamento -> depa_nomb }}</option>
                    @endif
                @endforeach
            </select>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">updates</button>
                <a href="{{route('municipios.index')}}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>