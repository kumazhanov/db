function showUser(str) { //функция showUser(str) Сначала проверяем, выбран ли человек.
  if (str == "") { //Если никто не выбран (str == "") т.е. строка равно пустоте
    document.getElementById("txtHint").innerHTML = ""; //очищаем содержимое txtHint и выходим из функции
    return;
  } else { //Если человек выбран, сделайте следующее:
    if (window.XMLHttpRequest) { //Создайте объект XMLHttpRequest
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest(); //Создайте объект XMLHttpRequest
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() { //Создайте функцию, которая будет выполняться, когда ответ сервера будет готов
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send(); //Отправить запрос в файл на сервере
  }
}
