@extends('admin.admin')

@section('admin_page_title')
    <title>admin page product manager</title>
@endsection

@section('admin_page_content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('templates.title',['title' => 'ADD','value' => 'Products'])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class = "col-md-12">
                        <a href="{{ route('menu.add') }}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class = "col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Other</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($products as $key => $value)--}}
{{--                                <tr>--}}
{{--                                    <th scope="col">{{ ++$key }}</th>--}}
{{--                                    <th scope="col">{!!  $value->name  !!}</th>--}}
{{--                                    <th scope="col">{!!  $value->price  !!}</th>--}}
{{--                                    <th scope="col">{!!  $value->feature_image_path  !!}</th>--}}
{{--                                    <th scope="col">{!!  $value["name"]  !!}</th>--}}
{{--                                    <th scope="col">--}}
{{--                                        <a href="{{ route('menu.edit',["id" => $value['id']]) }}" class="btn btn-outline-secondary">Edit</a>--}}
{{--                                        <a href="{{ route('menu.delete',["id" => $value['id']]) }}" class="btn btn-outline-danger">Delete</a>--}}
{{--                                    </th>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
