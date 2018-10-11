@extends('backend.layouts.master')
@section('title')
Add a Car
@endsection

@section('content-header')
    <section class="content-header">
      <h1>
         <i class="fa fa-car" aria-hidden="true"></i>
        Create a New Car
        <small>Here you can add new cars in the market that you can't find in the database already!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Cars</li>
        <li class="active">Create</li>
      </ol>
    </section>
@endsection
@section('content')
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Car Make</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Pick a Make</option>
                        <option>Mercedes-Benz</option>
                        <option>BMW</option>
                        <option>Porsche</option>
                        <option>Toyota</option>
                        <option>Nissan</option>
                        <option>Honda</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Car Model</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Pick a Model</option>
                        <option>Mercedes-Benz</option>
                        <option>BMW</option>
                        <option>Porsche</option>
                        <option>Toyota</option>
                        <option>Nissan</option>
                        <option>Honda</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Car Trim</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Pick a Trim</option>
                        <option>Mercedes-Benz</option>
                        <option>BMW</option>
                        <option>Porsche</option>
                        <option>Toyota</option>
                        <option>Nissan</option>
                        <option>Honda</option>
                      </select>
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                      <label>Year:</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
                      </div>
                      <!-- /.input group -->
                    </div>
                </div>
            </div>
          <div class="form-group">
            <label for="exampleInputFile">Car Photo (Optional)</label>
            <input type="file" id="exampleInputFile">

            <p class="help-block">Optionally you can have a sample photo of a car for future reference!</p>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>        



@endsection
