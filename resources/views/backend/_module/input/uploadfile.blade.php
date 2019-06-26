<div class="form-group row mb-3">
    <label for="inputEmail3" class="col-3 col-form-label text-right">{{ $input_label }}</label>
    <div class="col-7">
        <input type="file" class="dropify" @if(isset($datas)) data-default-file="{{ isset($datas) ? $url_picture : "" }}" @endif data-height="300" name="{{ $input_name }}">
    </div>
</div>