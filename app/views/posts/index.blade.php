@extends('admin.layout')

@section('content')
    <table>
        <thead>
            <tr><th>Title</th><th>Slug</th><th>Summary</th><th>Created</th><th>Published</th><th></th></tr>
        </thead>
        <tbody>
    @foreach( $posts as $post )
        <tr>
            <td><a href="{{ route( 'admin.posts.edit', $post->id ) }}">{{{ $post->title }}}</a></td>
            <td>{{{ $post->slug }}}</td>
            <td>{{{ $post->summary }}}</td>
            <td>{{{ $post->created_at }}}</td>
            <td>
                @if( !$post->is_published )
                    <a href="{{ route( 'admin.posts.publish', $post->id ) }}" class="button tiny">Publish</a>
                @else
                    <span>{{{ $post->published_at }}}</span>
                @endif
            </td>
            <td>
                <a href="{{ route( 'post.public.show', $post->slug ) }}" class="button tiny">View</a>
                <a href="{{ route( 'admin.posts.confirmdestroy', $post->id ) }}" class="button tiny alert">Delete</a>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
    <a href="{{ route( 'admin.posts.create' ) }}" class="button">Write New Post</a>
@stop
