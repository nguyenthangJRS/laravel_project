@extends('admin.admin')

@section('admin_page_title')
<title>admin page product manager</title>
@endsection

@section('admin_header_page_content')

@endsection

@section('admin_page_content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @include('templates.title',['title' => 'Home','value' => ''])
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
