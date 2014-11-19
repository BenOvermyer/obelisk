<!DOCTYPE html>
<html>
    <head>
        <title>{{{ $pageTitle }}} | {{{ $siteTitle }}} Admin</title>
        <link type="text/css" rel="stylesheet" href="{{ asset( 'css/general_foundicons_ie7.css' ) }}">
        <link type="text/css" rel="stylesheet" href="{{ asset( 'css/general_foundicons.css' ) }}">
        <link type="text/css" rel="stylesheet" href="{{ asset( 'css/main.css' ) }}">
    </head>
    <body>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name"><h1><a href="{{ route( 'home' ) }}">{{{ $siteTitle }}}</a></h1></li>
            </ul>
            <section class="top-bar-section">
                <ul class="right">
                    <li><a href="{{ route( 'admin.home' ) }}">Home</a></li>
                    <li><a href="{{ route( 'admin.posts.index' ) }}">Posts</a></li>
                    <li><a href="{{ route( 'admin.pages.index' ) }}">Pages</a></li>
                    <li><a href="{{ route( 'admin.categories.index' ) }}">Categories</a></li>
                    <li><a href="{{ route( 'admin.tags.index' ) }}">Tags</a></li>
                    <li><a href="{{ route( 'admin.users.index' ) }}">Users</a></li>
                    <li><a href="{{ route( 'logout' ) }}">Logout</a></li>
                </ul>
            </section>
        </nav>
        <div class="row">
            <h1>{{{ $pageTitle }}}</h1>
            @yield('content')
        </div>
        <footer class="row">
            <p>Powered by Monk&trade; v{{{ $monkVersion }}}</p>
        </footer>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset( 'js/foundation.min.js' ) }}"></script>
        <script src="{{ asset( 'js/app.js' ) }}"></script>
    </body>
</html>
