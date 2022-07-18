
<header id="header" component="header-mobile-toggle" class="primary-background">
    <div class="grid mx-l">

        <div class="column">
        <div >
            <a href="{{ url('/') }}" class="logo">
                @if(setting('app-logo', '') !== 'none')
                    <img class="logo-image" src="{{ setting('app-logo', '') === '' ? url('/nci_logo.png') : url(setting('app-logo', '')) }}" alt="Logo">
                @endif
                <!-- @if (setting('app-name-header'))
                    <span class="logo-text">{{ setting('app-name') }}</span>
                @endif -->
            </a>
            <button type="button"
                    refs="header-mobile-toggle@toggle"
                    title="{{ trans('common.header_menu_expand') }}"
                    aria-expanded="false"
                    class="mobile-menu-toggle hide-over-l">@icon('more')</button>
        </div>
        </div>

        <!-- <div class="flex-container-column items-center justify-center hide-under-l">
            @if (hasAppAccess()) -->
            <!-- <form action="{{ url('/search') }}" method="GET" class="search-box" role="search">
                <button id="header-search-box-button" type="submit" aria-label="{{ trans('common.search') }}" tabindex="-1">@icon('search') </button>
                <input id="header-search-box-input" type="text" name="term"
                       aria-label="{{ trans('common.search') }}" placeholder="{{ trans('common.search') }}"
                       value="{{ isset($searchTerm) ? $searchTerm : '' }}">
            </form> -->
            <!-- @endif
        </div> -->

        <div class="column">
        <nav refs="header-mobile-toggle@menu fixed-top" class="header-links">
            <div class="links text-center">
                @if (hasAppAccess())
                    <!-- <a class="hide-over-l" href="{{ url('/search') }}">@icon('search'){{ trans('common.search') }}</a> -->
                    @if(userCanOnAny('view', \BookStack\Entities\Models\Bookshelf::class) || userCan('bookshelf-view-all') || userCan('bookshelf-view-own'))
                        <!-- <a href="{{ url('/shelves') }}">@icon('bookshelf'){{ trans('entities.shelves') }}</a> -->
                        <!-- <a class="active" href="#">{{ trans('entities.national_cancer_institute_of_kenya') }}</a> -->
                        <a href="#">{{ trans('entities.approved_cancer_ceneter') }}</a>
                        <a href="{{ url("/nci/create-book/cancer_ceneter_requirements") }}">{{ trans('entities.cancer_ceneter_requirements') }}</a>
                        <a href="/nci/customer/satisfaction/ratings">{{ trans('entities.customer_satisfaction_ratings') }}</a>
                        <a href="/nci/mlevel/cancer/ceneter">{{ trans('entities.downloads') }}</a>
                        <a href="#">{{ trans('entities.apply_here') }}</a>
                        <!-- <a href="{{ url('/settings') }}">@icon('settings'){{ trans('settings.settings') }}</a> -->
                        <!-- <a href="{{ url('/shelves') }}">{{ trans('entities.national_cancer_institute_of_kenya') }}</a> -->
                    @endif
                    <!-- <a href="{{ url('/books') }}">@icon('books'){{ trans('entities.books') }}</a> -->
                    @if(signedInUser() && userCan('settings-manage'))
                        <a href="{{ url('/settings') }}">@icon('settings'){{ trans('settings.settings') }}</a>
                    @endif
                     <!--
                    @if(signedInUser() && userCan('users-manage') && !userCan('settings-manage'))
                        <a href="{{ url('/settings/users') }}">@icon('users'){{ trans('settings.users') }}</a>
                    @endif -->
                @endif

                @if(!signedInUser())
                    @if(setting('registration-enabled') && config('auth.method') === 'standard')
                        <a href="{{ url('/register') }}">@icon('new-user'){{ trans('auth.sign_up') }}</a>
                    @endif
                    <a href="{{ url('/login')  }}">@icon('login'){{ trans('auth.log_in') }}</a>
                @endif
            </div>
            @if(signedInUser())
                <?php $currentUser = user(); ?>
                <div class="dropdown-container" component="dropdown" option:dropdown:bubble-escapes="true">
                        <span class="user-name py-s hide-under-l" refs="dropdown@toggle"
                              aria-haspopup="true" aria-expanded="false" aria-label="{{ trans('common.profile_menu') }}" tabindex="0">
                              <span class="name">{{ trans('entities.account') }}</span>
                              <!--  @icon('caret-down') -->
                              <img alt="{{ trans('entities.account') }}" class="avatar" src="{{$currentUser->getAvatar(30)}}" alt="{{ $currentUser->name }}">
                           
                        </span>
                    <ul refs="dropdown@menu" class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/favourites') }}" class="icon-item">
                                @icon('star')
                                <div>{{ trans('entities.my_favourites') }}</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $currentUser->getProfileUrl() }}" class="icon-item">
                                @icon('user')
                                <div>{{ trans('common.view_profile') }}</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $currentUser->getEditUrl() }}" class="icon-item">
                                @icon('edit')
                                <div>{{ trans('common.edit_profile') }}</div>
                            </a>
                        </li>
                        <li>
                            <form action="{{ url(config('auth.method') === 'saml2' ? '/saml2/logout' : '/logout') }}"
                                  method="post">
                                {{ csrf_field() }}
                                <button class="icon-item">
                                    @icon('logout')
                                    <div>{{ trans('auth.logout') }}</div>
                                </button>
                            </form>
                        </li>
                        <!-- <li>
                        <a href="{{ url('/settings') }}">@icon('settings'){{ trans('settings.settings') }}</a>

                        </li> -->
                        <li><hr></li>
                        <li>
                            @include('common.dark-mode-toggle', ['classes' => 'icon-item'])
                        </li>
                    </ul>
                </div>
            @endif
        </nav>
        </div>

    </div>
</header>
