@extends('admin.admin')

@section('admin_page_title')
    <title>admin page product manager</title>
@endsection

@section('css')
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet"/>
@endsection

@section('admin_page_content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('templates.title',['title' => 'Product','value' => 'Add'])
        <!-- Main content -->
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label>Product Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter Product Name">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input name="price" type="text" class="form-control" placeholder="Enter Price">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input name="feature_image_path" type="file" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label>Details Image</label>
                                <input name="image[]" type="file" multiple class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label>Watting List</label><br>
                                <select class="form-control select2_init" name="parent_id">
                                    <option value='0'>Choose Product</option>
                                    {!! $option !!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Product Tags</label><br>
                                <select name="tags[]" class="form-control tag_select2" multiple="multiple"></select>
                            </div>


                        </div>
                        <div class="form-group col-md-12">
                            <label>Contents</label>
                            <textarea name="content" type="textarea" class="form-control my-editor"
                                      placeholder="Enter Contents" rows="10"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admins/product/add/add.js') }}"></script>
    <script src="{{ asset('vendor/select2/tinymce.min.js') }}"></script>
@endsection
