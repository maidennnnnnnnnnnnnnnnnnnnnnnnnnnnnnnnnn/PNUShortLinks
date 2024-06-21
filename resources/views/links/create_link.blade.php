<style>
    /* Form container */
    .form-container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Form styling */
    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="url"],
    input[type="text"] {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box;
    }

    button{
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }
    button[type="submit"]{
        background-color: #187503;
        color: #fff;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #104e03;
    }
</style>

<div class="form-container">
    <form method="POST" action="{{ route('link.store') }}">
        @csrf
        <label for="link_input">Original Link:</label>
        <input type="url" id="link_input" name="link_input" required>

        <label for="name">User Name:</label>
        <input type="text" id="name" name="name" required>

        <button type="submit">Create Link</button>

    </form>
    <a href="{{ route('link.index') }}"><button style="width: 100%">Back</button></a>
</div>
