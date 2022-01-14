@extends('admin.mainmenu')

@section('main_content')

    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-md-12"> --}}
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Message List </h3>
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
                    <h3>Unread SMS</h3>
                    <table id="example" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Last Time</th>
                                <th>Name</th>
                                <th>Total New Sms</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($newData[0]))
                                @foreach ($newData as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ztime }}</td>
                                        <td>{{ $item->xname }}</td>
                                        <td>{{ $item->unread }}</td>
                                        <td>
                                            <a href='{{ route('view-message',[$item->user_id ]) }}' class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr class="text-center">
                                <td colspan="5">No New Sms Found!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                    <hr>
                    <h3 class="mt-5">ALL SMS</h3>
                    <table id="example" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Last Time</th>
                                <th>Name</th>
                                <th>Total Sms</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($allData[0]))
                                @foreach ($allData as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ztime }}</td>
                                        <td>{{ $item->xname }}</td>
                                        <td>{{ $item->tot }}</td>
                                        <td>
                                            <a href='{{ route('view-message',[$item->user_id ]) }}' class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr class="text-center">
                                <td colspan="4">No New Sms Found!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>{{-- card end --}}
            {{-- </div> --}}
        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

@endsection


