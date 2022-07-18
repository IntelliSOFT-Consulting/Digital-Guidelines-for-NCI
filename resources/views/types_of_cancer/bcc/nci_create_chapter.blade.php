@extends('layouts.simple')

@section('body')
    <div class="container small">

        <div class="my-s">
          
        </div>

        <main class="content-wrap card">
            <h1 class="list-heading">{{ trans('entities.chapters_create') }}</h1>
            <form action="" method="POST">
               
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
        <label for="tags">{{ trans('entities.chapter_tags') }}</label>
    </button>
    <div class="collapse-content" collapsible-content>
        @include('entities.tag-manager', ['entity' => $chapter ?? null])
    </div>
</div>

<div class="form-group text-right">
    <a href="" class="button outline">{{ trans('common.cancel') }}</a>
    <button type="submit" class="button">{{ trans('entities.chapters_save') }}</button>
</div>

            </form>
        </main>

    </div>
@stop