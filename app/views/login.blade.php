{{ Form::open() }}
    <p>
        Username
        {{ Form::text('username') }}
    </p>
    <p>
        Password 
        {{ Form::password('password') }}
    </p>

    <p>
        {{ Form::submit() }}
    <p>
{{ Form::close() }}
