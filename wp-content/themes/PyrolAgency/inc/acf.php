<?php
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//Table creation

function tours_table_creation()
{
    global $wpdb;

    $requirement_table = $wpdb->prefix . "requirements";
    $hours_table = $wpdb->prefix . "hours";
    $prices = $wpdb->prefix . "prices";
    $charset = $wpdb->get_charset_collate();


    $requirement_t = "CREATE TABLE IF NOT EXISTS " . $requirement_table . "(
        Id_Requirement INT NOT NULL,
        Requirement_name VARCHAR(50),
        PRIMARY KEY (Id_Requirement)
    )$charset;";
    dbDelta($requirement_t);

    $hours_t = "CREATE TABLE IF NOT EXISTS " . $hours_table . "(
        Id_Hour INT NOT NULL,
        time TIME,
        PRIMARY KEY (Id_Hour)
    )$charset;";
    dbDelta($hours_t);

    $Prices_t = "CREATE TABLE IF NOT EXISTS " . $prices . "(
        Id_Price INT NOT NULL,
        Price FLOAT,
        Pax INT,
        PRIMARY KEY (Id_Price)
    )$charset;";
    dbDelta($Prices_t);
}

add_action("after_setup_theme", "tours_table_creation");

//Custom fields
function theme_register_acf()
{
    $screen = array("tour");
    add_meta_box(
        "tours_acf",
        "Tour Details",
        "tours_cf",
        $screen,
    );
}

function tours_cf()
{
?>

    <style type="text/css">
        span.fa.fa-times-circle {
            padding: 5px 10px;
        }
    </style>

    <div class="tour_details">
        <h1>Tour Details</h1>

        <div class="tour_requirements">
            <div class="add_requirement">
                <input type="text" name="requirement" id="lista_item">
                <input type="button" id="submit" value="submit">
            </div>
            <div class="requirements">
                <ul></ul>
            </div>
        </div>
    </div>

    <script>
        (function($) {
            $(document).ready(function() {
                let lista = $(".requirements ul");
                let lista_item = $("#lista_item");
                let btn = $("#submit");

                btn.click(function() {
                    lista.append("<li contenteditable='true'>" + lista_item.val() + "<span class='fa fa-times-circle'></span></li>");
                });

                $(document).on("click", ".requirements ul li", function(event) {
                    let text = event.target.innerText;
                    let that = this;
                    if (text.length == 0) {
                        that.remove();
                    }
                });
            });
        })(jQuery);
    </script>

<?php
}

add_action("admin_init", "theme_register_acf");
