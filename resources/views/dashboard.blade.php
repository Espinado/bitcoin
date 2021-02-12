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
<title>AssetsHub Admin Panel</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Input field for About us --}}
    <form action="{{ route('add_about') }}" method="POST" class="contact_form" novalidate="novalidate"
        data-status="init">
        @csrf
        {{-- check if array with texts is not empty to prevent error --}}
        @if ($about)
            @foreach ($about as $key => $value)
                @foreach ($value as $tmp => $val)
                    About -{{ $key }}_{{ $tmp + 1 }}
                    <textarea name="{{ $key }}[] ['text']">{{ $val }}</textarea><br>
                @endforeach
            @endforeach
        @else
            @foreach (array_values(config('locale.languages')) as $key => $language)
                About -{{ $language[3] }}_1
                <textarea name="{{ $language[0] }}[] ['text']"></textarea><br>
                About -{{ $language[3] }}_2
                <textarea name="{{ $language[0] }}[]"></textarea><br>
                About -{{ $language[3] }}_3
                <textarea name="{{ $language[0] }}[]"></textarea><br>
            @endforeach
        @endif
        @csrf
        <input type="submit" value="OK" class="form-submit btn btn-primary">
    </form>
    __________________________
    {{-- Input field for Why --}}
    <form action="{{ route('add_why') }}" method="POST" class="contact_form" novalidate="novalidate"
        data-status="init">
        @csrf
        {{-- check if array with texts is not empty to prevent error --}}
        @if ($why)
            @foreach ($why as $key => $value)
                @foreach ($value as $tmp => $val)
                    Why -{{ $key }}_{{ $tmp + 1 }}
                    <textarea name="{{ $key }}[] ['text']">{{ $val }}</textarea><br>
                @endforeach
            @endforeach
        @else
            @foreach (array_values(config('locale.languages')) as $key => $language)
                Why -{{ $language[3] }}_1
                <textarea name="{{ $language[0] }}[] ['text']"></textarea><br>
                Why -{{ $language[3] }}_2
                <textarea name="{{ $language[0] }}[]"></textarea><br>
                Why -{{ $language[3] }}_3
                <textarea name="{{ $language[0] }}[]"></textarea><br>
                Why -{{ $language[3] }}_4
                <textarea name="{{ $language[0] }}[] ['text']"></textarea><br>
                Why -{{ $language[3] }}_5
                <textarea name="{{ $language[0] }}[]"></textarea><br>
                Why -{{ $language[3] }}_6
                <textarea name="{{ $language[0] }}[]"></textarea><br>
            @endforeach
        @endif
        @csrf
        <input type="submit" value="OK" class="form-submit btn btn-primary">
    </form>
</x-app-layout>
