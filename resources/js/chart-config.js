// resources/js/chart-config.js

$(document).ready(function () {
    $.getJSON('/chart-labels', function (labels) {
        let salesPurchasesBar = $('#salesPurchasesChart')[0];
        $.get('/sales-purchases/chart-data', function (response) {
            new Chart(salesPurchasesBar, {
                type: 'bar',
                data: {
                    labels: response.sales.original.days,
                    datasets: [{
                        label: labels.sales,
                        data: response.sales.original.data,
                        backgroundColor: '#6366F1',
                        borderColor: '#6366F1',
                        borderWidth: 1
                    },
                    {
                        label: labels.purchases,
                        data: response.purchases.original.data,
                        backgroundColor: '#A5B4FC',
                        borderColor: '#A5B4FC',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

        let overviewChart = $('#currentMonthChart')[0];
        $.get('/current-month/chart-data', function (response) {
            new Chart(overviewChart, {
                type: 'doughnut',
                data: {
                    labels: [labels.sales, labels.purchases, labels.expenses],
                    datasets: [{
                        data: [response.sales, response.purchases, response.expenses],
                        backgroundColor: ['#F59E0B', '#0284C7', '#EF4444'],
                        hoverBackgroundColor: ['#F59E0B', '#0284C7', '#EF4444'],
                    }]
                }
            });
        });

        let paymentChart = $('#paymentChart')[0];
        $.get('/payment-flow/chart-data', function (response) {
            new Chart(paymentChart, {
                type: 'line',
                data: {
                    labels: response.months,
                    datasets: [
                        {
                            label: labels.payment_sent,
                            data: response.payment_sent,
                            fill: false,
                            borderColor: '#EA580C',
                            tension: 0
                        },
                        {
                            label: labels.payment_received,
                            data: response.payment_received,
                            fill: false,
                            borderColor: '#2563EB',
                            tension: 0
                        }
                    ]
                }
            });
        });
    });
});
