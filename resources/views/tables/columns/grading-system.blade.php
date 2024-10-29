<div style="display: flex; flex-wrap: wrap; gap: 10px;">
    @foreach ($getState() as $grade)
        <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px; min-width: 150px; text-align: center;">
            <strong>Grade:</strong> {{ $grade['grade'] }}<br>
            <strong>Min Score:</strong> {{ $grade['min_score'] }}<br>
            <strong>Max Score:</strong> {{ $grade['max_score'] }}   
        </div>
    @endforeach
</div>
