<!doctype html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Edit de paises</title>
  </head>

  <body>
    <div class="container">
        <h1>Edit de paises</h1>

        <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
          @method('PUT')
          @csrf
      
          <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $pais->pais_codi }}" readonly>
          </div>
      
          <div class="mb-3">
            <label for="name" class="form-label">Country</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pais->pais_nomb }}" required>
          </div>
      
          <label for="capital">Capital:</label>
          <select class="form-select" name="code" id="capital" required>
              <option selected disabled value="">Choose one...</option>
              @foreach($paises as $p)
                  <option value="{{ $p->pais_capi }}" @if($p->pais_capi == $pais->pais_capi) selected @endif>
                      {{ $p->pais_capi }}
                  </option>
              @endforeach
          </select>
      
          <div class="mt-3">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
          </div>
      </form>
      
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>