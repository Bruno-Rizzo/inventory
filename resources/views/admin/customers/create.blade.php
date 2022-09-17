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
                        Cadastrar Cliente
                    </div>

                    <div class="card-body">
                        
                        <form action="{{route('customers.store')}}" method="POST">
                            @csrf

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" placeholder="Nome" name="name" value="{{old('name')}}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Celular</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" placeholder="Celular" name="mobile"  value="{{old('email')}}">
                                    @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control form-control" placeholder="Email" name="email"  value="{{old('email')}}">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label col-form-label">Endereço</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" placeholder="Endereço" name="address"  value="{{old('email')}}">
                                    @error('address') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-sm btn-primary">  Cadastrar</button>
                                    <a href="{{route('customers.index')}}" class="btn btn-sm btn-secondary">  Voltar</a>
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
