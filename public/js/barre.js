
function OnSelectionChangeBarre()
    {
        var e = document.getElementById("country");
        var strUser = e.value;
        //alert("/country/"+strUser);
        window.location.replace("/country/"+strUser);
    }