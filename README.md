<h1 align="center">Blog CMS</h1>
<h3 align="right">This is a web proj by &lt/18&gt and Bharath K.</h3>
<p>A blogging system built in php that has an admin user, registration of regular users/bloggers
and will eventually be able to have subscribers (admin has the rights to add or remove them). This specific code base is a little messy so far but
it will be under continuous refactoring for a while. But feel free to check it out and play with it yourself. </p>

<p>
We have done certain fixes and added a feed feature that improvises user experience.
</p>

<h3>Set Up</h3>
<ol>
    <li>Open the file '/includes/db.php' and add your database credentials to the DATABASE NAME, USERNAME and PASSWORD constants for the PDO instance. The application was tested with mysql. Make sure you have the libs for pdo installed .</li>
    <li>Open the file '/createtables.sql' and run all the queries in that file from top to bottom. P.S just import them in your php my admin interface . this worked for me</li>
    <li>Visit '/register' and fill in the form to create a user account. Afterwards, you will be routed back to the '/index.php' page.</li>
    <li>login as admin user name and password. This will route you to admin page . The fixes are finally done and the site is running</li>
    <li>Login in as the user that you just registered and you should see the Dashboard. In the info card, it should say that your users role is 'Admin'. If you see this page, everything was a success!</li>
</ol>

<p>Have fun checking out the application. We Some functionality may not be present right away. give us your feedback</p>
