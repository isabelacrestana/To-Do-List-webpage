<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <title>To-Do List</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kreon:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
    </head>

    <body>

    <?php
    $host = "db";
    $username = "root";
    $password = "root";
    $db = "teste";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, 
        $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "CREATE TABLE if not exists ToDoList  (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            checkmark BOOLEAN,
            task VARCHAR(93) NOT NULL
            )";

        // use exec() because no results are returned
        $conn->exec($sql);
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();

    }

?>

        <h1 
            style="font-size:60px;
            font-family: 'Kreon',serif;
            text-align: center;
            color: #fff;
            margin-top: 80px;">
            To-Do List
        </h1>
        
            <form method="get">
                <input type="text" name="item" placeholder="Insira um item aqui..." />
            </form>
            
            <h1> 
                <?php
                    $item=$_GET['item'];
                    $sql = "INSERT INTO ToDoList (checkmark, task) VALUES (0, '$item')";
                    $conn->exec($sql);

                ?>
            </h1>

            <div class="borda">
            <?php
            
            /*for($i=0;$i<3;$i++)
            {
                
                        if ($i%2==0){
                            echo '<label class="grupo">
                            <input type="checkbox">
                            <img class="img-unchecked" src=".\imagens\uncheckedbox.png" alt="uncheckedbox" width="27" height="27">
                            <img class="img-checked" src=".\imagens\checkedbox.png" alt="checkedbox" width="27" height="27">
                            <text class="topico-cinza">', $row->task, '</text>
                            </label>';
                        }
                        else {
                            echo '<label class="grupo">
                            <input type="checkbox">
                            <img class="img-unchecked" src=".\imagens\uncheckedbox.png" alt="uncheckedbox" width="27" height="27">
                            <img class="img-checked" src=".\imagens\checkedbox.png" alt="checkedbox" width="27" height="27">
                            <text class="topico-branco"> Fazer protótipo</text>
                            </label>';
                        }
                
                if ($i%2==0){
                    echo '<label class="grupo">
                    <input type="checkbox">
                    <img class="img-unchecked" src=".\imagens\uncheckedbox.png" alt="uncheckedbox" width="27" height="27">
                    <img class="img-checked" src=".\imagens\checkedbox.png" alt="checkedbox" width="27" height="27">
                    <text class="topico-cinza">', $query, '</text>
                    </label>';
                }
                else {
                    echo '<label class="grupo">
                    <input type="checkbox">
                    <img class="img-unchecked" src=".\imagens\uncheckedbox.png" alt="uncheckedbox" width="27" height="27">
                    <img class="img-checked" src=".\imagens\checkedbox.png" alt="checkedbox" width="27" height="27">
                    <text class="topico-branco"> Fazer protótipo</text>
                    </label>';
                }
                
            }*/
            ?>
            </div>
    </body>
</html>