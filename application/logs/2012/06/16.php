<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-16 00:04:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/welcome.php [ 8 ]
2012-06-16 00:04:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-16 00:05:34 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:06:22 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:08:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 86 ]
2012-06-16 00:08:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 86 ]
--
#0 /home/dingpeng/web/application/views/template.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 86, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-16 00:08:58 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:09:08 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:10:55 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:15:03 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:15:30 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:15:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 86 ]
2012-06-16 00:15:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 86 ]
--
#0 /home/dingpeng/web/application/views/template.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 86, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-16 00:15:36 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:15:43 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:16:19 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:17:38 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:18:47 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:19:26 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:23:03 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:23:49 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 00:24:47 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-06-16 02:08:30 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 02:10:27 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 02:10:44 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 02:10:56 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 02:11:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-06-16 02:11:31 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-06-16 02:11:43 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 02:12:00 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-06-16 02:12:11 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-06-16 02:13:40 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-06-16 02:19:00 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]
2012-06-16 02:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-16 02:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#1 {main}