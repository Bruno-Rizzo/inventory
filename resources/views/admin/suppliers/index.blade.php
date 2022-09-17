@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Fornecedores
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Lista de Fornecedores
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <table id="example" class="display nowrap" style="width:100%">

                                @can('create', App\Models\Supplier::class)
                                <a href="{{ route('suppliers.create') }}" class="btn btn-sm btn-primary mb-4"> + Novo Fornecedor</a>
                                @endcan

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th>Celular</th>
                                        <th>Email</th>
                                        <th>Endereço</th>
                                        <th class="text-center">Status</th>
                                        @can('update', App\Models\Supplier::class)
                                        <th class="text-center">Editar</th>
                                        @endcan
                                        @can('delete', App\Models\Supplier::class)
                                        <th class="text-center">Excluir</th>
                                        @endcan
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($suppliers as $supplier)

                                        <tr>
                                            <td class="text-center">{{ $supplier->id }}</td>
                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ $supplier->mobile }}</td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->address }}</td>
                                            <td class="text-center"> @if( $supplier->status == 1 )
                                                <span class="badge rounded-pill bg-success">{{'ativo'}}</span> 
                                                @else
                                                <span class="badge rounded-pill bg-danger">{{'inativo'}}</span>
                                                @endif
                                            </td>
                                            @can('update', App\Models\Supplier::class)
                                            <td class="text-center">
                                                <a href="{{ route('suppliers.edit', $supplier->id) }}"
                                                   class="text-success" style="text-decoration: none">
                                                    <i class="ti-pencil-alt" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            @endcan
                                            @can('delete', App\Models\Supplier::class)
                                            <td class="text-center">
                                                <a href="{{route('suppliers.confirm',$supplier->id)}}" class="text-danger"
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