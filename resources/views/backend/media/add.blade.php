@extends('backend.layouts.app')
@push('css')

@endpush
@push('js')
<script>
    $('.dropify').dropify();
</script>
@endpush
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Video Management'])
    <div class="card-box">
        <h4 class="header-title">Create Video</h4>
        <hr>
        <form class="form-horizontal" action="{{ route('video.store') }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @include('backend._module.input.text',['input_name'=> 'youtube_link','input_label'=>'Youtube Link'])
            @include('backend._module.input.text',['input_name'=> 'seo_id','input_label'=>'Seo ID'])
            @include('backend._module.input.text',['input_name'=> 'seo_title','input_label'=>'SEO Titie'])
            {{-- @include('backend._module.input.textarea',['input_name'=> 'seo_title','input_label'=>'SEO Description']) --}}
            <hr>
            @include('backend._module.input.text',['input_name'=> 'title','input_label'=>'Title'])
            @include('backend._module.input.text_editor',['input_name'=> 'description','input_label'=>'Description'])
            @include('backend._module.input.datetime',['input_name'=> 'publish_date','input_label'=>'Publish Date'])
            @include('backend._module.input.checkbox_single',['input_name'=> 'status','input_label'=>'Active','input_id'=>'status_id'])
            @include('backend._module.btn.submit',['btn_label'=>'Save','class'=>'btn-success'])
        </form>
    </div>
@endsection