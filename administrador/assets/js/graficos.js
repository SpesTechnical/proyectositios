$(document).ready(function () {

    /*
    * Grafico Ancho de Banda
    */
    let xValoresGA = [05, 10, 15, 20, 25, 30];
    let yValoresGA = [20, 50, 60, 80, 60, 40];

    new Chart("graficoAnchoBanda", {
        type: "line",
        data: {
            labels: xValoresGA,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValoresGA
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false
                    }
                }],
                xAxes: [{
                    //display: false,
                }]
            }
        }
    });

    /** 
     * Grafico Reportes
    */
    let xValoresGR = ["Ene", "Feb", "Mar", "Abr", "May", "Jun"];

    new Chart("graficoReportes", {
        type: "line",
        data: {
            labels: xValoresGR,
            datasets: [{
                data: [30, 70, 80, 120, 100, 150, 170],
                borderColor: "#0185B9",
                fill: false
            },
            {
                data: [20, 80, 60, 100, 130, 60, 190],
                borderColor: "#8303C0",
                fill: false
            }]
        },
        options: {
            legend: {
                display: false
            }
        }, 
        scales: {
            yAxes: [{
                gridLines: {
                    //display: false
                }
            }],
            xAxes: [{
                //display: false,
            }]
        }
    });
});