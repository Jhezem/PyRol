<?php
require_once(ABSPATH . "wp-admin/includes/upgrade.php");
require_once(ABSPATH . "/wp-content/themes/PyrolAgency/inc/admin-acf.php");
//Table creation

function tours_table_creation()
{
    global $wpdb;

    $requirement_table = $wpdb->prefix . "requirements";
    $hours_table = $wpdb->prefix . "hours";
    $prices = $wpdb->prefix . "prices";
    $charset = $wpdb->get_charset_collate();


    $requirement_t = "CREATE TABLE IF NOT EXISTS " . $requirement_table . "(
        ID MEDIUMINT NOT NULL AUTO_INCREMENT,
        Id_Requirement INT NOT NULL,
        Requirement_name VARCHAR(50),
        PRIMARY KEY (ID)
    )$charset;";
    dbDelta($requirement_t);

    $hours_t = "CREATE TABLE IF NOT EXISTS " . $hours_table . "(
        ID MEDIUMINT NOT NULL AUTO_INCREMENT,
        Id_Hour INT NOT NULL,
        time TIME,
        PRIMARY KEY (ID)
    )$charset;";
    dbDelta($hours_t);

    $Prices_t = "CREATE TABLE IF NOT EXISTS " . $prices . "(
        ID MEDIUMINT NOT NULL AUTO_INCREMENT,
        Id_Price INT NOT NULL,
        Price FLOAT,
        Pax INT,
        PRIMARY KEY (ID)
    )$charset;";
    dbDelta($Prices_t);
}

add_action("after_setup_theme", "tours_table_creation");

//Custom fields
function theme_register_acf()
{
    $screen = array("tour");
    add_meta_box(
        "tours_requirements",
        "Tour Requirements",
        "tour_requirements",
        $screen,
    );

    add_meta_box(
        "tours_price",
        "Tour Prices and Hours",
        "tour_price",
        $screen,
    );
}

function tour_requirements()
{

    requirement_acf();
}

function tour_price()
{

    price_acf();
}

add_action("admin_init", "theme_register_acf");

function check_if_exist($id, $db, $table){
    global $wpdb;
    $db = $wpdb->prefix.$db;

    
}

function save_tour_data($post_id)
{
    $tour_id = get_the_ID();
    $requirements = explode(",", $_POST['requirements']);
    $paxs = explode(",", $_POST["pax"]);
    $prices = explode(",", $_POST["price"]);
    $hours  = explode(",", $_POST["hour"]);

    global $wpdb;

    foreach ($requirements as $requirement):
        $wpdb->insert(
            $wpdb->prefix . "requirements",
            [
                "Id_Requirement" => $tour_id,
                "Requirement_name" => $requirement
            ]
        );
    endforeach;

    foreach ($prices as $price):
        $n = 0;
        $wpdb->insert(
            $wpdb->prefix . "prices",
            [
                "Id_Price" => $tour_id,
                "Price" => $price,
                "Pax" => $paxs[$n]
            ]
        );
        $n++;
    endforeach;

    foreach ($hours as $hour):
        $wpdb->insert(
            $wpdb->prefix . "hours",
            [
                "Id_Hour" => $tour_id,
                "time" => $hour
            ]
        );
    endforeach;

}

add_action("save_post", "save_tour_data");

function update_tour_data($post_id)
{
    //Tour details
    $tour_id = get_the_ID();
    $requirements = explode(",", $_POST['requirements']);
    $paxs = explode(",", $_POST["pax"]);
    $prices = explode(",", $_POST["price"]);
    $hours  = explode(",", $_POST["hour"]);

    //ID's of each columns, to update and delete
    $requirements_id = "";
    $paxs_id = "";
    $prices_id = "";
    $hours_id = "";

    global $wpdb;

    foreach ($requirements as $requirement):
        $wpdb->update(
            $wpdb->prefix . "requirements",
            [
                "Id_Requirement" => $tour_id,
                "Requirement_name" => $requirement
            ],
            [
                "Id_Requirement" => $tour_id,
                "ID" => $requirements_id
            ]
        );
    endforeach;

    foreach ($prices as $price):
        $n = 0;
        $wpdb->insert(
            $wpdb->prefix . "prices",
            [
                "Id_Price" => $tour_id,
                "Price" => $price,
                "Pax" => $paxs[$n]
            ]
        );
        $n++;
    endforeach;

    foreach ($hours as $hour):
        $wpdb->insert(
            $wpdb->prefix . "hours",
            [
                "Id_Hour" => $tour_id,
                "time" => $hour
            ]
        );
    endforeach;

}