function anonymForm(f) {
    if (f.anonym.checked) {
    	f.fullname.disabled = 1;
    	f.age.disabled = 1;
    	f.mail.disabled = 1;
        document.getElementById('loc1').disabled = 1;
        document.getElementById('loc2').disabled = 1;
        document.getElementById('gen1').disabled = 1;
        document.getElementById('gen2').disabled = 1;
    	document.getElementById('contacts').style.background = 'linear-gradient(to top, #e6e6e6, #fafafa)';
    }
    else {
    	f.fullname.disabled = 0;
    	f.age.disabled = 0;
    	f.mail.disabled = 0;
        document.getElementById('loc1').disabled = 0;
        document.getElementById('loc2').disabled = 0;
        document.getElementById('gen1').disabled = 0;
        document.getElementById('gen2').disabled = 0;
    	document.getElementById('contacts').style.background = '#D1F89D';
    }    
}

$(document).ready(function(){
    if (document.getElementById('anonym').checked == 1) {
        document.getElementById('fullname').disabled = 1;
        document.getElementById('age').disabled = 1;
        document.getElementById('mail').disabled = 1;
        document.getElementById('loc1').disabled = 1;
        document.getElementById('loc2').disabled = 1;
        document.getElementById('gen1').disabled = 1;
        document.getElementById('gen2').disabled = 1;
        document.getElementById('contacts').style.background = 'linear-gradient(to top, #e6e6e6, #fafafa)';
    }
    else {
        document.getElementById('fullname').disabled = 0;
        document.getElementById('age').disabled = 0;
        document.getElementById('mail').disabled = 0;
        document.getElementById('loc1').disabled = 0;
        document.getElementById('loc2').disabled = 0;
        document.getElementById('gen1').disabled = 0;
        document.getElementById('gen2').disabled = 0;
        document.getElementById('contacts').style.background = '#D1F89D';
    }
    $("#question").slideToggle("slow");
    $("#qv").click(function(){
        $("#question").slideToggle("slow");
        $(this).toggleClass("active");
    });
});