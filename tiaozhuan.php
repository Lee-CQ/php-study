<?php
/**
 *  根据域名的不同跳转到不同的页面；
 */

$host = $_SERVER['HTTP_HOST'];
# 在这里创建跳转的对应关系；
$congruent_relationship = [ // [域名，跳转]
    ['leecq.club', ''],
    ['a.leecq.club', ''],
    ['pan.leecq.club', ''],
    ['localhost', '404']

];

foreach ($congruent_relationship as $item) {
    if (strpos($host, ':')) {
        if (stristr($host, ':', true) == $item[0]) {
            // echo "<script type=\"text/javascript\">window.location.href=\"$item[1]\";</script>";
            echo "$item[1]<br/>";
        }
    }
}
if ($host == 'dns.leecq.xyz') {
    echo '<script type="text/javascript">window.location.href="http://cdn-dns.52could.cn";</script>';
} elseif (stristr($host, ':', true)== 'localhost') {
    echo '本地端口不跳转';
} elseif (''){
    echo 'pass';
} else{
    echo '没有匹配到跳转项目<br/>',$host;
}