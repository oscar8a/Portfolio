<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <title>CNT 4714 - Suppliers, Parts, Jobs, Shipments Database Client</title>
  </head>

  <body style="background-color: black;">

    <div class="container">
        <div class="row">
            <div class="span4">
                <form method="post" action="validator.php">
                    <fieldset>
                        <legend>Login</legend>
                        <label>Username</label>
                        <input type="text" id="username" name="username" class="control-label"/>
                        <label>Password</label>
                        <input type="password" id="password" name="password"/>
                        <br />
                        <button type="submit" class="btn">Login</button>
                    </fieldset>
                </form>
             </div>

            <div class="span8">
            <h3>Welcome to the Database Client</h3>
                <p>This will allow you to run SQL queries and update statements on the Jobs, Suppliers, Parts, and Shipments Databases.</p>
                <h3>Database</h3>
                <p>Connecting to MySQL Database</p>
                <h3>Features</h3>
                    <ul>
                        <li>User Authentication</li>
                        <li>Select Query</li>
                        <li>Update Query</li>
                        <li>Business Logic Implementation</li>
                        <li>Result Page</li>
                        <li>Error Checking</li>
                    </ul>
                <h3>User Login</h3>
                <p>Use the following on the left</p>
                <ul>
                    <li>root : root</li>
                    <li>client1 : client1</li>
                    <li>client2 : client2</li>
                </ul>
        </div>

    </div>

    </div> <!-- /container -->

  </body>
</html>
