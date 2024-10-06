const elements = {
    _stars: null,
    _rating: null,
    get stars() {
        if (this._stars === null) {
            this._stars = document.querySelectorAll(".stars i");
        }
        return this._stars;
    },
    get rating() {
        if (this._rating == null) {
            this._rating = document.querySelector(".stars input");
        }
        return this._rating;
    }
};

document.addEventListener("DOMContentLoaded", () => {
    if( elements.rating ){
        elements.rating.addEventListener("input", () => {
            rateStars(elements.rating.valueAsNumber, elements.stars); 
        });
    }
    


    //////////////
    ///jQuery
    //////////////
    $(function () {
        count = 0;
        wordsArray = ["Escuela", "Plantel", "Carrera", "Materia", "Profesor" ];
        setInterval(function () {
        count++;
        $("#registraTu").fadeOut(400, function () {
            $(this).text("Registra Tu " + wordsArray[count % wordsArray.length]).fadeIn(400);
        });
        }, 2000);
    });

});  

function rateStars(rating, stars) {
    stars.forEach(star => {
        star.style.color = "#909294";
        
        if (rating > 0) {
            star.style.color = "#FFC857";
        }
        
        rating--;
    });
}

