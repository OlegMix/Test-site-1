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
    	document.getElementById('contacts').style.background = '#e0ffff';
    }
}