<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Students') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl">{{ __('Student Details') }}</h2>
                        <a href="{{ route('students') }}" class="text-blue-600 hover:text-blue-900">Back to Students</a>
                    </div>

                    <div class="mt-8 space-y-1">
                        <p><strong>ID:</strong> {{ $student->id }}</p>
                        <p><strong>Name:</strong> {{ $student->name }}</p>
                        <p><strong>Email:</strong> {{ $student->email }}</p>
                        <p><strong>Mobile:</strong> {{ $student->mobile }}</p>
                        <p><strong>Class:</strong> {{ $student->class }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($student->status) }}</p>
                        <p><strong>Created At:</strong> {{ $student->created_at->format('d M Y') }}</p>
                    </div>

                    <hr class="my-4">

                    {{-- Subscription Status --}}
                    @if($activeSubscription)
                        @php
                            $remainingDays = \Carbon\Carbon::now()->diffInDays($activeSubscription->end_date, false);
                        @endphp

                        <div class="mb-4 p-4 rounded @if($remainingDays <= 30) bg-yellow-100 border-l-4 border-yellow-500 @else bg-green-100 border-l-4 border-green-500 @endif">
                            <p  style="color: green"><strong>Subscription Active:</strong> {{ ucfirst(str_replace('_', ' ', $activeSubscription->plan)) }}</p>
                       <p><strong>Start Date:</strong> {{ $activeSubscription->start_date->format('d M Y') }}</p>
                           <p><strong>End Date:</strong> {{ $activeSubscription->end_date->format('d M Y') }}</p>
                            @if($remainingDays <= 30)
                                <p class="text-yellow-700 font-semibold">⚠ Subscription expiring soon!</p>
                            @endif
                        </div>
                    @else
                        {{-- Activate Subscription Form --}}
                        <form method="POST" action="{{ route('student.activate', $student->id) }}" class="mt-4">
                            @csrf
                            @method('PATCH')

                            <label class="mr-4">
                                <input type="radio" name="plan" value="1_year" required> 1 Year Plan
                            </label>
                            <label class="mr-4">
                                <input type="radio" name="plan" value="6_months" required> 6 Months Plan
                            </label>
<br/>
                            <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700" style="background-color: #2e6078;">
                                Activate Subscription
                            </button>
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
