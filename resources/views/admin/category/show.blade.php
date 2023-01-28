@extends('admin.admin')

@section('admin_page_title')
<title>admin page product manager</title>
@endsection

@section('admin_page_content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('templates.title',['title' => 'Product','value' => 'List'])
        <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class = "col-md-12">
                <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Add</a>
              </div>
                <div class = "col-md-12">
                <a href="{{ route('categories.show_deleted') }}" class="btn btn-primary float-right m-2">Show Deleted</a>
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

                    @foreach($categories as $key => $value)
                    <tr>
                      <td>{{ $key +1 }}</td>
                      <td>{{ $value['name'] }}</td>
                      <td>
                        <a href=" {{ route('categories.edit',['id' => $value->id]) }}" class="btn btn-outline-secondary">Edit</a>
                        <a href=" {{ route('categories.delete',['id' => $value->id]) }}" class="btn btn-outline-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{ $categories->links() }}
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
