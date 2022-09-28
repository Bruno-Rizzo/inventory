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
                            Visualizar Log
                        </div>

                        <div class="card-body mt-2">

                            <form>

                                <div class="row mb-3">
                                  <label class="col-sm-3 col-form-label">Classe Auditada</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control" value="{{$audit[0]->auditable_type}}">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label class="col-sm-3 col-form-label">Usuário Responsável</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control" value="{{$user[0]->name}}">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label class="col-sm-3 col-form-label">Evento</label>
                                  <div class="col-sm-4">
                                    <input type="text" class="form-control" 

                                        @if( $audit[0]->event == 'created' )
                                            value="{{'Cadastro'}}"
                                        @elseif($audit[0]->event == 'updated'){
                                            value="{{'Edição'}}"
                                        @else
                                        value="{{'Exclusão'}}"
                                        @endif
                                        
                                       >
                                  </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Id Auditado</label>
                                    <div class="col-sm-2">
                                      <input type="text" class="form-control" value="{{$audit[0]->auditable_id}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Valores Anteriores</label>
                                    <div class="col-sm-7">
                                      <textarea rows="3" class="form-control">{{$audit[0]->old_values}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Novos Valores</label>
                                    <div class="col-sm-7">
                                      <textarea rows="3" class="form-control">{{$audit[0]->new_values}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Url</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" value="{{$audit[0]->url}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Data</label>
                                    <div class="col-sm-4">
                                      <input type="text" class="form-control" value="{{$audit[0]->created_at}}">
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
