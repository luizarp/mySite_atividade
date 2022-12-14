<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - MySite</title>

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
      <v-main>
        <v-container>
          <v-row style="max-width: 100%;height: 100vh" class="d-flex justify-center align-center">
            <v-col cols="10" md="6" lg="5">
              <v-card>
                <v-card-title>Faça o login</v-card-title>
                <v-divider></v-divider>
                <v-card-text class="d-flex flex-column justify-center">
                  <form name="login_form" method="POST" action="loged.php">
                    <label for="user">Usuário</label>
                    <input type="text" name="user" id="user" required minlength="3">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" required minlength="3">
                    <button type="reset" class="cancel">Cancelar</button>
                    <button class="save" type="submit">Entrar</button>
                  </form>
                </v-card-text>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </v-main>
    </v-app>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
    })
  </script>
</body>

</html>