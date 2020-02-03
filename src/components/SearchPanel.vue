<template>
  <div>
    <transition name="slide">
      <div v-if="isPanelOpen" class="search-panel">
        <slot></slot>
      </div>
    </transition>
  </div>
</template>

<script>
import { store } from "../../src/store";
export default {
  computed: {
    isPanelOpen() {
      return store.isSearchOpen;
    }
  }
};
</script>

<style scoped lang="scss">
.slide-enter-active,
.slide-leave-active {
  transition: transform 0.5s ease;
}

.slide-enter,
.slide-leave-to {
  transform: translateY(-100%);
  transition: all 150ms ease-in 0s;
}

.search-panel {
  overflow-y: auto;
  position: absolute;
  background: $secondary;
  left: 0;
  top: 50px;
  height: 83px;
  width: 100vw;
  z-index: 9;
  @media (min-width: 600px) {
    width: 350px;
    right: 0;
    left: auto;
  }
}
</style>