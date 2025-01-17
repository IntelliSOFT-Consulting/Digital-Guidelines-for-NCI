@extends('layouts.simple')

@section('body')
<style type="text/css">
    .featured-image-container img {
        display: block;
        width: 70%;
        max-width: 70%;
        height: 180px;
    }

    .images {
        margin-left: auto;
        margin-right: auto;
    }

    .management {

        text-align: center;

    }
</style>
<div class="mb-s" style="margin-right:20;margin-left:20%;">
    @include('entities.breadcrumbs', ['crumbs' => [
    $book,
    ]])
</div>
<div class="container small" style="max-width: 100%;">
    <main class="content-wrap card" style="min-height: auto;">
        <div style="background-color:white;text-align:center;margin-top:-30px;">
            <h4>Cancer Management Centers level</h4>
        </div>

        <div class="row">

            <div class="col-md-10" style="height: auto;margin-top:15px">
                @foreach ($bookd as $books)
                <div class="col-md-4">
                    <div class="" style="background-color:none;">
                        <div class="card">


                            <div class="card-body">
                                <!-- <a href="{{ url('/nci/mlevel/cancer/ceneter') }}"> -->
                                <div class="b-{{ $books->getType() }} featured-image-container-wrap">
                                    <a href="{{ $books->getUrl() }}" class="" data-entity-type="book" data-entity-id="{{$books->id}}">
                                        <div class="featured-image-container">
                                            <?php if (isset($books->c_image)) { ?>
                                                <img class="images" src="{{ url('public/chapter/Image/'.$books->c_image) }}" alt="{{ $books->name }}">
                                            <?php } else { ?>
                                                <img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
                                            <?php } ?>
                                        </div>
                                        <h4 class="card-title management">{{ $books->name }}
                                        </h4>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-2">
                <div class="mb-xl">
                    <h5>{{ trans('common.details') }}</h5>
                    <div class="blended-links">
                        @include('entities.meta', ['entity' => $book])
                        @if($book->restricted)
                        <div class="active-restriction">
                            @if(userCan('restrictions-manage', $book))
                            <a href="{{ $book->getUrl('/permissions') }}" class="entity-meta-item">
                                @icon('lock')
                                <div>{{ trans('entities.books_permissions_active') }}</div>
                            </a>
                            @else
                            <div class="entity-meta-item">
                                @icon('lock')
                                <div>{{ trans('entities.books_permissions_active') }}</div>
                            </div>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>

                <div class="actions mb-xl">
                    <h5>{{ trans('common.actions') }}</h5>
                    <div class="icon-list text-primary">

                        <a href="{{ $book->getUrl('/create-page') }}" class="icon-list-item">
                            <span>@icon('add')</span>
                            <span>{{ trans('entities.pages_new') }}</span>
                        </a>
                        <a href="{{ $book->getUrl('/create-chapter') }}" class="icon-list-item">
                            <span>@icon('add')</span>
                            <span>{{ trans('entities.chapters_new') }}</span>
                        </a>

                        <hr class="primary-background">

                        @if(userCan('book-update', $book))
                        <a href="{{ $book->getUrl('/edit') }}" class="icon-list-item">
                            <span>@icon('edit')</span>
                            <span>{{ trans('common.edit') }}</span>
                        </a>
                        <a href="{{ $book->getUrl('/sort') }}" class="icon-list-item">
                            <span>@icon('sort')</span>
                            <span>{{ trans('common.sort') }}</span>
                        </a>
                        @endif
                        @if(userCan('book-create-all'))
                        <a href="{{ $book->getUrl('/copy') }}" class="icon-list-item">
                            <span>@icon('copy')</span>
                            <span>{{ trans('common.copy') }}</span>
                        </a>
                        @endif
                        @if(userCan('restrictions-manage', $book))
                        <a href="{{ $book->getUrl('/permissions') }}" class="icon-list-item">
                            <span>@icon('lock')</span>
                            <span>{{ trans('entities.permissions') }}</span>
                        </a>
                        @endif
                        @if(userCan('book-delete', $book))
                        <a href="{{ $book->getUrl('/delete') }}" class="icon-list-item">
                            <span>@icon('delete')</span>
                            <span>{{ trans('common.delete') }}</span>
                        </a>
                        @endif

                        <hr class="primary-background">

                        @if(signedInUser())
                        @include('entities.favourite-action', ['entity' => $book])
                        @endif
                        @if(userCan('content-export'))
                        @include('entities.export-menu', ['entity' => $book])
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
<div style="background:white;height:fit-content">
    @include('common/nci_footer')
</div>
@stop