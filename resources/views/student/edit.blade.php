<h1> Edit Student </h1>

<form action="{{route('students.update' , $students->id )}}" method="POST">
    @csrf
    {{-- #1 --}}
    @method('PUT')
    {{-- #2 --}}
    {{-- Value --}}
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$students->name}}"><br><br>

    <label for="number">Number:</label>
    <input type="text" id="number" name="number" value="{{$students->number}}"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$students->email}}" required><br><br>

    <button type="submit">Update</button>

</form>

