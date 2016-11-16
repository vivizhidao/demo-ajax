>wamp 服务器的介绍
windows apache  mysql，php
 wamp 是一个集成的软件。这里面包含了三部分

- 配置所有的用户都可以访问
	+ Allow from all
- 配置网站的在服务器上面的部署位置。
- 配置通过域名可以访问我自己的项目  	
	+ 1:我要进入到C://windows/system32/drivers/etc/hosts.hosts
	（拷出来修改127.0.0.1 www.taobao.com）
	+ 2:第二步我要进入到apache  httpd.conf 下面打开467行的注释
	（Include conf/extra/httpd-vhosts.conf）
	+ 3:进入httpd-vhosts.conf 进行配置.
	
	<VirtualHost *:80>
	ServerAdmin webmaster@dummy-host.example.com
	我们访问http://www.taobao.com 现在我们已经知道已经进入到f:/workspace
	DocumentRoot "f:/workspace/taobao"
	ServerName taobao.com
	ServerAlias www.taobao.com
	ErrorLog "logs/dummy-host.example.com-error.log"
	CustomLog "logs/dummy-host.example.com-access.log" common
	</VirtualHost>

> php

- 新建一个php，后缀.php 因为你之后后缀是.php,放在wamp 上面，我访问这个php，所以这个服务器才会转换
 + 1:定义变量 $username="zhangsan";
 + 2:echo  $username
 + 3:变量的类型
 + 4:数组
 	 +  普通数组$array=array("","","")
 	 +  关联数组

                 $array11=array("username"=>"zhangsan","age"=>11)

        + 二维数组
                 $array2=array(
                      array("username"=>"zhangsan3","age"=>11),
                      array("username"=>"zhangsan2","age"=>12),
                      array("username"=>"zhangsan1","age"=>13)
                 );
	+ 5:字符串拼接，我们使用  .
	+ 6:函数
                function sayHello($username="zhangsan"){
                        echo "".$username;

                }
                sayHello();
	+ 7:向客户端输出

            echo    输出字符串

            print_r 输出数组或者对象


            var_dump 数组数组的详细信息.

	+ 8:常见的函数

            count() 统计数组的长度

            in_Array 判断数组当中是否存在某个元素


            array_key_exists 判断数组当中是否存在某个key

            file_get_contents 读取文件里面的内容转换成字符串.
	+ 9:客户端与服务端进行交互.
		- 文件上传：（客户端向服务器端传递数据）
		
		- 文件上传对客户端的要求:
		        1: 必须是表单提交
		        2：我必须有一个input 选项  它的类型是file
		        3：我必须是post 方式提交。
		        4：必须设置在表单上面设置一个属性  form   enctype="multipart/form-data";
		
		- 文件上传在服务端怎么去获取数据:
		        服务器去获取客户端的数据，
		        假设客户端是以get 方式提交的数据 我就是用$_GET
		        假设客户端是以post 方式提交的数据，我就是用$_POST
		        假设客户端的数据是文件上传上传，我就是用  $_FILES



> 文件上传在服务端怎么去获取数据:

        服务器去获取客户端的数据，
        假设客户端是以get 方式提交的数据 我就是用$_GET
        假设客户端是以post 方式提交的数据，我就是用$_POST
        假设客户端的数据是文件上传上传，我就是用  $_FILES

> http 协议
       （协议：规定，约束）规定谁，约束谁的http 协议 w3c 规定
        客户端浏览器与服务器之间进行通讯（交互）的数据格式

     http 协议分为两大部分
     1：客户端发送给服务器  (请求的数据格式)
                    1：请求首行
                    2：请求头
                    3：请求空行
                    4：请求体
     发送http 请求 我们常见的方式有两种，一种是get post
                   get  没有请求体，发送到服务器端参数都在地址栏当中
                不安全，数据大小有限制

                    post 有请求体，发送到服务器端数据都在请求体当中
                  安全，数据大小没有限制。
                  有一个特殊的请求头
                   Content-Type:"application/x-www-form-urlencoded";
     2：服务器响应给客户端  （响应的 数据格式）

                    响应的数据格式四部分
                            响应首行
                                    状态200   ok
                                    状态404  not find
                                    状态500 服务器内部错误
                            响应头

                                   //我服务器给客户端浏览器一个这样的响应头。

                                   //客户端浏览器接受到这个响应头，5秒钟之后会自动跳转到百度.
                                   Refresh:5;url=http://www.baidu.com
                            响应空行
                            响应体

                                       假设我在php 当中通过echo 输出，内容都在响应体当中.
                                       就是html 内容

