@php
	$name_dot=bracketsToDotted($name);

@endphp
{{--
<div class="col-sm-{{ $field->col_bs_size }}">{{$field->col_bs_size}}
--}}
<div class="form-group{{ $errors->has($name_dot) ? ' has-error is-invalid' : '' }} col-sm-{{ $field->col_bs_size }}">
	{{ $label }}
	{{ $input }}
	{{-- --}}
	@if ( $errors->has($name_dot) )
	<div class="alert alert-danger">
        {{ $errors->first($name_dot) }}
	</div>
	@endif
	{{-- --}}
	{{--
	@error($name_dot)
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
	--}}
	{{--  
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small>
	<small id="passwordHelpBlock" class="form-text text-muted">
		{{ trans($view.'.field.'.$name.'_help') }}
	</small>
	<small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
	--}}
</div>
{{--
	</div>
--}}
