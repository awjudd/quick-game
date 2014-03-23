@section('links')
    <div class="col-sm-3 col-md-3 left-panel">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user"></span>User</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ul>
                            <li><span class="glyphicon glyphicon-log-in"></span>{{ HTML::link(QuickGame::action('UserController@getLogin'), 'Log In') }}</li>
                            <li><span class="glyphicon glyphicon-floppy-disk"></span>{{ HTML::link(QuickGame::action('UserController@getCreate'), 'Register') }}</li>
                            <li><span class="glyphicon glyphicon-envelope"></span>{{ HTML::link(QuickGame::action('UserController@getForgot'), 'Forgot Password') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-question-sign"></span>About</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li><span class="glyphicon glyphicon-log-in"></span>{{ HTML::link(QuickGame::action('UserController@getLogin'), 'Log In') }}</li>
                            <li><span class="glyphicon glyphicon-floppy-disk"></span>{{ HTML::link(QuickGame::action('UserController@getCreate'), 'Register') }}</li>
                            <li><span class="glyphicon glyphicon-envelope"></span>{{ HTML::link(QuickGame::action('UserController@getForgot'), 'Forgot Password') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop