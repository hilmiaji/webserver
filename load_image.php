<?php
    pre_r($_POST);
    if (ISSET($_POST['submit'])) // if the submit button pressed
        $server = ($_POST['server']);
        $id_object = ($_POST['object']);
        $sdate = date('Y-m-d-H-i-j', strtotime($_POST['sdate']));
        $edate = date('Y-m-d-H-i-j', strtotime($_POST['edate']));
        $image = $server . 'chart.png?username=Muhadi&password=muh-Nsatu2019&avg=300&sdate=' . $sdate . '&edate=' . $edate . '&width=1200&height=400&graphid=-1&id=' . $id_object;
        $imageData = base64_encode(file_get_contents($image));
        echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>