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
                        Lista de Compras
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <table id="example" class="display nowrap" style="width:100%">

                                @can('create', App\Models\Purchase::class)
                                <a href="{{ route('purchases.create') }}" class="btn btn-sm btn-primary mb-4"> + Nova Compra</a>
                                @endcan

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Número</th>
                                        <th>Data</th>
                                        <th>Fornecedor</th>
                                        <th>Categoria</th>
                                        <th class="text-center">Quantidade</th>
                                        <th>Produto</th>
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

                                    @foreach ($purchases as $purchase)

                                        <tr>
                                            <td class="text-center">{{ $purchase->id }}</td>
                                            <td>{{ $purchase->number }}</td>
                                            <td>{{ $purchase->date }}</td>
                                            <td>{{ $purchase->supplier_id }}</td>
                                            {{-- <td>{{ $purchase->supplier->name }}</td> --}}
                                            <td>{{ $purchase->category_id }}</td>
                                            {{-- <td>{{ $purchase->category->name }}</td> --}}
                                            <td>{{ $purchase->quantity }}</td>
                                            <td>{{ $purchase->product_id }}</td>
                                            {{-- <td>{{ $purchase->product->name }}</td> --}}
                                            <td class="text-center"> @if( $purchase->status == 1 )
                                                <span class="badge rounded-pill bg-success">{{'ativo'}}</span> 
                                                @else
                                                <span class="badge rounded-pill bg-danger">{{'inativo'}}</span>
                                                @endif
                                            </td>
                                            @can('update', App\Models\Purchase::class)
                                            <td class="text-center">
                                                <a href="{{ route('purchases.edit', $purchase->id) }}"
                                                   class="text-success" style="text-decoration: none">
                                                    <i class="ti-pencil-alt" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            @endcan
                                            @can('delete', App\Models\Purchase::class)
                                            <td class="text-center">
                                                <a href="{{route('purchases.confirm',$purchase->id)}}" class="text-danger"
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

