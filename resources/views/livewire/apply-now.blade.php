<div>
    <div class="w-screen  px-64 flex justify-center">
        <form action="#" method="post" enctype="multipart/form-data">
            <!-- Input Fields -->
            <div class="flex">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br>
            </div>
            <!-- Message Area -->
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

            <!-- Upload Fields -->
            <label for="file1">Upload File 1:</label>
            <input type="file" id="file1" name="file1" accept=".jpg, .jpeg, .png"><br>

            <label for="file2">Upload File 2:</label>
            <input type="file" id="file2" name="file2" accept=".pdf"><br>

            <label for="file3">Upload File 3:</label>
            <input type="file" id="file3" name="file3" accept=".doc, .docx"><br>

            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>

    </div>
</div>
