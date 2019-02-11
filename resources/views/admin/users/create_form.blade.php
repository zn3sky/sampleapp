@extends('layouts.master')

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-ban"></i>{{ count($errors) }}個所エラーがあります</h4>
</div>
@endif

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">入力</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal" method="post" action="{{ action('Admin\UsersController@showCreateConfirm') }}">
    {{ csrf_field() }}
    <div class="box-body">
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Name</label>

        <div class="col-sm-10{{$errors->has('name') ? ' has-error' : '' }}">
          @if ($errors->has('name'))
            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</label>
          @endif
          <input type="text" class="form-control" id="inputName" placeholder="山田太郎" name="name" value="{{ old('name') }}">
        </div>
      </div>

      <div class="form-group">
          <label for="inputEmail" class="col-sm-2 control-label">Email</label>
  
          <div class="col-sm-10{{$errors->has('email') ? ' has-error' : '' }}">
            @if ($errors->has('email'))
              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>
            @endif
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
          </div>
      </div>

      <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Options</label>
          <div class="col-sm-10">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                あああ
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                いいい
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                Option three is disabled
              </label>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <a href="{{ action('Admin\UsersController@index') }}">
        <div type="button" class="btn btn-default">一覧へ戻る</div>
      </a>
      <button type="submit" class="btn btn-default">登録確認</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
@endsection

@section('stylesheet')
@endsection

@section('script')
@endsection