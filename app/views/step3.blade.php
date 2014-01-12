Session Step {{ Session::get('step') }}

{{ Form::open(['url' => 'install']) }}

{{ Form::hidden('current_step', 3) }}

{{ Form::submit() }}

{{ Form::close() }}
