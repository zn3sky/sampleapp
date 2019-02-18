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

<user-list-filter>
</user-list-filter>

<div class="box">
  <div class="box-header">
    <h3 class="box-title"></h3>
    <div class="box-tools">
        <user-create-button>
        </user-create-button>
    </div>
  </div>

  <!-- /.box-header -->
  <div class="box-body no-padding">
      <user-list
        :users="users"
      >
      </user-list>
  </div>
  <!-- /.box-body -->
</div>
@endsection

@section('stylesheet')
@endsection

@section('script')
<script src="{{ mix("/js/admin/users/index.js") }}"></script>
@endsection
