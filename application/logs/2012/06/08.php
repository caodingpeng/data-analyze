<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-08 23:13:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-08 23:13:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
--
#0 /home/dingpeng/web/application/views/template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 61, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#9 {main}