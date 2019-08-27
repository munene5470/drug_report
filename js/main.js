    (function($){
    var form=$("#signup-form");
    form.steps({headerTag:"h3",bodyTag:"fieldset",transitionEffect:"fade",labels:{previous:'Previous',next:'Next',
    finish:'Calculate',current:''},titleTemplate:'<h3 class="title">#title#</h3>',onFinished:function(event,currentIndex)
    {$.ajax({
    url: "save.php",
    method: "POST",
    data:{county: $('#county').val(), startDate : $('#start_date').val(),endDate :$('#end_date').val(),changaa:$('#changaa').val(),kangara:$('#kangara').val(),
    spirits:$('#spirits').val(), counterfeit: $('#counterfeit').val(),rolls: $('#rolls').val(), kgs: $('#kgs').val(),stones: $('#stones').val()
    ,plants:  $('#plants').val(),arrests:  $('#arrests').val(),fines:  $('#fines').val(),t_drinks:  $('#t_drinks').val(),brooms:  $('#brooms').val(),cocaine:$('#heroin').val()},
    success: function (returnhtml) {

    $("#showd").show();
    $("#lable5").hide();$("#pagenum").hide();$("#Cost4").hide();
    $('#showd').html(returnhtml);
    }
    });},

    onStepChanged: function (event, currentIndex, priorIndex){

    },
        onStepChanging: function (event, currentIndex, newIndex){

          return true;
        },

    });$(".toggle-password").on('click',function(){$(this).toggleClass("zmdi-eye zmdi-eye-off");
    var input=$($(this).attr("toggle"));if(input.attr("type")=="password"){input.attr("type","text");}else{input.attr("type","password");}});})(jQuery);

