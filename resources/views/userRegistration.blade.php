<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="register" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">User Name:</label>
            <input type="name" name="name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="mobile" name="mobile" class="form-control" placeholder="Mobile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">CV-TEXT</label>
            <textarea name="cv_text" class="form-control" placeholder="CV-TEXT"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Job Title</label>
            <input type="text" name="job_title" class="form-control" placeholder="JOB TITLE">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Company</label>
            <input type="text" name="company" class="form-control" placeholder="COMPANY">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Started Date</label>
            <input type="date" name="started_date" class="form-control" placeholder="S Date">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">INDUSTARY</label>
            <input type="text" name="industary" class="form-control" placeholder="Industary">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">High Level</label>
            <input type="text" name="highest_level" class="form-control" placeholder="Highest Level">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">School</label>
            <input type="text" name="school" class="form-control" placeholder="School">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date Completed</label>
            <input type="date" name="completed_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">SKILL'S</label>
            <input type="text" name="skill_name" class="form-control" placeholder="Mobile">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</body>
</html>