<nav class="topnav">
  <a id="home_button" href="../index.php">Home</a>
  <a href="">MenuItem</a>
  <a href="">MenuItem</a>
  <a href="">MenuItem</a>
  <a id="login_button" href="../pages/login.php">Login</a>
</nav>

<script>
  function current_tab(){
      switch (current) {
          case "home":
            document.getElementById("home_button").className = "in_use";
            break;
          case "login":
            document.getElementById("login_button").className = "in_use";
            break;
      }
  }
</script>