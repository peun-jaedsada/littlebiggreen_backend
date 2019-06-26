<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <a href="{{ \URL::previous() }}" class="btn btn-dark waves-effect waves-light">Back</a>
        <button type="submit" class="btn {{isset($class) ? $class : 'btn-info'}} waves-effect waves-light" id="btn-submit">
            <span id="span-submit">{{ $btn_label }}</span>
            <span id="span-spinner">
                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true">
                </span>
                Loading...
            </span>
        </button>
    </div>
</div>