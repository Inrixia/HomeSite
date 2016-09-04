(function() {
  var questions = [{
    question: "Resistivity of a wire depends on:", /*Question input goes here*/
    choices: [ /*input answers here*/
	"length",
	"material",
	"cross section area",
	"none of the above."
	],
    correctAnswer: 1 /*which answer is the correct one (string vaule, so the first answer is 0, the second is 1, the third is 2 and so on)*/
  }, {
    question: "When n resistances each of value r are connected in parallel, then resultant resistance is x. When these n resistances are connected in series, total resistance is:",
    choices: [
  "nx",
  "rnx",
  "x / n",
  "n&sup2; x"
	],
    correctAnswer: 3
  }, {
    question: "Resistance of a wire is r ohms. The wire is stretched to double its length, then its resistance in ohms is:",
    choices: [
  "r / 2", //0 //A
  "4 r", //1   //B
  "2 r", //2   //C
  "r / 4"  //3 //D
	],
    correctAnswer: 1
  }, {
    question: "Kirchhoff's second law is based on law of conservation of",
    choices: [
  "charge", //0   //A
  "energy", //1   //B
  "momentum", //2 //C
  "mass"  //3     //D
	],
    correctAnswer: 1
  }, {
    question: "The diameter of the nucleus of an atom is of the order of",
    choices: [
  "x10 -31 m", //0 //A
  "x10 -25 m", //1 //B
  "x10 -21 m", //2 //C
  "x10 -14 m"  //3 //D
	],
    correctAnswer: 3
  }, {
    question: "The mass of proton is roughly how many times the mass of an electron?",
    choices: [
  "184,000", //0 //A
  "184,00", //1 //B
  "1840", //2 //C
  "184"  //3 //D
  ],
    correctAnswer: 2
  }, {
    question: "The charge on an electron is known to be 1.6 x10 -19 coulomb. In a circuit the current flowing is 1 A. How many electrons will be flowing through the circuit in a second?",
    choices: [
  "1.6 x10 19", //0 //A
  "1.6 x10 -19", //1 //B
  "0.625 x10 19", //2 //C
  "0.625 x10 12"  //3 //D
  ],
    correctAnswer: 2
  }, {
    question: "Two bulbs marked 200 watt-250 volts and 100 watt-250 volts are joined in series to 250 volts supply. Power consumed in circuit is",
    choices: [
  "33 watt", //0 //A
  "67 watt", //1 //B
  "100 watt", //2 //C
  "300 watt."  //3 //D
  ],
    correctAnswer: 1
  }, {
    question: "Ampere second could be the unit of",
    choices: [
  "power", //0 //A
  "conductance", //1 //B
  "energy", //2 //C
  "charge"  //3 //D
  ],
    correctAnswer: 3
  }, {
    question: "Which of the following is not the same as watt?",
    choices: [
  "joule/sec", //0 //A
  "amperes/volt", //1 //B
  "amperes x volts", //2 //C
  "(amperes)2 x ohm."  //3 //D
  ],
    correctAnswer: 1
  }, {
    question: "One kilowatt hour of electrical energy is the same as",
    choices: [
  "36 x10 5 watts", //0 //A
  "36 x10 5 ergs", //1 //B
  "36 x10 5 joules", //2 //C
  "36 x10 5 B.T.U."  //3 //D
  ],
    correctAnswer: 2
  }, {
    question: "An electric current of 5 A is same as",
    choices: [
  "5 J / C", //0 //A
  "5 V / C", //1 //B
  "5 C / sec", //2 //C
  "5 w / sec"  //3 //D
  ],
    correctAnswer: 2
  }, {
    question: "An electron of mass m kg and having a charge of e coulombs travels from rest through a potential difference of V volts. Its kinetic energy will be:",
    choices: [
  "eV Joules", //0 //A
  "meV Joules", //1 //B
  "me / V Joules", //2 //C
  "V / me Joules"  //3 //D
  ],
    correctAnswer: 0
  }, {
    question: "The value of the following is given by 100 (kilo ampere ) x ( micro ampere ) 100 milli ampere * 10 ",
    choices: [
  "0.001 A", //0 //A
  "0.1 A", //1 //B
  "1 A", //2 //C
  "10A"  //3 //D
  ],
    correctAnswer: 1
  }, {
    question: "A circuit contains two un-equal resistances in parallel",
    choices: [
  "current is same in both", //0 //A
  "large current flows in larger resistor", //1 //B
  "potential difference across each is same", //2 //C
  "smaller resistance has smaller conductance"  //3 //D
  ],
    correctAnswer: 2
  },];
  
  var questionCounter = 0; //Tracks question number
  var selections = []; //Array containing user choices
  var quiz = $('#quiz'); //Quiz div object
  
  // Display initial question
  displayNext();
  
  // Click handler for the 'next' button
  $('#next').on('click', function (e) {
    e.preventDefault();
    
    // Suspend click listener during fade animation
    if(quiz.is(':animated')) {        
      return false;
    }
    choose();
    
    // If no user selection, progress is stopped
    if (isNaN(selections[questionCounter])) {
      alert('The quiz will not continue without an answer. Please select one, even if it is just a  guess');
    } else {
      questionCounter++;
      displayNext();
    }
  });
  
  // Click handler for the 'prev' button
  $('#prev').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
    choose();
    questionCounter--;
    displayNext();
  });
  
  // Click handler for the 'Start Over' button
  $('#start').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
    questionCounter = 0;
    selections = [];
    displayNext();
    $('#start').hide();
  });
  
  // Creates and returns the div that contains the questions and 
  // the answer selections
  function createQuestionElement(index) {
    var qElement = $('<div>', {
      id: 'question'
    });
    
    var header = $('<h2>Question ' + (index + 1) + ':</h2>');
    qElement.append(header);
    
    var question = $('<p>').append(questions[index].question);
    qElement.append(question);
    
    var radioButtons = createRadios(index);
    qElement.append(radioButtons);
    
    return qElement;
  }
  
  // Creates a list of the answer choices as radio inputs
  function createRadios(index) {
    var radioList = $('<ul>');
    var item;
    var input = '';
    for (var i = 0; i < questions[index].choices.length; i++) {
      item = $('<li>');
      input = '<input type="radio" name="answer" value=' + i + ' />';
      input += questions[index].choices[i];
      item.append(input);
      radioList.append(item);
    }
    return radioList;
  }
  
  // Reads the user selection and pushes the value to an array
  function choose() {
    selections[questionCounter] = +$('input[name="answer"]:checked').val();
  }
  
  // Displays next requested element
  function displayNext() {
    quiz.fadeOut(function() {
      $('#question').remove();
      
      if(questionCounter < questions.length){
        var nextQuestion = createQuestionElement(questionCounter);
        quiz.append(nextQuestion).fadeIn();
        if (!(isNaN(selections[questionCounter]))) {
          $('input[value='+selections[questionCounter]+']').prop('checked', true);
        }
        
        // Controls display of 'prev' button
        if(questionCounter === 1){
          $('#prev').show();
        } else if(questionCounter === 0){
          
          $('#prev').hide();
          $('#next').show();
        }
      }else {
        var scoreElem = displayScore();
        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
      }
    });
  }
  
  // Computes score and returns a paragraph element to be displayed
  function displayScore() {
    var score = $('<p>',{id: 'question'});
    
    var numCorrect = 0;
    for (var i = 0; i < selections.length; i++) {
      if (selections[i] === questions[i].correctAnswer) {
        numCorrect++;
      }
    }
    
    score.append('You got ' + numCorrect + ' questions out of ' +
                 questions.length + ' correct');
    return score;
  }
})();