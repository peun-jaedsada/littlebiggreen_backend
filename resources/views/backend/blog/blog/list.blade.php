@extends('backend.layouts.app')
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Blog Management'])
    <div class="card-box">
        <div class="row">
            <div class="col-6">Blog Management</div>
            <div class="col-6 text-right">
                <div class="btn-group mb-2">
                    <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action 
                    <i class="mdi mdi-chevron-down"></i></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('blog.create') }}">Create Blog</a>
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
                <th>#</th>
                <th>Blog Title</th>
                <th>Blog Subtitle</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($datas as $key=> $item)
                    <tr class="">
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->blog_title }}</td>
                        <td>{{ $item->blog_subtitle }}</td>
                        <td>{{ $item->status == 1 ? 'Active' : 'InActive' }}</td>
                        <td>
                            <a href="{{ route('blog.edit',$item->id) }}" class="btn btn-sm btn-warning waves-effect waves-light"><i class="fe-edit"></i></a>
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