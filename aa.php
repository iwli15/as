<?php
$students = [
    ['stdNo' => '20003', 'stdName' => 'Ahmed Ali', 'stdEmail' => 'ahmed@gmail.com', 'stdGAP' => 88.7],
    ['stdNo' => '30304', 'stdName' => 'Mona Khalid', 'stdEmail' => 'mona@gmail.com', 'stdGAP' => 78.5],
    ['stdNo' => '10002', 'stdName' => 'Bilal Hmaza', 'stdEmail' => 'bilal@gmail.com', 'stdGAP' => 98.7],
    ['stdNo' => '10005', 'stdName' => 'Said Ali', 'stdEmail' => 'said@gmail.com', 'stdGAP' => 98.7],
    ['stdNo' => '10007', 'stdName' => 'Mohammed Ahmed', 'stdEmail' => 'mohamed@gmail.com', 'stdGAP' => 98.7]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        h2 {
            text-align: center;
            margin-top: 40px;
            color: #6c5ce7;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #6c5ce7;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .total-row {
            background-color: #dfe6e9;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Student Information Table</h2>

    <table>
        <thead>
            <tr>
                <th>Student No</th>
                <th>Name</th>
                <th>Email</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['stdNo'] ?></td>
                <td><?= $student['stdName'] ?></td>
                <td><?= $student['stdEmail'] ?></td>
                <td><?= number_format($student['stdGAP'], 1) ?></td>
            </tr>
            <?php endforeach; ?>
            <tr class="total-row">
                <td colspan="4">Total Students: <?= count($students) ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
