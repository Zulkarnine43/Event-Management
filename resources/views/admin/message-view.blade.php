@extends('admin.mainmenu')

@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Message Box</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ route('message-list') }}">Message List</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <form method="post" action='{{ route('save-sms-admin') }}' class="border border-primary">
                    @csrf
                    <div class="card-body">
                        @if ($errors->any())
                            <span class="alert alert-danger d-block" role="alert">
                                <strong>{{ $errors->first() }}</strong>
                            </span>
                        @endif
                        
                        @if(isset($data[0]))
                            @foreach ($data as $item)
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        @if($item->sender=='Admin')
                                            <h4>Admin</h4>
                                        @else
                                            <h4>{{$item->xname}}</h4>
                                        @endif
                                        <p>{{$item->sms}}</p>
                                    </div>
                                    <div class="form-group col-md-2 text-right">
                                        {{date("jS F",strtotime($item->ztime))}}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        
                           
                       
                        <div class="form-row">
                            
                            <input type="hidden" name="user_id" value="{{$data[0]->user_id}}">

                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="text" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add" class="btn btn-primary form-control">Send</button>
                    </div>
                </form>
            </div>{{-- card end --}}

        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection

