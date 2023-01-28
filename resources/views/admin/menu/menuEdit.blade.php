@extends('admin.admin')

@section('admin_page_title')
    <title>admin page product manager</title>
@endsection

@section('admin_page_content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('templates.title',['title' => 'Menu','value' => 'Edit'])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class = "col-md-6">
                        <form action="{{ route('menu.update',["id" => $data["data"]->id]) }}" method = "post">
                            @csrf
                            <div class="form-group">
                                <label >Menu Name</label>
                                <input value = '{{ $data["data"]->name }}' name = "name" type="text" class="form-control"  placeholder="Enter Menu Name">
                            </div>
                            <div class="form-group">
                                <label >Menu level select</label>
                                <select class="form-control" name = "parent_id">
                                    <option value = '0'>Choose Menu Level</option>
                                    {!! $data["option"] !!}
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
