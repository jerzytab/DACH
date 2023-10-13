const cards = document.querySelector('.countryCards');
const arrow = document.querySelector('.down_arrow');
const card = document.querySelectorAll('.card');
const form = document.querySelector(".reservationForm");
const destination = document.querySelector("#destination");

//scrolling into view when the arrow is clicked
arrow.addEventListener('click', ()=> {
    document.querySelector(".main").scrollIntoView({behavior: 'smooth'});
})


//playing the videos in the cards on hover
card.forEach((el)=> {
    let index = el.classList.item(1);
    el.addEventListener('click', () => {
        form.scrollIntoView({behavior: 'smooth'});
        destination.value = index;
        console.log(`googer ${index}`);
    });

    let video = el.querySelector("video");
    el.addEventListener('mouseenter', () => {
        video.play();
    });

    el.addEventListener('mouseleave', () => {
        video.pause();
    });
})

