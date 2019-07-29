$("#BS_2015, #BS_2016").click(function(){

          var pastpaper_year = $(this).text();
          var exam_name = "business_studies";

          $("#businessModal").modal('hide');
          $(".shimmer_loader").fadeIn('slow');

                $.ajax({
                        type: "POST",
                        url: 'e_exam/pastpaper_Request.php',
                        data: {
                               pastpaper_year: pastpaper_year,
                               exam_name: exam_name,
                        },
                        success: function(data){

                            if (data != '')
                            {
                              $(".shimmer_loader").fadeOut('slow');
                              $('#pastpaper_RequestResults').html(data);
                            }
                            

                  }
            });

       });

$("#EC_2015").click(function(){

          var pastpaper_year = $(this).text();
          var exam_name = "economics";

          $("#economicsModal").modal('hide');
          $(".shimmer_loader").fadeIn('slow');

                $.ajax({
                        type: "POST",
                        url: 'e_exam/pastpaper_Request.php',
                        data: {
                               pastpaper_year: pastpaper_year,
                               exam_name: exam_name,
                        },
                        success: function(data){

                            if (data != '')
                            {
                              $(".shimmer_loader").fadeOut('slow');
                              $('#pastpaper_RequestResults').html(data);
                            }
                            

                  }
            });
       });

$("#GEO_2015").click(function(){

          var pastpaper_year = $(this).text();
          var exam_name = "geography";

          $("#geographyModal").modal('hide');
          $(".shimmer_loader").fadeIn('slow');

                $.ajax({
                        type: "POST",
                        url: 'e_exam/pastpaper_Request.php',
                        data: {
                               pastpaper_year: pastpaper_year,
                               exam_name: exam_name,
                        },
                        success: function(data){

                            if (data != '')
                            {
                              $(".shimmer_loader").fadeOut('slow');
                              $('#pastpaper_RequestResults').html(data);
                            }
                            

                  }
            });

       });

$("#LS_2015").click(function(){

          var pastpaper_year = $(this).text();
          var exam_name = "life_science";

          $("#lifescienceModal").modal('hide');
          $(".shimmer_loader").fadeIn('slow');

               $.ajax({
                        type: "POST",
                        url: 'e_exam/pastpaper_Request.php',
                        data: {
                               pastpaper_year: pastpaper_year,
                               exam_name: exam_name,
                        },
                        success: function(data){

                            if (data != '')
                            {
                              $(".shimmer_loader").fadeOut('slow');
                              $('#pastpaper_RequestResults').html(data);
                            }
                            

                  }
            });

       });

$("#AS_2015").click(function(){

          var pastpaper_year = $(this).text();
          var exam_name = "agricultural_science";

          $("#argicultural_scienceModal").modal('hide');
          $(".shimmer_loader").fadeIn('slow');

                $.ajax({
                        type: "POST",
                        url: 'e_exam/pastpaper_Request.php',
                        data: {
                               pastpaper_year: pastpaper_year,
                               exam_name: exam_name,
                        },
                        success: function(data){

                            if (data != '')
                            {
                              $(".shimmer_loader").fadeOut('slow');
                              $('#pastpaper_RequestResults').html(data);
                            }
                            

                  }
            });

       });

$("#PS_2015").click(function(){

          var pastpaper_year = $(this).text();
          var exam_name = "physcial_science";

          $("#physcialscienceModal").modal('hide');
          $(".shimmer_loader").fadeIn('slow');

                $.ajax({
                        type: "POST",
                        url: 'e_exam/pastpaper_Request.php',
                        data: {
                               pastpaper_year: pastpaper_year,
                               exam_name: exam_name,
                        },
                        success: function(data){

                            if (data != '')
                            {
                              $(".shimmer_loader").fadeOut('slow');
                              $('#pastpaper_RequestResults').html(data);
                            }
                            

                  }
            });

       });