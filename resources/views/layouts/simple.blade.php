@extends('layouts.base')

@section('content')
<style type="text/css">
    .label {
    display: inline;
    padding: 0.2em 0.6em 0.3em;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #666;;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
}
</style>
    <div class="flex-fill flex">
        <div class="content flex">
            <div id="main-content" class="scroll-body">
                @yield('body')
            </div>
        </div>
    </div>

@stop
