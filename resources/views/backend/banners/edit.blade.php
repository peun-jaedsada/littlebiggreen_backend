@extends('backend.layouts.app')
@push('css')

@endpush
@push('js')
<script>
    $('.dropify').dropify();
</script>
@endpush
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Banner Management'])
    <div class="card-box">
        <h4 class="header-title">Update Banner</h4>
        <hr>
        <form class="form-horizontal" action="{{ route('banner.update',$datas->id) }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('put')
            @include('backend._module.input.text',['input_name'=> 'banner_name','input_label'=>'Banner Name'])
            @include('backend._module.input.text',['input_name'=> 'banner_title','input_label'=>'Banner Title'])
            @include('backend._module.input.text',['input_name'=> 'banner_id','input_label'=>'Banner Picture Id'])
            @include('backend._module.input.text',['input_name'=> 'banner_alt','input_label'=>'Banner Picture Alt'])
            @include('backend._module.input.text',['input_name'=> 'banner_link','input_label'=>'Banner Picture Link','other'=>'not require'])
            @include('backend._module.input.uploadfile',['input_name'=> 'banner_img','input_label'=>'Banner Picture','url_picture'=>asset('upload_img/banner/'.$datas->banner_img)])
            @include('backend._module.input.uploadfile',['input_name'=> 'banner_img_sm','input_label'=>'Banner Picture Sm','url_picture'=>asset('upload_img/banner/'.$datas->banner_img_sm)])
            @include('backend._module.btn.submit',['btn_label'=>'Save','class'=>'btn-success'])
        </form>
    </div>
@endsection