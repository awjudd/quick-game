<!DOCTYPE html>
<html>
    <head>
        <title>{{ Lang::get('site.name') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        {{ AssetProcessor::styles() }}
        @yield('metadata')
    </head>
    <body class="container col-xs-12">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">{{ Lang::get('site.name') }}</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
        <div class="container col-xs-12">
            @include('layout.links')
            <div class="col-sm-9 col-md-9">
                @yield('content')
            </div>
        </div>

        <footer class="center">
            &copy; Copyright {{ HTML::link('http://www.andrewjudd.ca', 'Andrew Judd', ['target' => '_blank']) }} 2014.<br />
        </footer>

        {{ AssetProcessor::scripts() }}
        {{ UniversalAnalytics::render() }}
    </body>
</html>