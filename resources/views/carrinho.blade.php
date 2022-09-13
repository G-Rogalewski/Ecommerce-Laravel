@extends('head')
@extends('header')
@section('home')
@section('title', 'Carrinho')
    <section style="margin-top: 100px; margin-bottom: 60px;">
        <div class="container">
            <h3>Carrinho</h3>
            @if(isset($cart) && count($cart) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th>Foto</th>
                            <th>Valor</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $indice => $p)
                        <tr>
                            <td>
                                <a href="{{ route('delete_cart', [ 'indice' => $indice]) }}" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td>{{ $p->nome }}</td>
                            <td><img src="{{ asset($p->foto) }}" height="60"/></td>
                            <td>R${{ $p->valor }}</td>
                            <td>{{ $p->descricao }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Nenhum item encontrado no carrinho</p>
            @endif
        </div>
    </section>
@endsection
@extends('footer')