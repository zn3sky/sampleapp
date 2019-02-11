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