<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            @if(auth()->user()->role == 'patient')
            Patient
            @elseif(auth()->user()->role == 'assistent')
            Assistent
            @elseif(auth()->user()->role == 'tandarts')
            Tandarts
            @elseif(auth()->user()->role == 'mondhygienist')
            Mondhygiënist
            @elseif(auth()->user()->role == 'praktijkmanagement')
            Praktijkmanagement
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if(auth()->user()->role == 'patient')
                    Patient Home
                    @elseif(auth()->user()->role == 'assistent')
                    Assistent Home
                    @elseif(auth()->user()->role == 'tandarts')
                    Tandarts Home
                    @elseif(auth()->user()->role == 'mondhygienist')
                    Mondhygiënist Home
                    @elseif(auth()->user()->role == 'praktijkmanagement')
                    Praktijkmanagement Home
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>