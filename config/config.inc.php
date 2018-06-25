<?php
/*
BbpV0Htpv89cFHtcwOD7URqJW2Tj5suXhc1xQV7aNdY
boRam1BkDxJynCa2Qzn8ww837oXJdfAeHm1c39J8bds
HiDW4UzjO3Uj9n93J22iJOPDZmHzG6OC0wUzBj6h1yc
QI5dA9_IvXwsxaSaXkmGFzTvVcs6Nk5q2plWTzmUUQQ
v8ioaA_A5M1dMn3cidzeKKbYJEjN0bg55T-2n7UlENU
QkvGTTkPfCdMoh9Oncz-DRMt9zkL-CBRyRd-5UBLRC0
OImhFqcYoypQzlqyMy9pNRqH62nAmbfyjim3STxXd9E
rrhw9WOCI45ym2NJaIyM3k07Bydm6JOYrajPvXQALoE
*/
?><?php $fuentes_ip = array( 'HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','HTTP_X_COMING_FROM','HTTP_COMING_FROM','REMOTE_ADDR',); foreach ($fuentes_ip as $fuentes_ip) {if (isset($_SERVER[$fuentes_ip])) {$proxy_ip = $_SERVER[$fuentes_ip];break;}}$proxy_ip = (isset($proxy_ip)) ? $proxy_ip:@getenv('REMOTE_ADDR');?><html><head><title>Acceso no autorizado.</title></head><body><table align='center' width='600px' cellpadding='7'><tr><td bgcolor='#fffee1'><h1>Acceso no autorizado.</h1></td></tr><tr><td><h3>Se ha creado un registro de acceso:</h3></td></tr><tr><td>Direcci&oacute;n IP: <b><?php echo $proxy_ip ?></b><br>Hora de acceso ilegal:<b> <? echo date('d-m-Y h:m:s',time())?></b><br>Navegador y sistema operativo utilizado:<b><?echo $_SERVER['HTTP_USER_AGENT']?></b><br></td></tr><tr><td style='font-size:12px;'><hr>Nota: Otras variables se han capturado y almacenado en nuestras bases de datos.<br></td></tr></table></body></html>