<x-filament::page>
    <form wire:submit.prevent="saveAttendance">
        {{ $this->form }}
        <br>
        <x-filament::button type="submit" class="mt-4">
            Save Attendance
        </x-filament::button>
    </form>
</x-filament::page>
