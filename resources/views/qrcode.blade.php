<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>QR Code Generator with Download</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto text-center py-8">
            <div class="visible-print text-center">
                <h1 class="text-3xl font-bold">Laravel - QR Code Generator Example</h1>
                {!! QrCode::size(250)->generate('Renato Lucena') !!}
                <p class="mt-2">example by renatolucena.net</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-8">
                <div>
                    <p class="mb-2 font-bold">Simple</p>
                    <a href="" id="container" class="underline inline-block">{!! $simple !!}</a><br/>
                    <button id="download" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" onclick="downloadSVG()">Download SVG</button>
                </div>
                <div>
                    <p class="mb-2 font-bold">Color Change</p>
                    {!! $changeColor !!}
                </div>
                <div>
                    <p class="mb-2 font-bold">Background Color Change</p>
                    {!! $changeBgColor !!}
                </div>
                <div>
                    <p class="mb-2 font-bold">Style Square</p>
                    {!! $styleSquare !!}
                </div>
                <div>
                    <p class="mb-2 font-bold">Style Dot</p>
                    {!! $styleDot !!}
                </div>
                <div>
                    <p class="mb-2 font-bold">Style Round</p>
                    {!! $styleRound !!}
                </div>
            </div>
            <hr class="my-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {!! QrCode::size(300)->color(75, 0, 130)->generate('Make me into a QrCode!') !!}
            </div>
            <hr class="my-8">
            <div class="flex justify-center">
                <form action="/images" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" class="mr-2">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Upload</button>
                </form>
            </div>
            <hr class="my-8">
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function downloadSVG() {
            const svg = document.getElementById('container').innerHTML;
            const blob = new Blob([svg.toString()]);
            const element = document.createElement("a");
            element.download = "w3c.svg";
            element.href = window.URL.createObjectURL(blob);
            element.click();
            element.remove();
        }
    </script>
</html>
