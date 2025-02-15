<?php
include_once '../config/database.php';
$db = new Database();

if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['contact']; 
    $address = $_POST['address'];
    $pass = $_POST['password']; 

    $sql = "INSERT INTO employee (name, email, phone, address, pass) VALUES ('$name', '$email', '$phone', '$address', '$pass')";
    
    $result = $db->insert($sql);
    
    if ($result) {
        echo "<script>
            alert('Inserted Successfully.');
            window.location.href = 'AddEmployee.php';
        </script>";
    } else {
        echo "<script>alert('Process Failed!!');</script>";
    }
}
?>

<?php include('header.php'); ?>

<!-- div section-->

    <div class="edit-profile">
        <h2>New Employee Details</h2>
        <!-- Display message if any -->
        <?php if (isset($message)) { ?>
        <div class="alert"><?php echo $message; ?></div>
        <?php } ?>


        <form action="" method="post" class="form-inline">
            <!-- Removed update_profile.php from action -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required />
            </div>

            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" placeholder="Enter your contact" required />
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required />
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required />
            </div>


            <button type="submit" name="submit">Add</button> <!-- Changed name attribute to match PHP code -->
        </form>
    </div>


<?php include('footer.php'); ?>
