@extends('layouts.admin')

@section('product', 'active')

@section('content')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <span>Products</span>
                <span style="float: right;"><a href="{{ url('/') }}/admin/product/create" class="btn btn-primary btn-sm" style="font-size: 20px;">Add Product</a></i></span>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Products</li>
    </ul>

    <div class="block full">
        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center"><input type="checkbox"></th>
                        <th class="text-center">ID</th>
                        <th class="text-center"></th>
                        <th>Email</th>
                        <th>Subscription</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center">1</td>
                        <td class="text-center"><img src="{{ asset('admin-asset/img/placeholders/avatars/avatar15.jpg') }}" alt="avatar" class="img-circle"></td>
                        <td><span class="label label-info">Business</span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
