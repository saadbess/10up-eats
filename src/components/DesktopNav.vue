<template>
  <header class="eats__desktop-nav">
    <ul>
      <li v-for="page in pages" :key="page">
        <a href="#" target="_blank">{{ page }}</a>
      </li>
    </ul>
  </header>
</template>

<script>
export default {
  name: "DesktopNav",
  data() {
    return {
      pages: ["Lunch & Dinner Menu", "Blog", "About Us", "Contact"]
    };
  }
};
</script>

<style lang="scss">
.eats__desktop-nav {
  width: 100vw;
  height: 50px;
  background-color: $secondary;
  color: $white;
  display: flex;
  align-items: center;
  padding: 0 20px;
  @media (max-width: 600px) {
    display: none;
  }
  & ul {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  & li {
    padding: 14.5px 36px;
    &:first-child {
      padding-left: 0;
    }
    &:hover {
      background-color: $dark-blue;
    }
  }
}
</style>