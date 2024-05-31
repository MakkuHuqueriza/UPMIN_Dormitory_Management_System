var preloader = document.getElementById('loader');

function hideSpinner(){
    setTimeout(function(){
        preloader.style.display = 'none';
    }, 2000);
}

