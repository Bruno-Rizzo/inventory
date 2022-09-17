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
                        Lista de Produtos
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <table id="example" class="display nowrap" style="width:100%">

                                @can('create', App\Models\Product::class)
                                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary mb-4"> + Novo Produto</a>
                                @endcan

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th>Fornecedor</th>
                                        <th>Categoria</th>
                                        <th>Unidade</th>
                                        <th class="text-center">Quantidade</th>
                                        <th class="text-center">Status</th>
                                        @can('update', App\Models\Product::class)
                                        <th class="text-center">Editar</th>
                                        @endcan
                                        @can('delete', App\Models\Product::class)
                                        <th class="text-center">Excluir</th>
                                        @endcan
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($products as $product)

                                        <tr>
                                            <td class="text-center">{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->supplier->name }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->unit->name }}</td>
                                            <td class="text-center">{{ $product->quantity }}</td>
                                            <td class="text-center"> @if( $product->status == 1 )
                                                <span class="badge rounded-pill bg-success">{{'ativo'}}</span> 
                                                @else
                                                <span class="badge rounded-pill bg-danger">{{'inativo'}}</span>
                                                @endif
                                            </td>
                                            @can('update', App\Models\Product::class)
                                            <td class="text-center">
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                   class="text-success" style="text-decoration: none">
                                                    <i class="ti-pencil-alt" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            @endcan
                                            @can('delete', App\Models\Product::class)
                                            <td class="text-center">
                                                <a href="{{route('products.confirm',$product->id)}}" class="text-danger"
                                                   style="text-decoration: none">
                                                    <i class="ti-trash" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            @endcan
                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>
        
    </div>

</div>

@endsection

