 (function($){
    var form=$("#signup-form");
    form.steps({headerTag:"h3",bodyTag:"fieldset",transitionEffect:"fade",labels:{previous:'Previous',next:'Next',
    finish:'Submit',current:''},titleTemplate:'<h3 class="title">#title#</h3>',onFinished:function(event,currentIndex)
    {


            if($('#fines').val()===""||$('#arrests').val()===""){
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'You Must fill in all fields before continuing!',
                })
                return false
            }else{
                Swal.fire({
                    title: 'submit?',
                    text: "Are you sure you want to submit this information!",
                    type: 'info',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, submit!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: "save.php",
                            method: "POST",
                            data:{county: $('#county').val(), startDate : $('#start_date').val(),endDate :$('#end_date').val(),changaa:$('#changaa').val(),kangara:$('#kangara').val(),
                                spirits:$('#spirits').val(), counterfeit: $('#counterfeit').val(),rolls: $('#rolls').val(), kgs: $('#kgs').val(),stones: $('#stones').val()
                                ,plants:  $('#plants').val(),arrests:  $('#arrests').val(),fines:  $('#fines').val(),t_drinks:  $('#t_drinks').val(),brooms:  $('#brooms').val(),cocaine:$('#heroin').val()},
                            success: function (returnhtml) {
                            if(returnhtml.toString()==="Success"){
                                Swal.fire({
                                    title: 'submit?',
                                    text: "Your information! was submitted Successfully",
                                    type: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Yes, submit!'
                                }).then((result) => {


                                })

                                setTimeout(function (){
                                    location.reload(true);

                                }, 4000);


                            }else{
                                Swal.fire({
                                    title: 'submit?',
                                    text: "an error occurred!",
                                    type: 'error',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Yes, submit!'
                                }).then((result) => {


                                })

                            }

                            }
                        });
                    }
                })

            }


        
        
        },

    onStepChanged: function (event, currentIndex, priorIndex){

    },
        onStepChanging: function (event, currentIndex, newIndex){
          switch (currentIndex) {
              case 0:
                  if(newIndex>currentIndex){
                      if($('#county').val()==="Select"){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 1:
                  if(newIndex>currentIndex){
                      if($('#start_date').val()===""||$('#end_date').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 2:
                  if(newIndex>currentIndex){
                      if($('#changaa').val()===""||$('#kangara').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 3:
                  if(newIndex>currentIndex){
                      if($('#spirits').val()===""||$('#t_drinks').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 4:
                  if(newIndex>currentIndex){
                      if($('#counterfeit').val()===""||$('#rolls').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 5:
                  if(newIndex>currentIndex){
                      if($('#plants').val()===""||$('#brooms').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 6:
                  if(newIndex>currentIndex){
                      if($('#stones').val()===""||$('#kgs').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 7:
                  if(newIndex>currentIndex){
                      if($('#heroin').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              case 8:
                  if(newIndex>currentIndex){
                      if($('#fines').val()===""||$('#arrests').val()===""){
                          Swal.fire({
                              type: 'error',
                              title: 'Oops...',
                              text: 'You Must fill in all fields before continuing!',
                          })
                          return false
                      }else{
                          return true
                      }

                  }else{
                      return true
                  }
                  ;
              
          }
          return true;
        },

    });$(".toggle-password").on('click',function(){$(this).toggleClass("zmdi-eye zmdi-eye-off");
    var input=$($(this).attr("toggle"));if(input.attr("type")=="password"){input.attr("type","text");}else{input.attr("type","password");}});})(jQuery);

