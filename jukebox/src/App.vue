<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png" />
    <Player
      title="Welcome to my JukeBox ! (So 80's)"
      tagline="Listen to my fav music"
    />
  </div>
</template>

<script>
import Player from "./components/Player.vue";

export default {
  name: "App",
  components: {
    Player,
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
