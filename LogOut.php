<? php
    session_start();
    $_SESSION['email'] = '';
    echo "<script>
        window.location.replace('Login.html');
        </script>";
?>