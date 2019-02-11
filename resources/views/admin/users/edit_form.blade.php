@extends('layouts.master')

@section('content')
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">編集</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal" method="post" action="{{ action('Admin\UsersController@showEditConfirm', [$user->id]) }}">
      {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">＃</label>
            <div class="col-sm-10">
              {{ $user->id }}
            </div>
        </div>
        
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Name</label>

          <div class="col-sm-10{{$errors->has('name') ? ' has-error' : '' }}">
            @if ($errors->has('name'))
              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</label>
            @endif
            <input type="text" class="form-control" id="inputName" placeholder="山田太郎" name="name" value="{{ old('name', $user->name) }}">
          </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    
            <div class="col-sm-10{{$errors->has('email') ? ' has-error' : '' }}">
              @if ($errors->has('email'))
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>
              @endif
              <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email', $user->email) }}">
            </div>
        </div>
      </div>
  
      <!-- /.box-body -->
      <div class="box-footer">
          <a href="{{ action('Admin\UsersController@index') }}">
              <div type="button" class="btn btn-default">一覧へ戻る</div>
          </a>
          <button type="submit" class="btn btn-default">編集確認</button>
      </div>
      <!-- /.box-footer -->
  </form>
</div>
@endsection

@section('stylesheet')
@endsection

@section('script')
@endsection