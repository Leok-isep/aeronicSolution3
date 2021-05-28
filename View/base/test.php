<!DOCTYPE html>
<html>
<head>
    <title>Graphique tests</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
    <link rel="stylesheet" href="../View/assets/test.css">

    <meta charset="utf-8" />

</head>
<body>


<div class="container">
    <div class="text_container">
        <h1>Résulat de tests</h1>
    <H2>  voici les résultats du test du  <?=date("d-m-Y",strtotime($monTest['date']))?> - du patient <?=$monPilote['firstName']?>  <?=$monPilote['name']?> - référence du test : <?=$monTest['id']?></H2>
    </div>
    <div class="test_container">
        <div class="ligne1_container" id="ligne1_container" >
            <div class="petit_test_container test1">
                <div class="text_test_container">
                    <h3>Température corporelle</h3>
                </div>
                <div class="doug_canva_container n1">
                    <canvas id="myChart1"></canvas>
                    <h1 name="temperatureValue" id="temperatureValue" ><?=$monTest['temperature']?></h1>
                </div>
            </div>
            <div class="petit_test_container test2">
                <div class="text_test_container">
                    <h3>Réflexe (/5)</h3>
                </div>
                <div class="doug_canva_container n2">
                    <canvas id="myChart2"></canvas>
                <h1 name="reflexeValue" id="reflexeValue" ><?=$monTest['reflex']?></h1>
                </div>
            </div>
            <div class="petit_test_container test3">
                <div class="text_test_container">
                    <h3>Reconnaissance de tonalité (/5)</h3>
                </div>
                <div class="doug_canva_container n3">
                    <canvas id="myChart3"></canvas>
                    <h1 name="toneValue" id="toneValue" ><?=$monTest['tone']?></h1>
                </div>
            </div>
        </div>
        <div class="ligne2_container">
            <div class="grand_test_container">
              <div class="text_test_container">
                  <h3>Fréquence cardiaque</h3>
              </div>
              <div class="line_chart_container">  
                <canvas id="line-chart"></canvas>
              </div>  
              </div>
            
        </div>
    </div>
    <div class="autre_block"></div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

<script>
new Chart(document.getElementById("myChart1"), {
    type: 'doughnut',
    data: {
      datasets: [
        {
          backgroundColor: ["#54a0ff","#F2F5F9"],
          data: [document.getElementById("temperatureValue").innerHTML,50-document.getElementById("temperatureValue").innerHTML],
          // hoverBackgroundColor:["#4B93E5","#D8D8D8"],
          // hoverBorderColor:["WHITE","#D8D8D8"]
        }
      ]
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
    display: false,
    },
    animation: {
      easing: "easeInOutBack"
    },
    scales: {
        xAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }],
        yAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }]
    }
  }
});

</script>


<script>
new Chart(document.getElementById("myChart2"), {
    type: 'doughnut',
    data: {
      datasets: [
        {
          backgroundColor: ["#54a0ff","#F2F5F9"],
            data: [document.getElementById("reflexeValue").innerHTML,5-document.getElementById("reflexeValue").innerHTML],

            // hoverBackgroundColor:["#4B93E5","#D8D8D8"],
          // hoverBorderColor:["WHITE","#D8D8D8"]
        }
      ]
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
    display: false,
    },
    animation: {
      easing: "easeInOutBack"
    },
    scales: {
        xAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }],
        yAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }]
    }
  }
});

</script>
<script>
new Chart(document.getElementById("myChart3"), {
    type: 'doughnut',
    data: {
      datasets: [
        {
          backgroundColor: ["#54a0ff","#F2F5F9"],
            data: [document.getElementById("toneValue").innerHTML,5-document.getElementById("toneValue").innerHTML],
// hoverBackgroundColor:["#4B93E5","#D8D8D8"],
          // hoverBorderColor:["WHITE","#D8D8D8"]
        }
      ]
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
    display: false,
    },
    animation: {
      easing: "easeInOutBack"
    },
    scales: {
        xAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }],
        yAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }]
    }
  }
});

</script>

<script>

new Chart(document.getElementById("line-chart"), {
	type: 'line',
	options: {},
	data: {
	labels: ["January", 
"February", "March", "April", "May", "June",
"July"],
	datasets: [{
	backgroundColor:'rgba(84,160,255,0.16)',
	borderColor: 
'#54a0ff',
	data: [0, 1, 5,
	2, 20, 30, 45],
		}]
	}
});
</script>
 



</body>
</html>