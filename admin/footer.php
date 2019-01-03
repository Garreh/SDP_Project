<div class="login_footer">
    <?php if(isset($_SESSION['admin']))
    {
    ?>
    Welcome Back! <?php echo $_SESSION['admin'] ?>
    <?php }else{ ?>
    Register as Admin <button onclick="window.location.href = 'admin_register.php';">SIGN UP</button>
    <?php } ?>
    <br/><br/>
    <sub>&#169; 2019 Copyright:</sub> <sub style="color: antiquewhite;">IMRAN's Group.com</sub>
</div>
