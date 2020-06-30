function actionOnEntityAjax(actionUrl, dataObject, successAction, failAction, csrfToken, httpVerb = 'GET') {

    $.ajax({
        url: actionUrl,
        headers: { "X-CSRF-TOKEN": csrfToken },
        type: httpVerb,
        data: dataObject,
        //	  dataType: "json",
        success: function (data) {
            if (successAction != null)
                successAction(data);

            $('[data-toggle="tooltip"]').tooltip();
        },
        error: function () {
            if (failAction != null)
                failAction();
            console.error("Ajax call failed ! بالصحة ");
        }
    });
}

function basculerActivationChamps(idConteneur, etat = true) {
    $('#' + idConteneur).find('input, textarea, select').each((idx, champs) => {
        $(champs).prop('disabled', etat);
    });
}

function fetchPageOf(taillePage, route, pageInitiale, differe, idConteneur) {
    let routeUrl = route + `${pageInitiale == 1 ? '?page=1' : ''}` + `&size=${taillePage}`;
    if (differe)
        routeUrl = route + `?page=${pageInitiale}&size=${taillePage}`;

    fetch(routeUrl)
        .then(resp => resp.text())
        .then(html => {
            document.querySelector("#" + idConteneur /*"#div-page-contrats"*/).innerHTML = html;
        })
        .then(() => {
            $('[data-toggle="tooltip"]').tooltip();
            // $('[data-toggle="tooltip"]').tooltip();
        });
}

//-====Sweet alert 2====================================================================================>
function getOkSweetalarm(titleMsg, btnText, confirmMsg) {
    Swal.fire({
        icon: 'success',
        title: titleMsg,// 'تم انشاء حساب المستعمل بنجاح',
        text: confirmMsg,
        confirmButtonText: btnText, // 'استمرار',
    })
}
function getErrSweetalarm(msgTitle, btnText, msg) {
    Swal.fire({
        icon: 'error',
        title: msgTitle,// 'تم انشاء حساب المستعمل بنجاح',
        text: msg,
        // showConfirmButton: false,
        confirmButtonText: btnText,
        confirmButtonColor: '#f27474',
        timerProgressBar: true,
    })
}
function getConfirmSweetalarm(msgTitle, msg, okBtnText, okBtnColorClass, confirmationAction, promptType = 'question', cancelBtnHtml = '<i class="fa fa-times"></i> Annuler') {
    Swal.fire({
        customClass: {
            confirmButton: 'btn btn-' + okBtnColorClass,
            cancelButton: 'btn btn-default'
        },
        // buttonsStyling: false,
        title: msgTitle,
        text: msg,
        icon: promptType,
        showCancelButton: true,
        confirmButtonText: okBtnText,
        cancelButtonText: cancelBtnHtml,//'<i class="fa fa-times"></i> Annuler',
        // reverseButtons: true
    }).then((result) => {
        if (result.value)
            confirmationAction();
    })
}

function getInputSweetalarm(msgTitle, actionBtnInnerHtml, actionBtnColorClass, inputHtml = "<textarea></textarea>", validationAction, actionToPerform) {
    Swal.fire({
        title: `${msgTitle}`,
        // input: `${inputType}`,
        // inputAttributes: {
        //     autocapitalize: 'off'
        // },
        html: inputHtml,
        // inputValidator: validationAction,
        // anonymous function with input value as param  and that returns new Promise with an anonymous function that takes a resolver as param, anyway, go to sweetalert2 website 
        confirmButtonText: `${actionBtnInnerHtml}`,
        buttonsStyling: true,
        showCancelButton: true,
        cancelButtonText: `<i class="fa fa-times"></i> ${'Annuler'}`,
        showLoaderOnConfirm: true,
        preConfirm: validationAction,//(date, montant),
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        actionToPerform(result);
    });
}

//========================= Charting and me ======================================
function initPieChart(idCanva, data, labels, colors) {
    // if()
    let config = {
        type: 'pie',

        data: {
            datasets: [{
                data: data,
                backgroundColor: colors
                // '#dd4b39',//'#c1502e',//"#b64645" //Rouge 
                //'#f2e394',//"#95b75d", // Jaune
                //'#96ceb4',//"#3fbae4", // Vert
                //'#969594'
                ,
                label: '',
                borderColor: '#888888',
                borderWidth: 1
            }],
            labels: labels
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            pieceLabel: {
                mode: 'percentage',
                precision: 2,
                fontSize: 16,
                fontStyle: 'bold',
                position: 'outside',
                fontColor: '#000'
            }
        }
    };

    let ctx = document.getElementById(idCanva).getContext("2d");

    window.myPie = new Chart(ctx, config);
}

function initBarsChart(idCanva, datasets, labels, xAxis) {
    //Data sets example :

    // datasets = [
    //     {
    //         data: tranchesAgeM.reverse(),
    //         backgroundColor: '#538db5',
    //         label: 'ذكور',
    //         borderColor: '#2b4659',
    //         borderWidth: 1,
    //         // label: 'الولادات حسب الفئة العمرية للأم',
    //     },
    //     {
    //         data: tranchesAgeF.reverse(),
    //         backgroundColor: '#af6978',
    //         label: 'إناث',
    //         borderColor: '#591826',
    //         borderWidth: 1,
    //     }
    // ];

    //config.options.scales.yAxes.userCallback
    let config = {
        type: 'bar',
        data: {
            datasets: datasets,
            labels: labels
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            barPercentage: 0.5,
            legend: {
                labels: {
                    fontSize: 14
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fixedStepSize: 1,
                        // userCallback: function (label, index, labels) {
                        //     // when the floored value is the same as the value we have a whole number
                        //     if (Math.floor(label) === label) {
                        //         return label;
                        //     }

                        // },
                        fontSize: 13
                    }
                }],
                xAxes: xAxis
            }
        },


    };

    let ctx = document.getElementById(idCanva).getContext("2d");

    window.myPie = new Chart(ctx, config);
}


function tableauMois(langue) {
    let fr = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    let ar = ['يناير', 'فبراير', 'مارس', 'أبريل', 'ماي', 'يونيو', 'يوليوز', 'غشت', 'شتنبر', 'أكتوبر', 'نونبر', 'دجنبر'];

    if (langue === 'fr')
        return fr;

    return ar;
}
