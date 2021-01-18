
let TIME_LIMIT = 60;

let quotes_array = [
  "Push yourself, because no one else is going to do it for you.",
  "The quick brown fox jumps over the lazy dog.",
  "Failure is the condiment that gives success its flavor.",
  "Wake up with determination. Go to bed with satisfaction.",
  "It's going to be hard, but hard does not mean impossible.",
  "Learning never exhausts the mind.",
  "The only way to do great work is to love what you do."
];


let wpm_text = document.getElementById("wpm");
let errors_text = document.getElementById("errors");
let textDisplay = document.getElementById("textDisplay");
let textInput = document.getElementById("textInput");
let timer_text = document.getElementById("time")

let timeLeft = TIME_LIMIT;
let timeElapsed = 0;
let total_errors = 0;
let errors = 0;
let wpm=0;
let current_quote = "";
let quoteNo = 0;
let timer = null;
let characterTyped = 0;


function changeQuote() {
  textDisplay.textContent = null;
  current_quote = quotes_array[quoteNo];

  current_quote.split('').forEach(char => {
    const charSpan = document.createElement('span')
    charSpan.innerText = char
    textDisplay.appendChild(charSpan)
  })

  if (quoteNo < quotes_array.length - 1)
    quoteNo++;
  else
    quoteNo = 0;
}

function chectTypedText() {

curr_input = textInput.value;
curr_input_array = curr_input.split('');

characterTyped++;

errors = 0;

quoteSpanArray = textDisplay.querySelectorAll('span');
quoteSpanArray.forEach((char, index) => {
	let typedText = curr_input_array[index]
	if (typedText == null)
    {
	       char.classList.remove('correct_char');
	       char.classList.remove('incorrect_char');
	}
    else if (typedText === char.innerText)
    {
	       char.classList.add('correct_char');
	       char.classList.remove('incorrect_char');
	}
    else
    {
	       char.classList.add('incorrect_char');
	       char.classList.remove('correct_char');
	       errors++;
	}
});

    error_text.textContent = total_errors + errors;

    let correctCharacters = (characterTyped - (total_errors + errors));
    let accuracyVal = ((correctCharacters / characterTyped) * 100);
    accuracy_text.textContent = Math.round(accuracyVal);

    if (curr_input.length == current_quote.length)
    {
	   changeQuote();
	   total_errors += errors;
	   textInput.value = "";
    }
}

function startGame() {

resetValues();
changeQuote();
clearInterval(timer);
timer = setInterval(updateTimer, 1000);
}

function resetValues() {
    let timeLeft = TIME_LIMIT;
    let timeElapsed = 0;
    let errors = 0;
    let wpm=0;
    let current_quote = "";
    let quoteNo = 0;
    let timer = null;
    textInput.disabled = false;

    time.value = "";
    wpm.value = "";
    errors_text.value = "";
    textDisplay.value = "";
    textInput.value = "";
}

function updateTimer() {
    if (timeLeft > 0)
    {
    	timeLeft--;
    	timeElapsed++;
    	timer_text.textContent = timeLeft + "s";
    }
    else
    {
    	finishGame();
    }
}

function finishGame() {
    clearInterval(timer);
    textInput.disabled = true;
    textDisplay.textContent = "Click in Typing Box to start test.";

    wpm = Math.round((((characterTyped / 5) / timeElapsed) * 60));
    wpm_text.textContent = wpm;
    errors_text.textContent = total_errors;
}
