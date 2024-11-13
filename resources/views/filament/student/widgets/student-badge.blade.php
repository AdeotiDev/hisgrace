<x-filament::widget>
    <x-filament::section class="student-badge-section">
        <!-- Student Badge -->
        <div class="student-badge-container">

            <!-- Student Passport Column -->
            <div class="passport-column">
                @php
                    $student = auth()->user(); // Get the currently authenticated user
                @endphp

                <!-- Passport Image -->
                <div class="passport-img-container">
                    @if($student->passport)
                        <img src="{{ Storage::url($student->passport) }}" alt="Student Passport" class="passport-img">
                    @else
                        <img src="{{ asset('images/default-passport.jpg') }}" alt="Default Passport" class="passport-img">
                    @endif
                </div>
                <h2 class="student-name">{{ $student->name }}</h2>
                <p class="student-class">{{ $student->class->name }}</p>
            </div>

            <!-- Student Details Column -->
            <div class="details-column">
                <h3 class="section-title details-title">Student Information</h3>
                <p class="detail-item"><span class="bold">Roll Number:</span> {{ $student->student->roll_number ?? 'N/A' }}</p>
                <p class="detail-item"><span class="bold">Guardian:</span> {{ $student->student->guardian_name ?? 'N/A' }}</p>
                <p class="detail-item"><span class="bold">Parent Contact:</span> {{ $student->student->parent_contact ?? 'N/A' }}</p>
            </div>

            <!-- Student Contact Column -->
            <div class="contact-column">
                <h3 class="section-title contact-title">Contact Information</h3>
                <p class="contact-item"><span class="bold">Email:</span> {{ $student->email }}</p>
                <p class="contact-item"><span class="bold">Phone:</span> {{ $student->student->parent_contact ?? 'N/A' }}</p>
                <p class="contact-item"><span class="bold">Address:</span> {{ $student->student->address ?? 'N/A' }}</p>
            </div>

        </div>
    </x-filament::section>
</x-filament::widget>
@assets
<style>
    /* General styles */
.student-badge-section {
    background-color: #f3f4f6;
    padding: 20px;
    border-radius: 10px;
}

/* Container for the badge layout */
.student-badge-container {
    display: grid;
    grid-template-columns: 1fr 2fr 2fr;
    gap: 20px;
    background: linear-gradient(135deg, #7b2ff7, #ff3d60);
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    padding: 30px;
    color: white;
}

/* Passport Column */
.passport-column {
    text-align: center;
}

.passport-img-container {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 15px;
    border: 4px solid white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.passport-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.student-name {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.student-class {
    font-size: 1.2rem;
    opacity: 0.8;
}

/* Details and Contact Column */
.details-column,
.contact-column {
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.section-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 15px;
    text-align: center;
    padding: 10px;
    border-radius: 8px;
    color: #ffffff;
}

.details-title {
    background-color: #ff3d60;
}

.contact-title {
    background-color: #0e153a;
}

.detail-item,
.contact-item {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.bold {
    font-weight: bold;
}

/* Responsive Design */
@media (max-width: 768px) {
    .student-badge-container {
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .passport-img-container {
        width: 100px;
        height: 100px;
    }

    .student-name {
        font-size: 1.6rem;
    }

    .student-class {
        font-size: 1rem;
    }

    .section-title {
        font-size: 1.2rem;
    }

    .detail-item,
    .contact-item {
        font-size: 1rem;
    }
}

</style>
@endassets