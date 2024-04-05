<!-- resources/views/students/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter name">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter age">
        </div>
        <div>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button type="submit">Add Student</button>
    </form>
</body>
</html>
