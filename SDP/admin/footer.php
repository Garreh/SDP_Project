<div class="footer">
    <?php if(isset($_SESSION['admin']))
    {
    ?>
    Welcome Back! <?php echo $_SESSION['admin'] ?> <br/><br/>
    <button onclick="location.href='admin_register.php'">Register</button> a new Admin Now!!!
    <?php }else{ ?>
    Login Now <button onclick="window.location.href = 'admin_login.php';">Login</button>
    <?php } ?>
    <br/><br/>
    <sub>&#169; 2019 Copyright:</sub> <sub style="color: antiquewhite;">IMRAN's Group.com</sub>
</div>
