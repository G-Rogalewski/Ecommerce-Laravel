@extends('head')
@extends('header')
@section('home')
@section('title', 'Cadastro')
    <section style="padding: 60px 0;">
        <div class="container">
            <h1>Dados Pessoais</h1>
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <label for="name">Nome Completo:</label>
                    </div>
                    <div class="col-12">
                        <input type="text" id="name" name="Nome Completo" required>
                    </div>
                    <div class="col-12">
                        <label for="date">Data de Nascimento:</label>
                    </div>
                    <div class="col-12">
                        <input type="date" id="date" name="Data de Nascimento" required>
                    </div>
                    <div class="col-12">
                        <label for="cpf">CPF:</label>
                    </div>
                    <div class="col-12">
                        <input type="text" id="cpf" name="CPF" placeholder="000.000.000-00" required>
                    </div>
                    <div class="col-12">
                        <label for="sexo">Sexo:</label>
                    </div>
                    <div class="col-12">
                        <input type="radio" id="male" name="sexo" value="masculino" required>
                        <label for="">Masculino</label>
                        <input type="radio" id="female" name="sexo" value="feminino" required>
                        <label for="">Feminino</label>
                    </div>
                    <div class="col-12">
                        <label for="tel">Telefone:</label>
                    </div>
                    <div class="col-12">
                        <input type="number" id="tel" name="telefone" placeholder="(##) ####-####" required>
                    </div>
                    <div class="col-12">
                        <label for="email">E-mail:</label>
                    </div>
                    <div class="col-12">
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="col-12">
                        <label for="password">Senha:</label>
                    </div>
                    <div class="col-12">
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>
                <h1 style="margin-top: 10px;">Endereço</h1>
                <div class="row">
                    <div class="col-4">
                        <label for="rua">Rua:</label>
                    </div>
                    <div class="col-4">
                        <label for="numero">Número:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <input type="text" id="rua" name="rua" required>
                    </div>
                    <div class="col-4">
                        <input type="number" id="numero" name="numero" required>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="cep">CEP:</label>
                    </div>
                    <div class="col-4">
                        <label for="comp">Complemento:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <input type="number" id="cep" name="cep" required>
                    </div>
                    <div class="col-4">
                        <input type="text" id="comp" name="complemento" required>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="cidade">Cidade:</label>
                    </div>
                    <div class="col-4">
                        <label for="estado">Estado:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <input type="text" id="cidade" name="cidade" required>
                    </div>
                    <div class="col-4">
                        <input type="text" id="estado" name="estado" required>
                    </div>  
                </div>
                <input type="submit" value="Enviar" class="form-button">
            </form>
        </div>
    </section>
@endsection
@extends('footer')