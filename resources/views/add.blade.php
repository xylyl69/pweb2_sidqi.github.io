<form action="add" method="post">
    @csrf
    <input type="text" class="form-control" id="name" name="name" required>
    
    <input type="text" class="form-control" id="email" name="email" required>
    <input type="text" class="form-control" id="password" name="password" required>
    <button class="btn btn-success" type="submit">save</button>
</form>