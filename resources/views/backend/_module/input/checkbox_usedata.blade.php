
<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right">{{ isset($input_label) ? $input_label : '' }}</label>
    <div class="col-7">
        @foreach ($checkboxdata as $key => $checkbox)
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="{{ $input_name }}[]" class="custom-control-input" id="{{ $input_id }}{{ $key+1 }}" 
                {{-- <input type="checkbox" name="{{ $input_name }}[]" ng-checked="Inputchecked({{ $checkbox->id }})" class="custom-control-input" id="{{ $input_id }}{{ $key+1 }}"  --}}
                    value="{{ $checkbox->id }}" 
                    @if(isset($checkval))
                    @foreach($checkval as $check)
                        {{ isset($check) && isset($check) && $check->{$checkcolumn} == $checkbox->id ? 'checked' : '' }}
                    @endforeach
                    @endif
                >
                <label class="custom-control-label" for="{{ $input_id }}{{ $key+1 }}">{{ $checkbox->{$value} }}</label>
            </div>
        @endforeach
    </div>
</div>