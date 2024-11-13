<x-filament-widgets::widget>
    <x-filament::section class="noticeboard-section">
        
        <h2 class="section-title">Noticeboard</h2>

        @php
            // Fetch the noticeboard entries based on the visibility filter
            $notices = \App\Models\Noticeboard::whereJsonContains('visibility', 'all')
                ->orWhereJsonContains('visibility', 'student')
                ->orderBy('created_at', 'desc')
                ->get();
        @endphp

        <div class="noticeboard-cards">
            @foreach($notices as $notice)
                <div class="noticeboard-card">
                    <div class="noticeboard-card-header">
                        <h3 class="notice-title">{{ $notice->title }}</h3>
                        <span class="notice-date">{{ $notice->created_at->format('M d, Y') }}</span>
                    </div>
                    <p class="notice-description">{!! \Str::limit($notice->description, 150) !!}</p>
                    {{-- <a href="{{ route('noticeboard.show', $notice->id) }}" class="view-more">View More</a> --}}
                </div>
            @endforeach
        </div>
    </x-filament::section>
</x-filament-widgets::widget>



@assets
<style>
   .noticeboard-section {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.noticeboard-section .section-title {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

/* Noticeboard Cards Layout */
.noticeboard-section .noticeboard-cards {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 20px;
}

.noticeboard-section .noticeboard-card {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.noticeboard-section .noticeboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

/* Card Header (Title & Date) */
.noticeboard-section .noticeboard-card-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}

.noticeboard-section .notice-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    margin: 0;
}

.noticeboard-section .notice-date {
    font-size: 0.9rem;
    color: #888;
}

/* Notice Description */
.noticeboard-section .notice-description {
    font-size: 1rem;
    color: #666;
    margin-bottom: 15px;
}

/* View More Link */
.noticeboard-section .view-more {
    font-size: 1rem;
    font-weight: bold;
    color: #007BFF;
    text-decoration: none;
    transition: color 0.3s ease;
}

.noticeboard-section .view-more:hover {
    color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .noticeboard-section .noticeboard-cards {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 480px) {
    .noticeboard-section .noticeboard-cards {
        grid-template-columns: 1fr;
    }
}

</style>

@endassets