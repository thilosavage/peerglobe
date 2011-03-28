<DIV class=carpe_slider_group>
                <DIV class=carpe_horizontal_slider_display_combo>
                  <DIV class=carpe_slider_display_holder>
                    <!-- Default value: 0 -->
                    <input name="Input" class=carpe_slider_display id="display1" value="<?=$row['slider_val']?>" />
                  </DIV>
                  <DIV class=carpe_horizontal_slider_track>
                    <DIV class=carpe_slider_slit></DIV>
                    <DIV class=carpe_slider id=slider1 display="display1" style="left:<?=$row['slider_val']?>px"></DIV>
                  </DIV>
                </DIV>
                <DIV class=carpe_horizontal_slider_display_combo></DIV>
                <DIV class=carpe_horizontal_slider_display_combo></DIV>
                <DIV class=carpe_horizontal_slider_display_combo></DIV>
              </DIV>

<?php

echo "<table><tr><td>";

echo "<div>What level? <input size='8' id='tag-global-exp'></div>";

echo "<div>How much exp? <input size='8' id='tag-global-exp'></div>";

echo "What skills does it improve?<br>";

//echo "<textarea cols='35' id='task-tags'></textarea>";
echo "<input type='text' id='task-tags'>";

echo "<div id='task-tag-bin' style='position: relative;'>";

echo "</div>";

echo "<br>";

echo "What is the mission?<br>";
echo "<textarea cols='35' id='task-desc'></textarea>";

echo "<br>";

echo "Extra instructions? Optional.<br>";
echo "<textarea cols='35' id='task-instructions'></textarea>";

echo "<br>";

echo "Upload an image? Optional.<br><input type='file'>";

echo "<div style='text-align: center;'><input type='submit' class='taskEditSave'></div>";


echo "</td><td>";
echo "<h5>Record a demonstration? Optional.</h5>";
echo vid::render("mode=record&key=784552182c");

echo "</td></tr></table>";

echo "<input type='hidden' name='task_id' value='".$task_id."'>";


?>