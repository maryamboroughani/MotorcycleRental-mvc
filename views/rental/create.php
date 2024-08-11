{{ include('layouts/header.php', { title: 'New Rental' }) }}
<div class="container">
    <form method="post" action="{{ path('rental_store') }}">
        <h2>New Rental</h2>
        
       
        
        <label>Motorcycle ID
            <input type="text" name="motorcycle_id" required>
        </label>
        <label>User ID
            <input type="text" name="user_id" required>
        </label>
        <label>Start Date
            <input type="date" name="start_date" required>
        </label>
        <label>End Date
            <input type="date" name="end_date" required>
        </label>
        
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php') }}
