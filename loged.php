<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySite</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
  <link href="/static/style.css" rel="stylesheet">
</head>

<body>
  <div id="app">
    <v-app>
      <v-main id="page">
        <v-container>
          <v-row id="newPage" style="max-width: 100%;height: 100vh" class="d-flex justify-center align-center">
            <v-col cols="10" md="6" lg="5" class="d-flex flex-column align-center">
              <h1 class="tracking-in-expand" style="color: #fff">Bem vindo(a) 
                <?php print $_POST["user"] ?>
              </h1>
              <button class="mt-5 seeFlower" onclick="showFlowers()">See flowers</button>
            </v-col>
          </v-row>
        </v-container>
      </v-main>
    </v-app>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
    })
  </script>
  <script>
    function showFlowers() {
      var element = document.getElementById("page");
      element.classList.toggle("flowers");
    }
  </script>
</body>

</html>