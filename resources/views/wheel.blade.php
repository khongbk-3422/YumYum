@include ('header')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spin Wheel App</title>
    @include('cdn')


    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Raleway', sans-serif;
      }

      /* body {
        height: 150vh;
        background: linear-gradient(135deg, #c3a3f1, #6414e9);
      } */

      body {
        height: 150vh;
        background: linear-gradient(140deg, #E3E7EA, #EEF1EA);
      }

      .maincontainer{
        margin-top:90px;
      }

      .content{
        display:flex;
        flex-direction: row;
        justify-content:center;
        align-items:flex-start;;
        gap: 8em;
      }

      .restcontainer {
        border:1px solid #8592A2;
        width:350px;
        height:550px;
        padding:10px 10px;
        /* box-shadow: 0 5px 12px #8592A2; */
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        border-radius:8px;
        background:#E3E7EA;
      }

      .restcontainer .resttitle{
        text-align:center;
        margin:5px;
      }

      .restcontainer .resttitle h4{
        font-size:25px;
        font-weight:550;
      }

      .restcontainer .restlist .restname h4{
        padding-top:8px;
        font-size:17px;
        line-height:1.5;
        margin:8px;
      }

      .restcontainer .restlist .restname h4 a {
        text-decoration: none; /* Remove underline */
        color: black; /* Set the color to black */
        margin-right: 10px;
      }

      .restcontainer .restlist .restname h4 a:hover {
        color: grey; /* Set the color to black on hover */
      }

      /* .wrapper {
        width: 90%;
        max-width: 38.37em;
        max-height: 100vh;
        background-color: #ffffff;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 75%;
        left: 50%;
        padding: 3em;
        border-radius: 1em;
        box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2);
      } */

      .wrapper {
        width: 90%;
        max-width: 38.37em;
        background-color: #ffffff;
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
        background: radial-gradient(#DEE1DD 50%, #727E66 85%); 
        color: black;
        text-transform: uppercase;
        font-size: 1.8em;
        letter-spacing: 0.1em;
        font-weight: 600;
      }

      .arrowimg {
        position: absolute;
        width: 4em;
        top: 45%;
        right: -8%;
      }

      #final-value {
        font-size: 1.5em;
        text-align: center;
        margin-top: 0.5em;
        color: #202020;
        font-weight: 500;
        padding:20px;
      }

      @media screen and (max-width: 768px) {
        .wrapper {
          font-size: 12px;
        }
        .arrowimg {
          right: -5%;
        }
      }

    </style>
  </head>
  <body>
      <div class="maincontainer">
        <div id="final-value" class="title">
            <p>Click On The Spin Button To Start
            </p>
        </div>

        <div class="content">
          <div class="restcontainer">
            <div class="resttitle">
              <h4>Restaurants</h4>
            </div>
          
            <div class="restlist">
              <div class="restname">
                @foreach ($spinwheel_datas as $data)
                <h4>
                    <a href="{{ url('/wheelDelete/' . $data['rest_id'])}}">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                    <a href={{"restaurantDetailsPage/".$data['rest_id']}}>{{$data->rest_name}}</a>
                </h4>
                @endforeach
              </div>
            </div>
          </div>              

          <div class="wrapper">
            <div class="container">
              <canvas id="wheel"></canvas>
              <button id="spin-btn">Spin</button>
              <img src="{{url('image/spinner-arrow-.svg')}}" class="arrowimg" alt="spinner-arrow" />
            </div>
          </div>
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
      let additionalPortions = [];

      // Generate the rotationValues array based on the restaurants
      const rotationValues = restaurants.map((restaurant, index) => {
        const numRestaurants = restaurants.length;
        const sliceAngle = 360 / numRestaurants;

        let minDegree = (90 - (index + 1) * sliceAngle + 360) % 360;
        let maxDegree = (90 - index * sliceAngle + 360) % 360;

        if (minDegree > maxDegree) {
          const newPortion = {
            minDegree: minDegree - 360,
            maxDegree,
            value: restaurant,
          };

          additionalPortions.push(newPortion);
          maxDegree += 360;
        }

        const value = restaurant; // Assuming the restaurant name is stored in the 'restaurant' variable
        return { minDegree, maxDegree, value };
      });

      const adjustedRotationValues = rotationValues.concat(additionalPortions);

      // Size of each piece
      const data = Array(restaurants.length).fill((360 / totalIndex));
      const pieColors = [
        "#BBC3C9", "#C9DBDD", "#A6BBB6","#D0DBC8", 
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
                size: 16, // Adjust the font size as desired
              },
            },
          },
        },
      });

      // Display value based on the randomAngle
      const valueGenerator = (angleValue) => {
        for (let i of adjustedRotationValues) {
          // If the angleValue is between min and max, then display it
          if (angleValue > i.minDegree && angleValue <= i.maxDegree) {
            const encodedRestaurantName = encodeURIComponent(i.value);
            finalValue.innerHTML = `<p>${i.value} ->  
                    <a href="/restaurantDetails/${encodedRestaurantName}"><button type="button" class="detailsBtn">View Details</button></a></p>`;
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

@include('footer')
</body>
</html>