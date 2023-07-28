<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>forms</title>
    </head>
    <body>
        <h1>HTML FORMS</h1>
        <div class="container">
                <form action="connect.php" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" placeholder="enter your name">

                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" placeholder="enter your email">
                        
                    </div>
                    <div>
                        <label>Gender</label>
                        <input type="radio" name="gender" value="m">Male
                        <input type="radio" name="gender" value="f">Female
                        <input type="radio" name="gender" value="o">Others
                        
                        
                    </div>
                    <div>
                        <label>Mobile no</label>
                        <input type="text" name="mobile" placeholder="enter your mobile no">
                        
                        
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" placeholder="enter your password">
                        
                        
                    </div>
                    <div class="btn">
                        <button type="submit">Submit</button>
                        
                        
                    </div>
                </form>
        </div>
        

        
        
    </body>
</html>