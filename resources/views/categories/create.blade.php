@extends('layouts.admin_template')

@section('page-title')
 {{ $title or "CREATE CATEGORY" }}
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Categories</a></li>
                <li class="active">create</li>
            </ol>
@endsection

@section('content')
<div class="row" style="margin-bottom: 25px">
        <div class="col-md-12">
            <button class="btn btn-info" type="button" ui-sref="agama">
                <span class="glyphicon glyphicon-arrow-left"></span>
                Kembali</button>
        </div>
 </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">create</h3>
               </div>
                <div class="box-body">
        {!! Form::open(['route' => 'categories.store'])!!}
          @include('categories._form')
        {!! Form::close() !!}
        </div>
      </div>
    </div>
      
  </div>
@endsection