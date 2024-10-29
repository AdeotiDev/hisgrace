@php
    // Retrieve the branch names where their IDs are in the $getState() array
    $branches = App\Models\Branch::whereIn('id', $getState())->pluck('name');
@endphp

<div>
    @if($branches->isNotEmpty())
        <ul>
            @foreach ($branches as $branch)
                <li>&rarr; {{ $branch }}</li>
            @endforeach
        </ul>
    @else
        <p>No branches found.</p>
    @endif
</div>
