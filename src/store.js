import Vue from "vue";

export const store = Vue.observable({
    isNavOpen: false,
    isSearchOpen: false
});

export const mutations = {
    toggleNav() {
        store.isNavOpen = !store.isNavOpen
        store.isSearchOpen = false
    },
    toggleSearch() {
        store.isSearchOpen = !store.isSearchOpen,
        store.isNavOpen = false
    }
};