@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered has-pagination">
                        <tr>
                            <th class="text-center" width="5%">
                                Id
                            </th>
                            <th class="text-center" width="80%">
                                Title
                            </th>
                            <th class="text-center" width="15%" colspan="2">
                                Action
                            </th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $id = $post->id }}</td>
                                <td>{{ link_to_route('admin.posts.show', $post->title, [$id]) }}</td>
                                <td>
                                    {!! link_to_route('admin.posts.edit', 'MODIFY', [$id], ['class' => 'btn btn-sm btn-primary']) !!}
                                </td>
                                <td>
                                    {{ Form::open(['route' => ['admin.posts.destroy', $id], 'method' => 'delete']) }}
                                    {{ Form::submit('DELETE', ['class' => 'btn btn-sm btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}


                </div>
            </div>

        </div>
    </div>
@endsection
