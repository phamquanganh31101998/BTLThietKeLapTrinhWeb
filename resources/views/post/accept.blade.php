@extends('layouts.impact')
@section('title')
POST
@endsection

@section('mota')
Create a new post.
I think it's ok!!!
@endsection
@section('content')
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                    	<ul class="form-style-1">
						{!! Form::open(['route' => ['post.accepted'], 'method'=> 'POST','files' => true]) !!}
						{!! Form::hidden('post_do_id',$post_do_id) !!}
						 <div class="form-group">
				            {!! Form::label('file', 'IMG File:') !!}
				            {!! Form::file('file', ['class' => 'field-select'] ) !!}
				         </div>
					      <div class="form-group">
				            {!! Form::label('staff_id', 'Staff ID take photo:') !!} <br>
				            {!! Form::select('staff_id',$staff_id, ['class' => 'field-select']) !!}
				          </div><br>
				          <div class="form-group">
				            {!! Form::label('description', 'Description:') !!} <br>
				            {!! Form::textarea('description','', [ 'placeholder' => 'enter description']) !!}
				          </div><br>
				          
				          <button type="submit" class="btn btn-primary btn-lg">Submit</button>

				        {!! Form::close() !!}
				    </ul>	
					</div>
				</div>
			 </div>      
        </section>
    </div>			
					
		@endsection