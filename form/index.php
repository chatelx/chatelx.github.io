<?php
// инициализируем сессию
session_start();

// выводим сообщения
echo $er;
// форма 
echo "
     <form name='form1' method='post' action='mail.php'>
              <input name='session_id' type='hidden' value=".session_id().">
         Ваше имя:<br>
              <input type='text' name='name' id='textfield' maxlength='15'>
              <br>
              <br>
         Сообщение:<br>
              <textarea name='message_text' cols='60' rows='5'></textarea><br><br>
              <input type='submit' name='button' id='button' value='Отправить'>
        </form>
    ";
?>