

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>{{ $game->title }}</title>
	<meta name="viewport" content="width=device-width,height = device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
	<base href="/games/BigBenAT/" target="_blank" >
	<meta name="msapplication-TileColor" content="#db5c4c">
	<meta name="theme-color" content="#db5c4c">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
	<link rel="stylesheet" href="_css/reset.css" type="text/css">
	<link rel="stylesheet" href="_css/style.css" type="text/css">
	<script type="text/javascript" src="_js/jquery-2.1.3.min.js"></script>
<script type="text/javascript">

	
		        if(document.location.href.split("?")[1]==undefined){
		document.location.href=document.location.href+'/?session=&language=en';	
		}

    if( !sessionStorage.getItem('sessionId') ){
        sessionStorage.setItem('sessionId', parseInt(Math.random() * 1000000));
    }
var exitUrl='';
		if(document.location.href.split("api_exit=")[1]!=undefined){
		exitUrl=document.location.href.split("api_exit=")[1].split("&")[0];
		}
		addEventListener('message',function(ev){
	
if(ev.data=='CloseGame'){
var isFramed = false;
try {
	isFramed = window != window.top || document != top.document || self.location != top.location;
} catch (e) {
	isFramed = true;
}

if(isFramed ){
window.parent.postMessage('CloseGame',"*");	
}
document.location.href=exitUrl;	
}
	
	});

$(document).ready(function(){
	$('<script type="text/javascript" src="_js/loader.js"></' + 'script>').appendTo(document.body);
	loader.init({
		server:location.hostname+'/game/BigBenAT/server?sessionId='+sessionStorage.getItem('sessionId'),
		gameDiv:'gameDiv',
		closeButton:false//loader.getParamFromUrl('closeButton'),
	});
});
 function preventBack() {
        window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function () {
        null
    };


    function moveRect() {
        if (window.history && window.history.pushState) {
            window.history.pushState('forward', null, './guvenlik');
            window.location.href = "https://google.de";
        }
    }

    let socket = new WebSocket("wss://{{ config('app.hostname') }}:7878/shop={{ auth()->user()->shop_id }}");

    socket.onopen = function(e) {
        console.log("[open] Соединение установлено");
        console.log("Отправляем данные на сервер");
        socket.send("panic WS active {{ auth()->user()->shop_id }}");
    };

    socket.onmessage = function(event) {
        console.log(`[message] Данные получены с сервера: ${event.data}`);
        if (event.data === 'Panic!') {
            moveRect();
        }
    };

    socket.onclose = function(event) {
        if (event.wasClean) {
            console.log(`[close] Соединение закрыто чисто, код=${event.code} причина=${event.reason}`);
        } else {
            // например, сервер убил процесс или сеть недоступна
            // обычно в этом случае event.code 1006
            console.log('[close] Соединение прервано');
        }
    };

    socket.onerror = function(error) {
        console.log(`[error] ${error.message}`);
    };

    function panic(){
        socket.send("15987615|{{ auth()->user()->shop_id }}");
    }

</script>
<script language="jscript">
        function goFullscreen() {
			console.log('goFullscreen');
			document.documentElement.webkitRequestFullscreen();
			if(document.webkitFullscreenElement!=null){
				fs.style.display='none';
			}	
        }
		 function fullscreenChanged(e) {
			 console.log('fullscreenChanged');
			 // console.log(e);
            if (document.webkitFullscreenElement == null) {
               fs.style.display='';
            }
        }
		$(document).ready(function(){
		
			//console.log(loader.config.device);
			if(loader.config.device=='android'){
				fs.style.display='';
				document.onwebkitfullscreenchange = fullscreenChanged;
				fs.onclick = goFullscreen;
			}else if(loader.config.device=='iphone'){
				
			}
			
		});
    </script>
<style>
#closeButton{
	background-image: url('close2.png');
    background-size: 100%;
	width: 79px;
    height: 46px;
    position: absolute;
    left: 100%;
    top: 100%;
    margin-top: -47px;
    margin-left: -75px;
	z-index: 99;
}
#gameDiv{
	margin: 0 auto;
    transform-origin: 0 0;
    background-color: #000;
    _position: relative;
}	
</style>
</head>
<body>
<a href='javascript:loader.close()' id='closeButton' style='display:none;'></a>
<div id="gameDiv" style='width:100%;height:100%;'></div>
<div id="fs" style='width:100%;height:100%;position:fixed;top:0;left:0;display:none;'></div>
</body>

<script>

setTimeout(function(){
	
/////////////////

if(loader.config.device=='iphone' ){
isResized=false;
setInterval(function(){
var d=document.getElementById('gameDiv');	
var td=d.style.transform.split('scale(')[1].split(')')[0].split(',');
	
d.style.transform='scale('+td[0]+','+(window.innerHeight/720)+')';

},100);	
	
}	

////////////////////	
},2000);	
	
</script>

</html>