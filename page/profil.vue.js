var Profil = Vue.component('Profil',{
    template:`
<div>
    <form method="post" action="<?php echo "MiseAJourProfil.php?id=".$user['ID_User']; ?>">
        <div class="row">
            <a href="">accueil</a>
            <fieldset>
                <legend>Information</legend>
                <label>Email :
                    <?php echo ($user['EMAIL'])?>
                </label>
                <br>
                <label>Nom :
                    <?php echo ($user['NOM_User'])?>
                </label>
                <br>
                <label>Prenom :
                    <?php echo ($user['PRENOM_User'])?>
                </label>
                <br>
                <label>Age :
                    <?php echo ($user['AGE_User'])?>
                </label>
                <br>
                <label> Role :

                    <?php echo ($user['ROLE_User'])?>
                </label>
                <br>
                <button type="submit">Metre a jours</button>
            </fieldset>
        </div>
    </form>
</div>
    `,
    data(){
        return{
        }
    },
    mounted(){

    },
    methods:{

    }
})