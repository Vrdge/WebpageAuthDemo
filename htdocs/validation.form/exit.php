<?php
setcookie('user', $user['name'], time() - 30, '/');
header("Location: /")
?>