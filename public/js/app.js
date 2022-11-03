//Передаем данные из формы добавления записи (add.blade.php) в контроллер (AddController)

$(document).ready(function(){    
  $("#ad_btn").click( function() {
      var _token = $("input[name='_token']").val();
      var ip = $("#ip").val();
      var type = $("#type").val();
      var time = $("#time").val();
      var created_at = $("#date").val();
      var port = $("#port").val();
      var description = $("#description").val();
      var checked_ma = $("#checked_ma").val();
      console.log(checked_ma);
        $.ajax({
      uploadUrl:"{{route('add')}}",
              type: 'POST',
              data: {
                    _token: _token,
                    ip: ip,
                    type: type,
                    time: time,
                    created_at: created_at,
                    port: port,
                    description: description,
                    checked_ma: checked_ma
                  },
                  dataType:'json',
              error: function (err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
                    // console.log(err.responseJSON);
                    $("#errors").html("");
                    $.each(err.responseJSON.errors, function (key, value) {
                    $('#errors').append('<li >'+value+'</li>');
                    });
                   
                }
              },
              success: function(data) {

                 if(data.messange == "ok"){
                  location.reload();

                }
              
              }
        });
      })
    });

    // Передаем данные из формы для обновлния записи (edit.blade.php) в контроллер (AddController)
    
    $(document).ready(function(){    
      $("#ad_up").click( function() {
        var _token = $("input[name='_token']").val();
        var ip = $("#ip").val();
        var type = $("#type").val();
        var time = $("#time").val();
        var created_at = $("#date").val();
        var port = $("#port").val();
        var description = $("#description").val();
        var checked_ma = $("#checked_ma").val();
        
        console.log(checked_ma);
            $.ajax({
          uploadUrl:"{{route('update')}}",
                  type: 'POST',
                  data: {
                    _token: _token,
                    ip: ip,
                    type: type,
                    time: time,
                    created_at: created_at,
                    port: port,
                    description: description,
                    checked_ma: checked_ma
                      },
                      dataType:'json',
                      error: function (err) {
                        if (err.status == 422) { // when status code is 422, it's a validation issue
                            console.log(err.responseJSON);
                            $("#errors").html("");
                            $.each(err.responseJSON.errors, function (key, value) {
                            $('#errors').append('<li >'+value+'</li>');
                            });
                           
                        }
                      },
                  success: function(data) {
                    console.log(data);
                    if(data.messange == "ok"){
                      history.go(-1);
                    }
                  }
            });
          })
        });

       