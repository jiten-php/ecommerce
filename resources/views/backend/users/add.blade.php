@extends('layouts.admin')
@section('title', $page_title)
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add User {{ url('') }}</h1>
	</div>
		{{ Form::open(['route' => 'admin.store.user']) }}
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
              <?php $first_name_error_class = $errors->has('first_name')? 'is-invalid':'' ?>
              {{ Form::label('first_name','First Name') }}
              {{ Form::text('first_name',null,['class' => 'form-control '.$first_name_error_class,  'placeholder' => 'Enter First Name']) }}
		      @if($errors->has('first_name'))
                <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
              @endif
		    </div>
		    <div class="col-md-6 mb-3">
                <?php $last_name_error_class = $errors->has('last_name')? 'is-invalid':'' ?>
		      {{ Form::label('last_name','Last Name') }}
              {{ Form::text('last_name',null,['class' => 'form-control '.$last_name_error_class,  'placeholder' => 'Enter Last Name']) }}
              @if($errors->has('last_name'))
                <div class="invalid-feedback">{{ $errors->first('last_name') }} </div>
              @endif
		    </div>
		  </div>

		  <div class="form-row">
		  	<div class="col-md-6 mb-3">
                <?php $user_name_error_class = $errors->has('user_name')? 'is-invalid':'' ?>
              {{ Form::label('user_name','User Name') }}
		      <div class="input-group">
		        <div class="input-group-prepend">
		          <span class="input-group-text" id="inputGroupPrepend3">@</span>
		        </div>
                {{ Form::text('user_name',null,['class' => 'form-control '.$user_name_error_class,  'placeholder' => 'Enter Username']) }}
		        @if($errors->has('user_name'))
                    <div class="invalid-feedback">{{ $errors->first('user_name') }}</div>
                @endif
		     </div>
		    </div>
		    <div class="col-md-6 mb-3">
                <?php $email_error_class = $errors->has('email')? 'is-invalid':'' ?>
                {{ Form::label('email','Email') }}
                {{ Form::text('email',null,['class' => 'form-control '.$email_error_class,  'placeholder' => 'Please Enter Email']) }}
                @if($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                @endif
		    </div>
		  </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
                <?php $user_type_error_class = $errors->has('user_type')? 'is-invalid':'' ?>
              {{ Form::label('user_type','User Type') }}
                  {{ Form::select('user_type', ['backend_user' => 'Backend', 'front_end' => 'Frontend'], null, ['placeholder' => 'Pick a user type...', 'class' => 'form-control '.$user_type_error_class]) }}
                    @if($errors->has('user_type'))
                        <div class="invalid-feedback">{{ $errors->first('user_type') }}</div>
                    @endif 
            </div>
            <div class="col-md-6 mb-3">
                <?php $password_error_class = $errors->has('password')? 'is-invalid':'' ?>
                {{ Form::label('password','Password') }}
                {{ Form::password('password',['class' => 'form-control '.$password_error_class,  'placeholder' => 'Please Enter password','autocomplete' =>'new-password']) }}
                @if($errors->has('password'))
                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                @endif
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
                <?php $phone_error_class = $errors->has('phone')? 'is-invalid':'' ?>
                {{ Form::label('phone','Phone No.') }}
                {{ Form::text('phone',null,['class' => 'form-control '.$phone_error_class,  'placeholder' => 'Please Enter phone']) }}
                @if($errors->has('phone'))
                    <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                @endif
            </div>
            <div class="col-md-6 mb-3">
                <?php $zip_code_error_class = $errors->has('zip_code')? 'is-invalid':'' ?>
                {{ Form::label('zip_code','Zip Code') }}
                {{ Form::text('zip_code',null,['class' => 'form-control '.$zip_code_error_class,  'placeholder' => 'Postal Zip Code']) }}
                @if($errors->has('zip_code'))
                    <div class="invalid-feedback">{{ $errors->first('zip_code') }}</div>
                @endif
            </div>

          </div>
          <div class="form-row">
            <div class="col-md-1 mb-3">
                 <label>Gender</label>
             </div>
            <div class="col-md-1 mb-3">
                    <div class="custom-control custom-radio">
                        {{Form::radio('gender','male',true,['class' => 'custom-control-input','id'=>'male']) }}
                        {{ Form::label('male', 'Male', ['class'=>'custom-control-label']) }}
                    </div>
            </div>
            <div class="col-md-1 mb-3">
                <div class="custom-control custom-radio">
                    {{Form::radio('gender','female',false,['class' => 'custom-control-input','id'=>'female']) }}
                    {{ Form::label('female', 'Female', ['class'=>'custom-control-label']) }}
                    </div>
            </div>
                @if($errors->has('gender'))
                    <div class="invalid-feedback">{{ $errors->first('gender') }}</div>
                @endif
          </div>



            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <?php $profile_description_error_class = $errors->has('profile_description')? 'is-invalid':'' ?>
                    {{ Form::label('profile_description','Profile Summary') }}
                    {{Form::textarea('profile_description',null,['class' => 'form-control '.$profile_description_error_class]) }} 
                    @if($errors->has('profile_description'))
                        <div class="invalid-feedback">{{ $errors->first('profile_description') }}</div>
                    @endif                  
                </div>
            </div>
		   <div class="form-row">
                <div class="col-md-12 mb-3">
                    {{ Form::label('address','Address') }}
                    {{Form::textarea('address',null,['class' => 'form-control', 'rows'=>'2']) }}
                    
                </div>
			</div>
		  <div class="form-row">
		    <div class="col-md-4 mb-3">
                <?php $country_id_error_class = $errors->has('country_id')? 'is-invalid':'' ?>
		          {{ Form::label('country_id','Country') }}
                  {{ Form::select('country_id', ['1' => 'Large', '2' => 'Small'], null, ['placeholder' => 'Pick a country...', 'class' => 'form-control '.$country_id_error_class]) }}
                    @if($errors->has('country_id'))
                        <div class="invalid-feedback">{{ $errors->first('country_id') }}</div>
                    @endif  
		    </div>
		    <div class="col-md-4 mb-3">
		          <?php $state_id_error_class = $errors->has('state_id')? 'is-invalid':'' ?>
                  {{ Form::label('state_id','State') }}
                  {{ Form::select('state_id', ['3' => 'Large', '4' => 'Small'], null, ['placeholder' => 'Pick a state...', 'class' => 'form-control '.$state_id_error_class]) }}
                    @if($errors->has('state_id'))
                        <div class="invalid-feedback">{{ $errors->first('state_id') }}</div>
                    @endif 
		      
		    </div>
		    <div class="col-md-4 mb-3">
		          <?php $city_id_error_class = $errors->has('city_id')? 'is-invalid':'' ?>
                  {{ Form::label('city_id','City') }}
                  {{ Form::select('city_id', ['5' => 'Large', '6' => 'Small'], null, ['placeholder' => 'Pick a city...', 'class' => 'form-control '.$state_id_error_class]) }}
                    @if($errors->has('city_id'))
                        <div class="invalid-feedback">{{ $errors->first('city_id') }}</div>
                    @endif 
		      
		    </div>
		    
		  </div>
		  <button class="btn btn-primary" type="submit">Submit form</button>
		{{ Form::close() }}

</div>
<script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#profile_description' ), {

                simpleUpload: {
                    uploadUrl: "{{ route('upload', ['_token' => csrf_token() ]) }}"
                },
                removePlugins: ['ImageCaption'],
                toolbar: { 
                    items: [
                            'heading',
                            'CKFinder',
                            '|',
                            'bold',
                            'italic',
                            'link',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'indent',
                            'outdent',
                            '|',
                            'imageUpload',
                            'blockQuote',
                            'insertTable',
                            'mediaEmbed',
                            'undo',
                            'redo',
                            'alignment',
                            'code',
                            'codeBlock',
                            'fontBackgroundColor',
                            'fontColor',
                            'fontSize',
                            'fontFamily',
                            'horizontalLine',
                            'highlight',
                            'pageBreak',
                            'specialCharacters',
                            'strikethrough',
                            'superscript',
                            'subscript',
                            'underline',
                            'todoList'
                        ]
                },
                language: 'en',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells',
                        'tableCellProperties'
                    ]
                },
                licenseKey: '',

        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( error => {
                console.error( 'Oops, something gone wrong!' );
                console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
                console.warn( 'Build id: 8rvzdgi7nyn1-awwfblrm0aus' );
                console.error( error );
        } );
</script> 
@endsection