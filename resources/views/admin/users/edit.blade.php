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
                        
                        <form action="{{route('users.update',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" name="name" value="{{$user->name}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control" name="email" value="{{$user->email}}">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Função</label>
                                <div class="col-sm-6">
                                    <select  class="form-select mb-3" name="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}" @selected($role->id == $user->role_id)>
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
