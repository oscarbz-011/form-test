@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Encuesta Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"

                        href="{{ route('encuestas.index') }}">
                        Back

                    </a>
                    <div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"

                    href="{{ route('preguntas.create') }}">
                    Agregar preguntas

                    </a>
                </div>
            </div>
                </div>

            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('encuestas.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
