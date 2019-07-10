@extends('backend.layouts.app')
@push('css')

@endpush
@push('js')
<script>
    $('.dropify').dropify();
</script>
@endpush
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Blog Management'])
    <div class="card-box">
        <h4 class="header-title">Create Blog</h4>
        <hr>
        <form class="form-horizontal" action="{{ route('blog.store') }}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="form-group row mb-3">
                <label for="inputEmail3" class="col-3 col-form-label text-right">Blog Catagory</label>
                <div class="col-7">
                    <select class="form-control" name="catagory_id">
                        <option value="" disabled selected>Please Select</option>
                        @foreach ($catagories as $key => $catagory)
                            <option value="{{ $catagory->id }}" >{{ $catagory->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
            @include('backend._module.input.text',['input_name'=> 'blog_meta_tag','input_label'=>'Blog Meta Tag'])
            @include('backend._module.input.text',['input_name'=> 'blog_meta_title','input_label'=>'Blog Meta Title'])
            @include('backend._module.input.text',['input_name'=> 'blog_meta_description','input_label'=>'Blog Meta Description'])
            <hr>
            @include('backend._module.input.text',['input_name'=> 'blog_picture_id_thumbnail','input_label'=>'Blog Thumbnail Id'])
            @include('backend._module.input.text',['input_name'=> 'blog_picture_alt_thumbnail','input_label'=>'Blog Thumbnail Alt'])
            @include('backend._module.input.text',['input_name'=> 'blog_picture_title_thumbnail','input_label'=>'Blog Thumbnail Title'])
            {{-- @include('backend._module.input.text',['input_name'=> 'blog_link','input_label'=>'Blog Link','other' => 'Not Requeire']) --}}
            @include('backend._module.input.uploadfile',['input_name'=> 'blog_picture_thumbnail','input_label'=>'Blog Thumbnail'])
           
            <hr>
            @include('backend._module.input.text',['input_name'=> 'blog_title','input_label'=>'Blog Title'])
            @include('backend._module.input.text',['input_name'=> 'blog_subtitle','input_label'=>'Blog Sub Title'])
            @include('backend._module.input.text_editor',['input_name'=> 'blog_description','input_label'=>'Blog Description'])
            @include('backend._module.input.text',['input_name'=> 'blog_picture_id','input_label'=>'Blog Picture Id'])
            @include('backend._module.input.text',['input_name'=> 'blog_picture_alt','input_label'=>'Blog Picture Alt'])
            @include('backend._module.input.text',['input_name'=> 'blog_picture_title','input_label'=>'Blog Picture Title'])
            {{-- @include('backend._module.input.text',['input_name'=> 'blog_link','input_label'=>'Blog Link','other' => 'Not Requeire']) --}}
            @include('backend._module.input.uploadfile',['input_name'=> 'blog_picture','input_label'=>'Blog Picture'])
            @include('backend._module.input.uploadfile',['input_name'=> 'blog_picture_sm','input_label'=>'Blog Picture Mobile'])
            @include('backend._module.input.checkbox_single',['input_name'=> 'blog_highlight','input_label'=>'Blog Hightlight','input_id'=>'status_id1'])
            
            <hr>
            @include('backend._module.input.text',['input_name'=> 'blog_rewrite','input_label'=>'Blog Rewrite Url'])
            @include('backend._module.input.checkbox_single',['input_name'=> 'status','input_label'=>'Active','input_id'=>'status_id'])
            @include('backend._module.btn.submit',['btn_label'=>'Save','class'=>'btn-success'])
        </form>
    </div>
@endsection