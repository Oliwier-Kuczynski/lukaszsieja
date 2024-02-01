<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("assets/head.php");
    ?>
</head>
<body>
    <?php
    require_once("assets/nav.php");
    ?>
    <div class="section-mt container flex jc-c">
        <form action="../auth/register.php" method="post" class="access-form grid gap-xl">
            <div>
                <label for="">Nazwa Użytkowniak</label>
                <input type="text" name="user_name">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">Hasło</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for="">Powtórz Hasło</label>
                <input type="password" name="confirm_password">
            </div>
            <button class="btn" type="submit">Zarejestruj</button>
        </form>
    </div>
</body>
</html>

