@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Clientes
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Lista de Clientes
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <table id="example" class="display nowrap" style="width:100%">

                                @can('create', App\Models\Customer::class)
                                <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary mb-4"> + Novo Cliente</a>
                                @endcan

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th>Celular</th>
                                        <th>Email</th>
                                        <th>Endereço</th>
                                        <th class="text-center">Status</th>
                                        @can('update', App\Models\Customer::class)
                                        <th class="text-center">Editar</th>
                                        @endcan
                                        @can('delete', App\Models\Customer::class)
                                        <th class="text-center">Excluir</th>
                                        @endcan
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($customers as $customer)

                                        <tr>
                                            <td class="text-center">{{ $customer->id }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->mobile }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->address }}</td>
                                            <td class="text-center"> @if( $customer->status == 1 )
                                                <span class="badge rounded-pill bg-success">{{'ativo'}}</span> 
                                                @else
                                                <span class="badge rounded-pill bg-danger">{{'inativo'}}</span>
                                                @endif
                                            </td>
                                            @can('update', App\Models\Customer::class)
                                            <td class="text-center">
                                                <a href="{{ route('customers.edit', $customer->id) }}"
                                                   class="text-success" style="text-decoration: none">
                                                    <i class="ti-pencil-alt" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            @endcan
                                            @can('delete', App\Models\Customer::class)
                                            <td class="text-center">
                                                <a href="{{route('customers.confirm',$customer->id)}}" class="text-danger"
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
