# Assignment Management System

A web-based Assignment Management System that allows students to submit their assignments, and admins to manage and update those assignments. This application is built using Laravel and is designed with Tailwind CSS for a clean and responsive user interface.

## Features

- **Student Dashboard**:
  - Students can submit assignments by providing the assignment name, description, and uploading files.
  - After submission, students can view the status of their assignments.

- **Admin Dashboard**:
  - Admin can view all submitted assignments.
  - Admin can update the price for the assignment.
  - Admin can edit the description of the assignments.

- **Authentication**:
  - User registration and login functionality.
  - Different dashboards for students and admins based on their roles.

## Tech Stack

- **Frontend**: Tailwind CSS for styling, Blade templates for dynamic content rendering.
- **Backend**: Laravel PHP framework for handling routing, database interactions, and user authentication.
- **Database**: MySQL for storing user data, assignments, and related details.
  
## Prerequisites

To run this application, make sure you have the following installed:

- PHP >= 7.3
- Composer
- Laravel >= 8
- MySQL
- Node.js (for compiling assets if needed)

## Installation

Follow these steps to get the application running locally:

### 1. Clone the repository

```bash
git clone https://github.com/your-username/assignment-management-system.git
cd assignment-management-system
