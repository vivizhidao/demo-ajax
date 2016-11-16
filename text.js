
    // $.ajax 封装思想
    /*1.判断发送方式
        如果是post   需要请求头  并且 send( 里发送请求内容 )
        如果 是get  不需要请求头   send( 为空 ) 请求内容在地址栏里
    * */
    (function (w){
        ajaxSettings = {
            url: location.href,
            type: "GET",
            async: true,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            timeout: 0,
            dataType: null,
            success: function(){},
            error: function(){},
            complete: function(){}
        }
        function extend ( obj ){
            // console.log(arguments.length);
            if( arguments.length > 1 ){
                for ( var i= 1,len = arguments.length; i<len; i++){
                    for( var key in arguments[i]){
                        arguments[0][key] = arguments[i][key];
                    }
                }
            }
        }
        function toData ( data ){
            var str = "";
            for ( var key in data ){
                str+= key + "=" + data[key]+"&";
            }
            return str.slice(0 , -1);
        }
        //实例化
        function ajax( data ){
            var config = {};
            var xhr = new XMLHttpRequest();
            extend(config,ajaxSettings,data);
            config.type = config.type.toUpperCase();
            if( config.type == "GET" ){

                config.url = config.url + "?" + toData( config.data );

                config.data = null;
            }
            if( config.type == "POST" ){

                xhr.setRequestHeader( 'Content-Type', config.contentType );
            }
            //发送请求    send( 请求路径 ， 方式)
            xhr.open( config.type ,config.url);
            xhr.onreadystatechange = function (){

                if(xhr.readyState == 4 && (xhr.status>=200 && xhr.status <=300) || xhr.status == 304){

                    config.success( xhr.responseText )
                }
            }
            xhr.send( config.data )
        }
        w.ajax = ajax;
    }(window))

