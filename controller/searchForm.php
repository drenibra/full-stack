<?php $file = basename($_SERVER['SCRIPT_FILENAME']);?>


<form action="" method="post"  class="<?php if ($file == 'index.php') echo "hero-search"; else echo "hero-left";?>">
    <div class="flex-responsive">
    <?php if ($file == 'index.php') { ?>
        <h2 class="whiteText">Gjej vendin e punës</h2>
    <?php } ?>
        <div>
            <label for="qytetet">Qyteti</label>
            <select name="qyteti" id="qytetet">
            <option value="" selected disabled hidden>Zgjidhni</option>
            <option value="Prishtinë">Prishtinë</option>
            <option value="Gjilan">Gjilan</option>
            <option value="Prizren">Prizren</option>
            <option value="Mitrovicë">Mitrovicë</option>
            <option value="Gjakovë">Gjakovë</option>
            <option value="Pejë">Pejë</option>
            <option value="Ferizaj">Ferizaj</option>
            <option value="Fushë Kosovë">Fushë Kosovë</option>
            </select>
        </div>
        <div>
            <label for="fusha">Fusha</label>
            <select name="fusha" id="fusha">
            <option value="" selected disabled hidden>Zgjidhni</option>
            <option value="Programim">Programim</option>
            <option value="Arkitekturë">Arkitekture</option>
            <option value="Gastronomi">Gastronomi</option>
            </select>
        </div>
        <div>
            <label for="pervoja">Niveli</label>
            <select name="pervoja" id="pervoja">
            <option value="" selected disabled hidden>Zgjidhni</option>
            <option value="Intern">Fillestar — Intern</option>
            <option value="Mesatar">Mesatar</option>
            <option value="Advanced">Advanced</option>
            </select>
        </div>
        </div>
        <input type="submit" name="searchBtn" class="btn action fullWidth" value="KËRKO PUNË">
    </div>
</form>