// Great The Users with Good Morning/Day/Afternoon/Night automatically using .getHours 

const time = new Date().getHours();

let greeting;

if (time < 11) {
  greeting = "Good Morning!";
} 
else if (time < 16) {
  greeting = "Good Day!";
} 
else if (time < 19) {
    greeting = "Good Afternoon!";
} 
else {
  greeting = "Good Evening!";
}

document.getElementById("greeting").innerHTML = greeting;