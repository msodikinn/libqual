@extends('layouts.admin_template')

@section('content')
		<div class="row">
			<div class="col-md-12">
			<div class="box box-primary" >
               <div class="box-header">
              		<h3 class="box-title">Evaluasi Aspect Of Service Dimension</h3>
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
									<th rowspan="2" width="100px"></th>
									<th rowspan="2" width="100px">Title</th>
									<th colspan="9" align="center">Nilai</th>
								</tr>
								<tr>
									
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>6</th>
									<th>7</th>
									<th>8</th>
									<th>9</th>
								</tr>
							</thead>
						<tbody class="table-hover">
							@foreach($kriterias as $category)
							<tr>
								<td>
                                        <a class="btn btn-sm btn-success" href="{{ route('categories.edit', $category->id)}}"><i class="fa fa-pencil"></i></a>
                                        &nbsp;
                                        
                                        <a class="btn btn-sm btn-danger" href="{{ route('categories.edit', $category->id)}}"><i class="fa fa-trash"></i></a>
                                       
                                </td>
								<td>{{ $category->name }}</td>
								<td><input  type="radio" name="q156" id="satu" value="1"></td>
								<td><input  type="radio" name="q156" id="dua" value="2"></td>
								<td><input  type="radio" name="q156" id="tiga" value="3"></td>
								<td><input  type="radio" name="q156" id="empat" value="4"></td>
								<td><input  type="radio" name="q156" id="lima" value="5"></td>
								<td><input  type="radio" name="q156" id="enam" value="6"></td>
								<td><input  type="radio" name="q156" id="tujuh" value="7"></td>
								<td><input  type="radio" name="q156" id="delapan" value="8"></td>
								<td><input  type="radio" name="q156" id="sembilan" value="9"></td>
							</tr>
							@endforeach

						</tbody>
						</table>
											{{ $kriterias->appends(compact('q'))->links() }}
															 			<div class="col-md-8"><a href="/laravelku/public/kriterias-ic" class="btn btn-warning btn-sm">Simpan & Lanjutkan</a></div>

					</div>
					
					<!-- </div> -->
				</div>
			</div>
			</div>
		</div>
@endsection

@section('page-title')
 <h4><b>Kriteria Layanan</b></h4>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Level</a></li>
                <li class="active">Categories</li>
            </ol>
@endsection
    


