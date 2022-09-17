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
                        Cadastrar Produto
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('products.store')}}" method="POST">
                            @csrf

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" placeholder="Nome" name="name" value="{{old('name')}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Fornecedor</label>
                                <div class="col-sm-6">
                                    <select  class="form-select mb-3" name="supplier_id">
                                        <option value="" >Selecione uma opção</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{$supplier->id}}">
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
                                            <option value="{{$category->id}}">
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
                                            <option value="{{$unit->id}}">
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
                                    <input type="number" class="form-control form-control" placeholder="Quantidade" name="quantity" value="{{old('quantity')}}">
                                    @error('quantity') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">  Cadastrar</button>
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
