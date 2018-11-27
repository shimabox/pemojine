@extends('layouts.emojiTable')

@section('emojiTable')
[
@foreach($table as $name => $code)
        '{!! $escapeSingleQuotation($name) !!}' => '{{ $code }}',
@endforeach
    ];
@endsection

@section('mappingOfShortName')
[
@foreach($shortNameAliases as $aliaseName => $name)
        '{!! $escapeSingleQuotation($aliaseName) !!}' => '{!! $escapeSingleQuotation($name) !!}',@if($escapeSingleQuotation($aliaseName) !== $aliaseName || $restoreLastBackslash($aliaseName) !== $aliaseName) // {!! $restoreLastBackslash($aliaseName) !!}@endif

@endforeach
    ];
@endsection