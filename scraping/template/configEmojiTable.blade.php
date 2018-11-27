@extends('layouts.configEmojiTable')

@section('emojiTable')
[
@foreach($table as $name => $list)
        '{!! $escapeSingleQuotation($name) !!}' => [
            'unicode' => '{{ $list['unicode'] }}',
            'supportVendor' => [@foreach($list['supportVendor'] as $vendor)'{{ $vendor }}'@if($loop->last===false), @endif
@endforeach],
        ],
@endforeach
    ];
@endsection

@section('mappingOfShortName')
[
@foreach($shortNameAliases as $aliasName => $name)
        '{!! $escapeSingleQuotation($aliasName) !!}' => '{!! $escapeSingleQuotation($name) !!}',@if($escapeSingleQuotation($aliasName) !== $aliasName || $restoreLastBackslash($aliasName) !== $aliasName) // {!! $restoreLastBackslash($aliasName) !!}@endif

@endforeach
    ];
@endsection

@section('unicodeToShortNames')
[
@foreach($unicodeToShortNames as $unicode => $shortNames)
        '{{ $unicode }}' => [
@foreach($shortNames as $name)
            '{!! $escapeSingleQuotation($name) !!}',@if($escapeSingleQuotation($name) !== $name || $restoreLastBackslash($name) !== $name) // {!! $restoreLastBackslash($name) !!}@endif

@endforeach
        ],
@endforeach
    ];
@endsection