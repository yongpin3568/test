<html>
<head>
    <title> STAFF LOGIN</title>
    
    <link href="/css/loginpage.css"  rel="stylesheet">


</head>
<body>
    <!-- <div class="box">
    <form action="staff" method="$POST">
    <label>Email Address:</label>      
    <input type="email">
    <label>Password:</label>
    <input type="password">
    <input class="btn" type="button" value="Log in">
    </form>
    </div> -->
    <div class="box">
    <form action="{{ route('students.search') }}" method="post">
    @csrf
    <input type="text" name="query" placeholder="Search by name or email">
    <button class="btn" type="submit">Search</button>
</form>
</div>

</body>
</html> 

        