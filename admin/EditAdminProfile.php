<?php include('header.php');  ?>

<!-- div section-->
<div class="edit-profile">
  <h2>Edit Admin Profile</h2>
  <form action="update_profile.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>

    <label for="bio">Bio:</label>
    <textarea id="bio" name="bio" placeholder="Tell us about yourself"></textarea>

    <button type="submit">Save Changes</button>
  </form>
</div>






<?php include('footer.php');  ?>
