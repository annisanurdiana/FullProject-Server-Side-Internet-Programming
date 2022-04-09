let intro = document.querySelector('.intro');
let wellcome = document.querySelector('.wellcome-header');
let wellcomeSpan = document.querySelectorAll('.wellcome')

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        wellcomeSpan.forEach((span, idx) => {
            setTimeout(() => {
                span.classList.add('active');
            }, (idx + 1) * 400)
        });
        setTimeout(() => {
            wellcomeSpan.forEach((span, idx) => {
                setTimeout(() => {
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50 )
            });
        }, 2000);
        setTimeout(() => {
            intro.style.top = '-100vh';
        }, 2300);
    })
})
// Great The Users with Good Morning/Day/Afternoon/Night automatically using .getHours 
const time = new Date().getHours();
let greeting;
if (time < 11) {
  greeting = "Good Morning! Welcome to Admin Page";
} 
else if (time < 16) {
  greeting = "Good Day! Welcome to Admin Page";
} 
else if (time < 19) {
    greeting = "Good Afternoon! Welcome to Admin Page";
} 
else {
  greeting = "Good Evening! Welcome to Admin Page";
}
document.getElementById("greeting").innerHTML = greeting;
