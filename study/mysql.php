<?php
$readme = <<< 'MD'
    数据库操作 -- mysql方式：
        1. 链接数据库
            1.1. mysql_connect('Address', 'User', 'passwd')  返回数据库链接句柄 否则 false
            
        2. 选择要操作的数据库，并设置字符集
            2.1. mysql_select_db("DB")选择操作的数据库；
            2.2. mysql_set_charset("utf-8)设定字符集；
            
        3. 执行MySQL语句
            3.1. mysql_fetch_assoc( mysql_query('SELECT * FROM test LIMIT 5'), MYSQL_NUM/ MYSQL_ASSOC/MYSQL_BOTH[default])
                读取内容（MYSQL结果集【相当于open()】), 读取格式)  返回内容，每次读取一条；
             3.2. mysql_fetch_array('SELECT * FROM test LIMIT 5') <==> mysql_fetch_assoc( mysql_query('SELECT * FROM test LIMIT 5'), MYSQL_NUM)
             3.3. mysql_fetch_row('SELECT * FROM test LIMIT 5') <==> mysql_fetch_assoc( mysql_query('SELECT * FROM test LIMIT 5'), MYSQL_ASSOC)
             
             3.4. mysql_query(SQL语句） -- 可以实现相应的‘增删改查’
        4. 关闭链接
            1. mysql_close();
            
    数据库操作 -- mysqli方式：
        1. 衔接数据库
            1.1. $link = mysqli_connect('localhost', 'test', '123456', 'test');
           
        2. 设置数据库的字符集
            2.1. mysqli_select_db($link, "DB")      选择操作的数据库；
            2.2. mysqli_set_charset($link, "utf-8)  设定字符集；
        
        3. 执行MySQL语句：
            3.1 查询：
                mysqli_fetch_array()    返回结果集；
                mysqli_fetch_assoc()    返回一个数组；
                mysqli_fetch_aow()      返回字典；
                mysqli_fetch_object()   返回结果集的当前行（作为 对象）；
                
            3.2. 获得影响行数：
                mysqli_affected_rows($link)             插入/更新/删除
                mysqli_num_rows(mysql_result, $result)  查询
            
            3.3. 获取错误信息：
                mysqli_error($link)
                mysqli_connect_errno()
                mysqli_connect_error()
                
            3.4. 释放结果集/关闭连接
                mysqli_free_result($)
                mysqli_close($)
                
                        
MD;

$conn = mysqli_connect('localhost', 'test', 123456);

if(!$conn){
    echo 'MySQL Connect Error: '.mysql_error().'<br/>Error info'.mysql_errno().'<br/>';
} else {
    echo 'The SQL connect success<br/>';
}
mysql_close();

$conn = mysqli_connect('localhost', 'test', '123456', 'test');
mysqli_