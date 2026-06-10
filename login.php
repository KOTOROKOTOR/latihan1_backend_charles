<?php
include 'header.php';

?>
<section class="container mt-3">
    <form action="sv_login.php" method="post">
<input class="mb-3 form-control" type="text" placeholder="username" name="username">
<input class="mb-3 form-control" type="password"  name="password" placeholder="password">
<button class="form-control btn" type="submit">login</button>
    </form>
    
</section>
<script>
alert('The password you have entered is incorrect. Please try again.');
</script>