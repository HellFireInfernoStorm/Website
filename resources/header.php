<nav class="topnav">
    <a id="home_button" href="../pages/home.php">Home</a>
    <a href="">MenuItem</a>
    <a href="">MenuItem</a>
    <a href="">MenuItem</a>
    <a id="login_button" href="">Login</a>
</nav>

<script>
    function current_tab() {
        switch (current) {
            case "home":
                document.getElementById("home_button").className = "in_use";
                break;
            case "login":
                document.getElementById("login_button").className = "in_use";
                break;
            case "register":
                document.getElementById("login_button").className = "in_use";
                document.getElementById("login_button").innerHTML = "Register";
                document.getElementById("login_button").style.pointerEvents = "none";
        }
    }
</script>