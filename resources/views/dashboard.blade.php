@extends('layouts.master')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Blank Box</h3>
    </div>
    <div class="box-body">
      <i class="fa fa-spin fa-refresh"></i>工事中

      <div class="chart">
          <canvas id="lineChart" style="height: 249px; width: 548px;" width="1096" height="498"></canvas>
        </div>
      </div>
    <!-- /.box-body -->
  </div>
@endsection

@section('stylesheet')
@endsection

@section('script')
@endsection