@extends('layouts.app')
@section('content')
    <div class="content-body">
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">                   
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="{{ url('storage/capa/{$product->capa}') }}" alt="{{$product->title}}" id="product-detail">
                        </div>
                        <div class="row">
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                    <i class="text-dark fas fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <!--End Controls-->
                            <!--Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="{{url("storage/prods/{$prodimages}")}}">
                                                    <img class="card-img img-fluid" src="{{asset('/img/store/product_single_01.jpg')}}" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{asset('img/store/product_single_02.jpg')}}" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{asset('img/store/product_single_03.jpg')}}" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="next">
                                    <i class="text-dark fas fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--End Controls-->
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">{{$product->title}}</h1>
                                <p class="h3 py-2">R$ {{$product->amount}}</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Marca: {{$product->brand}}</h6>
                                    </li>
                                </ul>
    
                                <h6>Descrição:</h6>
                                <p> {{$product->description}} </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Cor do produto: </h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>{{$product->color}}</strong></p>
                                    </li>
                                </ul>
    
                                <h6>Caracteristicas:</h6>
                                <ul class="list-unstyled pb-3">
                                    <li>{{$product->particulars}}</li>
                                </ul>
    
                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="row">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item">Tamanhos:
                                                    <input type="hidden" name="product-size" id="product-size" value="S">
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-success btn-size">P</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success btn-size">G</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success btn-size">GG</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Quantidade
                                                    <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Comprar</button>
                                        </div>
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Adicionar ao carrinho</button>
                                        </div>
                                    </div>
                                </form>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection