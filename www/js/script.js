window.onload = function(){
    fillYearSelect();
    fillMonthSelect();
    fillDaySelect();
}

// Remplit le select "Année" par des Année allant de Auj-106 à Auj-6
function fillYearSelect(){
    var yearSelect = document.getElementById('year');
    var to = new Date().getFullYear() - 6;
    var from = to - 100;

    for(i = to; i >= from; --i){
        let opt = document.createElement('option');
        opt.label = i;
        opt.value = i;
        yearSelect.add(opt);
    }
}

// Remplit le select "Mois" par les 12 mois de l'année
function fillMonthSelect(){
    var monthSelect = document.getElementById('month');
    var month = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet'
                ,'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    for(i = 0; i < month.length; ++i){
        let opt = document.createElement('option');
        opt.label = month[i];
        opt.value = i+1; // Janvier = 1 et pas 0
        monthSelect.add(opt);
    }

    monthSelect.onchange = function(){fillDaySelect(this.value)};
}

// Remplit le select "Jour" le nombre de jour contenue dans le mois
function fillDaySelect(mois){
    var nbJour;
    var mois31 = [1, 3, 5, 7, 8, 10, 12];
    var mois30 = [4, 6, 9, 11];

    if(mois == undefined) nbJour = 31;
    if(mois31.includes(mois))
        nbJour = 31;
    else if(mois30.includes(mois))
        nbJour = 31;
    else if(mois == 2)
        nbJour = 28;
    else
        nbJour = 31;

    var daySelect = document.getElementById('day');
    daySelect.innerHTML = "";

    let title = document.createElement('option');
    title.label = "Jour";
    title.value = -1;
    title.disable = true;
    daySelect.add(title);
    
    for(i = 1; i <= nbJour; ++i){
        let opt = document.createElement('option');
        opt.label = i;
        opt.value = i;
        daySelect.add(opt);
    }

}
