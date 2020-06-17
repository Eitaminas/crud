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
                        <input type="number" autocomplete="off" class="forma" id="ID" placeholder="ID" name="id">
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
                        <button class="mygtukas" name="sukurti" type="submit">Sukurti</button>
                        <button class="mygtukas" name="update" type="submit">Atnaujinti</button>
                        <button class="mygtukas" name="delete" type="sumbit">Ištrinti</button>
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
                    <?php while ($row = mysqli_fetch_array($data)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['laukasA'] ?></td>
                        <td><?php echo $row['laukasB'] ?></td>
                        <td><?php echo $row['laukasC'] ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>