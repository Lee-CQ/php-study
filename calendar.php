<?php
$year = date('Y');
$month = date('m');

$firstDayInt = mktime(0,0,0,$month,1, $year);  # 月的第一天的时间戳；
$day_inMonth = date('t', $firstDayInt);  # 月的天数
$firstDayWeek = date('w', $firstDayInt); //这一天的星期几
$temp_Days = $firstDayWeek + $day_inMonth;  //零时
$weeks = ceil($temp_Days/7);  // 周
# --
$days = [];
$day_tmp = 0;
for($i=0;$i<$weeks;$i++){
    for ($j=0;$j<7;$j++){
        # 第一周
        if(($i == 0 and $j>=$firstDayWeek) or ($i>0 and $day_tmp<$day_inMonth)){
            $day_tmp++;
            $days[$i][$j] = $day_tmp;
        } else {
            $days[$i][$j] = '';
        }
    }
}
# echo  '<pre>';
# print_r($days);
?>
<table border="1" width="500">
    <tr> <th colspan="7"><?php echo $year,'年',$month,'月' ?></th> </tr>
    <tr>
        <th>星期日</th>
        <th>星期一</th>
        <th>星期二</th>
        <th>星期三</th>
        <th>星期四</th>
        <th>星期五</th>
        <th>星期六</th>
    </tr>
    <?php
    foreach($days as $week=>$weekdays){
        echo '<tr>';
        foreach ($weekdays as $_d){
            echo "<td>$_d</td>";
        }
        echo '</tr>';
    } ?>
    <tr><th></th></tr>
</table>
