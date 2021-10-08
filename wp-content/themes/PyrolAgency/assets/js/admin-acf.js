(function ($) {
    $(document).ready(function () {
        function handler_requirements() {
            let lista = $(".requirements ul");
            let lista_item = $("#lista_item");
            let btn = $("#submit");
            let lista_contenedor = $(".requirements");
            let listUl = $(".requirements ul");

            btn.click(function () {

                if (lista_item.val() != "") {
                    lista_contenedor.css("display", "block");
                    lista.append("<li contenteditable='true' class='requirement_list'>" + lista_item.val() + "<span class='dashicons dashicons-trash delete'></span></li>");
                    lista_item.val("");
                }
            });

            $(document).on("click", ".delete", function (event) {
                if (listUl.children().length > 1) {
                    $(this).parent().remove();
                } else if (listUl.children().length <= 1) {
                    $(this).parent().remove();
                    lista_contenedor.css("display", "none");
                }
            });
        }

        function handler_price() {
            let lista = $(".prices table");
            let n_pax = $("#pax_item");
            let n_price = $("#price_item");
            let btn = $("#add_price");
            let lista_contenedor = $(".prices");
            let listUl = $(".prices table tbody");

            btn.click(function () {
                if (n_pax.val() != "" && n_price.val() != "") {
                    lista_contenedor.css("display", "block");
                    lista.append("<tr><td contenteditable='true' class='pax_list'>" + n_pax.val() + " <span> PAX </td><td contenteditable='true' class='price_list'>" + n_price.val() + " USD </td><td><span class='dashicons dashicons-trash delete-price'></span></td></tr>");
                    n_pax.val("");
                    n_price.val("");
                }

            });

            $(document).on("click", ".delete-price", function () {
                if (listUl.children().length > 1) {
                    this.closest("tr").remove();
                } else if (listUl.children().length <= 1) {
                    this.closest("tr").remove();
                    lista_contenedor.css("display", "none");
                }
            });
        }

        function handler_hour() {
            let lista = $(".hours table");
            let hour = $("#hour_item");
            let btn = $("#add_hour");
            let lista_contenedor = $(".hours");
            let listUl = $(".hours table");

            btn.click(function () {
                if (hour.val() != "") {
                    lista_contenedor.css("display", "block");
                    lista.append("<tr><td contenteditable='true' class='hour_list'>" + hour.val() + "</td><td><span class='dashicons dashicons-trash delete-hour'></span></td></tr>");
                    hour.val("");
                }

            });

            $(document).on("click", ".delete-hour", function () {
                if (listUl.children().length > 1) {
                    this.closest("tr").remove();
                } else if (listUl.children().length <= 1) {
                    this.closest("tr").remove();
                    lista_contenedor.css("display", "none");
                }
            });
        }


        $(document).on("submit", function (){
            //inputs to save on the data base
            let hidde_requirements = $("#save_requirements");
            let hidde_paxs = $("#save_paxs");
            let hidde_prices = $("#save_prices");
            let hidde_hours = $("#save_hours");

            //ID'S

            let hidde_requirements_ID = $("#save_requirements_ID");
            let hidde_prices_ID = $("#save_prices_ID");
            let hidde_hours_ID = $("#save_hours_ID");

            //Create arrays to send values via post
            
            let array_requirements = new Array();
            let array_paxs = new Array();
            let array_prices = new Array();
            let array_hours = new Array();

            let array_requirements_ID = new Array();
            let array_prices_ID = new Array();
            let array_hours_ID = new Array();

            //HTML collections
            let list_requirements = $(".requirement_list");
            let list_paxs = $(".pax_list");
            let list_prices = $(".price_list");
            let list_hours = $(".hour_list");

            let list_requirements_ID = $(".requirement_ID");
            let list_prices_ID = $(".price_ID");
            let list_hours_ID = $(".hour_ID");

            //iterate collections and push to arrays
            list_requirements.each(function (){
                array_requirements.push($(this).text());
            });

            list_paxs.each(function (){
                array_paxs.push($(this).text());
            });

            list_prices.each(function (){
                array_prices.push($(this).text());
            });

            list_hours.each(function (){
                array_hours.push($(this).text());
            });

            /////////////////////////////

            list_requirements_ID.each(function (){
                array_requirements.push($(this).text());
            });

            list_prices_ID.each(function (){
                array_prices.push($(this).text());
            });

            list_hours_ID.each(function (){
                array_hours.push($(this).text());
            });

            //save array values on input hiddens
        
            hidde_requirements.val(array_requirements);
            hidde_paxs.val(array_paxs);
            hidde_prices.val(array_prices);
            hidde_hours.val(array_hours);

            hidde_requirements_ID.val(array_requirements_ID);
            hidde_prices_ID.val(array_prices_ID);
            hidde_hours_ID.val(array_hours_ID);
        });

        handler_requirements();
        handler_price();
        handler_hour();

    });
})(jQuery);