@extends('layouts.app')

@section('content')

    <div class="main-content">

        <div class="title">
            Senha
        </div>
    
        <div class="content-wrapper">
    
            <div class="row">
    
                <div class="col-md-12">
    
                    <div class="card">
    
                        <div class="card-header">
                            Alterar Senha
                        </div>
    
                        <div class="card-body">
                            
                            <form action="{{route('profile.update.password', Auth::id())}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row mb-2">
                                    <label class="col-sm-3 col-form-label col-form-label">Senha Atual</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" placeholder="Senha Atual" name="oldPassword">
                                        @error('oldPassword') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-sm-3 col-form-label col-form-label">Nova Senha</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" placeholder="Nova Senha" name="password">
                                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label col-form-label">Confirma Senha</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" placeholder="Confirma Senha" name="confirmPassword">
                                        @error('confirmPassword') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

                               
                                <div class="row mb-2">
                                    <label class="col-sm-3 col-form-label col-form-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-sm btn-primary">Alterar Senha</button>
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