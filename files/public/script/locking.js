function anonymForm(f) {
    if (f.anonym.checked) {
    	f.name.disabled = 1;
    	f.family.disabled = 1;
    	f.lastname.disabled = 1;
    	f.mail.disabled = 1;
    	document.getElementById('contacts').style.background = 'linear-gradient(to top, #e6e6e6, #fafafa)';
    }
    else {
    	f.name.disabled = 0;
    	f.family.disabled = 0;
    	f.lastname.disabled = 0;
    	f.mail.disabled = 0;
    	document.getElementById('contacts').style.background = '#D1F89D';
    }
}

$(document).ready(function(){
    if (document.getElementById('anonym').checked == 1) {
        document.getElementById('name').disabled = 1;
        document.getElementById('family').disabled = 1;
        document.getElementById('lastname').disabled = 1;
        document.getElementById('mail').disabled = 1;
        document.getElementById('contacts').style.background = 'linear-gradient(to top, #e6e6e6, #fafafa)';
    }
    else {
        document.getElementById('name').disabled = 0;
        document.getElementById('family').disabled = 0;
        document.getElementById('lastname').disabled = 0;
        document.getElementById('mail').disabled = 0;
        document.getElementById('contacts').style.background = '#D1F89D';
    }
});