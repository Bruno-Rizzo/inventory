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
                        Editar Função
                    </div>

                    <div class="card-body">
                        
                        <form action="{{ route('roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" name="name" value="{{ $role->name }}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">  Editar</button>
                                </div>
                            </div>
                        
                        </form>

                    </div>

                </div>

            </div>
            
        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        Associar Permissão
                    </div>

                    <div class="card-body">
                        
                        <form action="{{ route('roles.permissions',$role->id) }}" method="POST">
                            @csrf
                           
                            <div class="col-12">

                                <div class="row">

                                    @foreach ($permissions as $permission)

                                    <div class="col-sm-3 mb-3">
                                    
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="{{$permission->id}}"
                                                name="permissions[]" value="{{$permission->id}}"
                                                @checked($role->hasPermission($permission->name))>
                                            <label class="form-check-label"  for="{{$permission->id}}" >{{$permission->name}}</label>
                                        </div>
                                    
                                    </div>

                                    @endforeach
                          
                                </div>

                            </div>

                            <div class="form-group row mt-2 mb-2">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">Associar</button>
                                    <a href="{{ route('roles.index') }}" class="btn btn-sm btn-secondary">
                                        Voltar
                                    </a>
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
