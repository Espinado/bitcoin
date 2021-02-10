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
    <form action="{{route('add_about')}}" method="POST" class="contact_form" novalidate="novalidate" data-status="init">
        @csrf
        @foreach (array_values(config('locale.languages')) as $language)
            About -{{ $language[3] }}
            <textarea name="about_{{ $language[0] }}"></textarea><br>
        @endforeach
        <input type="submit" value="OK" class="form-submit btn btn-primary">
    </form>
</x-app-layout>
