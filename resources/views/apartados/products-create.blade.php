@extends('layouts.app')

@section('content')
  <script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
  });
  </script>
<div class="card">
    <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="plato">Nombre del plato</label>
                <input name="plato" type="text" class="form-control @error('plato') is-invalid @enderror" aria-describedby="emailHelp">

                @error('plato')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del plato</label>
                <input name="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror">

                @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input name="precio" type="number" class="form-control @error('precio') is-invalid @enderror">

                @error('precio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input name="stock" type="number" class="form-control @error('stock') is-invalid @enderror">

                @error('stock')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input name="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror">

                @error('imagen')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="categoria">Categorias</label>
              <select class="js-example-basic-single form-control @error('categoria') is-invalid @enderror" name="categoria">
                  @foreach (App\Category::all() as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach
              </select>

              @error('categoria')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="ingredientes[]">Ingredients</label>
                <select class="js-example-basic-multiple form-control @error('ingredientes') is-invalid @enderror" name="ingredientes[]" multiple="multiple">
                    @foreach (App\Ingredient::all() as $ingr)
                      <option value="{{$ingr->id}}">{{$ingr->name}}</option>
                    @endforeach
                </select>

                @error('ingredientes')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
