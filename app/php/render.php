<?php
// Include the config.php file
include_once "config.php";

//Get all zoneid, zone from the table Zone and store it in $categories
$categories = array();
$sql = "SELECT zoneid, kleur, zone FROM Zone";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        $categories[$row["zoneid"]] = [$row["zone"], $row["kleur"]];
    }
}

function renderButtons() {
    global $categories;
    foreach ($categories as $key => $value) {
        // Make sure the id of the button is always 2 digits
        $id = str_pad($key, 2, "0", STR_PAD_LEFT);
        // Color is HEX, remove the # from the string
        $kleur = ltrim($value[1], '#');
        // Store the name of the zone in a variable
        $zone = $value[0];
        //Every 3 buttons we should have a div with class="row"
        if ($key % 3 == 1) {
           ?>
            </div>
            <div class="row justify-content-center align-items-center">
            <?php
        }
        ?>
            <div class="col-3 button border m-3 bg-white" id="button-<?php echo $id."-".$kleur; ?>">
                
                    <div class="row align-items-center justify-content-center floating-content">
                        <div class="col-2 offset-1 offset-1">
                            <h2><?php echo $key;?></h2>
                        </div>
                        <div class="col-6 text-center">
                            <p><?php echo $zone;?></p>
                        </div>
                    </div>
                    <div class="floating-color"></div>
            </div>

        <?php
        
    }
}