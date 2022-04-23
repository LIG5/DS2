function randomboule() {    
    let bpanier = parseInt(f.botpanier.value);
    return Math.floor(Math.random() * bpanier) + 1;
}


function pair(){
    let mpanier = parseFloat(f.monpanier.value);
    let bpanier = parseFloat(f.botpanier.value);
    nbboule = randomboule()
    if (nbboule % 2 == 0){
        mpanier = mpanier + nbboule
        bpanier = bpanier - nbboule
        f.botpanier.value = bpanier
        f.monpanier.value = mpanier
    } else {
        mpanier = mpanier - nbboule
        bpanier = bpanier + nbboule
        f.botpanier.value = bpanier
        f.monpanier.value = mpanier
    }
    let res = document.getElementById('resultat')
    if ( mpanier>=0 && bpanier<=0){
        res.innerHTML ="Vous avez gagnez"
    }else if(mpanier <=0 && bpanier >=0) {
        res.innerHTML =" Vous avez perdus"
    }
}
function impair(){
    let mpanier = parseFloat(f.monpanier.value);
    let bpanier = parseFloat(f.botpanier.value);
    nbboule = randomboule()
    if (nbboule % 2 != 0){
        mpanier = mpanier + nbboule
        bpanier = bpanier - nbboule
        f.botpanier.value = bpanier
        f.monpanier.value = mpanier
    } else {
        mpanier = mpanier - nbboule
        bpanier = bpanier + nbboule
        f.botpanier.value = bpanier
        f.monpanier.value = mpanier
    }
    let res = document.getElementById('resultat')
    if ( mpanier>=0 && bpanier<=0){
        res.innerHTML ="Vous avez gagnez"
    }else if(mpanier <=0 && bpanier >=0) {
        res.innerHTML =" Vous avez perdus"
    }
}
function demarrer(){
    f.botpanier.value = 20
    f.monpanier.value = 20
}