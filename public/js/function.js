var myNameIs = 'Marissa'; // todo: Fill in your name here.

// todo:
// Create a function called 'sayHello' that takes a parameter 'fname'.

function sayHello(fname) {
    console.log('Hello from ' + (fname));

}
// When called, the function should log a message that says hello from the passed in name.

// todo: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

sayHello(myNameIs);




// do not worry about the details of this line
// just know that it genrates a random number between 1 and 100
var random = Math.floor((Math.random()*100)+1);

// todo:
// Create a function called 'isOdd' that takes a number as a parameter.
function isOdd (someNum) {
   // The function should use the ternary operator to log a message.
   (someNum % 2 == 0) ? console.log('This number is not odd: ' + someNum) : console.log('This number is odd: ' + someNum);
}

isOdd(random);
// The log should tell the number passed in and whether it is odd or not.

// todo: Call the function 'isOdd' passing the variable 'random' as a parameter.
