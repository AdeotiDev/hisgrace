<html>
<head>
    <title>Report Cards</title>
</head>
<body>
    @if($resultUploads->isEmpty())
        <p>No results uploaded for this result root.</p>
    @else
        {{-- Group results by class --}}


        @php
            $resultsByClass = [];
            $classNames = [];

            foreach ($resultUploads as $resultUpload) {
                $class = App\Models\SchoolClass::find($resultUpload->class_id);
                $className = $class->name ?? 'Unknown Class';

                // Group results by class ID
                $resultsByClass[$resultUpload->class_id][] = $resultUpload;
                $classNames[$resultUpload->class_id] = $className;
            }
        @endphp

        {{-- Tabs for each class --}}
        <div class="tabs">
            <ul class="flex mb-4 border-b">
                @foreach($classNames as $classId => $className)
                    <li class="mr-2">
                        <button 
                            class="tab-toggle px-4 py-2 rounded-t-lg bg-gray-200 hover:bg-gray-300" 
                            data-tab="tab-{{ $classId }}">{{ $className }}</button>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Tab Content for each class --}}
        @foreach($resultsByClass as $classId => $classResults)
            <div class="tab-content hidden" id="tab-{{ $classId }}">
                {{-- Class Header --}}
                

                {{-- Collect students and dynamic headers --}}
                @php
                    $students = [];
                    $dynamicHeaders = []; // To track all possible score headers dynamically

                    foreach ($classResults as $resultUpload) {
                        $subject = App\Models\Subject::find($resultUpload->subject_id);
                        $cardItems = is_array($resultUpload->card_items) ? $resultUpload->card_items : json_decode($resultUpload->card_items, true);

                        foreach ($cardItems as $studentId => $result) {
                            $student = App\Models\User::find($studentId);
                            if ($student) {
                                $students[$studentId]['info'] = $student;
                                $students[$studentId]['subjects'][] = [
                                    'name' => $subject->name ?? 'No Subject',
                                    'scores' => $result['scores'] ?? [],
                                    'total' => $result['total'] ?? 'N/A',
                                    'average' => $result['average'] ?? 'N/A',
                                    'highest' => $result['highest'] ?? 'N/A',
                                    'lowest' => $result['lowest'] ?? 'N/A',
                                    'grade' => $result['grade'] ?? 'N/A',
                                    'remark' => $result['remark'] ?? 'N/A',
                                ];

                                // Collect headers dynamically
                                $dynamicHeaders = array_unique(array_merge($dynamicHeaders, array_keys($result['scores'] ?? [])));
                            }
                        }
                    }
                    $school_logo = $schoolDetails['school_logo'];
                @endphp

                {{-- Render cards for each student --}}
                @foreach ($students as $studentId => $studentData)
                <div style="height:10px; background:#eaf0f8;"></div>
                    <div class="border p-6 mb-6 rounded-lg shadow-lg" style="margin-top:15px; margin-bottom:15px;">
                        <div class="mb-4 flex justify-between border p-2">
                            <div class="school_logo">
                                <img src="{{ Storage::url($school_logo) }}" alt="Logo" class="logo-img" style="height: 70px; border-radius: 10%;">
                            </div>
                          <div class="text-center">  <h2 class="font-bold" style="font-size: 2.7rem;">{{ $schoolDetails['school_name'] }}</h2>
                            <p><b>Address: </b> {{ $schoolDetails['school_address'] }}</p>
                            <p><b>Phone:</b> {{ $schoolDetails['school_phone'] }}</p>
                            </div>
                            <div class="student_passport">
                                <img src="{{ Storage::url($studentData['info']->passport) }}" alt="Logo" class="logo-img" style="height: 70px; border-radius: 10%;">
                            </div>
                        </div>
                        
                        
                        {{-- Student Info --}}
                        

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
                <p class="detail-item"><span class="bold" style="font-weight: 600; color:darkmagenta;">{{$record->name}}</span></p>
                 <p class="detail-item"><span class="bold">Roll Number:</span> {{ $student->student->roll_number ?? 'N/A' }}</p>
                 <p class="detail-item"><span class="bold">Guardian:</span> {{ $student->student->guardian_name ?? 'N/A' }}</p>
                 
             </div>
 
             <!-- Student Contact Column -->
             <div class="contact-column">
                 
                 
                 <p class="contact-item"><span class="bold">Class:</span> {{ $class->name ?? 'N/A' }}</p>
                 <p class="contact-item"><span class="bold">Number In Class:</span> {{ $number_in_class ?? 'N/A' }}</p>
                 <p class="contact-item">
                    <span class="bold">Next Term Begins:</span> 
                    {{ $record->next_term ? \Carbon\Carbon::parse($record->next_term)->format('M j, Y') : 'N/A' }}
                </p>
                
                 
             </div>
                     
                 
                 
                 </div>

                        {{-- Subjects Table --}}
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
                @endforeach
            </div>
        @endforeach
    @endif

    {{-- Tab Switching Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.tab-toggle');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    // Hide all tab contents
                    contents.forEach(content => content.classList.add('hidden'));
                    // Remove active class from tabs
                    tabs.forEach(t => t.classList.remove('bg-gray-300'));

                    // Show the selected tab content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.remove('hidden');
                    this.classList.add('bg-gray-300');
                });
            });

            // Trigger the first tab by default
            if (tabs.length > 0) {
                tabs[0].click();
            }
        });
    </script>

</body>
</html>
