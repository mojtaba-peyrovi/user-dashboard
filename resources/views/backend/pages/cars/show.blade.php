<style media="screen">
    .content-header {
        background: white;

    }
</style>
@extends('backend.layouts.master')
@section('title')
{{ $car->carName() }}
@endsection

@section('content-header')
    <section class="content-header">
      <h1>
         <i class="fa fa-car" aria-hidden="true"></i>
        {{ $car->carName() }}
        <small>All you need to know about this car</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Cars</li>
        <li class="active">{{ $car->carName() }}</li>
      </ol>
    </section>
    <hr>
@endsection
@section('content')
    <!-- ABOUT CAR -->
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Car Information</h3>

        <div class="box-tools pull-right">
          <span class="label label-danger">8 New Members</span>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <ul class="users-list clearfix">
          <li>
            <img src="dist/img/user1-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Alexander Pierce</a>
            <span class="users-list-date">Today</span>
          </li>
          <li>
            <img src="dist/img/user8-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Norman</a>
            <span class="users-list-date">Yesterday</span>
          </li>
          <li>
            <img src="dist/img/user7-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Jane</a>
            <span class="users-list-date">12 Jan</span>
          </li>
          <li>
            <img src="dist/img/user6-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">John</a>
            <span class="users-list-date">12 Jan</span>
          </li>
          <li>
            <img src="dist/img/user2-160x160.jpg" alt="User Image">
            <a class="users-list-name" href="#">Alexander</a>
            <span class="users-list-date">13 Jan</span>
          </li>
          <li>
            <img src="dist/img/user5-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Sarah</a>
            <span class="users-list-date">14 Jan</span>
          </li>
          <li>
            <img src="dist/img/user4-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Nora</a>
            <span class="users-list-date">15 Jan</span>
          </li>
          <li>
            <img src="dist/img/user3-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#">Nadia</a>
            <span class="users-list-date">15 Jan</span>
          </li>
        </ul>
        <!-- /.users-list -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Users</a>
      </div>
      <!-- /.box-footer -->
    </div>
    <!--/.ABOUT CAR -->


    <!-- TABLE: DEALS AVAILABLE -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Available Deals</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
            <tr>
              <th>Deal ID</th>
              <th>Provider Name</th>
              <th>Package Name</th>
              <th>Class</th>
              <th>Premium</th>
              <th>Deductible</th>
              <th>Garage</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($deals as $deal)
                <tr>
                  <td>{{ $deal['id']}}</td>
                  <td>
                      <a href="#">
                          {{ $deal->provider->name }}
                      </a>
                  </td>
                  <td>
                      <a href="#">
                           {{ $deal['productName'] }}
                      </a>
                  </td>
                  <td>
                      <a href="#">
                          <span class="label label-success">
                              {{ $deal->getClass() }}
                          </span>
                      </a>
                  </td>
                  <td>
                    {{ $deal['premium'] }}
                  </td>
                  <td>
                    {{ $deal['deductible']}}
                  </td>
                  <td>
                    {{ $deal->getGarage() }}
                  </td>
                </tr>

            @endforeach


            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Add a Deal</a>
        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Eligible Deals</a>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.DEALS AVAILABLE -->
@endsection
