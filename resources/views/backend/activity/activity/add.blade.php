@extends('backend.layouts.app')
@push('css')

@endpush
@push('js')
<script>
    $('.dropify').dropify();
</script>
@endpush
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Activity Management'])
    <div class="card-box">
        <h4 class="header-title">Create Activity</h4>
        <hr>
        <form class="form-horizontal" action="{{ route('activity.store') }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @include('backend._module.input.text',['input_name'=> 'meta_tag','input_label'=>'Activity Meta Tag'])
            @include('backend._module.input.text',['input_name'=> 'meta_title','input_label'=>'Activity Meta Title'])
            @include('backend._module.input.text',['input_name'=> 'meta_description','input_label'=>'Activity Meta Description'])
            <hr>
            @include('backend._module.input.text',['input_name'=> 'picture_thumbnail_id','input_label'=>'Activity Thumbnail Id'])
            @include('backend._module.input.text',['input_name'=> 'picture_thumbnail_alt','input_label'=>'Activity Thumbnail Alt'])
            @include('backend._module.input.text',['input_name'=> 'picture_thumbnail_title','input_label'=>'Activity Thumbnail Title'])
            @include('backend._module.input.uploadfile',['input_name'=> 'picture_thumbnail','input_label'=>'Activity Thumbnail'])
            <hr>
            @include('backend._module.input.text',['input_name'=> 'title','input_label'=>'Activity Title'])
            @include('backend._module.input.text',['input_name'=> 'sub_title','input_label'=>'Activity Sub Title'])
            @include('backend._module.input.datetime',['input_name'=> 'start_date','input_label'=>'Start Date'])
            @include('backend._module.input.datetime',['input_name'=> 'end_date','input_label'=>'End Date'])
            @include('backend._module.input.text_editor',['input_name'=> 'description','input_label'=>'Activity Description'])
            @include('backend._module.input.text',['input_name'=> 'picture_id','input_label'=>'Activity Picture Id'])
            @include('backend._module.input.text',['input_name'=> 'picture_alt','input_label'=>'Activity Picture Alt'])
            @include('backend._module.input.text',['input_name'=> 'picture_title','input_label'=>'Activity Picture Title'])
            @include('backend._module.input.uploadfile',['input_name'=> 'picture','input_label'=>'Activity Picture'])
            @include('backend._module.input.uploadfile',['input_name'=> 'picture_sm','input_label'=>'Activity Picture Mobile'])
            @include('backend._module.input.datetime',['input_name'=> 'publish_date','input_label'=>'Publish Date' ])
            <hr>
            @include('backend._module.input.checkbox_single',['input_name'=> 'status','input_label'=>'Active','input_id'=>'status_id'])
            @include('backend._module.btn.submit',['btn_label'=>'Save','class'=>'btn-success'])
        </form>
    </div>
@endsection