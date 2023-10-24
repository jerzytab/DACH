const cards = document.querySelector('.countryCards');
const arrow = document.querySelector('.down_arrow');
const card = document.querySelectorAll('.card');
const form = document.querySelector(".reservationForm");
const destination = document.querySelector("#destination");
const mapBtn =document.querySelector(".mapButton");

//scrolling into view when the arrow is clicked
arrow.addEventListener('click', ()=> {
    document.querySelector(".main").scrollIntoView({behavior: 'smooth'});
})


//playing the videos in the cards on hover
card.forEach((el)=> {
    let index = el.classList.item(1);
    el.addEventListener('click', () => {
        document.querySelector(".footer").scrollIntoView({behavior: 'smooth'});
    });

    let video = el.querySelector("video");
    el.addEventListener('mouseenter', () => {
        video.play();
    });

    el.addEventListener('mouseleave', () => {
        video.pause();
    });
})



