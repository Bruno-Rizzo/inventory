@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="title">
        Dashboard
    </div>

    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="mb-2">
                            <i class="ti-user me-2"></i>
                            USUÁRIOS
                        </div>
                        <div class="text-center" style="font-size:25px">
                            {{$users}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="mb-2">
                            <i class="ti-view-list-alt me-2"></i>
                            FUNÇÕES
                        </div>
                        <div class="text-center" style="font-size:25px">
                            {{$roles}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="mb-2">
                            <i class="ti-lock me-2"></i>
                            PERMISSÕES
                        </div>
                        <div class="text-center" style="font-size:25px">
                            {{$permissions}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="mb-2">
                            <i class="ti-shield me-2"></i>
                            ADMINISTRADOR
                        </div>
                        <div class="text-center" style="font-size:25px">
                           {{$admin}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
