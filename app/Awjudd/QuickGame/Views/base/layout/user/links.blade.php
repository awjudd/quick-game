@section('links')
    <div class="col-sm-3 col-md-3 left-panel">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                        </span>User</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ul>
                            <li><span class="glyphicon glyphicon-book"></span>{{ HTML::link($user->profile_link, 'Profile') }}</li>
                            <li><span class="glyphicon glyphicon-log-out"></span>{{ HTML::link($user->logout, 'Log Out') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-tower"></span>Games</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li><span class="glyphicon glyphicon-log-in"></span>{{ HTML::link(QuickGame::action('Game\BlackJackController@getIndex'), 'Black Jack') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop