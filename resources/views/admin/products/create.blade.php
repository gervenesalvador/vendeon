@extends('layouts.admin')

@section('product', 'active')

@section('content')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i><small>Products</small><br>Add Product
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ url('/') }}/admin/products">General</a></li>
        <li>Add Product</li>
    </ul>

    <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="row">
            <div class="col-md-8">

                <div class="block">
                    <div class="form-group">
                        <label class="col-md-12" for="title">Title</label>
                        <div class="col-md-12">
                            <input type="text" id="title" name="title" class="form-control" placeholder="Short Sleeve T-shirt">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="description">Description</label>
                        <div class="col-md-12">
                            <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="block">
                    <h3>Images</h3>
                    <div class="form-group">
                        <div class="col-md-12 images">
                            <input type="file" id="images" name="images[]" class="form-control">
                        </div>
                        <a href="#" onclick="return false;" class="col-md-12 add-images">Add image</a>
                    </div>
                </div>

                <div class="block">
                    <h3>Pricing</h3>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-md-12" for="price">Price</label>
                            <div class="col-md-12">
                                <input type="text" id="price" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-12" for="compared_at_price">Compared at price</label>
                            <div class="col-md-12">
                                <input type="text" id="compared_at_price" name="compared_at_price" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block">
                    <h3>Inventory</h3>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-12" for="sku">SKU (Stock Keeping Unit)</label>
                                <div class="col-md-12">
                                    <input type="text" id="sku" name="sku" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-12" for="barcode">Barcode (ISBN, UPC, GTIN, etc.)</label>
                                <div class="col-md-12">
                                    <input type="text" id="barcode" name="barcode" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-12" for="is_track_stock">Inventory policy</label>
                                <div class="col-md-12">
                                    <select id="is_track_stock" name="is_track_stock" class="form-control">
                                        <option value="0">Don't track inventory</option>
                                        <option value="1">Shopify tracks this product's inventory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-12" for="stock">Quantity</label>
                                <div class="col-md-12">
                                    <input type="number" id="stock" name="stock" class="form-control" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block">
                    <h3>Variants</h3>
                    <p>Add variants if this product comes in multiple versions, like different sizes or colors.</p>
                    <div class="form-group">
                        <div class="row" class="variants_1">
                            <div class="col-md-4">
                                <label class="col-md-12" for="variants_1">Option Name</label>
                                <div class="col-md-12">
                                    <input type="text" id="variants_1" name="variants_1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-md-12" for="variants_1_values">Option Values</label>
                                <div class="col-md-12">
                                    <input type="text" id="variants_1_values" name="variants_1_values" class="form-control" placeholder="Seperate options with a comma">
                                </div>
                            </div>
                        </div>
                        <div class="row" class="variants_1">
                            <div class="col-md-4">
                                <label class="col-md-12" for="variants_2">Option Name</label>
                                <div class="col-md-12">
                                    <input type="text" id="variants_2" name="variants_2" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-md-12" for="variants_2_values">Option Values</label>
                                <div class="col-md-12">
                                    <input type="text" id="variants_2_values" name="variants_2_values" class="form-control" placeholder="Seperate options with a comma">
                                </div>
                            </div>
                        </div>
                        <div class="row" class="variants_1">
                            <div class="col-md-4">
                                <label class="col-md-12" for="variants_3">Option Name</label>
                                <div class="col-md-12">
                                    <input type="text" id="variants_3" name="variants_3" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="col-md-12" for="variants_3_values">Option Values</label>
                                <div class="col-md-12">
                                    <input type="text" id="variants_3_values" name="variants_3_values" class="form-control" placeholder="Seperate options with a comma">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block">
                    <h3>Search engine listing preview</h3>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="block">
                    <h3>Organization</h3>
                    <div class="form-group">
                        <label class="col-md-12" for="type">Product type</label>
                        <div class="col-md-12">
                            <input type="text" id="type" name="type" class="form-control" placeholder="Short Sleeve T-shirt">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="collections">Collections</label>
                        <div class="col-md-12">
                            <input type="text" id="collections" name="collections" class="form-control" placeholder="Short Sleeve T-shirt">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="tags">Tags</label>
                        <div class="col-md-12">
                            <input type="text" id="tags" name="tags" class="form-control" placeholder="Short Sleeve T-shirt">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>

@endsection

@push('scripts_vendor')
    <script src="{{ asset('admin-asset/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            CKEDITOR.replace('description');
        });

        $('.add-images').click(() => {
            $('.images').append(`<input type="file" id="images" name="images[]" class="form-control">`);
        });
    </script>
@endpush

@push('styles')
    <style type="text/css">
        .images input {
            margin-bottom: 10px;
        }
    </style>
@endpush