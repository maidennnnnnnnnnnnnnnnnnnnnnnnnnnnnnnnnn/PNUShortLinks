<style>
    /* General styling */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f0f0f0;
        padding: 20px;
    }

    /* Page container */
    .container {
        max-width: 900px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table th, table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f2f2f2;
        color: #333;
        font-weight: bold;
    }

    /* Links in table */
    table td a {
        color: #007bff;
        text-decoration: none;
    }

    table td a:hover {
        text-decoration: underline;
    }

    /* Add link button */
    .add-link-btn {
        margin-bottom: 20px;
    }

    .add-link-btn a {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
    }

    .add-link-btn a:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <div class="add-link-btn">
        <a href="{{ route('link.create') }}">Add link</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Short Link</th>
                <th>Name</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($links as $link)
                <tr>
                    <td>{{ $link->id }}</td>
                    <td><a href="{{ url($link->short_link) }}">{{ $link->short_link }}</a></td>
                    <td>{{ $link->name }}</td>
                    <td>{{ $link->created_by }}</td>
                    <td>{{ $link->updated_by }}</td>
                    <td>{{ $link->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
