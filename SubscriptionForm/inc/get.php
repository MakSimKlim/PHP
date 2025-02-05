<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <header>
        <h1>Get free updates</h1>
        <p>Присоединяйтесь чтобы получать обновления по почте</p>
    </header>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Full name"
               value="<?php echo $inputs['name']?? ''?>"
               class="<?php echo isset($errors['name']) ? 'Error' : '' ?>" 
               />
        <small><?php echo $errors['name'] ?? '' ?></small>
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="E-mail"
               value="<?php echo $inputs['email'] ?? '' ?>"
               class="<?php echo isset($errors['email']) ? 'Error' : '' ?>" 
               />
        <small><?php echo $errors['email'] ?? '' ?></small>
    </div>
    <div>
        <input type="checkbox" name="agree" id="agree">
        <label for="agree">Принимаю условия лицензионного соглашения</label>
    </div>
    <input type="submit" value="Подписаться"/>
</form>

