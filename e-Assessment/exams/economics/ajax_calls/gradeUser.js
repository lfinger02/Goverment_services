    $(document).ready(function(){

      $("#submit_answers").click(function(){

      	submitAnswer();
      	clearInterval(countdownTimer);

      });

});

 function submitAnswer()
{
            var username = $("#username").val();
            var exam_ID  = $("#exam_ID").val();

           	        //User Answer
        //Question 1.1
		var a1_1_1 = $("#1_1_1").val();
		var a1_1_2 = $("#1_1_2").val();
		var a1_1_3 = $("#1_1_3").val();
		var a1_1_4 = $("#1_1_4").val();
		var a1_1_5 = $("#1_1_5").val();
		var a1_1_6 = $("#1_1_6").val();
		var a1_1_7 = $("#1_1_7").val();
		var a1_1_8 = $("#1_1_8").val();

		//1.2
		var a1_2_1 = $("#1_2_1").val();
		var a1_2_2 = $("#1_2_2").val();
		var a1_2_3 = $("#1_2_3").val();
		var a1_2_4 = $("#1_2_4").val();
		var a1_2_5 = $("#1_2_5").val();
            var a1_2_6 = $("#1_2_6").val();
            var a1_2_7 = $("#1_2_7").val();
            var a1_2_8 = $("#1_2_8").val();

		//1.3
		var a1_3_1 = $("#1_3_1").val();
		var a1_3_2 = $("#1_3_2").val();
		var a1_3_3 = $("#1_3_3").val();
		var a1_3_4 = $("#1_3_4").val();
		var a1_3_5 = $("#1_3_5").val();
            var a1_3_6 = $("#1_3_6").val();

		//Correct Answer
		var	Answers_1_1 = new Array(
				$("#1_1_1_A").val(),
				$("#1_1_2_A").val(),
				$("#1_1_3_A").val(),
				$("#1_1_4_A").val(),
				$("#1_1_5_A").val(),
				$("#1_1_6_A").val(),
				$("#1_1_7_A").val(),
				$("#1_1_8_A").val(),
			);

		var	Answers_2_1 = new Array(
				$("#1_2_1_A").val(),
				$("#1_2_2_A").val(),
				$("#1_2_3_A").val(),
				$("#1_2_4_A").val(),
				$("#1_2_5_A").val(),
                        $("#1_2_6_A").val(),
                        $("#1_2_7_A").val(),
                        $("#1_2_8_A").val(),
			);

		var	Answers_3_1 = new Array(
				$("#1_3_1_A").val(),
				$("#1_3_2_A").val(),
				$("#1_3_3_A").val(),
				$("#1_3_4_A").val(),
				$("#1_3_5_A").val(),
                        $("#1_3_6_A").val(),
			);

		$.ajax({
                        type: "POST",
                        url: 'php_calls/gradeUser.php',
                        data: {
                               a1_1_1: a1_1_1,
                               a1_1_2: a1_1_2,
                               a1_1_3: a1_1_3,
                               a1_1_4: a1_1_4,
                               a1_1_5: a1_1_5,
                               a1_1_6: a1_1_6,
                               a1_1_7: a1_1_7,
                               a1_1_8: a1_1_8,

                               a1_2_1:a1_2_1,
                               a1_2_2:a1_2_2,
                               a1_2_3:a1_2_3,
                               a1_2_4:a1_2_4,
                               a1_2_5:a1_2_5,
                               a1_2_6:a1_2_6,
                               a1_2_7:a1_2_7,
                               a1_2_8:a1_2_8,

                               a1_3_1:a1_3_1,
                               a1_3_2:a1_3_2,
                               a1_3_3:a1_3_3,
                               a1_3_4:a1_3_4,
                               a1_3_5:a1_3_5,
                               a1_3_6:a1_3_6,

                               a1_1_1_A: Answers_1_1[0],
                               a1_1_2_A: Answers_1_1[1],
                               a1_1_3_A: Answers_1_1[2],
                               a1_1_4_A: Answers_1_1[3],
                               a1_1_5_A: Answers_1_1[4],
                               a1_1_6_A: Answers_1_1[5],
                               a1_1_7_A: Answers_1_1[6],
                               a1_1_8_A: Answers_1_1[7],

                               a1_2_1_A: Answers_2_1[0],
                               a1_2_2_A: Answers_2_1[1],
                               a1_2_3_A: Answers_2_1[2],
                               a1_2_4_A: Answers_2_1[3],
                               a1_2_5_A: Answers_2_1[4],
                               a1_2_6_A: Answers_2_1[5],
                               a1_2_7_A: Answers_2_1[6],
                               a1_2_8_A: Answers_2_1[7],

                               a1_3_1_A: Answers_3_1[0],
                               a1_3_2_A: Answers_3_1[1],
                               a1_3_3_A: Answers_3_1[2],
                               a1_3_4_A: Answers_3_1[3],
                               a1_3_5_A: Answers_3_1[4],
                               a1_3_6_A: Answers_3_1[5],

                               username: username,
                               exam_ID: exam_ID,

                        },
                        success: function(data){

                            $('#show_results').html(data);

                        }
                    });

}