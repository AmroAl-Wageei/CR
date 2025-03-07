<h1>Show All Students</h1>
<button><a href="{{ route('students.create') }}">Add New</a></button><br /><br /><br />


<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>Name</th>  
            <th>Number</th>  
            <th>Email</th>  
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($students as $student)
            <tr> 
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->number }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <a href="{{ route('students.edit' , $student->id ) }}">Edit</a> 
                </td>
            </tr> 




        @endforeach 
    </tbody>
</table>



