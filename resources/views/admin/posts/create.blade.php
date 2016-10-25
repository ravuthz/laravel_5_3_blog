@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body" style="padding: 20px;">
                    <h3>
                        <strong>Create Post</strong>
                    </h3>
                    <hr/>
                    @include('admin.posts.form')
                </div>
            </div>
        </div>
    </div>
@endsection
