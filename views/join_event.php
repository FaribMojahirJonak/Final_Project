<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="setting.php">Settings</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br>
<h1>Join an Event</h1>
<form method="post" action="available_events.php">
    <p>Select an event</p>
    <input type="submit" name="show_event" value="show_event" />
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>

