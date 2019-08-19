@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
<div class="jumbotron">
    <h1 class="text-center mb-2">Cadastro de Material</h1>
    <form action="{{ route('material.cadastrar') }}" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="tipoMaterial">Material</label>
        <input type="text" name="tipoMaterial" class="form-control" placeholder="Digite a material">
        </div>

        <button type="submit" class="btn btn-card btn-primary">Enviar</button>
    </form>
</div>
</div>
</div>
</div>


@endsection

