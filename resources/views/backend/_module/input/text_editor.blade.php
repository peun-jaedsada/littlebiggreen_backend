<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right">{{ $input_label }}</label>
    <div class="col-7">
        <textarea id="my-editor" name="{{ $input_name }}" class="form-control">@if(isset($datas->{$input_name})){!! $datas->{$input_name} !!} @endif</textarea>
    </div>
</div>