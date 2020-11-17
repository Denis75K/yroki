<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Формы и кнопки</title>
</head>
<body>
  <form action="#" method="">
    <h2>Оставить заявку</h2>
    <div>
      <input type="text"  name="login" value="Иван">
    </div>
    <div>
      <input type="email" name="mail" placeholder="Введите e-mail">
    </div>
    <div>
      <label>
        <input type="radio" name="tet" value="Статистический">
        <span>Статистический</span>
      </label> 
      <label>
        <input type="radio" name="tet" value="Адаптивный"checked >
        <span>Адаптивный</span>
      </label>
    </div>
    <div>
       <label>
        <input type="checkbox" name="Поддержка">
        <span>Поддержка</span>
      </label>
    </div>
    <div>
      <label>
        <input type="checkbox" name="Дизайн">
        <span>Дизайн</span>
      </label>
    </div>
    <div>
      <label>
        <input type="checkbox" name="SEO">
        <span>SEO</span>
      </label>
    </div>
    <div>
      <h3>Загрузите ваш макет</h3>
    </div>
    <div>
       <input type="file" name="macet">
    </div>
    <div>
       <textarea name="about" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
    </div>
    <div>
      <input type="submit" value="Отправить">
      <input type="reset" value="Очистить">
    </div>
    
</body>
</html>