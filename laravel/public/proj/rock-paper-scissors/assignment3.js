// Great work here, Spencer.  Your application works great and you've 
// followed all the required naming conventions.  You did a great job of
// validating the user input as well.  Nicely done
// 10/10

function playGame(){
  //initialize array
  var gamePieces = ["Rock","Paper","Scissors","Dynamite"]
  //initialize cpu variable and get random piece
  var cpu = getRandomGamePiece(gamePieces.length);
  //prompt user for selection and save to a var\
  var userSelect = window.prompt("Please choose rock, paper, scissors, or dynamite.");
  //convert to lowercase if user uses capital letters and verify string
  userSelect = verify(userSelect.toLowerCase());
  //convert cpu to same datatype as userSelect for comparison
  switch (cpu){
    case 0:
      cpu = "rock";
      break;
    case 1:
      cpu = "paper";
      break;
    case 2:
      cpu = "scissors";
      break;
    case 3:
      cpu = "dynamite";
      break;
  }
  //pass userSelect and cpu to whoWins() to determine winner
  var winner = whoWins(userSelect, cpu);
  document.getElementById("results").innerHTML = "You picked " + userSelect + ". Computer picks " + cpu + ". " + winner;
  //display results using jQuery.
  $( function() {
      $( "#results" ).dialog();
    } );
}
//-------------------------------------------------------------------------------------------//
function getRandomGamePiece(length){
  //use random generator to make cpuSelection
  var cpuSelect = Math.floor(Math.random() * length);
  return cpuSelect;
}
//-------------------------------------------------------------------------------------------//
function whoWins(user, computer){
  var win;// variable for winner;


  if(user == computer){
    win = "It's a draw!";
  }
  else if ((user == "rock" && computer == "scissors")||(user == "paper" && computer == "rock")||
          (user == "scissors" && computer == "paper")||(user == "scissors" && computer == "dynamite")||
          (user == "dynamite" && computer == "rock")||(user == "dynamite" && computer == "paper")){
    win = "You win!";
  }
  else {
    win = "You lose!";
  }

  return win;
}
//------------------------------------------------------------------------------------//

function verify(userSelection){

    if ((userSelection == "rock") || (userSelection == "paper") || (userSelection == "scissors") || (userSelection == "dynamite")){
      return userSelection;
    }
    else {
      userSelection = window.prompt("Entry not valide. Please enter rock, paper, scissors, or dynamite.");
      userSelection = userSelection.toLowerCase();
      return verify(userSelection);
    }
}
