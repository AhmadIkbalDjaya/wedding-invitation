<script>
  $(document).ready(function () {
    console.log("OK");
    $("#message-form").submit(function(e){
      e.preventDefault();
      messageStore();
    });
    readMessage();
  });
  function readMessage(){
    $.get("{{ url('readMessage') }}", {}, function(data, status) {
      $("#messages-containerr").html(data);
    });
  }
  function messageStore(){
    let name = $('#name').val();
    let address = $('#address').val();
    let text = $('#text').val();
    let isCome = $("input[name='isCome']:checked").val();
    let guest_name = $('#guest_name').val();
    $.ajax({
      type: "POST",
      // url: "{{ url('messageStore') }}",
      url: "/messageStore",
      data: {
        name,
        address,
        text,
        isCome,
        guest_name,
        _token: '{{csrf_token()}}'
      },
      success: function (data) { 
        readMessage();
        $('#name').val("");
        $('#address').val("");
        $('#text').val("");
        $('#comeTrue').prop('checked', false);
        $('#comeFalse').prop('checked', false);
      }
    })
  }

</script>