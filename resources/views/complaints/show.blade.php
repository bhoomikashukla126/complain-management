<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Complaint') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <div>
                        <p class="text-sm text-gray-500">Date</p>
                        <p class="text-base font-medium">{{ $complaint->date->format('M d, Y') }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Time</p>
                        <p class="text-base font-medium">{{ \Carbon\Carbon::parse($complaint->time)->format('h:i A') }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Description</p>
                        <p class="text-base">{{ $complaint->description }}</p>
                    </div>

                    <div class="flex items-center gap-3 pt-4">
                        <a href="{{ route('complaints.edit', $complaint) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            Edit
                        </a>
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-600 hover:text-gray-900">
                            Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
