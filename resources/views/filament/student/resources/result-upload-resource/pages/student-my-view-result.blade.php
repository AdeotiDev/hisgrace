<x-filament-panels::page>
    <div> <!-- Root tag to fix Livewire's requirement -->
        @if($resultUploads->isEmpty())
            <p>No results uploaded for this result root.</p>
        @else
            @php
                $loggedInStudentId = auth()->user()->id;
                $school_logo = $schoolDetails['school_logo'];
                $studentData = [];
                $dynamicHeaders = [];

                // Fetch logged-in student's data and subjects
                foreach ($resultUploads as $resultUpload) {
                    $subject = App\Models\Subject::find($resultUpload->subject_id);
                    $class = App\Models\SchoolClass::find($resultUpload->class_id);
                    $cardItems = is_array($resultUpload->card_items) ? $resultUpload->card_items : json_decode($resultUpload->card_items, true);

                    if (isset($cardItems[$loggedInStudentId])) {
                        $result = $cardItems[$loggedInStudentId];
                        $student = App\Models\User::find($loggedInStudentId);

                        if ($student) {
                            $studentData['info'] = $student;
                            $studentData['subjects'][] = [
                                'name' => $subject->name ?? 'No Subject',
                                'scores' => $result['scores'] ?? [],
                                'total' => $result['total'] ?? 'N/A',
                                'average' => $result['average'] ?? 'N/A',
                                'highest' => $result['highest'] ?? 'N/A',
                                'lowest' => $result['lowest'] ?? 'N/A',
                                'grade' => $result['grade'] ?? 'N/A',
                                'remark' => $result['remark'] ?? 'N/A',
                            ];

                            $dynamicHeaders = array_unique(array_merge($dynamicHeaders, array_keys($result['scores'] ?? [])));
                        }
                    }
                }
            @endphp

            @if(empty($studentData['subjects']))
                <p>No results available for the logged-in student.</p>
            @else
                <div style="height:10px; background:#eaf0f8;"></div>
                <div class="border p-6 mb-6 rounded-lg shadow-lg" style="margin-top:15px; margin-bottom:15px;">
                    <!-- School Header -->
                    <div class="mb-4 flex justify-between border p-2">
                        <div class="school_logo">
                            <img src="{{ Storage::url($school_logo) }}" alt="Logo" class="logo-img" style="height: 70px; border-radius: 10%;">
                        </div>
                        <div class="text-center">
                            <h2 class="font-bold" style="font-size: 2.7rem;">{{ $schoolDetails['school_name'] }}</h2>
                            <p><b>Address: </b> {{ $schoolDetails['school_address'] }}</p>
                            <p><b>Phone:</b> {{ $schoolDetails['school_phone'] }}</p>
                        </div>
                        <div class="student_passport">
                            <img src="{{ Storage::url($studentData['info']->passport) }}" alt="Passport" class="passport-img" style="height: 70px; border-radius: 10%;">
                        </div>
                    </div>

                    <!-- Student Information -->
                    <div class="mb-4 flex justify-between border p-2">
                   
                        <div>
                         <h2 class="text-xl font-bold">{{ $studentData['info']->name }}</h2>
                         <p>Student ID: {{ $studentData['info']->id }}</p>
                         <p>Email: {{ $studentData['info']->email }}</p>
                        </div>
     
                        @php
                         //    $student = App\Models\User::find($studentData['info']->id);
                            $number_in_class = App\Models\User::whereHas('student')->where('student_class', $student->student_class)->count();
                        @endphp
     
                           <!-- Student Details Column -->
                 <div class="details-column">
                     
                     <p class="detail-item"><span class="bold">Roll Number:</span> {{ $student->student->roll_number ?? 'N/A' }}</p>
                     <p class="detail-item"><span class="bold">Guardian:</span> {{ $student->student->guardian_name ?? 'N/A' }}</p>
                 </div>
     
                 <!-- Student Contact Column -->
                 <div class="contact-column">
                     
                     
                     <p class="contact-item"><span class="bold">Class:</span> {{ $class->name ?? 'N/A' }}</p>
                     <p class="contact-item"><span class="bold">Number In Class:</span> {{ $number_in_class ?? 'N/A' }}</p>
                 </div>
                         
                     
                     
                     </div>

                    <!-- Results Table -->
                    <table class="w-full border-collapse border border-gray-300 text-left">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="border px-2 py-1">SUBJECT</th>
                                @foreach ($dynamicHeaders as $header)
                                    <th class="border px-2 py-1">{{ $header }}</th>
                                @endforeach
                                <th class="border px-2 py-1">TOTAL</th>
                                <th class="border px-2 py-1">AVERAGE</th>
                                <th class="border px-2 py-1">HIGHEST</th>
                                <th class="border px-2 py-1">LOWEST</th>
                                <th class="border px-2 py-1">GRADE</th>
                                <th class="border px-2 py-1">REMARK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentData['subjects'] as $subject)
                                <tr>
                                    <td class="border px-2 py-1">{{ $subject['name'] }}</td>
                                    @foreach ($dynamicHeaders as $header)
                                        <td class="border px-2 py-1">{{ $subject['scores'][$header] ?? 'N/A' }}</td>
                                    @endforeach
                                    <td class="border px-2 py-1">{{ $subject['total'] }}</td>
                                    <td class="border px-2 py-1">{{ $subject['average'] }}</td>
                                    <td class="border px-2 py-1">{{ $subject['highest'] }}</td>
                                    <td class="border px-2 py-1">{{ $subject['lowest'] }}</td>
                                    <td class="border px-2 py-1">{{ $subject['grade'] }}</td>
                                    <td class="border px-2 py-1">{{ $subject['remark'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        @endif
    </div>
</x-filament-panels::page>
