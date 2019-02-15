@extends('layouts.master')

@section('content')

@if (session('success_message'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i>{{ session('success_message') }}</h4>
  </div>
@endif

@if (session('error_message'))
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-ban"></i>{{ session('error_message') }}</h4>
</div>
@endif

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">検索条件</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body" style="">
    <div class="row">
      <div class="">
        <div class="form-group">
            <div class="form-group">
                <div class="col-sm-10">
                  <input type="q" class="form-control" id="" placeholder="キーワード">
                </div>
            </div>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
        </div>
        <!-- /.form-group -->
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer" style="">
    <div type="button" class="btn btn-default">検索</div>
  </div>
</div>

<div class="box">
  <div class="box-header">
    <h3 class="box-title"></h3>
    <div class="box-tools">
        <a href="{{ action('Admin\UsersController@showCreateForm') }}">
          <div type="button" class="btn btn-default">新規作成</div>
        </a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table table-condensed">
      <tbody>
        <tr>
          <th style="width: 10px">#</th>
          <th>name</th>
          <th>email</th>
          <th>最終更新日時</th>
          <th>操作</th>
        </tr>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}.</td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                {{ $user->updated_at }}
            </td>
            <td>
                <a href="{{ action('Admin\UsersController@showEditForm', [$user->id]) }}">
                  <div type="button" class="btn btn-default">編集</div>
                </a>
                <div type="button" class="btn btn-default">削除</div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
@endsection

@section('stylesheet')
@endsection

@section('script')
@endsection