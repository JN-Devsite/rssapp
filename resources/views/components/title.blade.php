@props(['title'])
@php
    $str_search = ['&amp;', '&lt;', '&gt;'];
    $str_replace = ['&' , '<', '>'];
@endphp

{{ str_replace($str_search, $str_replace, $title) }}

