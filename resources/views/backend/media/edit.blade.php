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
        <h4 class="header-title">Update Video</h4>
        <hr>
        <form class="form-horizontal" action="{{ route('video.update',$datas->id) }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('put')
            @include('backend._module.input.text',['input_name'=> 'youtube_link','input_label'=>'Youtube Link'])
            @include('backend._module.input.text',['input_name'=> 'seo_id','input_label'=>'Seo ID'])
            @include('backend._module.input.text',['input_name'=> 'seo_title','input_label'=>'SEO Titie'])
            <hr>
            @include('backend._module.input.text',['input_name'=> 'title','input_label'=>'Title'])
            @include('backend._module.input.text_editor',['input_name'=> 'description','input_label'=>'Description'])
            @include('backend._module.input.datetime',['input_name'=> 'publish_date','input_label'=>'Publish Date'])
            @include('backend._module.input.checkbox_single',['input_name'=> 'status','input_label'=>'Active','input_id'=>'status_id','check'=> 1,'check_val'=>$datas->status])
            @include('backend._module.btn.submit',['btn_label'=>'Save','class'=>'btn-success'])
        </form>
    </div>
@endsection