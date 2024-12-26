<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            color: #333;
        }
        .school-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .school-header img {
            height: 70px;
            border-radius: 10%;
            margin-bottom: 10px;
        }
        .school-header h1 {
            font-size: 1.8rem;
            margin: 5px 0;
        }
        .school-header p {
            margin: 2px 0;
            font-size: 0.9rem;
        }
        .student-info {
            text-align: center;
            margin-bottom: 30px;
        }
        .student-info p {
            font-size: 0.9rem;
            margin: 4px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            font-size: 0.85rem;
        }
        table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        table td {
            word-wrap: break-word;
        }
        .remarks {
            margin: 30px 0;
            text-align: center;
        }
        .remarks table {
            margin: 0 auto;
            width: 70%;
            border: none;
        }
        .remarks td {
            padding: 10px;
            font-size: 0.9rem;
        }
        .signature {
            text-align: center;
            margin-top: 40px;
        }
        .signature img {
            height: 50px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: #555;
        }

        div.key-to-grades{
            background-color: #f4fa9c;
            text-align: center;
            padding: 10px;
        }
        table{
            margin-top:20px;
            }
        .table-head{
            background-color: rgb(5, 107, 5) !important;
            color:#fff;
            width: 100% !important;
        }
       
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:nth-child(odd){
            background-color: #d2eafd;
        }
    </style>
</head>
<body>
    <!-- School Header -->
    <div class="school-header">
        <img src="{{ public_path('storage/' . $schoolDetails['school_logo']) }}" alt="School Logo">
        <h1>{{ $schoolDetails['school_name'] }}</h1>
        <p><b>Address:</b> {{ $schoolDetails['school_address'] }}</p>
        <p><b>Phone:</b> {{ $schoolDetails['school_phone'] }}</p>
    </div>

    <!-- Student Info -->
    <div class="student-info">
        <h2>Result for {{ $studentData['info']->name }}</h2>
        <p><b>Student ID:</b> {{ $studentData['info']->id }}</p>
        <p><b>Email:</b> {{ $studentData['info']->email }}</p>
        <p><b>Class:</b> {{ $class->name ?? 'N/A' }}</p>
        <p><b>Roll Number:</b> {{ $student->student->roll_number ?? 'N/A' }}</p>
        <p><b>Guardian:</b> {{ $student->student->guardian_name ?? 'N/A' }}</p>
        <p><b>Number in Class:</b> {{ $number_in_class ?? 'N/A' }}</p>
        @php
            $record = App\Models\ResultRoot::find($recordId);
        @endphp
        <p><b>Next Term Begins:</b> {{ $record->next_term ? \Carbon\Carbon::parse($record->next_term)->format('M j, Y') : 'N/A' }}</p>
    </div>

    <!-- Results Table -->
    <table>
        <thead>
            <tr class="table-head">
                <th>Subject</th>
                @foreach ($dynamicHeaders as $header)
                    <th>{{ $header }}</th>
                @endforeach
                <th>Total</th>
                <th>Average</th>
                <th>Highest</th>
                <th>Lowest</th>
                <th>Grade</th>
                <th>Remark</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentData['subjects'] as $subject)
                <tr>
                    <td>{{ $subject['name'] }}</td>
                    @foreach ($dynamicHeaders as $header)
                        <td>{{ $subject['scores'][$header] ?? 'N/A' }}</td>
                    @endforeach
                    <td>{{ $subject['total'] }}</td>
                    <td>{{ number_format($subject['average'], 2) }}</td>
                    <td>{{ $subject['highest'] }}</td>
                    <td>{{ $subject['lowest'] }}</td>
                    <td>{{ $subject['grade'] }}</td>
                    <td>{{ $subject['remark'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Remarks -->
    <div class="remarks">
        <table>
            <tr>
                <td><b>Total Score:</b></td>
                <td>{{ array_sum(array_column($studentData['subjects'], 'total')) }}</td>
            </tr>
            <tr>
                <td><b>Average Score:</b></td>
                <td>{{ number_format(array_sum(array_column($studentData['subjects'], 'total')) / count($studentData['subjects']), 2) }}</td>
            </tr>
            <tr>
                <td><b>Principal's Remarks:</b></td>
                <td>
                    @php
                        $overallAverage = round(array_sum(array_column($studentData['subjects'], 'total')) / count($studentData['subjects']), 2);
                        $comments = $overallAverage >= 90 ? ['Excellent result!', 'Outstanding result!', 'Super performance!'] :
                                   ($overallAverage >= 80 ? ['Very good result!', 'Keep it up!', 'Keep up your brilliance!'] :
                                   ($overallAverage >= 70 ? ['Good result!', 'Keep it up!', 'Try harder next time!'] :
                                   ($overallAverage >= 60 ? ['Fair result!', 'You can do more next time!', 'Keep it up!'] :
                                   ['Needs improvement!', 'Try harder next time!', 'Stay focused in your subjects!'])));
                        echo $comments[array_rand($comments)];
                    @endphp
                </td>
            </tr>
        </table>
    </div>

    <!-- Principal Signature -->
    <div class="signature">
        <img src="{{ public_path('storage/' . $schoolDetails['principal_signature']) }}" alt="Principal's Signature">
        <p><b>{{ $schoolDetails['principal_name'] }}</b><br><cite>Principal</cite></p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Generated on {{ \Carbon\Carbon::now()->format('M j, Y') }}</p>
    </div>
</body>
</html>
