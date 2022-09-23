@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="py-5">
            <div class="row py-5">
                <div class="text-center">
                    <h3>Criar Produto</h3>
                </div>
                <form action="{{route('store')}}" class="col-md-9 m-auto" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="title" class=" text-left"> Titulo </label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do produto">

                            <label for="category">Categoria</label>
                            <select name="category" id="category" class="form-control">
                                <optgroup label="Partes de cima">
                                    <option value="Camisetas">Camisetas</option>
                                    <option value="Blusinhas">Blusinhas</option>
                                    <option value="Camisas">Camisas</option>
                                    <option value="Suéteres e cardigans">Suéteres e cardigans</option>
                                    <option value="Blazers, jaquetas e casacos">Blazers, jaquetas e casacos</option>
                                    <option value="Coletes e quimonos">Coletes e quimonos</option>
                                    <option value="Regatas">Regatas</option>   
                                </optgroup>
                                <optgroup label="Partes de baixo">
                                    <option value="Shorts e bermudas">Shorts e bermudas</option>
                                    <option value="Calças">Calças</option>
                                    <option value="Vestidos">Vestidos</option>
                                    <option value="Saias">Saias</option>
                                </optgroup>       
                                <optgroup label="Acessórios">
                                    <option value="Meias-calças">Meias-calças</option>
                                    <option value="Cachecóis e pashminas">Cachecóis e pashminas</option>
                                    <option value="Lenços">Lenços</option>
                                    <option value="Bolsas">Bolsas</option>
                                    <option value="Sapatos">Sapatos</option>
                                    <option value="Meias">Meias</option>
                                    <option value="Óculos">Óculos</option>
                                </optgroup>
                            </select>

                            <label for="color">Cor</label>
                            <input type="text" name="color" id="color" class="form-control" placeholder="Cores disponiveis">

                            <label for="amount">Valor</label>
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Preço do produto">

                            <label for="capa">Foto de capa</label>
                            <input type="file" name="capa" id="capa" class="form-control" accept="image/*">

                            <label for="images">Fotos do produto</label>
                            <input type="file" name="images[]" class="form-control" accept="image/*" multiple>

                            
                        </div>
                        <div class="col-md-4">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="available">Disponivel</option>
                                <option value="unavailable">Indisponivel</option>
                            </select>

                            <label for="size">Tamanhos</label>
                            <input type="text" class="form-control" name="size" id="size" placeholder="Tamanhos disponiveis">

                            <label for="qtd">Quantidade</label>
                            <input type="number" name="qtd" id="qtd" class="form-control" placeholder="Quantidades disponiveis">

                            <label for="particulars"> Caracteristicas </label>
                            <input type="text" class="form-control" name="particulars" id="particulars" placeholder="Detalhes sobre o produto, material, finalidades"> 

                            <label for="brand">Marcas</label>
                            <input type="text" name="brand" id="brand" class="form-control" placeholder="Ex: Nike, Adidas, Oakley...">
                        </div>
                        <div class="col-md-4">
                            <label for="description">Descrição</label>
                            <textarea name="description" id="description" cols="30" rows="12" class="form-control" placeholder="Fale um pouco sobre seu produto"></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class= "btn btn-success"> Enviar </button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
