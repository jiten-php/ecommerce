@extends('layouts.admin')
@section('title', $page_title)
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Slider {{ url('') }}</h1>
	</div>
		{{ Form::open(['route' => 'admin.sliders.store', 'files' => true]) }}
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
              <?php $big_title_error_class = $errors->has('big_title')? 'is-invalid':'' ?>
              {{ Form::label('big_title','Slider Big Title') }}
              {{ Form::text('big_title',null,['class' => 'form-control '.$big_title_error_class,  'placeholder' => 'Enter big title']) }}
		      @if($errors->has('big_title'))
                <div class="invalid-feedback">{{ $errors->first('big_title') }}</div>
              @endif
		    </div>
		    <div class="col-md-6 mb-3">
              <?php $small_title_error_class = $errors->has('small_title')? 'is-invalid':'' ?>
		      {{ Form::label('small_title','Slider Small Title') }}
              {{ Form::text('small_title',null,['class' => 'form-control '.$small_title_error_class,  'placeholder' => 'Enter small title']) }}
              @if($errors->has('small_title'))
                <div class="invalid-feedback">{{ $errors->first('small_title') }} </div>
              @endif
		    </div>
		  </div>

		  <div class="form-row">
		  	<div class="col-md-6 mb-3">
              <?php $redirect_url_error_class = $errors->has('redirect_url')? 'is-invalid':'' ?>
              {{ Form::label('redirect_url','Slider Redirect URL') }}
              {{ Form::text('redirect_url',null,['class' => 'form-control '.$redirect_url_error_class,  'placeholder' => 'Enter url']) }}
              @if($errors->has('redirect_url'))
                <div class="invalid-feedback">{{ $errors->first('redirect_url') }} </div>
              @endif
            </div>
		    <div class="col-md-6 mb-3">
                <?php $image_error_class = $errors->has('picture')? 'is-invalid':'' ?>
                <div class="form-group">
                    {{ Form::label('picture','Slider Image') }}
                    {{ Form::file('picture',['class' => 'form-control-file '.$image_error_class]) }}
                </div>
                @if($errors->has('picture'))
                    <div class="invalid-feedback">{{ $errors->first('picture') }}</div>
                @endif
		    </div>
		  </div>

		  <button class="btn btn-primary" type="submit">Save</button>
		{{ Form::close() }}

</div>

@endsection