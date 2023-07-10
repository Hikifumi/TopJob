<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table td, table th {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        table th {
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Application Report</h2>
    <h3>Filter: {{ $startDate }} - {{ $endDate }}</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Perusahaan</th>
                <th>Posisi</th>
                <th>Tanggal Lamaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $application)
            <tr>
                <td>{{ $application->id }}</td>
                <td>{{ $application->name }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->perusahaan }}</td>
                <td>{{ $application->posisi }}</td>
                <td>{{ $application->created_at->format('Y-m-d') }}</td>
                <td>{{ $application->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
