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

    h5 {
        word-break: break-all;
    }
</style>
<div class="mb-m print-hidden" style="margin-right:20;margin-left:20%;">
    @include('entities.breadcrumbs', ['crumbs' => [
    $chapter->book,
    $chapter,
    ]])
</div>
<div class="container small" style="max-width: 100%;">
    <main class="content-wrap card" style="min-height: auto;">
        <div style="background-color:white;text-align:center;margin-top:-30px;">
            <h5>{{ $chapter->name }}</h5><br>
            <h5>{{ $chapter->description }}</h5>
        </div>
        <div class="row">

            <div class="col-md-10" style="height: auto;margin-top:15px">
                @foreach($pages as $page)
                <div class="col-md-4">
                    <div class="" style="background-color:none;">
                        <div class="card">
                            <div class="card-body">
                                <!-- <a href="{{ url('/nci/mlevel/cancer/ceneter') }}"> -->
                                <?php $type = $page->getType(); ?>
                                <div class="b-{{ $page->getType() }} featured-image-container-wrap">
                                    <a href="{{ $page->getUrl() }}" data-page-type="{{$type}}" data-page-id="{{$page->id}}">
                                        <div class="featured-image-container">
                                        <?php if (isset($page->icon)) { ?>
                                                <img class="images" src="{{ url('public/pages/images/'.$page->icon) }}" alt="{{ $page->name }}">
                                            <?php } else { ?>
                                                <img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
                                            <?php } ?>
                                            <h4 class="card-title management">{{$page->name}}
                                            </h4>
                                        </div>

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
                        @include('entities.meta', ['entity' => $chapter])

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

                        @if($chapter->restricted)
                        <div class="active-restriction">
                            @if(userCan('restrictions-manage', $chapter))
                            <a href="{{ $chapter->getUrl('/permissions') }}" class="entity-meta-item">
                                @icon('lock')
                                <div>{{ trans('entities.chapters_permissions_active') }}</div>
                            </a>
                            @else
                            <div class="entity-meta-item">
                                @icon('lock')
                                <div>{{ trans('entities.chapters_permissions_active') }}</div>
                            </div>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
                <div class="actions mb-xl">
                    <h5>{{ trans('common.actions') }}</h5>
                    <div class="icon-list text-primary">

                        @if(userCan('page-create', $chapter))
                        <a href="{{ $chapter->getUrl('/create-page') }}" class="icon-list-item">
                            <span>@icon('add')</span>
                            <span>{{ trans('entities.pages_new') }}</span>
                        </a>
                        @endif

                        <hr class="primary-background" />

                        @if(userCan('chapter-update', $chapter))
                        <a href="{{ $chapter->getUrl('/edit') }}" class="icon-list-item">
                            <span>@icon('edit')</span>
                            <span>{{ trans('common.edit') }}</span>
                        </a>
                        @endif
                        @if(userCanOnAny('chapter-create'))
                        <a href="{{ $chapter->getUrl('/copy') }}" class="icon-list-item">
                            <span>@icon('copy')</span>
                            <span>{{ trans('common.copy') }}</span>
                        </a>
                        @endif
                        @if(userCan('chapter-update', $chapter) && userCan('chapter-delete', $chapter))
                        <a href="{{ $chapter->getUrl('/move') }}" class="icon-list-item">
                            <span>@icon('folder')</span>
                            <span>{{ trans('common.move') }}</span>
                        </a>
                        @endif
                        @if(userCan('restrictions-manage', $chapter))
                        <a href="{{ $chapter->getUrl('/permissions') }}" class="icon-list-item">
                            <span>@icon('lock')</span>
                            <span>{{ trans('entities.permissions') }}</span>
                        </a>
                        @endif
                        @if(userCan('chapter-delete', $chapter))
                        <a href="{{ $chapter->getUrl('/delete') }}" class="icon-list-item">
                            <span>@icon('delete')</span>
                            <span>{{ trans('common.delete') }}</span>
                        </a>
                        @endif

                        <hr class="primary-background" />

                        @if(signedInUser())
                        @include('entities.favourite-action', ['entity' => $chapter])
                        @endif
                        @if(userCan('content-export'))
                        @include('entities.export-menu', ['entity' => $chapter])
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