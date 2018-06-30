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
            <table id="example-datatable" class="table table-vcenter table-striped table-condensed table-hover">
                <thead>
                    <tr>
                        <th class="text-center"><input type="checkbox"></th>
                        <th class="text-center"></th>
                        <th class="">Product</th>
                        <th class="text-center">Inventory</th>
                        <th class="text-center">Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $pkey => $product)
                        <tr>
                            <td class="text-center"><input type="checkbox"></td>
                            <td class="text-center"><img src="{{ asset('products').'/'.$product->photo->photo }}" alt="{{ $product->title }}" style="width: 70px"></td>
                            <td><a href="{{ url('/') }}/admin/product/{{ $product->id }}">{{ $product->title }}</a></td>
                            <td class="text-center">{{ $product->inventory }}</td>
                            <td class="text-center">{{ $product->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
