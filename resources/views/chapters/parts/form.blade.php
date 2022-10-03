{!! csrf_field() !!}

<div class="form-group title-input">
    <label for="name">{{ trans('common.name') }}</label>
    @include('form.text', ['name' => 'name', 'autofocus' => true])
</div>

<div class="form-group description-input">
    <label for="description">{{ trans('common.description') }}</label>
    @include('form.textarea', ['name' => 'description'])
</div>
<div class="form-group" collapsible id="logo-control">
    <button type="button" class="collapse-title text-primary" collapsible-trigger aria-expanded="false">
        <label>{{ trans('common.cover_image') }}</label>
    </button>
    <div class="collapse-content" collapsible-content>
        <p class="small">{{ $model->c_image }}</p>
        <!-- (isset($model) && $model->c_image) ?url('/public/chapter/Image/'.$model->c_image') : url('/book_default_cover.png') -->
        @include('form.image-picker', [
        'defaultImage' => (isset($model) && $model->c_image) ? url('public/chapter/Image/'.$model->c_image) : url('public/chapter/Image/'.$model->c_image) ,
        'currentImage' => (isset($model) && $model->cover) ? $model->c_image() : url('public/chapter/Image/'.$model->c_image) ,
        'name' => 'c_image',
        'imageClass' => 'cover'
        ])
    </div>
</div>
<div class="form-group" collapsible id="logo-control">
    <button type="button" class="collapse-title text-primary" collapsible-trigger aria-expanded="false">
        <label for="tags">{{ trans('entities.chapter_tags') }}</label>
    </button>
    <div class="collapse-content" collapsible-content>
        @include('entities.tag-manager', ['entity' => $chapter ?? null])
    </div>
</div>

<div class="form-group text-right">
    <a href="{{ isset($chapter) ? $chapter->getUrl() : $book->getUrl() }}" class="button outline">{{ trans('common.cancel') }}</a>
    <button type="submit" class="button">{{ trans('entities.chapters_save') }}</button>
</div>