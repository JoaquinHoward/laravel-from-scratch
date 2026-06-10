<h1>Welcome to the homepage</h1>


<form action = "/add_task" method = "POST">
    @csrf
    <label for = "title">title: </label>
    <input type = "text" name = "title">
    <label for = "description">description: </label>
    <input type = "text" name = "description">
    <input type = "submit">
</form>

<ul>
    @foreach ($tasks as $ task )
    <li>  {{ $task }} </li>
    @endforeach
</ul>
