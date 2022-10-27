<div>
    <div class="form-group col-sm-12">
        @foreach ($preguntas as $pr)
            <div class="form-group col-sm-12">
                <label>{{ $pr->nombre }}</label>
                <div class="form-group col-sm-12">
                    @foreach ($respuestas as $r)
                        @if ($r->preguntas_id == $pr->id)
                            <div>
                                <label>
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
