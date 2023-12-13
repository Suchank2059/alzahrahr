<div class="bg-gray-100  ">
    <livewire:navigation />
    <livewire:web-livewire />
    <div class="flex justify-center">
    <form class=" xl:flex xl:max-w-md bg-white flex items-center justify-center mt-32 p-6 rounded-md shadow-md">
        <div class="flex items-center ">
            <div>
        <label class="block mb-2" for="name">Name:</label>
        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md" required>

        <label class="block mb-2" for="email">Email:</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md" required>

        <label class="block mb-2" for="phone">Phone:</label>
        <input type="number" maxlength="10" id="phone" name="phone" class="w-full px-4 py-2 border rounded-md" pattern="[0-9]{10}" title="Please enter a 10-digit numeric phone number" required>


        <label class="block mb-2" for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-md" required>

        <label class="block mb-2" for="age">Age:</label>
        <input type="number" id="age" name="age" class="w-full px-4 py-2 border rounded-md" required>

        <label class="block mb-2" for="message">Message:</label>
        <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-md resize-y" required></textarea>

        <div class="mb-4">
            <label class="block mb-2" for="file1">Upload Passport</label>
            <input type="file" id="file1" name="file1" accept=".jpg, .jpeg, .png" class="w-full">
        </div>

        <div class="mb-4">
            <label class="block mb-2 rounded-xl" for="file2">Upload C.V</label>
            <input type="file" id="file2" name="file2" accept=".pdf" class="w-full ">
        </div>

        <div class="mb-4">
            <label class="block mb-2" for="file3">Latest Photo</label>
            <input type="file" id="file3" name="file3" accept=".doc, .docx" class="w-full">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Submit</button>
            </div>
            </div>
    </form>
    </div>
    <livewire:footer />
</div>
