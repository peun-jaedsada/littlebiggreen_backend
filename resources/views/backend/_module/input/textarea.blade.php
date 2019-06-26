<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right">{{ $input_label }}</label>
    <div class="col-7">
        <textarea type="{{ isset($type) ? $type : 'text' }}" name="{{ $input_name }}" class="form-control" id="inputEmail3" placeholder="{{ $input_label }}">{{ isset($datas) ? $datas->{$input_name} :"" }}</textarea>
    </div>
</div>