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
                    
                    <!-- Button to trigger modal -->
                    <button class="view-more" onclick="openModal({{ $notice->id }})">View Full Description</button>
                    
                    <!-- Modal for full description -->
                    <div id="modal-{{ $notice->id }}" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal({{ $notice->id }})">&times;</span>
                            <h3 class="modal-title">{{ $notice->title }}</h3>
                            <p>{!! $notice->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-filament::section>

    
    
   
</x-filament-widgets::widget>

@assets
<style>
    .modal-title {
        font-weight: 700;
    }
.noticeboard-section {
    background-color: #f9f9f9;
    padding: 0px;
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

.noticeboard-section .notice-description {
    font-size: 1rem;
    color: #666;
    margin-bottom: 15px;
}

/* View More Button */
.noticeboard-section .view-more {
    font-size: 1rem;
    font-weight: bold;
    color: #007BFF;
    background: none;
    border: none;
    cursor: pointer;
    text-decoration: underline;
    padding: 0;
    transition: color 0.3s ease;
}

.noticeboard-section .view-more:hover {
    color: #0056b3;
}

/* Modal styling */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #ffffff;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    max-width: 600px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    position: relative;
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    color: #aaa;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover {
    color: #333;
}

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



