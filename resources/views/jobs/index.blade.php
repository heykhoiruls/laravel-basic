<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <x-slot:heading>Jobs listing</x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class=" px-4 block py-6 border border-gray-300 rounded-lg">
                <div class="font-bold">
                    {{ $job->employer->name }}
                </div>
                <div>
                    {{ $job['title'] }} pays {{ $job['salary'] }} per years.
                </div>
            </a>
        @endforeach
        <div>{{ $jobs->links() }}</div>
    </div>
</x-layout>
