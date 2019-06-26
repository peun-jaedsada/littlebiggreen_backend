@extends('backend.layouts.app')
@section('content')
    @include('backend.layouts.breadcrumb',['title'=>'Customer'])
    <div class="card-box">
        <div class="row">
            <div class="col-6">Customer</div>
            <div class="col-6 text-right">
            </div>
        </div>
        <hr>
        <table id="tech-companies-1" class="table table-striped display-all">
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($datas as $key=> $item)
                    <tr class="">
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
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