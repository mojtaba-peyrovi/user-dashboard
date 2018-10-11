{{-- <style media="screen">
    .search-form{
        margin-bottom: 20px;
    }
</style> --}}
@extends('backend.layouts.master')
@section('title')
Available Deals
@endsection

@section('content-header')
    <section class="content-header">
      <h1>
         <i class="fa fa-handshake-o" aria-hidden="true"></i>
        All Available Deals
        <small>Here you can see all deals in the database!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Deals</li>
        <li class="active">Create</li>
      </ol>
    </section>
@endsection
@section('content')
    <section class="search-form">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="get" action="/deals/search">
              {{ csrf_field() }}
            <div class="box-body">
                <div class="row">
                    {{-- <input type="search" name="make" value=""> --}}
                    {{-- <input type="search" name="model" value=""> --}}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;" name="make" value="">
                            <option selected disabled value="">Pick a Make</option>
                            <option>Mercedes-Benz</option>
                            <option>BMW</option>
                            <option>Porsche</option>
                            <option>Toyota</option>
                            <option>Nissan</option>
                            <option>Honda</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;" name="model">
                            <option disabled selected value="">Pick a Model</option>
                            <option>Mercedes-Benz</option>
                            <option>E200</option>
                            <option>Porsche</option>
                            <option>Toyota</option>
                            <option>Nissan</option>
                            <option>Honda</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
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
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" placeholder="year" name="year">
                          </div>
                          <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control select2" style="width: 100%;" name="location">
                            <option selected="selected">Location</option>
                            <option>Bangkok</option>
                            <option>Upcountry</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Personal/Commercial</option>
                            <option>Personal</option>
                            <option>Commercial</option>
                        </select>
                    </div>
                    <div class="col-md-3 pull-right">
                        <button type="submit" class="btn btn-info pull-right">Search</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>

    <section class="all">
        @foreach ($deals as $deal)
            @include('backend.partials.deal-card')
        @endforeach
    </section>
@endsection
