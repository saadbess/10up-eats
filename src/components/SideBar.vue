<template>
  <div class="sidebar">
    <transition name="slide">
      <div v-if="isPanelOpen" class="sidebar-panel">
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
      return store.isNavOpen;
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

.sidebar-panel {
  overflow-y: auto;
  left: 0;
  top: 50px;
  height: 210px;
  width: 100vw;
  z-index: 9;
}
</style>