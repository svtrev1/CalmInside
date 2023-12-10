<?php
if ($week != 0)
{
    if ($week == 7)
        $date = new DateTime('-6 days');
    if ($week == 6)
        $date = new DateTime('-5 days');
    if ($week == 5)
        $date = new DateTime('-4 days');
    if ($week == 4)
        $date = new DateTime('-3 days');
    if ($week == 3)
        $date = new DateTime('-2 days');
    if ($week == 2)
        $date = new DateTime('-1 days');
    if ($week == 1)
        $date = new DateTime('-0 days');
        
    $tempdate = $date->format('Y-m-d');

    $result = $conn->query("SELECT mood FROM `questionnaire` WHERE id_user = '$newid' AND data = '$tempdate' AND bef_or_aft='1'");
    if ($result->num_rows > 0)
    {
        while ($row2 = $result->fetch_assoc())
        {
            $mood = $row2["mood"];
        }
    }
    else
    {
        $mood = 0;
        ?>
    <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/no.png"></div>
    <?php
    }
    if ($mood == 1)
    {
        ?>
        <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/smile_1.png"></div>
        <?php
    }
    if ($mood == 2)
    {
        ?>
        <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/smile_2.png"></div>
        <?php
    }
    if ($mood == 3)
    {
        ?>
        <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/smile_3.png"></div>
        <?php
    }
    if ($mood == 4)
    {
        ?>
        <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/smile_4.png"></div>
        <?php
    }
    if ($mood == 5)
    {
        ?>
        <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/smile_5.png"></div>
        <?php
    }
    if ($mood == 6)
    {
        ?>
        <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/smile_6.png"></div>
        <?php
    }
    if ($mood == 7)
    {
        ?>
        <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/smile_7.png"></div>
        <?php
    }
}
else 
{
    ?>
    <div style="margin: 20px 0px"><img style="width: 30px; height: 30px;" src="assets/images/no.png"></div>
    <?php
}
$week--;
?>