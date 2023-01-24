
    let Qid = new URLSearchParams(window.location.search).get('Qid');
    let Qcode = new URLSearchParams(window.location.search).get('QuizCode');

    console.log("Quizid"+Qid);
    let questions = [];
    let temp = [];

    let cou = 0;
    $.ajax ({
        url: 'js/GetQuestions.php',
        method: 'GET',
        async: false,                  //the script to call to get data          
        data: {
            Qid: Qid
        },                        //you can insert url argumnets here to    pass to api.php
        //for example "id=5&parent=6"
        dataType: 'json',                //data format      
        success:  function (data)          //on recieve of reply
        {

            console.log(data);
            console.log(data.length);

            // console.log(data[0][0]);
            size = (data.length);
            i = 0;
            cou2 = 1;
            while (size != 0) {
                //  size--;
                if (data[i][7] != "True") {
                    temp = [

                        {
                            numb: cou2++,
                            question: data[i][1],
                            answer: data[i][3],
                            options: [
                                data[i][7],
                                data[i + 1][7],
                                data[i + 2][7],
                                data[i + 3][7]
                            ]
                        },

                    ];


                    i = i + 4;
                    size = size - 4;
                    questions.push(temp);

                } else {
                    temp = [

                        {
                            numb: cou2++,
                            question: data[i][1],
                            answer: data[i][3],
                            options: [
                                data[i][7],
                                data[i + 1][7]
                                
                            ]
                        },

                    ];


                    i = i + 2;
                    size = size - 2;
                    questions.push(temp);
                }
            }
            console.log(questions[0][0].numb);
            console.log(questions[0][0].question);

        }
    });



//alert(questions);

