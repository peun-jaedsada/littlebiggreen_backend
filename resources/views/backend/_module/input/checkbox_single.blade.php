<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right"></label>
    <div class="col-7">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="{{ $input_name }}" class="custom-control-input" id="{{ $input_id }}" value="{{ $input_name }}" @if( isset($check) && $check == $check_val ) checked @endif>
            <label class="custom-control-label" for="{{ $input_id }}">{{ $input_label }}</label>
        </div>
    </div>
</div>