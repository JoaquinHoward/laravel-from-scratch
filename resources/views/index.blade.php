<h1>Welcome to the homepage</h1>

<form action = "/idea" method = "POST">
    <label for = "idea">idea: </label>
    <input type = "text" name = "idea">
    <input type = "submit">
</form>

@foreach($ideas as $idea)
    {{ $idea }}
@endforeach;