// let questions = [
//     {
//     numb: data[0][0],
//     question: data[0][1],
//     answer: data[0][3],
//     options: [
//       "Hyper Text Preprocessor",
//       "Hyper Text Markup Language",
//       "Hyper Text Multiple Language",
//       "Hyper Tool Multi Language"
//     ]
//   },
// ];


    const start_btn = document.querySelector(".start_btn button");
    //const info_box = document.querySelector(".info_box");
    //const exit_btn = info_box.querySelector(".buttons .quit");
    //const continue_btn = info_box.querySelector(".buttons .restart");
    const quiz_box = document.querySelector(".quiz_box");
    const result_box = document.querySelector(".result_box");
    const option_list = document.querySelector(".option_list");
    const time_line = document.querySelector("header .time_line");
    const timeText = document.querySelector(".timer .time_left_txt");
    const timeCount = document.querySelector(".timer .timer_sec");

    // if startQuiz button clicked change from -1 to 0
    start_btn.onclick = () => {
        $.ajax({
            url: 'js/incrementQus.php',
            method: 'POST',
            async: false,                  //the script to call to get data          
            data: {
                Qid: Qid
            },
            success: function(data) {  
                console.log(data);
             
        }
        })
        quiz_box.classList.add("activeQuiz"); //show quiz box
        showQuetions(0); //calling showQestions function
        queCounter(1); //passing 1 parameter to queCounter
        startTimer(15); //calling startTimer function
        startTimerLine(0); //calling startTimerLine function
   }

    // if exitQuiz button clicked
    // exit_btn.onclick = () => {
    //     info_box.classList.remove("activeInfo"); //hide info box
    // }

    // if continueQuiz button clicked
    // continue_btn.onclick = () => {
    //     info_box.classList.remove("activeInfo"); //hide info box
    //     quiz_box.classList.add("activeQuiz"); //show quiz box

        
    // }

    let timeValue = 15;
    let que_count = 0;
    let que_numb = 1;
    let userScore = 0;
    let counter;
    let counterLine;
    let widthValue = 0;

    const restart_quiz = result_box.querySelector(".buttons .restart");
    const quit_quiz = result_box.querySelector(".buttons .quit");

    // if restartQuiz button clicked


    // if quitQuiz button clicked
  
    $("#quitQ").click(function () {
        /* Read more about isConfirmed, isDenied below */


        $.ajax({
            url: '../dashboard/EndQuiz.php',
            method: 'POST',
            data: {
                QuizId: Qid,
                QuizCode: Qcode
            },

            success: function (response) {
                console.log("QuizId=" + response);

                Swal.fire('Your Quiz is Deactiveted, you will be directed to the dashboard', '', 'success').then((result) => {

                    window.location.href = "../dashboard/index.php";
                });
            }

        });


    });
    const next_btn = document.querySelector("footer .next_btn");
    const bottom_ques_counter = document.querySelector("footer .total_que");

    // if Next Que button clicked
    next_btn.onclick = () => {
        // increment the queuein db
        $.ajax({
            url: 'js/incrementQus.php',
            method: 'POST',
            async: false,                  //the script to call to get data          
            data: {
                Qid: Qid
            },
            success: function(data) {  
                console.log(data);
             
        }
        })
        if (que_count < questions.length - 1) { //if question count is less than total question length
            que_count++; //increment the que_count value
            que_numb++; //increment the que_numb value
            showQuetions(que_count); //calling showQestions function
            queCounter(que_numb); //passing que_numb value to queCounter
            clearInterval(counter); //clear counter
            clearInterval(counterLine); //clear counterLine
            startTimer(timeValue); //calling startTimer function
            startTimerLine(widthValue); //calling startTimerLine function
            timeText.textContent = "Time Left"; //change the timeText to Time Left
            next_btn.classList.remove("show"); //hide the next button
        } else {
            clearInterval(counter); //clear counter
            clearInterval(counterLine); //clear counterLine
            showResult(); //calling showResult function
        }
    }

    // getting questions and options from array
    function showQuetions(index) {
        // numb: cou2++,
        //                     question: data[i][1],
        //                     answer: data[i][3],
        //                     options: [
        //                         data[i][7],
        //                         data[i + 1][7],
        //                         data[i + 2][7],
        //                         data[i + 3][7]
        const que_text = document.querySelector(".que_text");

        //creating a new span and div tag for question and option and passing the value using array index
        if(questions[index][0].options[0] != "True"){
        let que_tag = '<span>' + questions[index][0].numb + ". " + questions[index][0].question + '</span>';
        let option_tag = '<div class="option disabled"><span>' + questions[index][0].options[0] + '</span></div>'
            + '<div class="option disabled" ><span>' + questions[index][0].options[1] + '</span></div>'
            + '<div class="option disabled"><span>' + questions[index][0].options[2] + '</span></div>'
            + '<div class="option disabled"><span>' + questions[index][0].options[3] + '</span></div>';
        que_text.innerHTML = que_tag; //adding new span tag inside que_tag
        option_list.innerHTML = option_tag; //adding new div tag inside option_tag
        }else{
            let que_tag = '<span>' + questions[index][0].numb + ". " + questions[index][0].question + '</span>';
        let option_tag = '<div class="option  disabled"><span>' + questions[index][0].options[0] + '</span></div>'
            + '<div class="option  disabled"><span>' + questions[index][0].options[1] + '</span></div>';
        que_text.innerHTML = que_tag; //adding new span tag inside que_tag
        option_list.innerHTML = option_tag; //adding new div tag inside option_tag  
        }
        const option = option_list.querySelectorAll(".option");

        // set onclick attribute to all available options

        for (i = 0; i < option.length; i++) {
        if(option.length==4){
            if (i == 0) x = 'A';
            if (i == 1) x = 'B';
            if (i == 2) x = 'C';
            if (i == 3) x = 'D';
            //option[i].setAttribute("onclick", "optionSelected(this)");
            option[i].setAttribute("value", "" + x + "");
        }else{
            if (i == 0) x = 'A';
            if (i == 1) x = 'B';
            //option[i].setAttribute("onclick", "optionSelected(this)");
            option[i].setAttribute("value", "" + x + "");
        }

        }
    }
    // creating the new div tags which for icons
    let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
    let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

    //if user clicked on option
    // function optionSelected(answer) {
    //      clearInterval(counter); //clear counter
    //      clearInterval(counterLine); //clear counterLine
    //     let userAns = answer.getAttribute('value');
       
    //     //getting user selected option
    //     let correcAns = questions[que_count][0].answer; //getting correct answer from array
        
    //     const allOptions = option_list.children.length; //getting all option items


    //     if (userAns == correcAns) { //if user selected option is equal to array's correct answer
    //         userScore += 1; //upgrading score value with 1
    //         answer.classList.add("correct"); //adding green color to correct selected option
    //         answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
    //         console.log("Correct Answer");
    //         console.log("Your correct answers = " + userScore);
    //     } else {
    //         answer.classList.add("incorrect"); //adding red color to correct selected option
    //         answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option
    //         console.log("Wrong Answer");

    //         for (i = 0; i < allOptions; i++) {
    //             if (option_list.children[i].textContent == correcAns) { //if there is an option which is matched to an array answer 
    //                 option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
    //                 option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
    //                 console.log("Auto selected correct answer.");
    //             }
    //         }
    //     }
    //     for (i = 0; i < allOptions; i++) {
    //         option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
    //     }
    //     next_btn.classList.add("show"); //show the next button if user selected any option
    // }

    function showResult() {
        // info_box.classList.remove("activeInfo"); //hide info box
        quiz_box.classList.remove("activeQuiz"); //hide quiz box
        result_box.classList.add("activeResult"); //show result box
        const scoreText = result_box.querySelector(".score_text");
        if (userScore > 3) { // if user scored more than 3
            //creating a new span tag and passing the user score number and total question number
            let scoreTag = '<span>and congrats! 🎉, You got <p>' + userScore + '</p> out of <p>' + questions.length + '</p></span>';
            scoreText.innerHTML = scoreTag;  //adding new span tag inside score_Text
        }
        else if (userScore > 1) { // if user scored more than 1
            let scoreTag = '<span>and nice 😎, You got <p>' + userScore + '</p> out of <p>' + questions.length + '</p></span>';
            scoreText.innerHTML = scoreTag;
        }
        else { // if user scored less than 1
            let scoreTag = '<span>and sorry 😐, You got only <p>' + userScore + '</p> out of <p>' + questions.length + '</p></span>';
            scoreText.innerHTML = scoreTag;
        }
    }

    function startTimer(time) {
        counter = setInterval(timer, 1000);
        function timer() {
            timeCount.textContent = time; //changing the value of timeCount with time value
            time--; //decrement the time value
            if (time < 9) { //if timer is less than 9
                let addZero = timeCount.textContent;
                timeCount.textContent = "0" + addZero; //add a 0 before time value
            }
            if (time < 0) { //if timer is less than 0
                clearInterval(counter); //clear counter
                timeText.textContent = "Time Off"; //change the time text to time off
                const allOptions = option_list.children.length; //getting all option items


                let correcAns = questions[que_count][0].answer; //getting correct answer from array

                
                for (i = 0; i < allOptions; i++) {
                    if (option_list.children[i].getAttribute('value') == correcAns) { //if there is an option which is matched to an array answer
                        console.log(option_list.children[i].textContent);
                        
                        option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
                        option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                        console.log("Time Off: Auto selected correct answer.");
                    }
                }
                for (i = 0; i < allOptions; i++) {
                    option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
                }
                next_btn.classList.add("show"); //show the next button if user selected any option
            }
        }
    }

    function startTimerLine(time) {
        counterLine = setInterval(timer, 6);
        function timer() {
            time += 1; //upgrading time value with 1
            time_line.style.width = time + "px"; //increasing width of time_line with px by time value
            if (time > 549) { //if time value is greater than 549
                clearInterval(counterLine); //clear counterLine
            }
        }
    }

    function queCounter(index) {
        //creating a new span tag and passing the question number and total question
        let totalQueCounTag = '<span><p>' + index + '</p> of <p>' + questions.length + '</p> Questions</span>';
        bottom_ques_counter.innerHTML = totalQueCounTag;  //adding new span tag inside bottom_ques_counter
    }
