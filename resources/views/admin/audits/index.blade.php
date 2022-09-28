@extends('layouts.app')

@section('content')
    <div class="main-content">

        <div class="title">
            Auditoria
        </div>

        <div class="content-wrapper">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header">
                            Pesquisar Evento
                        </div>

                        <div class="card-body mt-2">

                            <form action="{{ route('audits.find') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <label class="col-sm-2 col-form-label col-form-label text-center">Início</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control" name="date_initial">
                                        @error('date_initial')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="col-sm-2 col-form-label col-form-label text-center">Término</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control" name="date_final">
                                        @error('date_final')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <button type="submit" class="btn btn-sm btn-primary"> Pesquisar</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

            @isset($audits)

            <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header">
                            Resultado da Pesquisa
                        </div>

                        <div class="card-body">

                            <table id="example" class="display nowrap" style="width:100%">

                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Evento</th>
                                        <th>Autor</th>
                                        <th>Classe</th>
                                        <th class="text-center">Visualizar</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($audits as $audit)

                                    <tr>
                                        <td class="text-center">{{$audit->id}}</td>
                                        <td>{{$audit->event}}</td>
                                        <td>{{$audit->user_id}}</td>
                                        <td>{{$audit->auditable_type}}</td>
                                        <td class="text-center">
                                            <a href="{{route('audits.show',$audit->id)}}" target="_blank" class="text-success" style="text-decoration: none">
                                                <i class="ti-comment-alt" style="font-size: 19px"></i>
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
