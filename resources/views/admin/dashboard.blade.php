<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Assignment System</title>
    <!-- Use the correct Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navigation -->
    <nav class="bg-blue-600 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-lg font-semibold">Smart Write</a>
            <div class="space-x-4">
                <a href="/admin/dashboard" class="text-white">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-900">Admin Dashboard</h1>
        <p class="mt-4 text-gray-600">Manage student submissions below.</p>

        <!-- Assignments Table -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">All Submitted Assignments</h2>

            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Student Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Assignment Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Description</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Price</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row -->
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">John Doe</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Shakespeare Analysis Essay</td>
                        <td class="px-6 py-4 text-sm text-gray-900">An essay analyzing the works of Shakespeare.</td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            <span class="text-blue-600">LKR. 1000.00</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            <a href="#" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                        </td>
                    </tr>
                    <!-- Add more rows dynamically as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Assignment Form Modal (For Admin to Edit) -->
    <div id="editModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Assignment</h2>
            <form>
                <div class="mb-4">
                    <label for="assignment_name" class="block text-sm font-medium text-gray-700">Assignment Name</label>
                    <input type="text" id="assignment_name" name="assignment_name" value="Shakespeare Analysis Essay"
                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="4"
                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg">An essay analyzing the works of Shakespeare.</textarea>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" id="price" name="price" value="1000.00"
                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg">Update
                        Assignment</button>
                </div>
            </form>
            <button onclick="closeEditModal()" class="absolute top-2 right-2 text-gray-600">X</button>
        </div>
    </div>

    <script>
        // Function to open the modal
        function openEditModal() {
            document.getElementById('editModal').classList.remove('hidden');
        }

        // Function to close the modal
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>
</body>

</html>
