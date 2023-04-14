
/*==================== SHOW SCROLL UP ====================*/ 
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 200 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 200) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

const search = () => {
    let filter = document.getElementById('search__item').value.toUpperCase();

    let ul = document.getElementsByClassName('gallery__block');

    // let ul = main_div.getElementsByTagName('a');
    
    for ( let i =0 ; i < ul.length ; i++){
        let li = ul[i].getElementsByTagName('p');
        let text = li[0].textContent || li[0].innerHTML;
        
        if(text.toUpperCase().indexOf(filter) > -1){
            ul[i].style.display = "";
        }
        else{
            ul[i].style.display = "none";
        }
    }
}