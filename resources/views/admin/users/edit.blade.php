@extends('admin.app')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit user</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {{ Form::model($user, ['route' => ['users.update', $user->id], 'role' => 'form', 'method' => 'put','files' => true]) }}
                    {{ Form::hidden('csrf_token', Session::token()) }}
                    {{ Form::hidden('id', $user->id) }}
                    
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Write name']) }}
                                {!! $errors->first('name','<span class="alert-danger">:message</span>') !!}

                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Skriv email']) }}
                                {!! $errors->first('email','<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('users.index') }}" class="btn btn-warning"><b>Go back</b></a>
                        </div>
                    {{ Form::close() }}
                </div>
                <!-- /.box -->
           </div>
           <div class="col-md-4">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Image</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <img src="{!! route('getuserimage', ['user_id' => $user->id, 'filename' => $user->image]) !!}" alt="{{ $user->name }}" title="{{ $user->name }}" style="width:100%">
                    </div>
                        <!-- /.box-body -->
                </div>
                <!-- /.box -->
           </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                @if (count($errors) > 0)
                <div class="box box-primary">
                        <strong>ERROR</strong> There were following erros in the update.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
           </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
