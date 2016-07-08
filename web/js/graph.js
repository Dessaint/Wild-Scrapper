var data = [
   {
    value: 48623,
    color: "#f1c40f",
    label: "Javascript"
}, {
    value: 11268,
    color: "#27ae60",
    label: "Php"
}, {
    value: 6390,
    color: "#e74c3c",
    label: "Ruby"
}];

var options = {
    segmentShowStroke: true,
    animateRotate: true,
    animateScale: false,
    percentageInnerCutout: 50,
    tooltipTemplate: "<%= value %> Membres"
}

var ctx = document.getElementById("myChart").getContext("2d");

var myChart = new Chart(ctx).Doughnut(data, options);

// Note - tooltipTemplate is for the string that shows in the tooltip

// legendTemplate is if you want to generate an HTML legend for the chart and use somewhere else on the page

// e.g:

document.getElementById('js-legend').innerHTML = myChart.generateLegend();
