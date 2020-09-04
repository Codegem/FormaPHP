<?php
    if(isset($_POST['button'])){
        foreach ($_POST as $data){
        echo $data."<br>";
        }     
    }
    else{
    ?>
    
    <link rel="stylesheet" href="style.css">
    <form method="post"> 
        <label for="name">Vardas</label>
            <input id="name" name="name" placeholder="Iveskite Varda..." onkeypress="return /[a-z]/i.test(event.key)" require>
        <label for="elpastas">El.Pastas</label>
            <input type="email" name="email" id="elpastas" placeholder="Iveskite email..." require>
        <label for="klase">Klase</label>
            <select name="klase" id="klase" require>
                <option sleected>--Pasirinkite Klase --</option>
                <?php for($i=0; $i<count($klases); $i++):?>
                <option value=<?=$i?>><?=$klases[$i]; ?></option>
                <?php endfor ?>
            </select>
        <textarea name="textarea" id="zinute" cols="30" rows="10" placeholder="Siusti zinute..."></textarea>
            <button type="submit" name="button">Siusti</button>
    </form>

                <?php } ?>