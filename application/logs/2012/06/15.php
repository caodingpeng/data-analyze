<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-15 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-15 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-15 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-15 21:24:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: loginError ~ APPPATH/views/pages/login.php [ 37 ]
2012-06-15 21:24:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: loginError ~ APPPATH/views/pages/login.php [ 37 ]
--
#0 /home/dingpeng/web/application/views/pages/login.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 37, Array)
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
2012-06-15 21:26:43 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/welcome.php [ 23 ]
2012-06-15 21:26:43 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/welcome.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 21:27:45 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/welcome.php [ 23 ]
2012-06-15 21:27:45 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/welcome.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 21:28:28 --- ERROR: ErrorException [ 8 ]: Undefined index:  test ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2012-06-15 21:28:28 --- STRACE: ErrorException [ 8 ]: Undefined index:  test ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /home/dingpeng/web/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dingpeng/...', 65, Array)
#1 /home/dingpeng/web/application/classes/auth/example.php(7): Kohana_Database::instance('test')
#2 /home/dingpeng/web/modules/auth/classes/kohana/auth.php(90): Auth_Example->_login('liyan', '312312', false)
#3 /home/dingpeng/web/application/classes/controller/welcome.php(25): Kohana_Auth->login('liyan', '312312')
#4 [internal function]: Controller_Welcome->action_login()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-15 21:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL w was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-15 21:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL w was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 21:29:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-15 21:29:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-15 21:30:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-15 21:30:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-15 21:32:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: loginError ~ APPPATH/views/pages/login.php [ 37 ]
2012-06-15 21:32:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: loginError ~ APPPATH/views/pages/login.php [ 37 ]
--
#0 /home/dingpeng/web/application/views/pages/login.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 37, Array)
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
2012-06-15 21:32:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-15 21:32:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-15 21:33:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH/classes/controller/welcome.php [ 70 ]
2012-06-15 21:33:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH/classes/controller/welcome.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 21:34:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-15 21:34:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
--
#0 /home/dingpeng/web/application/views/template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 61, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/application/classes/controller/welcome.php(27): Kohana_Request->execute()
#9 [internal function]: Controller_Welcome->action_login()
#10 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-06-15 21:34:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-15 21:34:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
--
#0 /home/dingpeng/web/application/views/template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 61, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/application/classes/controller/welcome.php(27): Kohana_Request->execute()
#9 [internal function]: Controller_Welcome->action_login()
#10 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-06-15 21:36:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-15 21:36:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
--
#0 /home/dingpeng/web/application/views/template.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dingpeng/...', 61, Array)
#1 /home/dingpeng/web/system/classes/kohana/view.php(61): include('/home/dingpeng/...')
#2 /home/dingpeng/web/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dingpeng/...', Array)
#3 /home/dingpeng/web/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dingpeng/web/application/classes/controller/welcome.php(27): Kohana_Request->execute()
#9 [internal function]: Controller_Welcome->action_login()
#10 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-06-15 21:36:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
2012-06-15 21:36:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template.php [ 61 ]
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
2012-06-15 21:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 21:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 21:57:43 --- ERROR: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/controller/welcome.php [ 24 ]
2012-06-15 21:57:43 --- STRACE: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/controller/welcome.php [ 24 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dingpeng/...', 24, Array)
#1 [internal function]: Controller_Welcome->action_login()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-15 21:57:50 --- ERROR: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/controller/welcome.php [ 24 ]
2012-06-15 21:57:50 --- STRACE: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/controller/welcome.php [ 24 ]
--
#0 /home/dingpeng/web/application/classes/controller/welcome.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dingpeng/...', 24, Array)
#1 [internal function]: Controller_Welcome->action_login()
#2 /home/dingpeng/web/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-15 23:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-15 23:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/changeplat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dingpeng/web/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dingpeng/web/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dingpeng/web/index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-15 23:57:41 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/kohana/encrypt.php [ 68 ]