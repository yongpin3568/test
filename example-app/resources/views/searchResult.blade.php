<h1>Search Results</h1>

<p>Search Query: {{ $query }}</p>

@if ($students->count() > 0)
    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->name }} - {{ $student->email }}
            </li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif
