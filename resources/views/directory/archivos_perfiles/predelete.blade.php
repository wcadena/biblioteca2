@extends('adminlte::layouts.app')
@section('contentheader_title', trans('todo.p4ar2'))
@section('contentheader_description', trans('todo.p4ar2b'))

@section('main-content')

{!! Form::open([
    'method'=>'DELETE',
    'url' => ['admin/archivos_perfiles', $archivos_perfile->id],
    'style' => 'display:inline'
]) !!}

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{!! trans('archivos_perfiles.heading_predelete') !!}</div>
                <div class="panel-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>{!! Form::checkbox('confirm', '1') !!} <span>{!! trans('archivos_perfiles.label_confirmdelete') !!}</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="{{ url('admin/archivos_perfiles') }}" class="btn btn-default">{!! trans('archivos_perfiles.button_cancel') !!}</a>
                            &nbsp;
                            {!! Form::submit(trans('archivos_perfiles.button_delete'), ['class' => 'btn btn-danger']) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@endsection