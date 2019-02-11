@extends('layouts.master')

@section('content')
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">入力</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
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
      <button type="submit" class="btn btn-default">戻る</button>
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