<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-14 10:24:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 38 ]
2012-06-14 10:24:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 38 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 38, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Templatecontrol))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-14 10:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL templatecontrol/templatecontrol/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-14 10:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL templatecontrol/templatecontrol/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-14 10:48:11 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-14 10:48:13 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-14 10:50:39 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-14 10:50:42 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]