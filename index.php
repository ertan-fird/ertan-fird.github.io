<!DOCTYPE html>
<html>
<head>
    <title>Ironman</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<noscript>JS is not working!</noscript>

<div class="head">
    <div>user</div>
    <div>
    <h1>ironman</h1>
    <img src="img/logo.png" width="30px" heigth="70px" />
    </div>
</div>
<form method="post" action="">
    <table>
        <caption>Monday</caption>
        <thead>
            <tr>
                <th scope="col">&nbsp</th>
                <th scope="col">Time</th>
                <th scope="col">Deal</th>
                <th scope="col">&nbsp</th>
        </thead>
        <tbody id="dynamic">
            <tr>
                <td class="button-add">
                    <button type="button" class="add">+</button>
                </td>
                <td>
                    <label>
                        <input type="time" name="time" value="06:00">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" class="cellText" name="deal" value="Программирование"></input>
                    </label>
                </td>
                <td class="button-del">
                    <button type="button" class="del">x</button>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <caption>Tuesday</caption>
        <thead>
            <tr>
                <th scope="col">&nbsp</th>
                <th scope="col">Time</th>
                <th scope="col">Deal</th>
                <th scope="col">&nbsp</th>
        </thead>
        <tbody id="dynamic">
            <tr>
                <td class="button-add">
                    <button type="button" class="add">+</button>
                </td>
                <td>
                    <label>
                        <input type="time" name="time" value="06:00">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" class="cellText" name="deal" value="Программирование"></input>
                    </label>
                </td>
                <td class="button-del">
                    <button type="button" class="del">x</button>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <caption>Wednesday</caption>
        <thead>
            <tr>
                <th scope="col">&nbsp</th>
                <th scope="col">Time</th>
                <th scope="col">Deal</th>
                <th scope="col">&nbsp</th>
        </thead>
        <tbody id="dynamic">
            <tr>
                <td class="button-add">
                    <button type="button" class="add">+</button>
                </td>
                <td>
                    <label>
                        <input type="time" name="time" value="06:00">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" class="cellText" name="deal" value="Программирование"></input>
                    </label>
                </td>
                <td class="button-del">
                    <button type="button" class="del">x</button>
                </td>
            </tr>
        </tbody>
    </table>
    
    <table>
        <caption>Thursday</caption>
        <thead>
            <tr>
                <th scope="col">&nbsp</th>
                <th scope="col">Time</th>
                <th scope="col">Deal</th>
                <th scope="col">&nbsp</th>
        </thead>
        <tbody id="dynamic">
            <tr>
                <td class="button-add">
                    <button type="button" class="add">+</button>
                </td>
                <td>
                    <label>
                        <input type="time" name="time" value="06:00">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" class="cellText" name="deal" value="Программирование"></input>
                    </label>
                </td>
                <td class="button-del">
                    <button type="button" class="del">x</button>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <caption>Friday</caption>
        <thead>
            <tr>
                <th scope="col">&nbsp</th>
                <th scope="col">Time</th>
                <th scope="col">Deal</th>
                <th scope="col">&nbsp</th>
        </thead>
        <tbody id="dynamic">
            <tr>
                <td class="button-add">
                    <button type="button" class="add">+</button>
                </td>
                <td>
                    <label>
                        <input type="time" name="time" value="06:00">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="text" class="cellText" name="deal" value="Программирование"></input>
                    </label>
                </td>
                <td class="button-del">
                    <button type="button" class="del">x</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<input name="sub" type="submit" value="SAVE" style="margin: 10px">



<script src="js/dynamicTable.js"></script>
<script>
    new DynamicTable( document.getElementById("dynamic") );
</script>
</body>
</html>