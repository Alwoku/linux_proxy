//Передаем данные из формы добавления записи (add.blade.php) в контроллер (AddController)

$(document).ready(function(){    
  $("#ad_btn").click( function() {
    // event.preventDefault();
      var _token = $("input[name='_token']").val();
      var ip = $("#ip").val();
      // console.log(_token + ip);
      var tp = $("#type").val();
      var tim = $("#time").val();
      var date = $("#date").val();
      var port = $("#port").val();
        $.ajax({
      uploadUrl:"{{route('add')}}",
              type: 'POST',
              data: {
                    _token: _token,
                    ip: ip,
                    tp: tp,
                    tim: tim,
                    date: date,
                    port: port
                  },
                  dataType:'html',
              success: function(data) {
                console.log(data);
                if(data == "ok"){
                  window.location.replace("/");
                  
                }else{
                  $("#errors").html("<p>"+ data+ "</p>");
               }
              }
        });
      })
    });

    // Передаем данные из формы для обновлния записи (edit.blade.php) в контроллер (AddController)
    
    $(document).ready(function(){    
      $("#ad_up").click( function() {
        // event.preventDefault();
          var _token = $("input[name='_token']").val();
          var ip = $("#ip").val();
          // console.log(_token + ip);
          var tp = $("#type").val();
          var tim = $("#time").val();
          var date = $("#date").val();
          var port = $("#port").val();
            $.ajax({
          uploadUrl:"{{route('update')}}",
                  type: 'POST',
                  data: {
                        _token: _token,
                        ip: ip,
                        tp: tp,
                        tim: tim,
                        date: date,
                        port: port
                      },
                      dataType:'html',
                  success: function(data) {
                    console.log(data);
                    if(data == "ok"){
                      window.location.replace("/");
                      
                    }else{
                      $("#errors").html("<p>"+ data+ "</p>");
                   }
                  }
            });
          })
        });

       