const faders = document.querySelectorAll('.about-buckets');
const sliders = document.querySelectorAll(".slide-in");

const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -300px 0px"
};
//Observer
const appearOnScroll = new IntersectionObserver
(function (entries, appearOnScroll) {
    entries.forEach(entry => {
       if(!entry.isIntersecting){
           return;
       }else{
           entry.target.classList.add('appear');
           appearOnScroll.unobserve(entry.target);
       }
    });
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});

/*Sliders Effect*/
sliders.forEach(slider => {
    appearOnScroll.observe(slider);
});


/*H1 CAPTION SLIDE IN*/
const slideDown = elem => elem.style.height = `${elem.scrollHeight}px`;

slideDown(document.getElementById("wrapper"));

/*Collapse navbar hamburger on responsive sized screens*/
$(document).ready(function () {
    let home = document.querySelector("#home > nav")

    home.addEventListener('click', function () {
        console.log('sammy t');
        $(".navbar-collapse").collapse('hide');
    });
});


/*Regex Function to validate phone numbers*/
function telephone(){
    document.getElementById('phone').addEventListener('input', function (e) {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
}

/*Success flash alert fade out*/
$(document).ready(function(){
    $('#home > div.alert.alert-success').fadeIn().delay(10000).fadeOut();
});
