<!DOCTYPE html>
<html>
<head>
    <title>New Admission Received</title>
</head>
<body>
    <h2>New Admission Application</h2>
    <p><strong>Name:</strong> {{ $studentData['first_name'] }} {{ $studentData['surname'] }}</p>
    <p><strong>Email:</strong> {{ $studentData['email'] }}</p>
    <p><strong>Nationality:</strong> {{ $studentData['nationality'] }}</p>
    <p><strong>Course:</strong> {{ $studentData['course_name'] }}</p>
    <p><strong>Subject:</strong> {{ $studentData['subject_of_interest'] }}</p>
    <p><strong>Preferred Session:</strong> {{ $studentData['preferred_session'] }}</p>
    <p><strong>Comments:</strong> {{ $studentData['comments'] ?? 'N/A' }}</p>
</body>
</html>
