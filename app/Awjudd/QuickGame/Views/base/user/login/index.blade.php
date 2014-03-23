@section('content')
    {{ Form::open(['to' => QuickGame::action('UserController@postLogin')]) }}
        <fieldset>
            <div class="col-xs-6">
                {{ Form::label('email', Lang::get('confide::confide.username_e_mail'))}}
                {{ Form::text('email', Input::old('email'), ['placeholder' => Lang::get('confide::confide.username_e_mail'), 'class' => 'form-control', 'tabindex' => 1])}}
            </div>

            <div class="col-xs-6">
                <label for="password">
                    {{{ Lang::get('confide::confide.password') }}}
                    <small>
                        <a href="{{{ (Confide::checkAction('UserController@forgot_password')) ?: 'forgot' }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
                    </small>
                </label>

                {{ Form::password('password', ['placeholder' => Lang::get('confide::confide.password'), 'class' => 'form-control'])}}
            </div>

            <div class="clearfix">
                @if ( Session::get('error') )
                    <div class="alert alert-error">{{{ Session::get('error') }}}</div>
                @endif

                @if ( Session::get('notice') )
                    <div class="alert">{{{ Session::get('notice') }}}</div>
                @endif
            </div>
            
            <div class="clearfix center top-padded">
                <button tabindex="3" type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.login.submit') }}}</button>
            </div>
        </fieldset>
    {{ Form::close() }}

@stop