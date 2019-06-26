<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right">{{ $input_label }}</label>
    <div class="col-7">
        <input type="{{ isset($type) ? $type : 'text' }}" name="{{ $input_name }}" class="form-control" id="inputEmail3" placeholder="{{ $input_label }}" value="{{ isset($datas) ? $datas->{$input_name} : "" }}">
        @if(isset($other))
            <small id="emailHelp" class="form-text text-muted" style="color:#E36C6C !important">{{ $other }}</small>
        @endif
    </div>
</div>