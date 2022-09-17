@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Senhas
    </div>

    <div class="content-wrapper">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Pesquisar Usuário
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('users.find')}}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" placeholder="Nome" name="name" value="{{old('name')}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">  Pesquisar</button>
                                </div>
                            </div>
                        
                        </form>

                    </div>

                </div>

            </div>
            
        </div>

        @isset($users)
        
        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Resultado da Pesquisa
                    </div>

                    <div class="card-body">
                        
                        <table class="table datatables" id="dataTable-1">
                                            
                            <thead>

                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Função</th>
                                    <th class="text-center">Visualizar</th>
                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($users as $user)

                                    <tr>
                                        <td class="text-center">{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role->name }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('users.show', $user->id) }}"
                                            class="text-success" style="text-decoration: none">
                                                <i class="ti-user" style="font-size: 19px"></i>
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

        @endisset

    </div>

</div>

@endsection
