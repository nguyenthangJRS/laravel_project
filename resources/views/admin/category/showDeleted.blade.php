@extends('admin.admin')

@section('admin_page_title')
    <title>admin page product manager</title>
@endsection

@section('admin_page_content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('templates.title',['title' => 'Product','value' => 'Deleted List'])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class = "col-md-12">
                        <a href="{{ route('categories.show') }}" class="btn btn-secondary float-right m-2">Back</a>
                    </div>
                    <div class = "col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($deleted_categories as $key => $value)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.restore',$value->id) }}" class="btn btn-outline-secondary">Restore</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
{{--                    {{ $deleted_categories->links() }}--}}
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
