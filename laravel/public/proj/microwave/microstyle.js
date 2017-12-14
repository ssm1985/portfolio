// Nice work on the Microwave, team!  Well done getting the logic working for
// reparsing the numbers to base 60.  Everything is well commented and you have all
// the other requirements for the microwave working and displayed in your app save one:
// I didn't see the 'Cancel' label on a button, but your Stop works like a Cancel.
// Overall teams averaged 48 commits for this team project - your team came in
// on the low end at 22.  Otherwise, nicely done!
// 9/10

  var display = "";
  var sCounter = 0;
  var mCounter = 0;
  var prevX; //temporary holder for x.value in addNumber(x) function
  var timer;

  function addNumber(x) {
    if (display <=999){
      display+=x.value;
      //using parseInt() to convert to integer because reasons.... - Spencer
      //if user only enters two digits or less...
      if (parseInt(display) < 100){
        //load two digit number into sCounter
        sCounter = parseInt(display);
        //track the previous x.value to use if a third digit is entered.
        prevX = parseInt(x.value);
      }
      //if the user enters 3 digits...
      else if(parseInt(display) > 99 && parseInt(display) < 1000){
        //convert first digit from 10's position in sCounter to 1's position
        // and put it into mCounter
        mCounter = (sCounter - prevX)/10;
        //move second digit into 10's position and add new digit from user
        sCounter = (prevX * 10) + parseInt(x.value);
        //track the previous x.value to use if a fourth digit is entered.
        prevX = parseInt(x.value);
      }
      //if the user enters 4 digits...
      else {
        //move first digit to 10's position in mCounter, move 10's digit in sCounter
        // to 1's postion in mCounter.
        mCounter = (mCounter*10) + ((sCounter - prevX)/10);
        //move 1's digit in sCounter to 10's position, add new digit from user.
        sCounter = (prevX * 10) + parseInt(x.value);
      }

    }
    // don't let the user enter more than four digits
    else {
      alert("Can only have four digits.")
    }

    //Display according to number of digits
    if(mCounter > 9 && sCounter > 9){
      document.getElementById("txtNumber").value = mCounter + ":" + sCounter;
    }
    else if(mCounter > 9 && sCounter <= 9){
      document.getElementById("txtNumber").value = mCounter + ":0" + sCounter;
    }
    else if(mCounter <= 9 && mCounter != 0 && sCounter > 9){
      document.getElementById("txtNumber").value = "0" + mCounter + ":" + sCounter;
    }
    else if (mCounter <= 9 && mCounter != 0 && sCounter <= 9){
      document.getElementById("txtNumber").value = "0" + mCounter + ":0" + sCounter;
    }
    else if(mCounter == 0 & sCounter > 9){
      document.getElementById("txtNumber").value = "00:" + sCounter;
    }
    else {
      document.getElementById("txtNumber").value = "00:0" + sCounter;
    }

  }

  function clearText() {
    document.getElementById("txtNumber").value = "";
    display = "";
    //reset mCounter and sCounter
    mCounter = 0;
    sCounter = 0;
  }


  function startTimer(){
      //document.getElementById('txtNumber').innerHTML = (mCounter)+ ":" + (sCounter--);
      //document.getElementById('txtNumber').value = (mCounter)+ ":" + (sCounter--);
      //account for situations where user enters seconds>59
      if(sCounter >59){
        mCounter = mCounter + 1;
        sCounter = sCounter - 60;
      }
      //Display according to number of digits
      if(mCounter > 9 && sCounter > 9){
        document.getElementById("txtNumber").value = mCounter + ":" + sCounter--;
      }
      else if(mCounter > 9 && sCounter <= 9){
        document.getElementById("txtNumber").value = mCounter + ":0" + sCounter--;
      }
      else if(mCounter <= 9 && mCounter != 0 && sCounter > 9){
        document.getElementById("txtNumber").value = "0" + mCounter + ":" + sCounter--;
      }
      else if (mCounter <= 9 && mCounter != 0 && sCounter <= 9){
        document.getElementById("txtNumber").value = "0" + mCounter + ":0" + sCounter--;
      }
      else if(mCounter == 0 & sCounter > 9){
        document.getElementById("txtNumber").value = "00:" + sCounter--;
      }
      else {
        document.getElementById("txtNumber").value = "00:0" + sCounter--;
      }

      document.getElementById('startBtn').disabled=true;

      if(mCounter<0){
          stopTimer();
      }
      else if(sCounter<0){
         mCounter--;
         sCounter=59;
        timer = setTimeout("startTimer()",1000);
      }
      else{
          timer = setTimeout(startTimer,1000);
      }
  }

  function stopTimer(){
    clearTimeout(timer);
      // only show timer stopped if the user presses the "stop" button. If the user
      // did not press stop, then it is assumed the timer ran out.
      if (mCounter >= 0 && sCounter >= 0){
        document.getElementById('txtNumber').value = "Done";
      }
      else {
        //flash "Done" 3 times on display (setTimeout() functions are called
        // at the same time so need to delay the ms value by 1000ms for each sequential call).

        //Clear display first
        document.getElementById('txtNumber').value = "";
        //show "done" after 1 second delay
        setTimeout(displayDone,1000);
        //clear display after an additional second
        setTimeout(displayEmpty,2000);
        //show "done" after 3 second delay.... yadda yadda yadda
        setTimeout(displayDone,3000);
        setTimeout(displayEmpty,4000);
        setTimeout(displayDone,5000);
        setTimeout(displayEmpty, 6000);
        //"Done" has now flashed 3 times, leave "Done" shown in display.
        setTimeout(displayDone, 7000);

      }
      document.getElementById('startBtn').disabled=false;
  }
  function displayDone(){
    document.getElementById('txtNumber').value = "Done";
  }
  function displayEmpty(){
    document.getElementById('txtNumber').value = "";
  }
