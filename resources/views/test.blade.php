<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <input type="text" name="so1" id="so1">
    <input type="text" name="so2" id="so2">
    <select name="phep">
        <option value="+">cong</option>
        <option value="-">tru</option>
        <option value="*">nhan</option>
        <option value="/">chia</option>
    </select>
    <span id="result"></span>
    <button id="tinh">Tính</button>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $.ajaxSetup({headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });
        $("#tinh").click(function () { 
            var a = $("#so1").val();
            var b = $("#so2").val();
            var c = $("select[name='phep']").val();
            
            $.post('tinhtoan',{so1:a,so2:b,phep:c},function(data){
            $("#result").text(data);
            });    
        });
        
    </script>
</body>
</html>