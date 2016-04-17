@extends('layouts.admin_template')

@section('content')
		<div class="row">
			<div class="col-md-12">
			<div class="box box-primary" >
               <div class="box-header">
              		<h3 class="box-title">Category List</h3>
            	</div>
				        <div class="box-body">
                  <!--  <div class="row"> -->
				 			<div class="col-md-8"><a href="{{ route('categories.create') }}" class="btn btn-warning btn-sm">Create New</a></div>
  								<div class="box-tools">
  									<div class="pull right">
									{!! Form::open(['url' => 'categories', 'method'=>'get', 'class'=>'form-inline'])!!}
									<div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
										{!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Type category..']) !!}
										{!! $errors->first('q', '<p class="help-block">:message</p>') !!}
									</div>
										{!! Form::submit('search', ['class'=>'btn btn-primary']) !!}
										
									{!! Form::close() !!}
									</div>
								</div>
					&nbsp;
					<div class="table-responsive col-sm-12">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th width="100px"></th>
									<th>Title</th>
									<th>Parent</th>
								</tr>
							</thead>
						<tbody class="table-hover">
							@foreach($categories as $category)
							<tr>
								<td>
                                        <a class="btn btn-sm btn-success" href="{{ route('categories.edit', $category->id)}}"><i class="fa fa-pencil"></i></a>
                                        &nbsp;
                                        
                                        <a class="btn btn-sm btn-danger" href="{{ route('categories.edit', $category->id)}}"><i class="fa fa-trash"></i></a>
                                       
                                </td>
								<td>{{ $category->title }}</td>
								<td>{{ $category->parent ? $category->parent->title : '' }}</td>
							</tr>
							@endforeach

						</tbody>
						</table>
					{{ $categories->appends(compact('q'))->links() }}
					</div>
					
					<!-- </div> -->
				</div>
			</div>
			</div>
		</div>
@endsection

@section('page-title')
 {{ $title or "CATEGORY" }}
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Level</a></li>
                <li class="active">Categories</li>
            </ol>
@endsection
    


