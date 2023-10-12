// Sort

$(document).ready(function(){
    $('.brand .item ul li').click(function(){
        var selectedOption = $(this).data("option");

        var xmark = $("<a>");

        var xicon = $("<i>").addClass("fa-solid fa-circle-xmark");

        xmark.append(xicon);

        xicon.click(function(){
            $('#contentContainer').html(contentMap[selectedOption] ).hide();
        })

        var contentMap = {
            option1: "Funiki",
            option2: "AQUA",
            option3: "Casper",
            option4: "Electrolux",
            option5: "Toshiba",
            option6: "Samsung",
            option7: "Sharp",
            option8: "Hitachi",
            option9: "Panasonic",
            option10: "LG",
            option11: "Beko",
            option12: "Mitsubishi Electric",
            option13: "Bosch",
            option14: "Baumatic",
            option15: "Hisense",
            option16: "Coex",
            option17: "Darling"
        };
        
        $('#contentContainer').html(contentMap[selectedOption] ).append(xmark).show();    
    })
})

