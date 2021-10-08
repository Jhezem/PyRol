<?php

function requirement_acf()
{
?>

    <div class="add_requirement">
        <input type="text" id="lista_item" placeholder="For example: Bottle of water">
        <input type="button" id="submit" value="Add">

        <div class="requirements">
            <ul>
                <?php
                $id = get_the_ID();
                global $wpdb; 
                $db = $wpdb->prefix. "requirements";
                $query = $wpdb->get_results("SELECT * FROM $db WHERE Id_Requirement=$id");
                if(!empty($query)):
                    foreach($query as $row):
                        echo "<li style='display:none;' class='requirement_ID'>".$row->ID."</li><li contenteditable='true' class='requirement_list'>".$row->Requirement_name."<span class='dashicons dashicons-trash delete'></span></li>";
                    endforeach;
                endif;       
                ?>
            </ul>
        </div>
    </div>

<?php
}

?>


<?php

function price_acf()
{

?>
    <div class="container_price_hour">
        <div class="price_container">
            <div class="add_price">
                <h2 style="text-align: center;">Prices per Pax</h2>
                <input type="text" id="pax_item" placeholder="Number of pax">
                <input type="text" id="price_item" placeholder="Price">
                <input type="button" id="add_price" value="Add">

                <div class="prices">
                    <table class="prices_table">
                        <tbody>
                            <?php
                            $id = get_the_ID();
                            global $wpdb;
                            $db = $wpdb->prefix . "prices";
                            $query = $wpdb->get_results("SELECT * FROM $db WHERE Id_Price=$id");
                            if (!empty($query)) :
                                foreach ($query as $row) :
                                    echo "<tr><td style='display:none;' class='price_ID'>".$row->ID."</td><td contenteditable='true' class='pax_list'>" . $row->Pax . "<span> PAX </td><td contenteditable='true' class='price_list'>" . $row->Price . " USD </td><td><span class='dashicons dashicons-trash delete-price'></span></td></tr>";
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="hour_container">
            <h2 style="text-align: center;">Add Hours</h2>
            <div class="add_hour">
                <input type="time" name="hour_item" id="hour_item" placeholder="07:00 AM">
                <input type="button" id="add_hour" value="Add">
            </div>

            <div class="hours">
                <table class="hour_table">
                    <tbody>
                        <?php
                        $id = get_the_ID();
                        global $wpdb;
                        $db = $wpdb->prefix. "hours";
                        $query = $wpdb->get_results("SELECT * FROM $db WHERE Id_Hour=$id");
                        if(!empty($query)):
                            foreach($query as $row):
                                echo "<tr><td style='display:none;' class='hour_ID'>".$row->ID."</td><td contenteditable='true' class='hour_list'>".$row->time."</td><td><span class='dashicons dashicons-trash delete-hour'></span></td></tr>";
                            endforeach;
                        endif;                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <input type="hidden" name="requirements" id="save_requirements">
        <input type="hidden" name="pax" id="save_paxs">
        <input type="hidden" name="price" id="save_prices">
        <input type="hidden" name="hour" id="save_hours">

        <input type="hidden" name="requirements_ID" id="save_requirements_ID">
        <input type="hidden" name="price_ID" id="save_prices_ID">
        <input type="hidden" name="hour_ID" id="save_hours_ID">

    </div>
<?php
}

?>