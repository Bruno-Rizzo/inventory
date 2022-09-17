@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Usuários
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Lista de Usuários
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table id="example" class="display nowrap" style="width:100%">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary mb-4"> + Novo Usuário</a>

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Função</th>
                                        <th>Data de Cadastro</th>
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Excluir</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($users as $user)

                                        <tr>
                                            <td class="text-center">{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                   class="text-success" style="text-decoration: none">
                                                    <i class="ti-pencil-alt" style="font-size: 19px"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('users.confirm',$user->id)}}" class="text-danger"
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
