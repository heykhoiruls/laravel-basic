<x-layout>
    <x-slot:title>Job</x-slot:title>
    <x-slot:heading>Job page</x-slot:heading>
    <p>Ini adalah page {{ $job->title }}</p>
    <p>Pendapatan {{ $job->salary }}</p>
    <div class="mt-4">
        <x-button href="/jobs/{{ $job->id }}/edit" class="mt-4">Edit Jobs</x-button>
    </div>
</x-layout>
