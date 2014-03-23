@section('content')
    {{ Form::open(['to' => QuickGame::action('UserController@postCreate')]) }}
        <fieldset>
            <div class="col-xs-6">
                {{ Form::label('username', Lang::get('confide::confide.username')) }}
                {{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => Lang::get('confide::confide.username'), 'tabindex' => 1])}}
            </div>

            <div class="col-xs-6">
                {{ Form::label('email', Lang::get('confide::confide.e_mail')) }} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small>
                {{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => Lang::get('confide::confide.e_mail'), 'tabindex' => 2])}}
            </div>

            <div class="col-xs-6">
                {{ Form::label('password', Lang::get('confide::confide.password')) }}
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => Lang::get('confide::confide.password'), 'tabindex' => 3]) }}
            </div>

            <div class="col-xs-6">
                {{ Form::label('password_confirmation', Lang::get('confide::confide.password_confirmation')) }}
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => Lang::get('confide::confide.password_confirmation'), 'tabindex' => 3]) }}
            </div>

            <div class="clearfix">
                @if ( Session::get('error') )
                    <div class="alert alert-error">
                        @if ( is_array(Session::get('error')) )
                            {{ head(Session::get('error')) }}
                        @endif
                    </div>
                @endif

                @if ( Session::get('notice') )
                    <div class="alert">{{ Session::get('notice') }}</div>
                @endif
            </div>

            <div class="center form-actions top-padded">
              <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
            </div>

        </fieldset>
    {{ Form::close() }}
@stop