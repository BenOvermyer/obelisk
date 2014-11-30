@extends( 'layout' )

@section( 'content' )
    <h1>{{{ $user->display_name }}}</h1>
    <div id="content">
        <h3>Name</h3>
        <div>{{{ $user->first_name }}} {{{ $user->last_name }}}</div>
        <h3>Contact</h3>
        <div>{{{ $user->email }}}</div>
    </div>
@stop
