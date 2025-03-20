<x-app-layout pageName="{{$pageName}}">
    <x-slot name="hero">
        @include('sections.hero')
        @include('sections.blog')
    </x-slot>
</x-app-layout>
