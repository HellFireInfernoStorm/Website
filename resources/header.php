<nav class="topnav" onload="current_tab()">
  <a id="home_button" href="../index.php">Home</a>
  <a href="">MenuItem</a>
  <a href="">MenuItem</a>
  <a href="">MenuItem</a>
  <a id="login_button" href="../pages/login.php">Login</a>
</nav>

<script>
  function current_tab(){
      if (current == "home") {
        document.getElementById("home_button").className = "in_use";
      }
  }
</script>