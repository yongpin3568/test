<link href="/css/loginpage.css"  rel="stylesheet">

<h1>Search Results</h1>

<p>Student Details: {{ $query }}</p>

@if ($students->count() > 0)
    <ul>
        @foreach ($students as $student)
            <li>
                Name: {{ $student->name }}  <br> Address: {{ $student->address }}
            </li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif
<a href="staff">Back to search page</a>