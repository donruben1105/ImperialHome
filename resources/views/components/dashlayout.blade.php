<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <meta name="author" content="" />
    <meta name="description" content="" />
    <script src="https://kit.fontawesome.com/62d4d8e42a.js" crossorigin="anonymous"></script>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    <!-- Tailwind -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");
      .font-family-karla {
        font-family: karla;
      }
      .bg-sidebar {
        background: #756300;
      }
      .cta-btn {
        color: linear-gradient(to right, #ffe55c, #ffce2e, #ffc700, #d1b000);
      }
      .upgrade-btn {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .upgrade-btn:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .active-nav-link {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .nav-item:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .account-link:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
    </style>
  </head>
  <body class="bg-white font-family-karla flex">
    {{$slot}}

    <!-- AlpineJS -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Font Awesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
    <!-- ChartJS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>

    <script>
      var chartOne = document.getElementById("chartOne");
      var myChart = new Chart(chartOne, {
        type: "bar",
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [
            {
              label: "# of Votes",
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                "rgba(255, 99, 132, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
              ],
              borderColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });

      var chartTwo = document.getElementById("chartTwo");
      var myLineChart = new Chart(chartTwo, {
        type: "line",
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [
            {
              label: "# of Votes",
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                "rgba(255, 99, 132, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
              ],
              borderColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });
    </script>

     <!-- tailwindcss -->
     <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
     <!-- flowbite -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
     <!-- AlpineJS -->
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     <!-- Font Awesome -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
 
</body>
  </html>