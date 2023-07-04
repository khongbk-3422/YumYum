<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spin Wheel App</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        height: 100vh;
        background: linear-gradient(135deg, #c3a3f1, #6414e9);
      }
      .wrapper {
        width: 90%;
        max-width: 38.37em;
        max-height: 90vh;
        background-color: #ffffff;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        padding: 3em;
        border-radius: 1em;
        box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2);
      }
      .container {
        position: relative;
        width: 100%;
        height: 100%;
      }
      #wheel {
        max-height: inherit;
        width: inherit;
        top: 0;
        padding: 0;
        transform: scale(1.05); /* Increase the scale to make the circle bigger */
      }
      
      @keyframes rotate {
        100% {
          transform: rotate(360deg);
        }
      }
      #spin-btn {
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        height: 26%;
        width: 26%;
        border-radius: 50%;
        cursor: pointer;
        border: 0;
        background: radial-gradient(#fdcf3b 50%, #d88a40 85%);
        color: #c66e16;
        text-transform: uppercase;
        font-size: 1.8em;
        letter-spacing: 0.1em;
        font-weight: 600;
      }
      img {
        position: absolute;
        width: 4em;
        top: 45%;
        right: -8%;
      }
      #final-value {
        font-size: 1.5em;
        text-align: center;
        margin-top: 1.5em;
        color: #202020;
        font-weight: 500;
      }
      @media screen and (max-width: 768px) {
        .wrapper {
          font-size: 12px;
        }
        img {
          right: -5%;
        }
      }

    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <canvas id="wheel"></canvas>
        <button id="spin-btn">Spin</button>
        <img src="{{url('image/spinner-arrow-.svg')}}" alt="spinner-arrow" />
      </div>
      <div id="final-value">
        <p>Click On The Spin Button To Start</p>
      </div>
    </div>
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!-- Chart JS Plugin for displaying text over chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js"></script>
    <!-- Script -->
    <script>
      const wheel = document.getElementById("wheel");
      const spinBtn = document.getElementById("spin-btn");
      const finalValue = document.getElementById("final-value");

      // Restaurants array from PHP
      const restaurants = {!! json_encode($restaurants) !!};
    const totalIndex = restaurants.length;

      // Generate the rotationValues array based on the restaurants
      const rotationValues = restaurants.map((restaurant, index) => ({
        minDegree: (360 / totalIndex) * index ,
        maxDegree: (360 / totalIndex) * (index + 1),
        value: restaurant, // Assuming the restaurant name is stored in the 'name' property
    }));

      // Size of each piece
      const data = Array(restaurants.length).fill((360 / totalIndex));

      // Background color for each piece
      const pieColors = [
        "#8b35bc",
        "#b163da",
    ];

      // Create chart
      const myChart = new Chart(wheel, {
        // Plugin for displaying text on pie chart
        plugins: [ChartDataLabels],
        // Chart Type Pie
        type: "pie",
        data: {
            labels: restaurants,
            // Settings for dataset/pie
            datasets: [
            {
                backgroundColor: pieColors,
                data: data,
            },
            ],
        },
        options: {
            // Responsive chart
            responsive: true,
            animation: { duration: 0 },
            plugins: {
            // Hide tooltip and legend
            tooltip: false,
            legend: {
                display: false,
            },
            // Display labels inside pie chart
            datalabels: {
                color: "#ffffff",
                formatter: (_, context) =>
                context.chart.data.labels[context.dataIndex],
                font: {
                size: 14, // Adjust the font size as desired
                },
                // rotation: (context) => {
                //     const startAngle = context.dataset.startAngle;
                //     const endAngle = context.dataset.endAngle;
                //     const sliceAngle = endAngle - startAngle;
                //     const labelAngle = (startAngle + endAngle) / 2; // Calculate the angle at the center of the chart slice
                //     const rotationAngle = (labelAngle * 180) / Math.PI - 90; // Convert the angle to degrees and adjust for initial rotation
                //     return rotationAngle;
                // },
            },
            },
        },
        });


      // Display value based on the randomAngle
      const valueGenerator = (angleValue) => {
        for (let i of rotationValues) {
          // If the angleValue is between min and max, then display it
          if (angleValue >= i.minDegree && angleValue <= i.maxDegree) {
            finalValue.innerHTML = `<p>Value: ${i.value}</p>`;
            spinBtn.disabled = false;
            break;
          }
        }
      };

      // Spinner count
      let count = 0;
      // 100 rotations for animation and last rotation for result
      let resultValue = 101;

      // Start spinning
      spinBtn.addEventListener("click", () => {
        spinBtn.disabled = true;
        // Empty final value
        finalValue.innerHTML = `<p>Good Luck!</p>`;
        // Generate random degrees to stop at
        const randomDegree = Math.floor(Math.random() * (355 - 0 + 1) + 0);
        // Interval for rotation animation
        const rotationInterval = window.setInterval(() => {
          // Set rotation for pie chart
          /*
            Initially, to make the pie chart rotate faster, we set resultValue to 101 so it rotates 101 degrees at a time and this reduces by 1 with every count. Eventually, on the last rotation, we rotate by 1 degree at a time.
          */
          myChart.options.rotation = myChart.options.rotation + resultValue;
          // Update chart with new value
          myChart.update();
          // If rotation > 360, reset it back to 0
          if (myChart.options.rotation >= 360) {
            count += 1;
            resultValue -= 5;
            myChart.options.rotation = 0;
          } else if (count > 15 && myChart.options.rotation === randomDegree) {
            valueGenerator(randomDegree);
            clearInterval(rotationInterval);
            count = 0;
            resultValue = 101;
          }
        }, 10);
      });
    </script>
  </body>
</html>