> get  提交与post 提交的区别  （重点掌握）

	1、GET没有请求主体，使用xhr.send(null)
	2、GET可以通过在请求URL上添加请求参数
	3、POST可以通过xhr.send('name=itcast&age=10')
	4、POST需要设置
	5、GET效率更好（应用多）
	6、GET大小限制约4K，POST则没有限制

> http 协议  约束客户端浏览器与服务器进行通讯。

   这两者之间的数据交互都有一定的数据格式。

- 客户端会给服务器发送一些数据

	         请求首行
	         请求头
	         请求空行
	         请求体
- 服务器也会给客户端响应一些数据

	         响应首行
	         响应头
	         响应空行
	         响应体.

- 我给服务器发送一个请求，服务器可以给客户端发送响应头

 		我发送一个Refresh 的响应   refresh  5;url=http://www.baidu.com
- 利用HTTP抓包工具在开发中可以帮我们进行调试，常用抓包工具HttpWatch、Fiddler、Charles、FireBug等


>ajax
>Asynchronous Javascript And XML

- 同步交互：

        我发送一个请求，服务器接受到请求，服务器要对请求进行处理，然后给客户端浏览器进行响应。
       响应回来的页面会把之前的界面给覆盖掉.

       我发送请求给服务器，服务器对我的请求进行处理，在处理的过程当中，我的客户端不能做其它的操作.
- 异步交互：

        我发送一个请求给服务器，服务器接受到请求，服务器对请求进行处理，然后给客户端浏览器响应数据
        响应回来的数据不会覆盖原来的界面.

        我发送请求给服务器，服务器对我的请求进行处理，在处理的过程当中，客户端还可以做其它的事情.

> API
 
	xhr.open() 发起请求，可以是get、post方式
	xhr.setRequestHeader() 设置请求头
	xhr.send() 发送请求主体get方式使用xhr.send(null)
	xhr.onreadystatechange = function () {} 监听响应状态
	xhr.readyState = 0时，UNSENT open尚未调用
	xhr.readyState = 1时，OPENED open已调用
	xhr.readyState = 2时，HEADERS_RECEIVED 接收到头信息
	xhr.readyState = 3时，LOADING 接收到响应主体
	xhr.readyState = 4时，DONE 响应完成
	不用记忆状态，只需要了解有状态变化这个概念
	xhr.status表示响应码，如200
	xhr.statusText表示响应信息，如OK
	xhr.getAllResponseHeaders() 获取全部响应头信息
	xhr.getResponseHeader('key') 获取指定头信息
	xhr.responseText、xhr.responseXML都表示响应主体

 - 1:创建对象
            var xhr=new XMLHttpRequest();
- 2:打开连接
            xhr.open("GET","URL");
- 3:发送数据
            xhr.send(null); get 提交数据放在  路径的后面.
- 4:接收数据

            在xhr 对象上面绑定一个函数

            //服务端在响应的过程当中都会调用这个函数.
                    xhr.onreadystatechange=function(){
            //获取服务器端状态，如果服务器返回的 状态等于4，代表服务器的数据已经响应完毕.
            //xhr.readyState

            //服务器返回的状态吗，如果200 代表的是成功，如果是404 代表的响应失败
            //xhr.status

            if(xhr.readyState==4 && xhr.status==200){

            //在这里获取数据. 获取服务器端返回的数据.
            xhr.responseText;
		 }
	}//我通过ajax 异步交互我可以完成一个什么样的效果:页面不刷新，就可以完成与服务器端数据交互.

>
            1:  ajax  get 提交
            2:  ajax post 提交
            3:  检测用户名是否已经存在.

