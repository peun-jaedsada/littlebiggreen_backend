<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right">Associated Permissions</label>
    <div class="col-7">
        <select class="form-control" name="{{ $ngmodel }}" {{ isset($ngmodel) ?  "ng-model=$ngmodel" : '' }}  {{ isset($attr) ? $attr : '' }}>
            <option value="" disabled>Please Select</option>
            @foreach ($selectOption as $key => $option)
                <option value="{{ $key+1 }}" >{{ $option }}</option>
            @endforeach
        </select>
    </div>
</div>