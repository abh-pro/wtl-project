
let TIME_LIMIT = 60;

let lines_array = [
  "Whatever you are, be a good one.",
  "The quick brown fox jumps over the lazy dog.",
  "Be the change you wish to see in the world.",
  "Wake up with determination. Go to bed with satisfaction.",
  "It's going to be hard, but hard does not mean impossible.",
  "Learning never exhausts the mind.",
  "Try and fail, but never fail to try."
];

//Selecting required elements
let wpm_text = document.getElementById("wpm");
let errors_text = document.getElementById("errors");
let accuracy_text = document.getElementById("accuracy");
let textDisplay = document.getElementById("textDisplay");
let textInput = document.getElementById("textInput");
let timer_text = document.getElementById("time")

//Declaring required variables
let timeLeft = TIME_LIMIT;
let timeElapsed = 0;
let total_errors = 0;
let errors = 0;
let wpm=0;
let current_line= "";
let quoteNo = 0;
let timer = null;
let wordCount = "";
let lineNo = 0;
let accuracy = 0;

textInput.value = '';

//start game function
function startGame(){
    resetGame();
    changeLine();

    clearInterval(timer);
    timer = setInterval(updateTimer,1000);
}

//reset function
function resetGame(){
    let timeLeft = TIME_LIMIT;
    let timeElapsed = 0;
    let total_errors = 0;
    let errors = 0;
    let wpm=0;
    let current_line= "";
    let quoteNo = 0;
    let timer = null;
    let wordCount = 0;
    let lineNo = 0;

    textInput.value = "";

    textInput.disabled = false;
    textDisplay.textContent = "Click in Typing Box to start test.";
    accuracy_text.textContent = 100;
    timer_text.textContent = timeLeft + " S";
    errors_text.textContent = 0;

    clearInterval(timer);
}

//update timer

function updateTimer() {
  if (timeLeft > 0) {
    timeLeft--;
    timeElapsed++;
    timer_text.textContent = timeLeft + " S";
  }
  else {
    // finish the game
    finishGame();
  }
}

//finish game function
function finishGame(){
    clearInterval(timer);
    textInput.disabled = true;
    console.log("disabled");
    textDisplay.textContent = "Click in Typing Box to start test.";
    wpm = Math.round((((wordCount) / timeElapsed) * 60));
    wpm_text.textContent = wpm;
}

//Load lines to type
function changeLine(){
    textInput.value = "";
    current_line = lines_array[lineNo];
    textDisplay.textContent = '';

    //split line into elements for each word
    current_line.split('').forEach((word, i) => {
        const wordSpan = document.createElement('span');
        wordSpan.innerText = word;
        textDisplay.appendChild(wordSpan);
    });

    if (lineNo < 6){
        lineNo++;
    }
    else {
        lineNo = 0;
    }

}

function checkInput(){
    input_line = textInput.value;
    input_word_array = input_line.split('');

    wordCount++;
    errors = 0;

    word_span_array = textDisplay.querySelectorAll('span');
    word_span_array.forEach((word, index) => {
        let typed_word = input_word_array[index];

        // word not currently typed
        w1 = String(typed_word);
        w2 = String(word.innerText);
        if (w1 == null || w1 == 'undefined')
        {
            word.classList.remove('correct_word');
            word.classList.remove('incorrect_word');
        }
        // correct word
        else if (w1 == w2)
        {
            word.classList.add('correct_word');
            word.classList.remove('incorrect_word');
        }
        // incorrect word
        else
        {
            word.classList.add('incorrect_word');
            word.classList.remove('correct_word');
            errors++;
        }
    });

    //update errors count and accuracy
    errors_text.textContent = total_errors + errors;
    let correctWords = (wordCount - (total_errors+errors));
    let accuracyPerc = (correctWords / wordCount)*100;
    if (accuracy<0) {
        accuracy_text.textContent = '0';
    }
    else {
        accuracy_text.textContent = Math.round(accuracyPerc);
    }

    //if line is completed change line
    if (input_line.length == current_line.length) {
        total_errors += errors;
        textInput.value = '';
       changeLine();

    //stop timer
    //clearInterval(timer);
    }
}
