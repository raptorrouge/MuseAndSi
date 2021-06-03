var Inscription = Vue.component('Inscription',{
    template:`
<div>
    <div class="form_group">
    <input type="email" class="form_input" id="mail" placeholder="E-mail" required>
    <label for="mail" class="form_label">
        E-mail
    </label>
</div>

<br>

<div class="form_group">
    <input type="number" class="form_input" id="telephone" placeholder="Numéro de téléphone" required>
    <label for="telephone" class="form_label">
        Numéro de téléphone
    </label>
</div>

<p>Quel role souhaitez-vous ?</p>

<div class="form_musicien">
    <input type="checkbox" class="form_input" id="musicien" placeholder="Musicien" required>
    <label for="musicien" class="form_message-label">
        Musicien
    </label>
</div>

<br>

<div class="form_auditeur">
    <input type="checkbox" class="form_input" id="auditeur" placeholder="auditeur" required>
    <label for="auditeur" class="form_message-label">
        Auditeur
    </label>
</div>


<br>
<br>

<div class="submit">
    <button class="submitBtn">Envoyer</button>
</div>
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