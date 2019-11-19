<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单测试</title>
</head>
<body>
    <form action="../study/04_data_interaction.php" method="post">
        <label>
            <p>姓名： <input name="name" type="text"/></p>
            <p>性别：
                <input name="sex" type="radio" value="男"/>男
                <input name="sex" type="radio" value="女">女
            </p>
            <p>爱好：
                <input name="love[]" type="checkbox" value="Programme"> Programme
                <input name="love[]" type="checkbox" value="Game"> Game
                <input name="love[]" type="checkbox" value="Reading"> Reading
            </p>
            <p>所在地：
                <select name="area">
                    <option value="中国">中国</option>
                    <option value="外国">外国</option>
                </select>
            </p>
            <input type="submit" value="Confirm">
        </label>
    </form>
</body>
</html>