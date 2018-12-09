<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ $person->nome or ''}}" >
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ $person->email or ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('genero') ? 'has-error' : ''}}">
    <label for="genero" class="control-label">{{ 'Genero' }}</label>
    <input class="form-control" name="genero" type="text" id="genero" value="{{ $person->genero or ''}}" >
    {!! $errors->first('genero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aniversarioData') ? 'has-error' : ''}}">
    <label for="aniversarioData" class="control-label">{{ 'Aniversariodata' }}</label>
    <input class="form-control" name="aniversarioData" type="date" id="aniversarioData" value="{{ $person->aniversarioData or ''}}" >
    {!! $errors->first('aniversarioData', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
