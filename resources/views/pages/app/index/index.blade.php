@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-6 mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            @include('pages.app.index.sections.therapists')

        </div>

        {{-- @include('pages.app.sections.upcoming-sessions') --}}

    </div>
@endsection
