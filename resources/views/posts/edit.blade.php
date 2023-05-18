<x-app-layout>
    <x-slot name="header">
        　edit
    </x-slot>
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
        </head>
        <body>
            <h1>Blog Name</h1>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="title">
                    <h2>Title</h2>
                    <input type="text" name="post[title]" value="{{ $post->title }}">
                </div>
                <div class="content_postbody">
                    <h2>Body</h2>
                    <input type="text" name="post[body]" value="{{ $post->body }}">
                </div>
                <input type="submit" value="update"/>
            </form>
            <div class="footer">
                <a href="/post/{{ $post->id }}">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>