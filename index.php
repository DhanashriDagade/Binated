<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        form {
            width: 80%;
            margin: 20px auto;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background-color: purple;
            color: black;
            padding: 10px 30px;
            border: black;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Blog Posts</h1>
    
    <!-- Blog Posts Table -->
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>What's The Big Data?</td>
            <td>It is a different approach to data science and focuses on the impact of big data’s growth into the digital behemoth it is today. The blog’s founder, Gil Press, is intimately familiar with big data and data science, having spent a career in data research and now running a consulting practice. In his blog, Press explores how big data interacts with our lives and impacts everything from technology</td>
            <td>
                <button>Edit</button>

                <button>Delete</button>
            </td>
        </tr>
        
        <!-- Add more rows for additional posts -->
    </table>

    <!-- Blog Post Form -->
    <form>
        <h2>Create New Blog Post</h2>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="4" required></textarea>
        <button type="submit">Create Post</button>
    </form>
</body>
</html>