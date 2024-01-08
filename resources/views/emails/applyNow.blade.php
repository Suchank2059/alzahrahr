<!DOCTYPE html>
<html lang="en">

<head>
    <title>Apply Now Form Submission</title>
</head>

<body class="font-sans bg-gray-100">

    <div class="max-w-2xl mx-auto p-4 bg-white shadow-md mt-8 rounded-md">
        <p class="text-lg font-semibold">Dear {{ $mailData['userName'] }},</p>

        <p class="mt-4">Thank you for submitting your application. We have received the information you provided:</p>
        <p class="mt-4">Applicant Information</p>

        <ul class="list-disc ml-6 mt-4">
            <li><strong>Username:</strong> {{ $mailData['userName'] }}</li>
            <li><strong>Email:</strong> {{ $mailData['email'] }}</li>
            <li><strong>First Name:</strong> {{ $mailData['firstName'] }}</li>
            <li><strong>Last Name:</strong> {{ $mailData['lastName'] }}</li>
            <li><strong>Address:</strong> {{ $mailData['address'] }}</li>
            <li><strong>City:</strong> {{ $mailData['city'] }}</li>
            <li><strong>Country:</strong> {{ $mailData['country'] }}</li>
            <li><strong>Phone number:</strong> {{ $mailData['phoneNumber'] }}</li>
            <li><strong>About myself:</strong> {{ $mailData['aboutMe'] }}</li>
        </ul>

        <p class="mt-4">We will review your application and get back to you soon. If you have any questions, feel free
            to contact us.</p>
    </div>

</body>

</html>
