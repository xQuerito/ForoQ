@component('forum::modal-form')
    @slot('key', 'create-category')
    @slot('title', trans('forum::categories.create'))
    @slot('route', Forum::route('category.store'))

    <div class="mb-3">
        <label for="title">{{ trans('forum::general.title') }}</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control" style="background-color: var(--color-primary); color: var(--font-color);">
    </div>
    <div class="mb-3">
        <label for="description">{{ trans('forum::general.description') }}</label>
        <input type="text" name="description" value="{{ old('description') }}" class="form-control" style="background-color: var(--color-primary); color: var(--font-color);">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="accepts_threads" style="background-color: var(--color-primary); color: var(--font-color);" id="accepts-threads" value="1" {{ old('accepts_threads') ? 'checked' : '' }}>
            <label class="form-check-label" for="accepts-threads">{{ trans('forum::categories.enable_threads') }}</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_private" style="background-color: var(--color-primary); color: var(--font-color);" id="is-private" value="1" {{ old('is_private') ? 'checked' : '' }}>
            <label class="form-check-label" for="is-private">{{ trans('forum::categories.make_private') }}</label>
        </div>
    </div>
    @include ('forum::category.partials.inputs.color')

    @slot('actions')
        <button type="submit" class="btn btn-primary pull-right">{{ trans('forum::general.create') }}</button>
    @endslot
@endcomponent