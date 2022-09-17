@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Produtos
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Editar Produto
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('products.update',$product->id)}}" method="POST">
                            @csrf
                            @method('put')

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" placeholder="Nome" name="name" value="{{$product->name}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Fornecedor</label>
                                <div class="col-sm-6">
                                    <select  class="form-select mb-3" name="supplier_id">
                                        <option value="" >Selecione uma opção</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{$supplier->id}}" @selected($supplier->id == $product->supplier_id)>
                                                {{$supplier->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Categoria</label>
                                <div class="col-sm-6">
                                    <select  class="form-select mb-3" name="category_id">
                                        <option value="" >Selecione uma opção</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" @selected($category->id == $product->category_id)>
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Unidade</label>
                                <div class="col-sm-6">
                                    <select  class="form-select mb-3" name="unit_id">
                                        <option value="" >Selecione uma opção</option>
                                        @foreach ($unities as $unit)
                                            <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)>
                                                {{$unit->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('unit_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Quantidade</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control" placeholder="Quantidade" name="quantity" value="{{$product->quantity}}">
                                    @error('quantity') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label col-form-label">Status</label>
                                <div class="col-sm-6 form-check form-switch" style="padding-left:52px" >
                                    <input type="checkbox" class="form-check-input" id="{{$product->id}}" 
                                           name="status" @checked($product->status==1)> 
                                    <label class="form-check-label ms-1" for="{{$product->id}}"> Ativo</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">  Editar</button>
                                    <a href="{{route('products.index')}}" class="btn btn-sm btn-secondary">  Voltar</a>
                                </div>
                            </div>
                        
                        </form>

                    </div>

                </div>

            </div>
            
        </div>
    </div>

</div>

@endsection
