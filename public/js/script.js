
// on attrape toutes les étoiles
const etoiles = document.querySelectorAll('.etoiles');

// fonction pour ajouter la classe .note
// servira pour les étoiles cliquées
function votez(etoile, index) {
    let positionEtoile = index % 5;
    let debut = index - positionEtoile;
    for(let i=0; i<5; i++){
        if(debut+i<=index){
            etoiles[debut+i].classList.add('note');
        } else {
            etoiles[debut+i].classList.remove('note');
        }
    } 
}

// on ajoute un gestionnaire d'événement (addEventListener) à chaque étoile
etoiles.forEach(// pour parcourir toutes les étoiles
    // fonction anonyme JS : pas de nom de fonction
    (etoile, index)=>{
        // on attache le gestionnaire d'événement à l'étoile
        etoile.addEventListener('click', (evenement)=>{
            votez(etoile, index);
            console.log('vote');
        }
    );
    }

);
