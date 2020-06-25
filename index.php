<?php
    include('db.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sukurti, atnaujinti, ištrinti</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="bigTekstas">
                <h1 class="h1Access">Duomenų bazės prieiga</h1>
            </div>
        </header>
        <main>
            <div class="laukas">
                <form action="db.php" method="post">
                    <div for="ID" class="fontSize">
                        <label class="idClass">ID</label>
                        <?php while ($showMaxId = mysqli_fetch_row($maxId)) { ?>
                        <input type="number" autocomplete="off" class="forma" id="ID" placeholder="ID" name="id" value="<?php echo $showMaxId['id'] ?>">
                        <?php } ?>
                    </div>
                    <div for="laukasA" class="fontSize">
                        <label>Laukas A</label>
                        <input type="number" autocomplete="off" class="forma" id="laukasA" placeholder="Įveskite skaičių A" name="laukasA">
                    </div>
                    <div for="laukasB" class="fontSize">
                        <label>Laukas B</label>
                        <input type="email" autocomplete="off" class="forma" id="laukasB" placeholder="Įveskite el.paštą B" name="laukasB">
                    </div>
                    <div for="laukasC" class="fontSize">
                        <label>Laukas C</label>
                        <input type="text" autocomplete="off" class="forma" id="laukasC" placeholder="Įveskite tekstą C" name="laukasC">
                    </div>
                
                    </div>
                    <div class="mygtukai">
                        <button class="mygtukas" name="create" type="submit">Sukurti</button>
                    </div>
                </form>
            </div>
            <div class="lentele">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Laukas A</th>
                        <th>Laukas B</th>
                        <th>Laukas C</th>
                        <th>Veiksmas</th>
                    </tr>
                    <?php while ($eilute = mysqli_fetch_array($data)) { ?>
                    <tr>
                        <td><?php echo $eilute['id'] ?></td>
                        <td><?php echo $eilute['laukasA'] ?></td>
                        <td><?php echo $eilute['laukasB'] ?></td>
                        <td><?php echo $eilute['laukasC'] ?></td>
                        <div>
                            <td>
                                <button name="update" type="submit">Atnaujinti</button>
                                <button name="delete" type="submit">Ištrinti</button>
                            </td>
                        </div>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>