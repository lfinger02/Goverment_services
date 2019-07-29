<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body data-gr-c-s-loaded="true" style="padding: 30px;">

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Question Type</label>
  </div>
  <select id="question_type" class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">1.1 Questions</option>
    <option value="2">1.2 Questions</option>
    <option value="3">1.3 Questions</option>
  </select>
</div>
    
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Exam Name</span>
  </div>
  <input id="exam_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question number</span>
  </div>
  <textarea id="question_number" class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question</span>
  </div>
  <textarea id="question" class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Option A</span>
  </div>
  <textarea id="option_A" class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Option B</span>
  </div>
  <textarea id="option_B" class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Option C</span>
  </div>
  <textarea id="option_C" class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Option D</span>
  </div>
  <textarea id="option_D" class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Correct Answer</span>
  </div>
  <textarea id="correct_answer" class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Question Image</span>
  </div>
  <textarea id="question_image" class="form-control" aria-label="With textarea"></textarea>
</div>

<button type="button" id="UploadQuestions" class="btn btn-dark">upload Question</button>


<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   <script type="text/javascript">

    $(document).ready(function(){

        $('#UploadQuestions').click(function(){

          var question_type = $('#question_type').val();
          var exam_name = $('#exam_name').val();
          var question_number = $('#question_number').val();
          var question = $('#question').val();
          var option_A = $('#option_A').val();
          var option_B = $('#option_B').val();
          var option_C = $('#option_C').val();
          var option_D = $('#option_D').val();
          var correct_answer = $('#correct_answer').val();
          var question_image = $('#question_image').val();

          $.ajax({
                        type: "POST",
                        url: 'uploadQuestions',
                        data: {
                               question_type: question_type,
                               exam_name:exam_name,
                               question_number:question_number,
                               question:question,
                               option_A:option_A,
                               option_B:option_B,
                               option_C:option_C,
                               option_D:option_D,
                               correct_answer:correct_answer,
                               question_image:question_image,
                        },
                        success: function(data){

                              $('#pastpaper_RequestResults').html(data);

                  }
            });


        });

    });


    </script>

      <!--Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>