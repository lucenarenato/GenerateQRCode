
# QR Code Generator in Laravel 10
I will give you a very simple example of generating QR code with image, QR code with color, QR code with SMS, QR code with email, and QR code in Laravel 10

> Laravel-10-QR-Code-Generate é um pacote versátil do Laravel que simplifica a geração de códigos QR em aplicativos Laravel 10. Com uma interface fácil de usar e recursos robustos, ele permite que os desenvolvedores integrem perfeitamente a funcionalidade do código QR,

## Output
![App Screenshot](https://i.postimg.cc/9MQBzGCg/qr-code-generator.png)


## Installation

**[Step - 1]** **Create new Project:**<br/>
(Open PowerShell In Your Local Machine and put this command)
 ```bash
Laravel new laravel10-qrcode-generator
```
**[Step - 2]** **Install package:** 
```bash
 composer require simplesoftwareio/simple-qrcode
```
**[Step - 3]** **Remove unnecessary code from inital Project:** <br/>
**[Step - 4]** **Make a controller:** 
```bash
 php artisan make:controller QRcodeGenerateController
```
**[Step - 5]** **Make a Route on the web.php:** 
```bash
 Route::get('/', [QRcodeGenerateController::class,'qrcode']);
```
**[Step - 6]** **Make Function with name in controller:** 
```bash
 public function qrcode()
```
**[Step - 7]** **Copy Code and paste on function:** 
```bash
    $qrCodes = [];
    $qrCodes['simple'] = 
    QrCode::size(150)->generate('https://blog.renatolucena.net');
    $qrCodes['changeColor'] = 
    QrCode::size(150)->color(255, 0, 0)->generate('https://blog.renatolucena.net');
    $qrCodes['changeBgColor'] = 
    QrCode::size(150)->backgroundColor(255, 0, 0)->generate('https://blog.renatolucena.net');
    $qrCodes['styleDot'] = 
    QrCode::size(150)->style('dot')->generate('https://blog.renatolucena.net');
    $qrCodes['styleSquare'] = QrCode::size(150)->style('square')->generate('https://blog.renatolucena.net');
    $qrCodes['styleRound'] = QrCode::size(150)->style('round')->generate('https://blog.renatolucena.net');

    return view('qrcode',$qrCodes);

```

**[Step - 12]** **run the command on the project terminal**
```bash 
	php artisan serve
```
Hit the url
```bash
	http://127.0.0.1:8000/
```

## Documentação
- https://github.com/SimpleSoftwareIO/simple-qrcode/tree/develop/docs/pt-br

## Authors

- [@cpdrenato](https://www.github.com/lucenarenato)

- https://packagist.org/packages/simplesoftwareio/simple-qrcode
