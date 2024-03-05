<form action="/form-submit" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>

    <label for="username">Username:</label>
    <input type="text" name="username" id="username"><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br>

    <button type="submit">Register</button>
</form>
