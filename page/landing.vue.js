var Landing = Vue.component('Landing',{
    template:`
<div>
    <header class="landing">
    <div id="countdown">

        <h2> Ouvert dans :</h2>
        <span id="Days"></span>
        <span id="Hours"></span>
        <span id="Minutes"></span>
        <span id="Seconds"></span>

    </div>

    <a class="logo" href="index.html"><img src="image/logo.png" alt="Logo Muse & Si"></a>


    <div class="submit">
            <button  class="submitBtn">Commencer</button>
        </div>
</header>

<div id="premiere_partie">

    <div>
        Envie de vous lancer dans la musique ? <span> N'attendez plus. </span>
    </div>
    <!-- onclick="window.location.href = 'evenement.html';"-->
    <button>
        C'est parti !
    </button>


</div>

<div id="deuxieme_partie">
    <div id="element1">
        <img src="image/guitarist-1.jpg" alt="image 1">

        <h2>
            Vous aimez la musique ?
            Nous aussi.
        </h2>
        <text>
            Vous jouez d'un instrument mais vous vous sentez isolé?
            Vous n'avez personne avec qui partager vos ambitions.
            Vous débutez et vous avez envie de bien vous lancer ?
            Vous êtes juste curieux et la musique suscite votre attention.
        </text>
    </div>


    <div id="element2">

        <h2>
            "Come as you are"
        </h2>
        <text>
            Que vous soyez musicien débutant, expérimenté ou avec simplement pour idée de vous cultiver musicalement, dans notre communauté de passionnés, ici, tout le monde est le bienvenu !
            Trois valeurs nous unissent, le partage, l'échange et la passion.
        </text>
    </div>

    <div id="element3">
        <img src="image/saxophonist.jpg" alt="image 3">

        <h2>
            Un réseau social
            pour les musiciens,
            mais pas seulement.
        </h2>

        <text>
            Personnalisez votre profil : Musicien ou Spectateur.
            Grâce à nos services d'hébergement audio, vous bénéficierez d'un feed adapté à votre statut.
        </text>

    </div>

    <div id="element4">
        <img src="image/sunset.jpg" alt="image 4">

        <h2>
            Former un groupe
        </h2>

        <text>
            Vous êtes toujours en recherche d'un groupe ?
            Grâce à notre site web, vous pourrez créer en détails puis déposer vos annonces sur une page dédiée.
        </text>
    </div>

    <div id="element5">
        <img src="image/guitarist-jump.jpg" alt="image 5">
        <h2>
            Pratiquez, faites-vous
            connaître !
        </h2>

        <text>
            Notre site, c'est vous, musiciens, qui le construisez.
            Notre plateforme a pour but de promouvoir l'entraide et toutes les formes de musique.
            Partagez vos contenus, gagnez en notoriété et séduisez-nous !
        </text>
    </div>

    <div id="element6">
        <img src="image/violonist-1.jpg" alt="image 6">
        <h2>
            Détendez-vous.
        </h2>

        <text>
            Asseyez-vous confortablement.
            Prenez un temps pour vous et relâchez la pression avec Muse n' Si.
            Découvrez de nouveaux groupes et musiciens à ne pas manquer.
        </text>
    </div>
</div>

<div id="troisieme_partie">
    <div>
        <button>
            Soutenir
        </button>
        <text>
            Retrouvez tous les évènements
            musicaux autour de vous.
        </text>
    </div>

   
    <div class="qui_sommes_nous">
        <p>Bonjour. Ce site web a été réalisé pour notre projet collectif de second semestre dans le cadre du DUT MMI (Métiers du Multimédia et de l'Internet). Nous sommes 3 étudiants de première année à l'IUT de Montbéliard : Tania André, Jules Crevoisier, David Philippe. Pour toute question, nous sommes joignables via nos adresses e-mails.</p>
    </div>
</div>

<footer class="landing">
    <div class="left box">
        <div class="content">
            <div class="réseaux_sociaux">
                <a class="insta" href="https://www.instagram.com/"><img src="image/svg/instagram.svg" alt="Instagram" height="25" width="25"></a>
                <a class="twi" href="https://twitter.com/"><img src="image/svg/twitter.svg" alt=Twitter" height="27" width="27"></a>
                <a class="fb" href="https://www.facebook.com/"><img src="image/svg/facebook.svg" alt="Facebook" height="25" width="25"></a>
                <a class="mmi" hre f="http://mmimontbeliard.com/"><img src="image/svg/logo-mmi.svg" alt="Site MMI" height="27" width="35"></a>
            </div>
            <p class="mail">
                david.philippe02@edu.univ-fcomte.fr | harumi25150@gmail.com | jules.crevoisier@edu.univ-fcomte.fr
            </p>
        </div>
</div>
    <div class="right box">
        <h2>Inscrivez vous à notre Newsletters</h2>
        <div class="content">
            <form action="#">
                <div class="e-mail">
                    <p class="mail">Votre e-mail</p>
                    <input type="email" required>
                    <div class="btn">
                        <button type="submit">Adhérer</button>
                    </div>
                </div>

            </form>
        <a class="mentions" href="mentions-legales.js">mentions legales </a>

        </div>
    </div>
</footer>
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