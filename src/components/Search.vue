<template>
  <div @click.prevent="toggle">
    <slot>
      <div class="search-icon" :class="{ 'search-icon-active': isSearchActive }"></div>
    </slot>
  </div>
</template>

<script>
import { store, mutations } from "../../src/store";

export default {
  computed: {
    isSearchActive() {
      return store.isSearchOpen;
    }
  },
  methods: {
    toggle() {
      mutations.toggleSearch();
    }
  }
};
</script>

<style scoped lang="scss">
.search-icon {
  background: url("../assets/search.svg") no-repeat center center;
  width: 20px;
  height: 20px;
  cursor: pointer;
  position: absolute;
  top: 0;
  right: 0px;
  padding: 25px;
  transition: background-color 0.3s;
  &:hover {
    background-color: $secondary;
    transition: background-color 0.3s;
  }
  &-active {
    background: url("../assets/close.svg") no-repeat center center;
    background-color: $secondary;
  }
}
</style>