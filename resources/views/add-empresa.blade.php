@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
<div class="jumbotron">
    <h1 class="text-center mb-2">Cadastro de Empresas</h1>
    <form action="{{ route('empresa.cadastrar') }}" method="post" class="user-info-setting-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome">
        </div>
        <div class="form-group">
            <label for="endereço">Endereço</label>
            <input type="text" name="endereço" class="form-control" placeholder="Digite o endereço">
            </div>
            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="text" name="numero" class="form-control" placeholder="Digite o numero">
                </div>
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control" placeholder="Digite o Complemento">
                    </div>
                    <div class="form-group">
                        <label for="cep">Cep</label>
                        <input type="text" name="cep" class="form-control" placeholder="Digite o Cep">
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" placeholder="Digite o bairro">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" name="estado" class="form-control" placeholder="Digite o estado">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" class="form-control" placeholder="Digite o telefone">
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" name="latitude" class="form-control" placeholder="Digite a latitude" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" name="longitude" class="form-control" placeholder="Digite a longitude" required>
                                            </div>
        <button type="submit" class="btn btn-card btn-primary">Enviar</button>
    </form>
</div>
</div>
</div>
</div>


@endsection

