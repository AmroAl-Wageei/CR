{{-- fORM TO CREATE STUDENT --}}

<h1> Create New Student </h1>

<form action="{{route('students.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="number">Number:</label>
    <input type="text" id="number" name="number" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Submit</button>

</form>
