@extends('admin.app')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="box-body">
                        @if (session('user_updated'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> User updated!</h4>
                                {{ session('user_updated') }}
                            </div>                    
                        @endif
                            <table class="table table-striped table-hover table-dark table-bordered user-table">
                                <tr>
                                    <th style="width: 5px">#</th>
                                    <th style="width: 20%">Name</th>
                                    <th style="width: 20%">Email</th>
                                    <th>Created at</th>
                                    <th>updated at</th>
                                    <th align="center">Edit</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <a href="{{ route('users.edit',$user->id) }}">{{ $user->name }}</a>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td align="center" valign="top">
                                                {{ Form::open(array('method' => 'delete', 'route' => array('users.destroy',$user->id), 'accept-charset' => 'utf-8', 'id' => 'delete_user_'.$user->id, 'onSubmit' => 'return confirmDelete()')) }}
                                                    {{ Form::hidden('csrf_token', Session::token()) }}                     <!-- <a href="javascript:{}" class="fa fa-trash-o" onclick="document.getElementById('delete_user_{{$user->id}}').submit();"></a> -->
                                                    <button type="submit" name="button" class="btn btn-dark btn-sm">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>    
                                                    <button class="btn btn-dark btn-sm" >
                                                        <a href="{{ route('users.edit',$user->id) }}" class="fa fa-pencil"></a>
                                                    </button>
                                                    <button class="btn btn-dark btn-sm">
                                                        <a href="{{ route('users.show',$user->id) }}" class="fa fa-eye"></a>
                                                    </button>                                        
                                                {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function confirmDelete() {
            return confirm('Are you sure you want to delete this user?');
        }
    </script>
    <!-- /.content -->
@endsection
