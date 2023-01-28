@extends('admin.admin')

@section('admin_page_title')
<title>admin page product manager</title>
@endsection

@section('admin_page_content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('templates.title',['title' => 'Product','value' => 'Add'])
        <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class = "col-md-6">
                <form action="{{ route('categories.store') }}" method = "post">
                  @csrf
                    <div class="form-group">
                        <label >Product Name</label>
                        <input name = "name" type="text" class="form-control"  placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label >Example select</label>
                        <select class="form-control" name = "parent_id">
                        <option value = '0'>Choose Product Level</option>
                        {!! $result !!}
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
          </div>
      </div>
    </div>
  </div>
@endsection
