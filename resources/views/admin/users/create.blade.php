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
                        Cadastrar Usuário
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('users.store')}}" method="POST">
                            @csrf

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" placeholder="Nome" name="name" value="{{old('name')}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control" placeholder="Email" name="email"  value="{{old('email')}}">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Senha</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control" placeholder="Senha" name="password" value="{{old('password')}}">
                                    @error('password') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Função</label>
                                <div class="col-sm-6">
                                    <select  class="form-select mb-3" name="role_id">
                                        <option value="" >Selecione uma opção</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}">
                                                {{$role->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('role_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">  Cadastrar</button>
                                    <a href="{{route('users.index')}}" class="btn btn-sm btn-secondary">  Voltar</a>
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
