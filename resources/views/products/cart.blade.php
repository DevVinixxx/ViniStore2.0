@extends('layouts.app')
@section('content')
    <div class="container bg-light p-4">
        <h2>Carrinho de compras</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="list-inline">
                                <th>Item</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Subtotal</th>
                            </thead>
        
                            <tbody>
                                <td>
                                    <img src="{{asset('img/store/banner_img_01.jpg')}}" width="20%" height="20%" alt="produto">
                                    Calça Jeans
                                </td>
                                <td>R$ 99,90</td>
                                <td> - 1 + </td>
                                <td>R$ 99,90</td>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-2">
                    <a href="#" class="btn btn-primary">Continue Comprando</a>
                    <a href="#" class="btn btn-danger">Limpar carrinho</a>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="card-body">
                        <h1 class="h2 d-flex justify-content-between"> Subtotal <span> R$ 99,99 </span></h1>
                        <hr>

                        <div class="d-flex justify-content-between ">
                            <p class="mt-2">Calcular frete: </p>
                            <form action="#" method="post" class="col-8">
                                <input type="text" class="form-control">
                            </form>
                        </div>

                        <div>
                            <form action="#" method="post" class="">
                                <div class="mt-1">
                                    <input type="radio" name="#" id="#">
                                    <label for="padão">Transportadora padrão - 5 dias úteis </label>
                                </div>
                                <div class="mt-1">
                                    <input type="radio" name="#" id="#">
                                    <label for="padão">Transportadora padrão - 5 dias úteis </label>
                                </div>
                                <div class="mt-1">
                                    <input type="radio" name="#" id="#">
                                    <label for="padão">Transportadora padrão - 5 dias úteis </label>
                                </div>
                            </form>
                        </div>

                        <div>
                            <form action="#" method="post" class="d-flex justify-content-between">
                                <input type="text" class="form-control m-2" placeholder="Cupom de desconto">
                                <button class="btn btn-primary m-2">Aplicar</button>
                            </form>
                        </div>
                        <hr>

                        <h1 class="h2 d-flex justify-content-between">Frete  <span>R$ 39,90</span></h1>
                        <hr>
                        
                        <h1 class="h2 d-flex justify-content-between">Total <span>R$ 139,89</span></h1>

                        <button class="btn btn-success mt-2 col-12"> Finalizar Compras </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection