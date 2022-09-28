@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Compras
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Nova Compra
                    </div>

                    <div class="card-body">
                        
                        <div class="row">

                            <div class="col-md-3">

                                <div class="mb-2">
                                    <label class="col-form-label col-form-label">Data</label>
                                    <div>
                                        <input type="date" class="form-control form-control" placeholder="Data" name="date" value="{{old('date')}}">
                                        @error('date') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="mb-2">
                                    <label class="col-form-label col-form-label">Nº da Compra</label>
                                    <div>
                                        <input type="text" class="form-control form-control" placeholder="Nº Compra" name="number" value="{{old('number')}}">
                                        @error('number') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="mb-2">
                                    <label class="col-form-label col-form-label">Fornecedor</label>
                                    <div>
                                        <select  class="form-select mb-3" name="supplier_id" id="supplier_id">
                                            <option value="" >Selecione</option>
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{$supplier->id}}">
                                                    {{$supplier->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('supplier_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="mb-2">
                                    <label class="col-form-label col-form-label">Categoria</label>
                                    <div>
                                        <select  class="form-select mb-3" name="category_id" id="category_id">
                                            <option value="" >Selecione</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="mb-2">
                                    <label class="col-form-label col-form-label">Prouto</label>
                                    <div>
                                        <select  class="form-select mb-3" name="product_id" id="product_id">
                                            <option value="" >Selecione</option>
                                            @foreach ($products as $product)
                                                <option value="{{$product->id}}">
                                                    {{$product->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('product_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="mb-2">
                                    <label class="col-form-label col-form-label">Unidade</label>
                                    <div>
                                        <select  class="form-select mb-3" name="unit_id">
                                            <option value="" >Selecione</option>
                                            @foreach ($units as $unit)
                                                <option value="{{$unit->id}}">
                                                    {{$unit->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('unit_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label col-form-label"></label>
                                <div>
                                    <button class="btn btn-sm btn-secondary mt-3">
                                        <i class="ti-package me-2"></i> Adicionar Produto
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>
        
    </div>

</div>

@endsection