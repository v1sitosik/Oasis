$(document).ready(function() {
	$('.menu_ico').click(function(){
        $('.menu_ico').toggleClass('open-menu');
        $('.buttons').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
	});
});

const day = document.getElementById("day");
const hrs = document.getElementById("hrs");
const min = document.getElementById("min");
const sec = document.getElementById("sec");

const currentYear = new Date().getFullYear();


const newYear = new Date(`1 jan ${currentYear + 1} 00:00:00`);


function coundownTimer() {
        const todaydate = Date.now();

        const gap = newYear - todaydate;

const d = Math.floor(gap / 1000 / 60 / 60 / 24);
const h = Math.floor((gap / 1000 / 60 / 60) % 24);
const m = Math.floor((gap / 1000 / 60 ) % 60);
const s = Math.floor((gap / 1000) % 60);   

day.innerHTML = d  < 10 ? "0" + d : d; 
hrs.innerHTML = h  < 10 ? "0" + h : h;
min.innerHTML = m  < 10 ? "0" + m : m;
sec.innerHTML = s  < 10 ? "0" + s : s; 
}
 setInterval(coundownTimer, 1000)

var js = document.createElement('script'); 
js.src = "http://mihailmaximov.ru/projects/snow/snowfall2020.js";
document.body.appendChild(js);

