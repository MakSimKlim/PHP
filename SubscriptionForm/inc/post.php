<?php
    const NAME_REQUIRED = 'Введите Ваше имя';
    const EMAIL_REQUIRED = 'Введите Ваш E-mail';
    const EMAIL_INVALID = 'E-mail неправильный';

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$inputs['name'] = $name;

if($name)
{
    $name = trim($name);
    if($name === '')
    $errors['name'] = NAME_REQUIRED;
}
else
    $errors['name'] = NAME_REQUIRED;

////////////////////////////////////////////////////////////////////
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if($email)
{
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if($email === false)
    $errors['email'] = EMAIL_INVALID;
}
else
    $errors['email'] = EMAIL_REQUIRED;

?>

<?php if(count($errors) === 0): ?>
    <section>
        <h2>Спасибо <?php echo htmlspecialchars($name)?> за подписку!</h2>
        <p>Для завершения выполните следующие действия:</p>
        <ol>
            <li>Зайдите на почтовый ящик <?php echo htmlspecialchars($email)?></li>
            <li>Нажмите кнопку "Подтвердить"</li>
        </ol>
    </section>
<?php endif?>