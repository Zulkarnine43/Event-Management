@extends('admin.mainmenu')
@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('main_content')

    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-md-12"> --}}
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Concert List </h3>
                            </div>

                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ url('create-concert') }}">Create Concert</a>
                            </div>
                            <div class="col-md-12">
                                @if (session('success'))
                                    <span class="alert alert-success d-block" role="alert">
                                        <strong>{{ session('success') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- /.card-header -->

                <div class="card-body">
                    <table id="example" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Event Date</th>
                                <th>Name</th>
                                <th>Venu</th>
                                <th>Total Seat</th>
                                <th>Available Seat</th>
                                <th>Cost</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->xdate }}</td>
                                        <td>{{ $item->xname }}</td>
                                        <td>{{ $item->xvenu }}</td>
                                        <td>{{ $item->xseat }}</td>
                                        <td>{{ $item->xseat-$item->zseat }}</td>
                                        <td>{{ $item->xcost }} Tk</td>



                                        <td>
                                            <a href='concert-edit-form/{{ $item->xcode }}' class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href='concert-delete/{{ $item->xcode }}' class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset


                        </tbody>

                    </table>
                </div>

            </div>{{-- card end --}}
            {{-- </div> --}}
        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
