$(function (){

    const token = $('meta[name="csrf-token"]').attr("content");

    const ajaxhivas = new Ajax(token);
    ajaxhivas.selectAjax("/szakdogaGet", tablaMegjelenit);

    $("#uj_gomb").on("click", () =>{
        const adat = {
            szakdoga_nev: $("#szakdoga_nev").val(),
            tagokneve: $("#keszitokneve").val(),
            oldallink: $("#oldalcim").val(),
            githublink: $("#gitlink").val()
        }
        console.log(adat);
        ajaxhivas.insertAjax("/szakdogaUj", adat);

    });

    function tablaMegjelenit(adat){
        let kiir = "";
        kiir += "<tr>";
        kiir += "<th>Szakdolgozate címe</th>";
        kiir += "<th>Készítők neve</th>";
        kiir += "<th>Github link</th>";
        kiir += "<th>Szakdolgozat elérhetősége</th>";
        kiir += "<th></th>";
        kiir += "</tr>";

        adat.forEach((element) =>{
            console.log(element);
            kiir += "<tr>";
            kiir += "<td>"+element.szakdoga_nev+"</td>";
            kiir += "<td>"+element.tagokneve+"</td>";
            kiir += "<td>"+element.githublink+"</td>";
            kiir += "<td>"+element.oldallink+"</td>";
            kiir += "<td><button class='modosit' id="+element.id+">M</button><button class='töröl' id="+element.id+">X</button></td>"
            kiir += "</tr>";
        })
        $(".tablazat").html(kiir)

        $("#töröl").on("click", (event) =>{
            console.log("asd");
            
    
        });
    }
    
})

