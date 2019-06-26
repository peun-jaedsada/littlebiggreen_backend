@extends('backend.layouts.app')
@push('css')

@endpush
@push('js')
<script>
    $('.dropify').dropify();
</script>
@endpush
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Blog Catagory Management'])
    <div class="card-box">
        <h4 class="header-title">Create Blog Catagory</h4>
        <hr>
        <form class="form-horizontal" action="{{ route('blog_catagory.update',$datas->id) }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('put')
            @include('backend._module.input.text',['input_name'=> 'name','input_label'=>'Name'])
            @include('backend._module.input.text',['input_name'=> 'alias_name','input_label'=>'Alias Name'])
            @include('backend._module.input.colorpicker',['input_name'=> 'color','input_label'=>'Color'])
            @include('_module.input.checkbox_single',['input_name'=> 'blog_highlight','input_label'=>'Blog Hightlight','input_id'=>'status_id1'])
            @include('backend._module.input.checkbox_single',['input_name'=> 'status','input_label'=>'Active','input_id'=>'status_id','check'=>1,'check_val'=>$datas->status])
            @include('backend._module.btn.submit',['btn_label'=>'Save','class'=>'btn-success'])
        </form>
    </div>
@endsection