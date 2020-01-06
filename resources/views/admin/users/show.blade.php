@extends('admin.app')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-6">                  
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{ $user->name }}</h3>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right">{{ $user->email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Created</b> <a class="pull-right">{{ $user->created_at }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Updated</b> <a class="pull-right">{{ $user->updated_at }}</a>
                            </li>
                        </ul>
                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
                        <a href="{{ route('users.index') }}" class="btn btn-warning btn-block"><b>Go back</b></a>
                    </div>
                </div>
           </div>
           <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Image</h3>
                </div>
                <img src="{!! route('getuserimage', ['user_id' => $user->id, 'filename' => $user->image]) !!}" alt="User profile picture" title="{{ $user->name }}" style="width:50%">
            </div>
       </div>
    </div>
    <!-- /.content -->
@endsection
