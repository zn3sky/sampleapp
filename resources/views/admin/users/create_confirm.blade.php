@extends('layouts.master')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">確認</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="{{ action('Admin\UsersController@create') }}">
        {{ csrf_field() }}
        <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
  
          <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $name }}" readonly>
          </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{ $email }}" readonly>
            </div>
        </div>
  
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Options</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="あああ" readonly>
          </div>  
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{ action('Admin\UsersController@create') }}">
            <div type="button" class="btn btn-default">入力へ戻る</div>
        </a>
        <button type="submit" class="btn btn-default">登録</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection

@section('stylesheet')
@endsection

@section('script')
@endsection