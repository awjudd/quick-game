@section('content')
    {{ Form::open(['to' => QuickGame::action('UserController@postReset')]) }}
        {{ Form::hidden('token', $token) }}

        <div class="form-group">
            {{ Form::label('password', Lang::get('confide::confide.password'))}}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => Lang::get('confide::confide.password'), 'tabindex' => 1]) }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', Lang::get('confide::confide.password_confirmation'))}}
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => Lang::get('confide::confide.password_confirmation'), 'tabindex' => 2]) }}
        </div>

        @if ( Session::get('error') )
            <div class="alert alert-error">{{{ Session::get('error') }}}</div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{{ Session::get('notice') }}}</div>
        @endif

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
        </div>
    {{ Form::close() }}
@stop