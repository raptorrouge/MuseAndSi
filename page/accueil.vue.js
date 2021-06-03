var Accueil = Vue.component('Accueil',{
    template:`
<div>
<form>
<div class="post" v-for="titre in listeTitres" :key="titre.id">
            <audio :src="titre.image" :alt="titre.nom">
            <div>
            <h4>{{musique.nom}}</h4>
            <p>{{musique.chemin}}</p>
            </div>
        </div>
                <div class="submit">
            <button  class="submitBtn">Ajoutez un nouveau titre</button>
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