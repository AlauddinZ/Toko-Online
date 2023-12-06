<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up - Toko Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #001f33; /* Dark background color */
            margin: 0;
            padding: 0;
            color: #fff; /* Text color */
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #002f4f; /* Slightly lighter background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #66d9ff; /* Highlight color for headings */
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #99aabb; /* Label text color */
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #446688; /* Input border color */
            border-radius: 4px;
            background-color: #001f33; /* Dark input background color */
            color: #99aabb; /* Input text color */
        }

        button {
            background-color: #4da6ff; /* Button background color */
            color: #001f33; /* Button text color */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #007acc; /* Button hover background color */
        }

        a {
            color: #4da6ff; /* Link text color */
            text-decoration: none;
            display: inline-block;
            padding: 0px 15px;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>  
    <div class="container">
        <h3>Sign Up - Toko Online</h3>
        <form action="proses_signUp.php" method="post">
            Full Name:
            <input type="text" name="full_name" value="" class="form-control">
            Username:
            <input type="username" name="username" value="" class="form-control">
            Password:
            <input type="password" name="password" value="" class="form-control">
            Confirm Password:
            <input type="password" name="confirm_password" value="" class="form-control">
            Alamat:
            <input type="text" name="alamat" value="" class="form-control">
            No. Telp:
            <input type="text" name="telp" value="" class="form-control">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
            <a href="login.php">Already Sign-Up?</a>
        </form>
    </div>
</body>
</html>