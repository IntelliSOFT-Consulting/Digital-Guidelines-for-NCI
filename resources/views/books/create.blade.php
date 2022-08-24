@extends('layouts.simple')

@section('body')
    <div class="container small" style="max-width: 100%;">
        <div class="my-s">
            @if (isset($bookshelf))
                @include('entities.breadcrumbs', ['crumbs' => [
                    $bookshelf,
                    $bookshelf->getUrl('/create-book') => [
                        'text' => trans('entities.books_create'),
                        'icon' => 'add'
                    ]
                ]])
            @elseif($cancer !=='')
                @include('entities.breadcrumbs', ['crumbs' => [
                    '/books' => [
                        'text' => 'Requirements',
                        'icon' => 'book'
                    ],
                    '/create-book' => [
                        'text' => 'Create Requirements',
                        'icon' => 'add'
                    ]
                ]])
                @elseif($reqs !=='')
                @include('entities.breadcrumbs', ['crumbs' => [
                    '/books' => [
                        'text' => 'Requirements',
                        'icon' => 'book'
                    ],
                    '/create-book' => [
                        'text' => 'Create Requirements',
                        'icon' => 'add'
                    ]
                ]])
                @else
                @include('entities.breadcrumbs', ['crumbs' => [
                    '/books' => [
                        'text' => trans('entities.books'),
                        'icon' => 'book'
                    ],
                    '/create-book' => [
                        'text' => trans('entities.books_create'),
                        'icon' => 'add'
                    ]
                ]])
            @endif
        </div>

        <main class="content-wrap card">
            <h1 class="list-heading" style="margin-bottom: 5px;">Requirements for Establishing Cancer Management Center</h1>
            @if($reqs!=='')
            <div class="row mission">
      <!-- <div class="col-md-10"> -->
      <!-- <div style="background-color:white;text-align:center;margin-top:-30px;"><h4>Cancer Management</h4></div>
      -->
    <div class="col-md-10">
    @foreach ($books as $book)
           <div class="col-md-4">
           <div class="card" >
       <div class="card-body">
     <!-- <a href="{{ url('/nci/mlevel/cancer/center') }}"> -->
     <a href="{{ $book->getUrl() }}" class="" data-entity-type="book" data-entity-id="{{$book->id}}">
       <!-- <img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york"> -->
       <div class="bg-{{ $book->getType() }} featured-image-container-wrap">
        <div class="featured-image-container" @if($book->cover) style="background-image: url('{{ $book->getBookCover() }}')"@endif>
        </div>
        @icon($book->getType())
        
    </div>
         <h4 class="card-title management">{{ $book->name }}
     </h4>
     </a>
       </div>
     </div>
           </div>
           @endforeach
    </div>
    <div class="col-md-2">
    <div class="actions mb-xl">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="icon-list text-primary">
            @if(user()->can('book-create-all'))
                <a href="{{ url('/nci/create-cancer/cancer') }}" class="icon-list-item">
                    <span>@icon('add')</span>
                    <span>Create Requirements</span>
                </a>
            @endif

            @include('entities.view-toggle', ['view' => $view, 'type' => 'books'])

            <a href="{{ url('/tags') }}" class="icon-list-item">
                <span>@icon('tag')</span>
                <span>{{ trans('entities.tags_view_tags') }}</span>
            </a>
        </div>
    </div>
    </div>
      <!-- </div> -->
   
      <!-- </div> -->
      </div>
      @elseif($cancer !=='')
      <form action="{{ isset($bookshelf) ? $bookshelf->getUrl('/create-book') : url('/books') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="requirement" value="1" />
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
        <p class="small">{{ trans('common.cover_image_description') }}</p>

        @include('form.image-picker', [
            'defaultImage' => url('/book_default_cover.png'),
            'currentImage' => (isset($model) && $model->cover) ? $model->getBookCover() : url('/book_default_cover.png') ,
            'name' => 'image',
            'imageClass' => 'cover'
        ])
    </div>
</div>

<div class="form-group" collapsible id="tags-control">
    <button type="button" class="collapse-title text-primary" collapsible-trigger aria-expanded="false">
        <label for="tag-manager">{{ trans('entities.book_tags') }}</label>
    </button>
    <div class="collapse-content" collapsible-content>
        @include('entities.tag-manager', ['entity' => $book ?? null])
    </div>
</div>

<div class="form-group text-right">
    <a href="url('/books')" class="button outline">{{ trans('common.cancel') }}</a>
    <button type="submit" class="button">{{ trans('entities.books_save') }}</button>
</div>
</form>
            @else
            <form action="{{ isset($bookshelf) ? $bookshelf->getUrl('/create-book') : url('/books') }}" method="POST" enctype="multipart/form-data">
                @include('books.parts.form', ['returnLocation' => isset($bookshelf) ? $bookshelf->getUrl() : url('/books')])
            </form>
            @endif
            
        </main>
    </div>
    <div style="background:white;height:fit-content">
    @include('common/nci_footer')
    </div>
@stop