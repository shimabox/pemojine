@extends('layouts.structure')

@section('bigGroup')
[
@foreach($bigGroup as $bigGroupName => $children)
        '{!! $bigGroupName !!}' => [
            'parent' => null,
            'children' => [
    @foreach($children as $mediumGroupName)
            '{!! $mediumGroupName !!}',
    @endforeach
        ]
        ]
@endforeach
    ];
@endsection

@section('mediumGroup')
[
@foreach($mediumGroups as $mediumGroupName => $assets)
        '{!! $escapeSingleQuotation($mediumGroupName) !!}' => [
            'parent' => '{!! $escapeSingleQuotation($assets['parent']) !!}',
            'children' => [
            @foreach($assets['children'] as $groupName)
    '{!! $escapeSingleQuotation($groupName) !!}',
            @endforeach
]
        ],
@endforeach
    ];
@endsection

@section('group')
[
@foreach($groups as $groupName => $assets)
        '{!! $escapeSingleQuotation($groupName) !!}' => [
            'parent' => '{!! $escapeSingleQuotation($assets['parent']) !!}',
            'children' => null,
            'aliases' => [
            @foreach($assets['aliases'] as $alias)
    '{!! $escapeSingleQuotation($alias) !!}',@if($escapeSingleQuotation($alias) !== $alias || $restoreLastBackslash($alias) !== $alias) // {!! $restoreLastBackslash($alias) !!}@endif

            @endforeach
]
        ],
@endforeach
    ];
@endsection