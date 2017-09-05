var jsCookie = document.cookie;
if(jsCookie && jsCookie != "") {
  jsCookie = jsCookie.split(";");
  var username = jsCookie[0].split("=")[1];
} else {
  document.location.href = 'logon.html';
}

$(function () {
  $('#post').keypress(function (e) {
    if (e.keyCode == 13) {
      $.ajax({
        url: 'save.php',
        type: 'POST',
        data: {
            name: username,
            time: currentTime(),
            message: this.value
        },
        success: function (data) {
            console.log('OK: ', data);
        },
        error: function (err) {
            console.error('Fout: ', err);
        }
      });
      this.value = '';
    }
  });
  setInterval(loadMessages, 1000);
});

function loadMessages() {
  $.ajax({
    url: 'log/chat_log.xml',
    dataType: 'xml',
    cache: false,
    success: loaded,
    error: function (err) {
        console.error('Fout: ', err);
    }
  });
}

function loaded(data) {
  var $chat = $('#chat');
  var html = '';

  $(data).find('post').each(function () {
      var $this = $(this);
      html += '<article><strong>' + $this.find('name').text() + '</strong>';
      html += '<time>' + $this.find('time').text() + '</time>';
      html += '<p>' + $this.find('message').text() + '</p></article>';
  });

  $chat.html(html);
  $chat.scrollTop($chat[0].scrollHeight);
}

function currentTime() {
  var now = new Date();
  return now.getHours() + ':' + now.getMinutes();
}