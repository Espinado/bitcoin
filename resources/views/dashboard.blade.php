@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    <form action="{{ route('add_about') }}" method="POST" class="contact_form" novalidate="novalidate"
    data-status="init">
    @csrf
    {{-- @dd($about) --}}
    @if ($about)
    {{-- @dd($about) --}}
       @foreach ($about as $key => $value)
        @foreach ($value as $tmp => $val)
            @if (!$val)
                About -{{ $key }}_{{ $tmp + 1 }}
                <textarea name="{{ $key }}[]" value="{{ $key }}">{{ $val }}</textarea><br>
                @else
                About -{{ $key }}_{{ $tmp + 1 }}
                <textarea name="{{ $key }}[]" value="{{ $key }}">{{ $val }}</textarea><br>

            @endif
        @endforeach
    @endforeach
    @else
    @foreach (array_values(config('locale.languages')) as $key => $language)
            About -{{ $language[3] }}_1
            <textarea name="{{ $language[0] }}[]" value="{{ $language[0] }}"></textarea><br>
            About -{{ $language[3] }}_2
            <textarea name="{{ $language[0] }}[]" value="{{ $language[0] }}"></textarea><br>
            About -{{ $language[3] }}_3
            <textarea name="{{ $language[0] }}[]" value="{{ $language[0] }}"></textarea><br>

        @endforeach
    @endif
    <form action="{{ route('add_about') }}" method="POST" class="contact_form" novalidate="novalidate"
        data-status="init">
        @csrf

        {{-- @foreach (array_values(config('locale.languages')) as $key => $language)
            About -{{ $language[3] }}_1
            <textarea name="{{ $language[0] }}[]" value="{{ $language[0] }}"></textarea><br>
            About -{{ $language[3] }}_2
            <textarea name="{{ $language[0] }}[]" value="{{ $language[0] }}"></textarea><br>
            About -{{ $language[3] }}_3
            <textarea name="{{ $language[0] }}[]" value="{{ $language[0] }}"></textarea><br>

        @endforeach --}}
        <input type="submit" value="OK" class="form-submit btn btn-primary">
    </form>
</x-app-layout>
