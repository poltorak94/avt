$(document).ready(function () {
    $('.chip__chart-changes-item').each(function () {
        let defaultValue = parseFloat($(this).attr('data-default'));
        let addedValue = parseFloat($(this).attr('data-added'));
        let difference = (addedValue * 100) / defaultValue;
        let title = $(this).find('.chip__chart-changes-item-schedule-after');
        if (difference > 20) {
            title.css('width', difference + '%');
        };
    });
    $('.chip__chart-canvas').each(function () {
        var chartElement = this;
        var chart = chartElement.getContext('2d');
        var labels = $(this).attr('data-x-values');
        labels = JSON.parse(labels);
        var power = $(this).attr('data-power');
        power = JSON.parse(power);
        var addPower = $(this).attr('data-add-power');
        addPower = JSON.parse(addPower);
        var torque = $(this).attr('data-torque');
        torque = JSON.parse(torque);
        var addTorque = $(this).attr('data-add-torque');
        addTorque = JSON.parse(addTorque);
        var powerLabel = $(this).attr('data-power-label');
        var addPowerLabel = $(this).attr('data-add-power-label');
        var torqueLabel = $(this).attr('data-torque-label');
        var addTorqueLabel = $(this).attr('data-add-torque-label');
        var xLabel = $(this).attr('data-x-label');
        var yLabel = $(this).attr('data-y-label');
        var y1Label = $(this).attr('data-y1-label');
        const data = {
            labels: labels,
            datasets: [{
                label: powerLabel,
                data: power,
                pointBackgroundColor: 'white',
                borderColor: '#B86233',
                borderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 5,
                backgroundColor: "#ffffff",
                yAxisID: 'y',
            },
            {
                label: addPowerLabel,
                data: addPower,
                pointBackgroundColor: 'white',
                borderColor: '#B86233',
                borderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 5,
                borderDash: [5, 5],
                backgroundColor: "#ffffff",
                yAxisID: 'y',
            },
            {
                label: torqueLabel,
                data: torque,
                pointBackgroundColor: 'white',
                borderColor: '#2373B0',
                borderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 5,
                backgroundColor: "#ffffff",
                yAxisID: 'y1',
            },
            {
                label: addTorqueLabel,
                data: addTorque,
                pointBackgroundColor: 'white',
                borderColor: '#2373B0',
                borderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 5,
                borderDash: [5, 5],
                backgroundColor: "#ffffff",
                yAxisID: 'y1',
            }]
        };
        var myChart = new Chart(chart, {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'point',
                    intersect: false,
                },
                stacked: false,
                plugins: {
                    title: {
                        display: false,
                        text: 'Текст для заголовока (сейчас отключен)'
                    },
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 30,
                            boxHeight: 2,
                            font: {
                                size: 12,
                            }
                        },
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: xLabel,
                            color: '#1a1a1a',
                            font: {
                                size: 12,
                                family: "'Gotham Pro'",
                                weight: '700'
                            }
                        }
                    },
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        title: {
                            display: true,
                            text: yLabel,
                            color: '#1a1a1a',
                            font: {
                                size: 12,
                                family: "'Gotham Pro'",
                                weight: '700'
                            }
                        }
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        title: {
                            display: true,
                            text: y1Label,
                            color: '#1a1a1a',
                            font: {
                                size: 12,
                                family: "'Gotham Pro'",
                                weight: '700'
                            }
                        }
                    },
                }
            },
        });
    });
});