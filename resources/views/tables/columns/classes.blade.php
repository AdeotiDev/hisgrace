@php
    // Retrieve the branch names where their IDs are in the $getState() array
    $classes = App\Models\SchoolClass::whereIn('id', $getState())->pluck('name');
@endphp

<div>
    @if($classes->isNotEmpty())
        <ul>
            @foreach ($classes as $classe)
                <li>&rarr; {{ $classe }}</li>
            @endforeach
        </ul>
    @else
        <p>No classes found.</p>
    @endif
</div>
