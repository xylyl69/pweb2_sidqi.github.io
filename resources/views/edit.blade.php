
<form action="{{ url('update-data/'.$students->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" class="form-control" id="name" name="name" value="{{ $students->name }}"required>
    
    <input type="text" class="form-control" id="email" name="email" value="{{ $students->email }}"required>
    <input type="text" class="form-control" id="password" name="password" required>
    <button class="btn btn-success" type="submit">save</button>
</form>