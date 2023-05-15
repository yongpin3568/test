<html>
<head>
    <title>Staff Search</title>
    
    <link href="/css/loginpage.css"  rel="stylesheet">


</head>
<body>
    
    <div class="box">
    <form action="{{ route('students.search') }}" method="post">
    @csrf
    <input type="text" name="query" placeholder="Search by name or email">
    <button class="btn" type="submit">Search</button>
</form>
</div>

</body>
</html> 

        