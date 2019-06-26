@extends('backend.layouts.app')
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Blog Catagory Management'])
    <div class="card-box">
        <div class="row">
            <div class="col-6">Blog Catagory Management</div>
            <div class="col-6 text-right">
                <div class="btn-group mb-2">
                    <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action 
                    <i class="mdi mdi-chevron-down"></i></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('blog_catagory.create') }}">Create Blog Catagory</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <table id="tech-companies-1" class="table table-striped display-all">
            <thead>
                <tr>
                    <th >#</th>
                    <th>Alias Name</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $key=> $item)
                    <tr class="">
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->alias_name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="{{ route('blog_catagory.edit',$item->id) }}" class="btn btn-sm btn-warning waves-effect waves-light"><i class="fe-edit"></i></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal{{$item->id}}" class="btn btn-sm btn-danger waves-effect waves-light" onclick="deleteModal({{$item->id}})"><i class="fe-trash"></i></a>
                            @include('backend._module.modaldelete',['modal'=>'deleteModal'.$item->id,'modal_id'=>$item->id,'modal_title'=>$item->name ,'url_delete'=>route('blog_catagory.destroy',$item->id)])
                        </td>
                    </tr>
                @empty
                    <tr class="">
                        <td colspan="4" class="text-center">No Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection