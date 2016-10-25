{!! BootForm::open([
    'model' => $post,
    'store' => 'admin.posts.store',
    'update' => 'admin.posts.update'
]) !!}

{!! BootForm::text('title') !!}

{!! BootForm::text('slug') !!}

{!! BootForm::text('link') !!}

{!! BootForm::text('tags') !!}

{!! BootForm::textarea('content') !!}

{!! BootForm::textarea('summary') !!}

{!! BootForm::text('seo_description', 'SEO Description') !!}

{!! BootForm::text('seo_keywords', 'SEO Keywords') !!}

<div class="row">
    <div class="col-sm-6 col-md-6">
        {!! BootForm::checkbox('is_published', 'Publish this post') !!}
    </div>
    <div class="col-sm-6 col-md-6">
        {!! BootForm::date('published_at', 'Public Date') !!}
    </div>
</div>

<hr/>

<div class="row">
    <div class="col-sm-offset-6 col-sm-3 col-md-offset-8 col-md-2">
        {!! Form::submit('Save', ['class' => 'btn btn-block btn-primary']) !!}
    </div>
    <div class="col-sm-3 col-md-2">
        {{ link_to_route('admin.posts.index', 'Cancel', [], ['class' => 'btn btn-block btn-default']) }}
    </div>
</div>

<br/>

{!! BootForm::close() !!}
