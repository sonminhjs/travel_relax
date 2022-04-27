<?php
include('header.php');
include('dbcon.php');
?>

<section id="feedback">

</section>

<section id="feedback-form">
    <form action="feedback.php" method="post">
        <input style="border-radius: 5px;" type="text" name="name" placeholder="Enter Name" class="feedback">
        <input style="border-radius: 5px;" type="text" name="feedback" placeholder="Enter Feedback" class="feedback">
        <input style="border-radius: 5px;cursor: pointer;" width="1rem" type="submit" name="submit" class="feedback">

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $feedback = $_POST['feedback'];

        $qry = "INSERT INTO `feedback`(`id`, `name`, `feedback`) VALUES ('','$name','$feedback')";
        $run = mysqli_query($sql, $qry);
        if ($run == true) {
    ?>
            <script>
                alert("Feedback Save Perfectly");
            </script>
    <?php
        }
    }
    ?>
</section>

<?php
include('headfooter.php');
?>

</body>

</html>