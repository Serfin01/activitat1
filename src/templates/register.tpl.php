<?php
    include 'partials/header.tpl.php';
    include 'partials/nav.tpl.php';
?>
<body>
    <form action="?url=registeraction" method="POST">
        <label for="username">username</label><br>
        <input type="text" name="username"><br><br>
        <label for="email">email</label><br>
        <input type="text" name="email"><br><br>
        <label for="password">Contra</label><br>
        <input type="text"  name="password">
        <button>login</button>
    </form>
</body>