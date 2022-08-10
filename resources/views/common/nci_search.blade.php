<div class="mission" style="  border: 10px solid white;text-align:center;margin-bottom:-30px;">
  <div class="search-container">
    <form action="{{ url('/search') }}" method="GET" role="search">
      <input style="background-color: #FBF4F4;width: 50%;border-radius: 5px;border-width:0px;
border:none;" id="header-search-box-input" type="text" name="term" aria-label="{{ trans('common.search') }}" placeholder="{{ trans('search here...') }}" value="{{ isset($searchTerm) ? $searchTerm : '' }}">
      <button style="background-color: #D820C5;
    height: 40px;
    border-radius: 5px;
    margin-left: -5px;
    width: 75px;color:white" type="submit" aria-label="{{ trans('common.search') }}">Search</button>
 
    </form>
    <!-- <form action="{{ url('/search') }}" method="GET" class="search-box" role="search">
                <button id="header-search-box-button" type="submit" aria-label="{{ trans('common.search') }}" tabindex="-1">@icon('search') </button>
                <input id="header-search-box-input" type="text" name="term"
                       aria-label="{{ trans('common.search') }}" placeholder="{{ trans('common.search') }}"
                       value="{{ isset($searchTerm) ? $searchTerm : '' }}">
            </form> -->
  </div>
</div>