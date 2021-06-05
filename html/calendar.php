<?php
    require('./header.php');
    $page = "calendar";
?>
<div id='calendar-box'></div>
<?php
    require('./footer.php');
?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar-box');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
            // {
            //     id: '1',
            //     title: 'event1',
            //     start: '2021-06-07',
            //     url: './index.php#1'
            // },
            // {
            //     id: '2',
            //     title: 'event2',
            //     start: '2021-06-24',
            //     url: '#'
            // },
            // {
            //     id: '3',
            //     title: 'event3',
            //     start: '2021-06-30',
            //     url: '#'
            // }
<?php
include "./pdo_connect.php";
$sql = "SELECT * FROM score JOIN music WHERE score.id = music.id";
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
?>
                {
                    id: '<?=$row['num']?>',
                    title: '<?=$row['name']." ".$row['score']?>',
                    start: '<?=date('Y-m-d',strtotime($row['datetime']))?>',
                    url: './index.php#<?=$row['num']?>'
                },
<?php
}
?>

        ],
        // 日本語化
        locale: 'ja',
        buttonText: {
            prev:     '<',
            next:     '>',
            prevYear: '<<',
            nextYear: '>>',
            today:    '今日',
            month:    '月',
            week:     '週',
            day:      '日',
            list:     '一覧'
        },
    });
    calendar.render();
});
</script>