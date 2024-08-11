{{ include('layouts/header.php', { title: 'Edit Rental' }) }}
<div class="container">
    <form method="post" action="{{ path('rental_update') }}">
        <h2>Edit Rental</h2>
        
       
        
        <input type="hidden" name="id" value="{{ rental.id }}">
        
        <label>Motorcycle ID
            <input type="text" name="motorcycle_id" value="{{ rental.motorcycle_id }}" required>
        </label>
        <label>User ID
            <input type="text" name="user_id" value="{{ rental.user_id }}" required>
        </label>
        <label>Start Date
            <input type="date" name="start_date" value="{{ rental.start_date }}" required>
        </label>
        <label>End Date
            <input type="date" name="end_date" value="{{ rental.end_date }}" required>
        </label>
        
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php') }}
