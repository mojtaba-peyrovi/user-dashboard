@extends('backend.layouts.master')
@section('title')
Available Deals
@endsection

@section('content-header')
    <section class="content-header">
      <h1>
         <i class="fa fa-handshake-o" aria-hidden="true"></i>
        Reults for: {{ $make }} {{ $model }}-{{ $year }}/{{ $location }}
        <small>We found {{ $deals->count()}} deals for you!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Deals</li>
        <li class="active">Create</li>
      </ol>
    </section>
@endsection
@section('content')
    <section class="all">
        @foreach ($deals as $deal)
            @include('backend.partials.deal-card')
        @endforeach

    </section>
@endsection
