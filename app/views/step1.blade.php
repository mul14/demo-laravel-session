Session Step {{ Session::get('step') }}

{{ Form::open(['url' => 'install']) }}

{{ Form::hidden('current_step', 1) }}

{{ Form::submit() }}

{{ Form::close() }}
