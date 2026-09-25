<!DOCTYPE html>
<html>
<head>
    <title>TASK MANAGER | Add Task</title>

    <style>
        :root {
            --bg: #f6f1eb;
            --card: #fffdfb;
            --border: #d9c2a8;
            --text: #3d2a1f;
            --muted: #6f5242;
            --button: #7a4b2f;
            --button-hover: #5d3725;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 70px 20px 40px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 10px 30px rgba(17, 24, 39, 0.04);
        }

        h1 {
            color: var(--text);
            margin: 0 0 18px;
            font-size: 2rem;
            letter-spacing: -0.04em;
            font-family: 'Times New Roman', Times, serif;
        }

        label {
            display: block;
            margin-top: 16px;
            margin-bottom: 8px;
            color: var(--text);
            font-weight: 600;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #fff;
            color: var(--text);
            box-sizing: border-box;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        button {
            margin-top: 22px;
            background: var(--button);
            color: white;
            border: none;
            padding: 11px 16px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            background: var(--button-hover);
        }

        .back {
            margin-left: 12px;
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>TASK MANAGER</h1>

    <form action="/tasks" method="POST">
        @csrf

        <label>Task Name:</label>
        <input type="text" name="task_name" required>

        <label>Description:</label>
        <textarea name="description"></textarea>

        <label>Status:</label>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
        </select>

        <label>Due Date:</label>
        <input type="date" name="due_date">

        <button type="submit">Save Task</button>

        <a href="/" class="back">Cancel</a>
    </form>

</div>

</body>
</html>