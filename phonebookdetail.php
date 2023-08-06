<!DOCTYPE html>
<html>
<head>
    <title>Client Information Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        select {
            height: 100px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }


        table {
        width: 80%;
        margin: auto;
        border-collapse: collapse;
        }

        th, td {
        padding: 10px;
        border: 1px solid #ccc;
        }

        th {
        background-color: #f2f2f2;
        }


    </style>
</head>
<body>
    <h1>Client Information Form</h1>
    <form>
        <label for="company">Company Name:</label>
        <input type="text" id="company" name="company" required value="<?php echo "Company Name " . random_int(1, 10) ?>">
        <br>

        <label for="contactName">Contact Name:</label>
        <input type="text" id="contactName" name="contactName" required value="<?php echo "Contact Name " . random_int(1, 10) ?>">

        <br>

        <label for="position">Contact Position:</label>
        <input type="text" id="position" name="position" required>

        <br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required>

        <br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <br>

        <label for="projects">Projects Involved:</label>
        <table>
            <tr>
            <th>Projects</th>
            <th>Role</th>
            <th>Comments</th>
            </tr>
            <tr>
            <td>Project X</td>
            <td>Developer</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
            </tr>
            <tr>
            <td>Project Y</td>
            <td>Designer</td>
            <td>Nullam blandit tellus vel justo lacinia, at rhoncus turpis fringilla.</td>
            </tr>
            <tr>
            <td>Project Z</td>
            <td>Project Manager</td>
            <td>Fusce sed nisl vel sapien tristique scelerisque.</td>
            </tr>
            <tr>
            <td>Project A</td>
            <td>Tester</td>
            <td>Mauris lacinia sem sit amet erat interdum, vitae dictum arcu dapibus.</td>
            </tr>
        </table>

        <br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
