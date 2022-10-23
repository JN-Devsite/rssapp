<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARS RSS News Feed</title>
    @vite('resources/css/app.css')
    <style>
        .story-content a {
            font-weight: bold;
            text-decoration: underline;
            color: rgb(107 114 128);
        }

        .story-content a:hover {
            color: rgb(249 115 22);
            text-decoration: none;
        }

        .story-content img {
            border-radius: 10px;
        }

        .story-content p {
            margin: 0.75rem 0px;
        }
    </style>

</head>
<body onkeydown="showChar(event);" id="container">
<div class="container mx-auto p-5">
    <div class="font-bold text-orange-500 text-3xl m-7 text-center">ARS RSS News Feed</div>
    {{ $slot }}
</div>
<script>
    var permalink = document.getElementById("permalink");

    if(permalink) {
        permalink.style.display = "none";

        function showChar(e) {
            if(e.altKey) {
                permalink.style.display = "block";
            }
        }

        document.addEventListener('mouseup', function(e) {
            var permalink = document.getElementById("permalink");

            if (!permalink.contains(e.target)) {
                permalink.style.display = 'none';
            }
        });
    }
</script>
</body>
</html>
