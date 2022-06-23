function myFunction() {
  var x = document.getElementById("mynav");
  if (x.className === "navigations") {
    x.className += " responsive";
  } else {
    x.className = "navigations";
  }
}

/*pop out search*/
function openSearch() {
  document.getElementById("mySearch").style.display = "block";
}

function closeSearch() {
  document.getElementById("mySearch").style.display = "none";
}

//var using in global whole
var myName = "Yogesh";

myname = 8;

//let changeable
let ourName = "yog raj";

//const unchangeable
const pi = 3.14;

console.log(ourName);

var int;
var string;

int = 10 * 3;
string = "YOgesh";
int++;

document.write(typeof int + int + "----");
document.write(typeof string + string + "----");
// document.write(typeof boolean);

var myArray = [
  ["Yogesh", 21, "male"],
  ["Simran", 20, "Female"],
];
var newArray = ["Lucky", 19, "male"];
document.write("Printing Arrays" + "=" + myArray + "<br/>");

// Create an object:
const person = {
  firstName: "Yoess",
  lastName: "shrrr",
  id: 5566,
  fullName: function () {
    return this.firstName + " " + this.lastName;
  },
};

document.getElementById("demo").innerHTML = person.fullName();

const buttonEl = document.querySelector("button");
const inputEl = document.querySelector("input");
const listEl = document.querySelector("ul");

function addGoal() {
  const enteredValue = inputEl.value;
  const listItemEl = document.createElement("li");
  listItemEl.textContent = enteredValue;
  listEl.appendChild(listItemEl);
  inputEl.value = "";
}

buttonEl.addEventListener("click", addGoal);

for (i = 1; i <= 5; i++) {
  document.write("printing for loop" + "<br/>" + i + "<br/>");
}

var j = 21;
while (j <= 25) {
  document.write("while loop" + "=" + j + "<br/>");
  j++;
}

// let x = 15 * 5;
// debugger;
// document.getElementById("debug").innerHTML = x;

//local scoper
// myFunction();

// function myFunction() {
//   let carName = "Volvo";
//   document.getElementById("demo1").innerHTML = typeof carName + " " + carName;
// }

// document.getElementById("demo2").innerHTML = typeof carName;

//global scope
// let carName = "Volvo";
// myFunction();

// function myFunction() {
//   document.getElementById("global").innerHTML = "I can display " + carName;
// }

//ajax
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("ajj").innerHTML = this.responseText;
  };
  xhttp.open("GET", "ajax_info.txt");
  xhttp.send();
}

//js dom manipulation
const masterEl = document.getElementById("master");
console.log(masterEl);

//pormises
let myFirstPromise = new Promise((resolve, reject) => {
  setTimeout(function () {
    resolve("Success!"); // Yay! Everything went well!
  }, 2500);
});

myFirstPromise.then((successMessage) => {
  console.log("Yay! " + successMessage);
});
