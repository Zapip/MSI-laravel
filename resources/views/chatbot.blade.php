<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chatbot in PHP</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div class="wrapper">
        <h2 class="title">Simple Online Chatbot 🤗</h2>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user">😀</i>
                </div>
                <div class="msg-header">
                    <p>Hai semua, perlu
                        <br>suatu bantuan?
                    </p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <form class="input-data">
                <input id="data" type="text" placeholder="Ketik Sesuatu Disini.." required>
                <button id="send-btn">Kirim</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg =
                    '<div class="user-inbox inbox"><div class="icon"><i class="fas fa-user">😁</i></div><div class="msg-header"><p>' +
                    $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // start ajax code
                $.ajax({
                    url: '{{ route('chatbot') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        text: $value
                    },
                    success: function(result) {
                        $replay =
                            '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user">😀</i></div><div class="msg-header"><p>' +
                            result.message + '</p></div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
</body>

</html>
