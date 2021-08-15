<link rel="stylesheet/less" type="text/css" href="assets/css/auth.less" />
<script src="//cdn.jsdelivr.net/npm/less@4.1.1" ></script>
<div class="wrapper">
    <div class="container">
        <h1>Welcome</h1>

        <form class="form" method="post" action="login.php">
            <input type="text" name="formCheck" value="formCheck" hidden="" readonly>
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" id="login-button">Login</button>
        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $("#login-button").click({
    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
    });
</script>