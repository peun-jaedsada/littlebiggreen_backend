<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right">{{ $input_label }}</label>
    <div class="col-7">
        <input type="text" id="" class="form-control datetime-datepicker" name="{{ $input_name }}" placeholder="{{$input_label}}" value="{{ isset($datas->{$input_name}) ? $datas->{$input_name} : '' }}">
    </div>
</div>