var Accueil = Vue.component('Accueil',{
    template:`
<div>
<header>
<div class="nav-toggle" onclick="document.documentElement.classList.toggle('menu-open')">
            <div class="nav-toggle-bar"></div>
        </div>
        <nav class="menu">
            <ul>
                <li><img class="logogrand" src="images/logo/kikesa%20logo.svg" alt="Logo du site"></li>
                <li><router-link
                        class="nav-link"
                        :to="{name:'Accueil'}">
                    Accueil</router-link></li>

                <li><router-link
                        class="nav-link"
                        :to="{name:'Biographie'}">
                    Biographie</router-link></li>

                <li><router-link
                        class="nav-link"
                        :to="{name:'Album'}">
                    Musiques</router-link></li>

                <li><router-link
                        class="nav-link"
                        :to="{name:'Contact'}">
                    Contact</router-link></li>

                <li><router-link
                        class="nav-link"
                        :to="{name:'Create'}">
                    Ajoutez</router-link></li>
            </ul>
        </nav>
        <router-link :to="{name:'Accueil'}"><img class="logopetit" id="logosite" src="images/logo/kikesa%20logo.svg" alt="Logo du site"></router-link>
        <router-link :to="{name:'Create'}"><img class="logopetit" id="logocreation" src="images/logo/plus.svg" alt="Ajouter une musique"></router-link>
    </header>
</header>
    
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