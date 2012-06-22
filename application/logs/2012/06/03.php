<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-03 00:43:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 00:43:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 00:53:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
2012-06-03 00:53:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 31, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:54:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
2012-06-03 00:54:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 31, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:54:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
2012-06-03 00:54:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 31, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:54:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
2012-06-03 00:54:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 31, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:55:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
2012-06-03 00:55:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 31, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:55:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
2012-06-03 00:55:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 31, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:55:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
2012-06-03 00:55:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 31 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 31, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:58:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
2012-06-03 00:58:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 32, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:59:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
2012-06-03 00:59:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 32, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:59:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
2012-06-03 00:59:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 32, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 00:59:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
2012-06-03 00:59:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/pages/about.php [ 32 ]
--
#0 /home/dingpeng/web/application/views/pages/about.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 32, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dingpeng/web/application/views/template.php(61): Kohana_View->__toString()
#5 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#6 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#7 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-03 01:00:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:00:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:04:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:04:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:08:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:08:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
--
#0 /home/dingpeng/web/application/views/template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 61, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/controller/template.php(45): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-03 01:09:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:09:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:10:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:10:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:10:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:10:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:10:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:10:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:10:56 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/controller/search.php [ 9 ]
2012-06-03 01:10:56 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/controller/search.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-03 01:12:48 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Can't connect to MySQL server on '192.168.1.6' (111) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-03 01:12:48 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Can't connect to MySQL server on '192.168.1.6' (111) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/dingpeng/web/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/dingpeng/web/application/classes/controller/search.php(11): Kohana_Database_MySQL->query(1, 'select * from u...', false)
#2 [internal function]: Controller_search->action_index()
#3 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_search))
#4 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-03 01:30:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:30:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:31:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:31:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:32:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:32:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:33:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:33:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 01:34:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 01:34:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-03 02:17:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$db ~ APPPATH/classes/controller/welcome.php [ 33 ]
2012-06-03 02:17:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$db ~ APPPATH/classes/controller/welcome.php [ 33 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/dingpeng/...', 33, Array)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:18:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'('uid','name','intime')values('33333333333','wang','2012-2-1'),('22' at line 1 [ insert into 'test'.'user'('uid','name','intime')values('33333333333','wang','2012-2-1'),('22222222222','xiaohong','2012-2-10') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-03 02:18:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'('uid','name','intime')values('33333333333','wang','2012-2-1'),('22' at line 1 [ insert into 'test'.'user'('uid','name','intime')values('33333333333','wang','2012-2-1'),('22222222222','xiaohong','2012-2-10') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Database_MySQL->query(2, 'insert into 'te...', false)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:19:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1'),(22222' at line 1 [ insert into 'test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1'),(22222222222,'xiaohong','2012-2-10') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-03 02:19:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1'),(22222' at line 1 [ insert into 'test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1'),(22222222222,'xiaohong','2012-2-10') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Database_MySQL->query(2, 'insert into 'te...', false)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:21:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1')' at line 1 [ insert into 'test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-03 02:21:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1')' at line 1 [ insert into 'test'.'user'('uid','name','intime')values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Database_MySQL->query(2, 'insert into 'te...', false)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:29:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1')' at line 1 [ insert into 'test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-03 02:29:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1')' at line 1 [ insert into 'test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Database_MySQL->query(2, 'insert into 'te...', false)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:34:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1')' at line 1 [ insert into 'test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-03 02:34:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1')' at line 1 [ insert into 'test'.'user'(uid,name,intime)values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Database_MySQL->query(2, 'insert into 'te...', false)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:37:26 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2147483647' for key 'PRIMARY' [ insert into user(uid,name,intime)values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 193 ]
2012-06-03 02:37:26 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2147483647' for key 'PRIMARY' [ insert into user(uid,name,intime)values(33333333333,'wang','2012-2-1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 193 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Database_MySQL->query(2, 'insert into use...', false)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:38:06 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2147483647' for key 'PRIMARY' [ insert into user(uid,name,intime)values(44444444444,'wang','2012-2-10') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 193 ]
2012-06-03 02:38:06 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2147483647' for key 'PRIMARY' [ insert into user(uid,name,intime)values(44444444444,'wang','2012-2-10') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 193 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(33): Kohana_Database_MySQL->query(2, 'insert into use...', false)
#1 [internal function]: Controller_Welcome->action_search()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-03 02:49:41 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/controller/welcome.php [ 38 ]
2012-06-03 02:49:41 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/controller/welcome.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-03 07:52:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-03 07:52:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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