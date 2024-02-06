<?php
setcookie("check_cookies_enable", "test_cookies", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled in this browser";
} else {
  echo "Cookies are disabled in this browser";
}
?>

</body>
</html>