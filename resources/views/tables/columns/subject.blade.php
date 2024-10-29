@php
    // Retrieve the branch names where their IDs are in the $getState() array
    $subjects = App\Models\Subject::whereIn('id', $getState())->pluck('name');
@endphp

<div>
    @if($subjects->isNotEmpty())
        <ul>
            @foreach ($subjects as $subject)
                <li>&rarr; {{ $subject }}</li>
            @endforeach
        </ul>
    @else
        <p>No subjects found.</p>
    @endif
</div>
