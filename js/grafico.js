$(function () {

    /*
    * http://www.highcharts.com/demo
    */
    
    /* Oculto la tabla */
    $("#tabla").hide();

    $('#container').highcharts({
        data: {
            table: 'tabla' // id de la tabla
        },
        chart: {
            // type: 'column'
            type: 'pie' 
        },
        title: {
            text: 'Datos'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Cantidad'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });

});

