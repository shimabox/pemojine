@extends('layouts.structureBase')

@section('classNameListOfStructure')
[
@foreach($classes as $class)
            {{$class}},
@endforeach
        ];
@endsection