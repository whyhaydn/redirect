    <html>
    	<head>
    		<title>Redirect Halaman dengan JQuery</title>
    		<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    		<script>
    			$(document).ready(function(){
    				window.setInterval(function () {
    					var sisawaktu = $("#waktu").html();
    					sisawaktu = eval(sisawaktu);
    					if (sisawaktu == 0) {
    						location.href = "http://achmatim.net/";
    					} else {
    						$("#waktu").html(sisawaktu - 1);
    					}
    				}, 1000);
    			});
    		</script>
    		<style type="text/css">
    			body {
    				font-size:12pt;
    				font-family:verdana;
    				background-color:cyan;
    			} 
    			#waktu {
    				font-size:25pt;
    				color:red;
    			}
    		</style>
    	</head>
    	<body>
    		<h1>Anda akan diarahkan ke halaman sebenarnya dalam waktu <span id="waktu">10</span> detik</h1>
    	</body>
    </html>

