<template>
  <div id="app">
    <NavBar />
    <DesktopNav />
    <Main />
  </div>
</template>

<script>
import NavBar from "./components/NavBar";
import DesktopNav from "./components/DesktopNav";
import Main from "./components/Main";
export default {
  name: "app",
  components: {
    NavBar,
    DesktopNav,
    Main
  }
};
</script>

<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
#app {
  font-family: "Raleway", sans-serif;
}
</style>
