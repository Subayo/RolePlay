<div id="Corps" class="ficheNavire">
    <div class="row clearfix listeAction">
        <div class="col-md-5 column">
            <div class="input-group">
                <span class="input-group-addon">navire</span>
                <select class="form-control selectNavire" id="listeNavire">
                    <option value="" class="defautValue"
                            <?php if (empty($_SESSION['navire'])){ ?>selected="selected"<?php } ?>>selectionner un
                        Navire
                    </option>
                    <?php foreach ($listeNavire as $unNavire) { ?>
                        <option value="<?php echo $unNavire['id']; ?>" class="unNavireOption"
                                <?php if (!empty($_SESSION['navire']) && $_SESSION['navire'] == $unNavire['id']){ ?>selected="selected"<?php } ?>><?php echo $unNavire['nom']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-2 column">
            <button type="button" id="lancerCombatNavire" class="btn btn-default">Bataille</button>
        </div>
        <div class="col-md-5 column">
            <div class="input-group">
                <span class="input-group-addon">navire adverse</span>
                <select class="form-control selectNavire" id="listeNavireAdverse">
                    <option value="" class="defautValue"
                            <?php if (empty($_SESSION['navireAdverse'])){ ?>selected="selected"<?php } ?>>selectionner un
                        Navire
                    </option>
                    <?php foreach ($listeNavire as $unNavire) { ?>
                        <option value="<?php echo $unNavire['id']; ?>" class="unNavireOption"
                                <?php if (!empty($_SESSION['navireAdverse']) && $_SESSION['navireAdverse'] == $unNavire['id']){ ?>selected="selected"<?php } ?>><?php echo $unNavire['nom']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-4 column">
            <div class="row clearfix">
                <div class="col-md-8 column">
                    <button type="button" id="lancerCanonByNavire" class="btn btn-default">attaque canon</button>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-8 column">
                    <button type="button" id="lancerEquipageByNavire" class="btn btn-default">attaque equipage</button>
                </div>
            </div>
            <hr>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">equipage</span>
                        <input class="form-control inputCaracteristiqueNavire" type="number" name="equipage"
                               id="equipage">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">coque</span>
                        <input class="form-control inputCaracteristiqueNavire" type="number" name="coque" id="coque">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">voile</span>
                        <input class="form-control inputCaracteristiqueNavire" type="number" name="voile" id="voile">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">canon</span>
                        <input class="form-control inputCaracteristiqueNavire" type="number" name="canon" id="canon">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">boulet de canon</span>
                        <input class="form-control inputCaracteristiqueNavire" type="number" name="bouletCanon"
                               id="bouletCanon">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
            <div class="row clearfix">
                <div class="col-md-8 column">
                    <button type="button" id="lancerCanonByNavireAdverse" class="btn btn-default">attaque canon</button>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-8 column">
                    <button type="button" id="lancerEquipageByNavireAdverse" class="btn btn-default">attaque equipage
                    </button>
                </div>
            </div>
            <hr>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">equipage</span>
                        <input class="form-control inputEquipageNavire" type="text" name="equipage"
                               id="equipageAdverse">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">coque</span>
                        <input class="form-control inputEquipageNavire" type="number" name="coque" id="coqueAdverse">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">voile</span>
                        <input class="form-control inputEquipageNavire" type="number" name="voile" id="voileAdverse">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">canon</span>
                        <input class="form-control inputEquipageNavire" type="number" name="canon" id="canonAdverse">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="input-group">
                        <span class="input-group-addon">boulet de canon</span>
                        <input class="form-control inputEquipageNavire" type="number" name="bouletCanon"
                               id="bouletCanonAdverse">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="./evenementVueNavire.js"></script>
<script type="text/javascript" src="./evenementVueListeMessage.js"></script>
<script>
    var degatCanonCoque = 1;
    var degatCanonEquipage= 0.25;
    var degatCanonCanon= 0.1;
    var degatEquipageEquipage= 0.25;

    $(document).ready(function () {
        var idNavire = "<?php if (isset($_SESSION['navire'])) {
            echo $_SESSION['navire'];
        }?>";
        var idNavireAdverse = "<?php if (isset($_SESSION['navireAdverse'])) {
            echo $_SESSION['navireAdverse'];
        }?>";

        evenSelectListeNavireChange(".selectNavire");
        evenLancerCanonClick(idNavire, idNavireAdverse);
        evenLancerEquipageClick(idNavire, idNavireAdverse);
        affichageNavire(idNavire, false);
        affichageNavire(idNavireAdverse, true);
        affichageNombreMessageJoueurNonLue();
    });
</script>
</body>
</html>