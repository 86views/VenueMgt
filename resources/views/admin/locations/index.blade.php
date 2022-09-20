@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-success" href="{{ route("admin.locations.create") }}">
                        Create
                     </a>
                     <br> 
                
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Locations</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Photo</th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($locations as $key =>  $location)
                                    <tr data-entry-id="{{ $location->id }}">
                                        <td>
            
                                        </td>
                                    <tr>
                                        <td>{{ $location->id }}</td>
                                        <td>{{ $location->name }}</td>
                                        <td> {{ $location->slug }}</td>
                                        <td> @if($location->photo)
                                            <a href="{{ $location->photo->getUrl() }}" target="_blank">
                                                <img src="{{ $location->photo->getUrl('thumb') }}" width="50px" height="50px">
                                            </a>
                                        @endif</td>
                                        <td> 
                                            <a class="btn btn-xs btn-primary"
                                                href="{{ route('admin.locations.show', $location->id) }}"> View </a>
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.locations.edit', $location->id) }}">
                                                   Edit
                                                </a>
                                            <a class="btn btn-xs btn-danger"> Delete </a>
                                        </td>
                                    </tr>
                                </tbody>
                                 @endforeach
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>

                                        <th>Slug</th>
                                        <th>Photo</th>
                                        <th> Action </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
@endsection
