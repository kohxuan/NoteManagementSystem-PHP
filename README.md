# 📝 Note Management System
The **Note Management System** is a web-based application designed to allow users to create, manage, and delete notes efficiently. This project utilizes PHP, MySQL, and Bootstrap to provide a user-friendly interface for note management.
<br>

### ✨ Features
- **Create Notes**: Users can create notes with a title, content, and customizable background color.
- **Edit Notes**: Users can edit existing notes, updating the title, content, and color.
- **Delete Notes**: Users can delete notes, with confirmation of successful deletion.
- **User Authentication**: Secure login and registration system to manage user access.
- **Color Customization**: A color palette allows users to select a background color for their notes, enhancing visual organization.
<br>

### 🛠️ Technical Overview
- **PHP**: Handles server-side operations and form submissions.
- **MySQL**: Stores note data securely.
- **Bootstrap**: Ensures a responsive and modern design.
- **JavaScript**: Manages color selection and dynamic UI updates.
<br>

### 📁 File Structure
- **create_form.php**: Form for creating new notes with customizable options.
- **create_process.php**: Processes form submissions and stores note data in the database.
- **db_1.php**: Database connection file, establishing a connection to the MySQL database.
- **delete.php**: Handles note deletion, providing feedback to the user.
- **delete_success.php**: Displays a confirmation message after successful note deletion.
- **index.php**: Main dashboard for managing notes, with options for creating and deleting notes.
- **invalid_login.php**: Displays an error message for invalid login attempts.
- **login.php**: User login page with options to register.
- **login_process.php**: Processes login requests and authenticates users.
- **logout.php**: Logs out users and destroys session data.
- **note_system.sql**: SQL file for setting up the database schema and initial data.
- **read.php**: Fetches and displays notes for the current user.
- **register.php**: User registration page for creating new accounts.
- **register_process.php**: Processes registration requests, checks for existing usernames, and stores new user data.
- **update_form.php**: Form for editing existing notes, allowing updates to all note details.
- **update_process.php**: Processes updates to existing notes, ensuring secure data handling.
<br>

### 🚀 Getting Started
1. **Database Setup**: Import `note_system.sql` into your MySQL database to set up the necessary tables and initial data.
2. **Configure Database Connection**: Update `db_1.php` with your database credentials if they differ from the defaults.
3. **Access the Registration Page**: Open `register.php` in a web browser to create a new account.
4. **Access the Login Page**: Open `login.php` in a web browser to log in or register.
5. **Manage Notes**: Use the application to create, view, edit, and delete notes as needed.
<br>
