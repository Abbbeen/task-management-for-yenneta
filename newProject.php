<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
?>
<?php include 'header.php';?>

<div class="container loginContainer">
    <h1>Today's Task</h1>
    <div class="login-box">
        <form method="post" action="newProjectValidation.php">
            <div class="input-box">
                <label for="full">Date</label>
                <input type="date" name="full">
            </div>
            <div class="input-box">
                <label for="short">Day Name</label>
                <input type="text" name="short">
            </div>
            <button type="submit">Add</button>
        </form>
        <?php
            if(isset($_SESSION['addProjectError'])){
                echo $_SESSION['addProjectError'];
                unset($_SESSION['addProjectError']);
            }
        ?>
    </div>
</div>

<?php include 'footer.php';?>