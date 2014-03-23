@section('content')
    {{ Form::open(['to' => QuickGame::action('UserController@postForgot')])}}
        {{ Form::label('email', Lang::get('confide::confide.e_mail')) }}
        <div class="input-append input-group">
            {{ Form::text('email', Input::old('email'), ['placeholder' => Lang::get('confide::confide.e_mail'), 'class' => 'form-control'])}}
            <span class="input-group-btn">
                <input class="btn" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
            </span>
        </div>

        @if ( Session::get('error') )
            <div class="alert alert-error">{{{ Session::get('error') }}}</div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{{ Session::get('notice') }}}</div>
        @endif
    {{ Form::close() }}
@stop