<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type = "text/javascript" src = "/scripts/jquery-3.6.0.js"></script>
    <script type = "text/javascript" src = "/scripts/scripts4-5.js"></script>
    <link rel = "stylesheet" href = "/styles/dark.css">
</head>
<body>
<form method="" action="">
    <table>
        <tr>
            <td> Какую лабу показать? </td>
            <td> <input id = "arr4" value = "" size="4" placeholder="4 или 5"></input> </td>
        </tr>
        <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
            <td> Введите матрицу смежности </td>
            <td>
                <textarea id = "arr1" value = "" rows = "9" cols = "16" placeholder="Пример ввода:
0 3 1 1 0 0
3 0 0 0 8 0
1 0 0 5 1 0
1 0 5 0 0 3
0 8 1 0 0 0
0 0 0 3 0 0" autofocus ></textarea> </td>
        </tr>
        <tr>
            <td> Введите начальную и конечную точку (для 4 лабы) </td>
            <td> <input id = "arr2" value = "" size="4" placeholder="От '1'"> </input>
                 <input id = "arr3" value = "" size="4" placeholder="До"></input> </td>
        </tr>
        <tr>
            <td colspan="2"> <input type="button" value = "Посчитать" onclick = "Answer(document.getElementById('arr1').value,document.getElementById('arr2').value,document.getElementById('arr3').value,document.getElementById('arr4').value)"> </td>
        </tr>
</form>
<td> <h2>Результат выполнения операций</h2>
    <div id ="matrix"></div>
</td>
</body>
</html>