var Create = Vue.component('Create',{
    template:`
<div>
    <div class="container1">
    <h1>Ajoutez votre musique</h1>
    <form class="form1" >
        
        <div class="form_group">
            <input type="text" class="form_input" v-model="titre.titre" placeholder="Titre" required>
            <label for="titre" class="form_label">
                Insérer un titre
            </label>
        </div>
        <div class="form_group">
            <input type="text" class="form_input" v-model="titre.url" placeholder="Url" required>
            <label for="url" class="form_label">
                Insérer une url
            </label>
        </div>
        <div class="submit">
            <button  class="submitBtn">Ajoutez</button>
        </div>
    </form>
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