<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Don't do it</title>
  <link href="/web/css/styleForm.css" rel="stylesheet">
  <link href="/web/css/stylePopup.css" rel="stylesheet">
</head>
<body>
  <div class="main__question">
    <div class="question-content">
      <div class="image"><img src="web/images/Form/hello.svg"></div>
      <div class="text">Записаться на курс</div>
      <div>
        <form class="form" method="POST" action="src/form_handler.php">
          <input class="input__text" type="text" name="name" placeholder="Ваше имя">
          <input class="input__text" type="email" name="email" placeholder="Email">
          <select class="input__select" name="activity">
            <option disabled selected class="input__text">Деятельность</option>
            <option class="input__text input__select_option">Программист</option>
            <option class="input__text input__select_option">Дизайнер</option>
            <option class="input__text input__select_option">Маркетолог</option>
          </select>
          <label class="custom__checkbox">
            <input class="checkbox" name="agreed" type="checkbox">
            <span class="checkbox__text">Согласен получать информационные материалы о старте курса</span>
          </label>
          <input class="button" type="submit" value="Записаться на курс">
        </form>
      </div>
      <img class="question__close close-form" src="web/images/vector.svg" alt="Закрыть">
    </div>
  </div>
</body>
</html>
