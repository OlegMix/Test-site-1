function anonymForm(f) {
    if (f.anonym.checked) {
    	f.fullname.disabled = 1;
    	f.age.disabled = 1;
    	f.mail.disabled = 1;
        f.locations.disabled = 1;
    	document.getElementById('contacts').style.background = 'linear-gradient(to top, #e6e6e6, #fafafa)';
        document.getElementById('loc1').disabled = 1;
        document.getElementById('loc2').disabled = 1;
    }
    else {
    	f.fullname.disabled = 0;
    	f.age.disabled = 0;
    	f.mail.disabled = 0;
        document.getElementById('loc1').disabled = 0;
        document.getElementById('loc2').disabled = 0;
    	document.getElementById('contacts').style.background = '#D1F89D';
    }    
}

$(document).ready(function(){
    $("#question").slideToggle("slow");
    $("#qv").click(function(){
        $("#question").slideToggle("slow");
        $(this).toggleClass("active");
    });
});