{{ include('layouts/header.php', { title: 'Show Rental' }) }}

<div class="container">
    <h1>Rental</h1>
    <p><strong>Rental ID:</strong> {{ rental.id }}</p>
    <p><strong>Motorcycle ID:</strong> {{ rental.motorcycle_id }}</p>
    <p><strong>User ID:</strong> {{ rental.user_id }}</p>
    <p><strong>Start Date:</strong> {{ rental.start_date|date('d M Y') }}</p>
    <p><strong>End Date:</strong> {{ rental.end_date|date('d M Y') }}</p>
    <a class="btn" href="{{ base }}/rental/edit?id={{ rental.id }}">Edit</a>
    <form action="{{ base }}/rental/delete" method="post" style="display:inline;">
        <input type="hidden" name="id" value="{{ rental.id }}">
        <button class="btn red">Delete</button>
    </form>
</div>

{{ include('layouts/footer.php') }}
