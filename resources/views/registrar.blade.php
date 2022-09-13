@extends('head')
@extends('header')
@section('home')
@section('title', 'Cadastro')
    <section style="padding: 60px 0;">
        <div class="container">
            <h1>Dados Pessoais</h1>
            <form action="{{ route('registrar_cliente') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            Nome: <input type="text" name="nome" class="form-control" required>
                        </div>
                    </div> 
                    <div class="col-6">
                        <div class="form-group">
                            E-mail: <input type="email" name="email" class="form-control" required>
                        </div>
                    </div> 
                    <div class="col-6">
                        <div class="form-group">
                            CPF: <input type="text" name="cpf" class="form-control" required>
                        </div>
                    </div> 
                    <div class="col-6">
                        <div class="form-group">
                            Senha: <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            Endereço: <input type="text" name="endereco" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="form-group">
                            Número: <input type="text" name="numero" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            Complemento: <input type="text" name="complemento" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            Cidade: <input type="text" name="cidade" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            CEP: <input type="text" name="cep" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            Estado: <input type="text" name="estado" class="form-control" required>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Enviar" class="form-button">
            </form>
        </div>
    </section>
@endsection
@extends('footer')