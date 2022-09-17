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
                        Editar Usuário
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('users.password',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" value="{{$user->name}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control" value="{{$user->email}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Função</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control" value="{{$user->role->name}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label col-form-label">Nova Senha</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control" placeholder="Nova Senha" name="password">
                                    @error('password') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary"> Editar</button>
                                    <a href="{{route('users.index')}}" class="btn btn-sm btn-secondary"> Voltar</a>
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