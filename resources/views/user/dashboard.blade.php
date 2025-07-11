<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Smart Write Solutions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        /* Navigation */
        nav {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: #fbbf24;
        }

        .logout-btn {
            background: #ef4444;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 20px;
        }

        .welcome-section {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            border-left: 5px solid #10b981;
        }

        .welcome-section h1 {
            font-size: 2.5rem;
            color: #1e293b;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .welcome-section p {
            color: #64748b;
            font-size: 1.1rem;
        }

        /* Form Section */
        .form-section {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            border-top: 5px solid #f59e0b;
        }

        .form-section h2 {
            font-size: 2rem;
            color: #1e293b;
            margin-bottom: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-section h2::before {
            content: "📝";
            font-size: 1.5rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: bold;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group textarea {
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #6366f1;
            background: white;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .file-input {
            position: relative;
            overflow: hidden;
            display: inline-block;
            cursor: pointer;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 15px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .file-input:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .file-input input[type=file] {
            position: absolute;
            left: -9999px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        }

        .submit-btn::before {
            content: "🚀";
        }

        /* Table Section */
        .table-section {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-top: 5px solid #8b5cf6;
        }

        .table-section h2 {
            font-size: 2rem;
            color: #1e293b;
            margin-bottom: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .table-section h2::before {
            content: "📊";
            font-size: 1.5rem;
        }

        .table-container {
            overflow-x: auto;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        thead th {
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: bold;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: #f8fafc;
            transform: scale(1.01);
        }

        tbody td {
            padding: 1rem;
            color: #374151;
        }

        .status-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .status-completed {
            background: #dcfce7;
            color: #166534;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }

        .status-processing {
            background: #dbeafe;
            color: #1e40af;
        }

        .download-link {
            color: #6366f1;
            text-decoration: none;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .download-link:hover {
            background: #6366f1;
            color: white;
            transform: translateY(-2px);
        }

        .download-link::before {
            content: "⬇️";
        }

        .price {
            font-weight: bold;
            color: #059669;
            font-size: 1.1rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-links {
                flex-direction: column;
                gap: 1rem;
            }

            .welcome-section h1 {
                font-size: 2rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .table-container {
                font-size: 0.9rem;
            }

            thead th,
            tbody td {
                padding: 0.5rem;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-section,
        .form-section,
        .table-section {
            animation: fadeInUp 0.6s ease-out;
        }

        .form-section {
            animation-delay: 0.2s;
        }

        .table-section {
            animation-delay: 0.4s;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="/" class="logo">Smart Write Solutions</a>
            <div class="nav-links">
                <a href="">Dashboard</a>
                <button class="logout-btn" onclick="logout()">Logout</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1>Welcome Back, Student! 🎓</h1>
            <p>Ready to submit your next assignment? Let's make your writing shine with AI assistance!</p>
        </div>

        <!-- Submit Assignment Form -->
        <div class="form-section">
            <h2>Submit New Assignment</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="assignment_name">Assignment Name</label>
                        <input type="text" id="assignment_name" name="assignment_name" placeholder="Enter assignment name..." required>
                    </div>
                    <div class="form-group">
                        <label for="deadline">Deadline</label>
                        <input type="datetime-local" id="deadline" name="deadline" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Assignment Description</label>
                    <textarea id="description" name="description" rows="4" placeholder="Describe your assignment requirements..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="file">Upload Assignment File</label>
                    <label for="file" class="file-input">
                        Choose File (PDF, DOC, DOCX)
                        <input type="file" id="file" name="file" accept=".pdf,.doc,.docx" required>
                    </label>
                </div>

                <button type="submit" class="submit-btn">Submit Assignment</button>
            </form>
        </div>

        <!-- Submitted Assignments Table -->
        <div class="table-section">
            <h2>Your Assignment History</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Assignment Name</th>
                            <th>Submitted Date</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Admin Note</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Shakespeare Essay Analysis</strong></td>
                            <td>July 14, 2025</td>
                            <td><span class="status-badge status-completed">Completed</span></td>
                            <td class="price">LKR. 3,500</td>
                            <td>Document per word: LKR 2.50</td>
                            <td><a href="#" class="download-link">Download</a></td>
                        </tr>
                        <tr>
                            <td><strong>History Research Paper</strong></td>
                            <td>July 12, 2025</td>
                            <td><span class="status-badge status-processing">Processing</span></td>
                            <td class="price">LKR. 4,200</td>
                            <td>Under review by our AI team</td>
                            <td><a href="#" class="download-link">Preview</a></td>
                        </tr>
                        <tr>
                            <td><strong>Science Lab Report</strong></td>
                            <td>July 10, 2025</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td class="price">LKR. 2,800</td>
                            <td>Waiting for payment confirmation</td>
                            <td><a href="#" class="download-link">View</a></td>
                        </tr>
                        <tr>
                            <td><strong>Literature Review</strong></td>
                            <td>July 8, 2025</td>
                            <td><span class="status-badge status-completed">Completed</span></td>
                            <td class="price">LKR. 5,000</td>
                            <td>Premium quality check completed</td>
                            <td><a href="#" class="download-link">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function logout() {
            if (confirm('Are you sure you want to logout?')) {
                // Send the logout request to the backend using a form submission
                var logoutForm = document.createElement('form');
                logoutForm.method = 'POST';
                logoutForm.action = '{{ route('logout') }}'; // Laravel's logout route

                // Add CSRF token to the form
                var csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}'; // Laravel CSRF Token
                logoutForm.appendChild(csrfToken);

                document.body.appendChild(logoutForm);
                logoutForm.submit(); // Submit the form to log the user out
            }
        }

        // File input display
        document.getElementById('file').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name;
            if (fileName) {
                e.target.parentElement.innerHTML = `📎 ${fileName}`;
            }
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Assignment submitted successfully! 🎉');
        });
    </script>
</body>
</html>