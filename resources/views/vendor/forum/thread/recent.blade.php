@extends ('forum::master', ['thread' => null, 'breadcrumbs_append' => [trans('forum::threads.recent')]])

@section ('content')
    <div id="new-posts">
        <h2>{{ trans('forum::threads.recent') }}</h2>

        @if (! $threads->isEmpty())
            <div class="threads list-group my-3 shadow-sm">
                @foreach ($threads as $thread)
                    @include ('forum::thread.partials.list')
                @endforeach
            </div>
        @else
            <div class="card my-3">
                <div class="card-body text-center text-muted" style="background-color: var(--color-primary); color: var(--font-color);">
                    {{ trans('forum::threads.none_found') }}
                </div>
            </div>
        @endif
    </div>
@stop
