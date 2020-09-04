<?php

?>
<link rel="stylesheet" href="style.css">

<form action="/action_page.php" method="post">
    <label for="name">Vardas</label>
        <input id="name" placeholder="Iveskite Varda..." pattern="[a-zA-Z]+" onkeypress="return /[a-z]/i.test(event.key)" require>
    <label for="elpastas">El.Pastas</label>
        <input type="email" id="elpastas" 
        pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" placeholder="Iveskite email..." require>
    <label for="klase">Klase</label>
        <select name="klase" id="klase" require>
            <?php for($i=0; $i<count($klases); $i++):?>
            <option value=<?=$i?>><?=$klases[$i]; ?></option>
            <?php endfor ?>
        </select>
    <textarea name="zinute" id="zinute" cols="30" rows="10" placeholder="Siusti zinute..."></textarea>
        <button type="submit">Siusti</button>
</form>