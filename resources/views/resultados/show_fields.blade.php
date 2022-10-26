<div class="card">
                <div class="card-body">
                    <div>
                        <div class="form-group
                        col-sm-12">
                            @foreach ($preguntas as $pr)
                                <div class="form-group
                                col-sm-12">
                                    <label>{{ $pr->nombre }}</label>
                                    <div class="form-group
                                    col-sm-12">
                                        @foreach ($respuestas as $r)
                                            @if ($r->preguntas_id == $pr->id)
                                                <div>
                                                    <label>
                                                        {!! Form::checkbox('respuestas[]', $r->id, null, ['class' => 'mr-1']) !!}
                                                        {{ $r->opcion }}
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

