@extends('layouts.app')
@section('content')
    <div class="container bg-light">
        <div class="row p-3 ">
            <div class="col-md-12">
                <div>
                    <h4 class="h3"><i class="fa fa-user"></i> Minha conta</h4>
                    <hr>
                    <h4>Informações de acesso</h4>

                    <p>{{ Auth::user()->name }}</p>
                    <p>{{ Auth::user()->email }}</p>
                    
                    <div class="d-flex justify-content-start">
                        <a href="#" class="m-1 btn btn-danger">Editar</a>
                        <a href="#" class="m-1 btn btn-success">Mudar Senha</a>

                        <form action="{{ route('logout') }}" method="post" class="m-1 d-flex ">
                            @csrf
                            <button class="btn btn-danger ">Sair</button>
                        </form>
                    </div>
                    
                </div>

                <div class="d-flex justify-content-start mt-4">
                    <h4 class="mt-1"> <i class="fas fa-map-marker-alt"></i> Endereços Cadastrados</h4>
                    <a href="#" class="btn btn-success mx-3">Gerenciar Endereços</a>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card p-2">
                            <div class="card-head">
                                <h4>Endereço de cobrança Padão</h4>
                            </div>
                            <div class="card-body">
                                <p>Vinicius Peres <br>
                                    Avenida Paulo riberiro</p>
                                <p>Tel: (18) 98176-0116</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <h4><i class="fas fa-ticket-alt"> </i> Meus Pedidos </h4>
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead class="list-inline">
                                    <th>#</th>
                                    <th>Data</th>
                                    <th>Pagamento</th>
                                    <th>Valor total</th>
                                    <th>Status</th>
                                    <th></th>
                                </thead>

                                <tbody>
                                    <td> 817263 </td>
                                    <td> 02/07/2022 </td>
                                    <td> PIX </td>
                                    <td> R$ 99,90 </td>
                                    <td> Entregue </td>
                                    <td> <a href="#" class="btn btn-success">Ver pedido</a> </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
