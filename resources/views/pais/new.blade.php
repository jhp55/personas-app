<!doctype html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Add de Paises</title>
  </head>

  <body>
    <div class="container">
        <h1>Add de Paises</h1>

        <form method="POST" action="{{ route('paises.store') }}">
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">Code</label>
              <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id">
              <div id="idHelp" class="form-text">Country code</div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Country</label>
              <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
                name="name" placeholder="pais name.">
            </div>

            <label for="capital">Capital:</label>
            <select class="form-select" name="code" id="capital" required>
                <option selected disabled value="">Choose one...</option>
                @foreach($paises as $pais)
                    <option value="{{ $pais -> pais_capi }}">{{ $pais -> pais_capi }}</option>
                @endforeach
            </select>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">save</button>
                <a href="{{route('paises.index')}}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>
