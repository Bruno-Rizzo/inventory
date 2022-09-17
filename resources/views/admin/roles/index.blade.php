@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Funções
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Lista de Funções
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <table id="example" class="display nowrap" style="width:100%">

                                <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary mb-4"> + Nova Função</a>

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Excluir</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($roles as $role)

                                        <tr>
                                            <td class="text-center">{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                   class="text-success" style="text-decoration: none">
                                                    <i class="ti-pencil-alt" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('roles.confirm',$role->id)}}" class="text-danger"
                                                   style="text-decoration: none">
                                                    <i class="ti-trash" style="font-size: 19px"></i>
                                                </a>
                                            </td>
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
