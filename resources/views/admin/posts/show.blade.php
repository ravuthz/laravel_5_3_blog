@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body" style="padding: 25px;">

                    <h3>{{ ucfirst($post->title) }}</h3>

                    <p>{{ link_to($post->link, $post->link) }}</p>

                    <p class="text-right" style="margin-bottom: -25px;">
                        {{ link_to($link = url('admin/posts/' . $post->slug), $link) }}
                    </p>

                    <div class="">
                        <hr/>
                        <p>{{ $post->content }}</p>
                        <hr/>
                        <p>{{ $post->content }}</p>
                        <hr/>

                        @if ($post->is_published)
                            <p style="margin-top: -20px;">
                                <b>Published at:</b> <i>{{ $post->published_at }}</i>
                            </p>
                        @else
                            <p style="margin-top: -20px;">
                                <b>Drafted create at:</b> <i>{{ $post->created_at }}</i>
                            </p>
                        @endif

                        <p class="text-right">
                            {{ link_to(url()->previous(), 'Back') }}
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
