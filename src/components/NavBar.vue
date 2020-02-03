<template>
  <header class="eats__nav">
    <div class="eats__nav-main">
      <Burger class="eats__nav-burger" />
      <a href="/" target="_blank" title="Eats Logo" class="eats__nav-logo">
        <img src="../assets/logo.svg" alt="Eats Logo" />
      </a>
      <Search />
    </div>
    <div class="eats__nav-secondary">
      <SideBar class="eats__nav-sidebar">
        <ul>
          <li v-for="page in pages" :key="page">{{ page }}</li>
        </ul>
      </SideBar>
      <SearchPanel>
        <input
          type="text"
          placeholder="e.g. delicious sandwiches"
          v-model.lazy="searchQuery"
          v-on:change="loadPosts"
        />
      </SearchPanel>
    </div>
  </header>
</template>

<script>
/* eslint-disable */
import moment from "moment";
import Burger from "./Burger";
import SideBar from "./SideBar";
import Search from "./Search";
import SearchPanel from "./SearchPanel";
export default {
  name: "NavBar",
  components: {
    Burger,
    SideBar,
    Search,
    SearchPanel
  },
  prop: ["value"],
  data() {
    return {
      searchQuery: this.value,
      pages: ["Lunch & Dinner Menu", "Blog", "About Us", "Contact"]
    };
  },
  filters: {
    // Converting date with Moment.js
    prettyDate: function(value) {
      if (!value) return "";
      const date = moment.utc(value);
      return date.format("MMM DD, YYYY");
    }
  },
  methods: {
    // Load all posts from separate APIs
    loadPosts() {
      this.$emit("loadPosts", this.searchQuery);
      console.log("here");
      // const self = this;
      // // eslint-disable-next-line no-use-before-define
      // self.sources.forEach(function(source, index) {
      //   self.$delete(source, "posts");
      //   //Verify that source should be displayed
      //   if (source.on) {
      //     const searchUrl = self.generateUrl(source);
      //     // Get API with vue-resource
      //     self.$http.get(searchUrl).then(
      //       function(response) {
      //         self.$set(source, "posts", response.data);
      //       },
      //       // eslint-disable-next-line no-use-before-define
      //       function(response) {
      //         console.log("Error");
      //       }
      //     );
      //   }
      // });
    },

    // Generate the search URL
    generateUrl(source) {
      this.$emit("generateUrl", source);
      // const self = this;
      // // Add search parameters.
      // if (self.searchQuery) {
      //   return source.url + "&search=" + encodeURI(self.searchQuery);
      // } else {
      //   return source.url;
      // }
    }
  }
};
</script>

<style lang="scss">
.eats__nav {
  display: flex;
  &-main {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 50px;
    z-index: 10;
    background: $primary;
    padding: 0 20px;
  }
  &-burger {
    @media (min-width: 600px) {
      display: none;
    }
  }
  &-logo {
    & img {
      width: 40px;
      display: block;
    }
    @media (min-width: 600px) {
      display: flex;
      align-items: center;
      &::after {
        content: "Eats.";
        font-weight: 600;
        color: #fff;
        margin-left: 10px;
      }
    }
  }
}
.sidebar-panel {
  position: absolute;
  background: $secondary;
  @media (min-width: 600px) {
    display: none;
  }
  & ul {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: $white;
  }
  & li {
    width: 100vw;
    height: calc(210px / 4);
    border-bottom: 1px solid $nav-highlight;
    list-style: none;
    display: flex;
    align-items: center;
    padding-left: 20px;
    &:last-child {
      border: none;
    }
  }
}
.search-panel {
  display: flex;
  align-items: center;
  padding: 0 20px;
  & input {
    width: 100%;
    padding: 20px;
    border: none;
    background: url("../assets/search-input.svg") no-repeat center right 20px;
    background-color: $white;
    &:focus {
      outline: none;
      color: $dark-grey;
    }
  }
}
</style>