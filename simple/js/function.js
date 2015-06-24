function notification(){
    $.ajax({
      url: BASE_URL+'index.php/notification',
      type: "POST",
      data: { task : 5 , csrf_token : token},
      success : function(response){
          var obj = jQuery.parseJSON(response);
          $('#notification').html((obj.total == 0) ? "" : obj.total);
          $('#notification-content').html(obj.content);
      }
    });
}
setInterval('notification()',1000);

function fullscreen() {
    var docElement, request;

    docElement = document.documentElement;
    request    = docElement.requestFullScreen || docElement.webkitRequestFullScreen ||  docElement.mozRequestFullScreen  || docElement.msRequestFullScreen;

    if(typeof request!="undefined" && request){
        request.call(docElement);
    }
}

function count(){
    $.ajax({
      url:  BASE_URL+"index.php/kpreguler/kpcount",
      type: "POST",
      data: {  csrf_token : token},
      success : function(response){
          $('#kpcount').html((response == 0) ? "" : response);
      }
    });
}
setInterval('count()',1000);

function join(){
    $.ajax({
        url: BASE_URL+"index.php/notification",
        type: "POST",
        data: {
            csrf_token : token,
            confirm : 1,
            task    : 4,
            notification_id :   $('#notification_id').val(),
            kpreguler_id :      $('#kpreguler_id').val() ,
            notification_from : $('#notification_from').val()
        },
        success: function(response){
            if(response == 1){
                location.reload();
            } else {
               console.log("sql error");
            }
        }
    });

}

function reject(){
    $.ajax({
        url: BASE_URL+"index.php/notification",
        type: 'POST',
        data: {
            csrf_token : token,
            reject  : 1,
            task    : $('#task').val(),
            notification_id :  $('#notification_id').val(),
            kpreguler_id :  $('#kpreguler_id').val(),
            notification_from : $('#notification_from').val()
        },
        success: function(response){
            location.reload();
        }
    });
}


function n_read(){
     $.ajax({
        url: BASE_URL+"index.php/notification",
        type: 'POST',
        data: {
            csrf_token : token,
            task       : 2
        },
        success: function(response){
            console.log(response);
        }
    });
}

// function kp_read(){
//     $.ajax({
//         url: BASE_URL+"index.php/kpreguler",
//         type: 'POST',
//         data: {
//             csrf_token : token,
//             task    : 5
//         },
//         success: function(response){
//             console.log(response);
//         }
//     });
// }
