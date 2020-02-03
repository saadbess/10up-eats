<template>
  <div class="eats__main">
    <section v-on:loadPost="loadPosts($event)">
      <div class v-for="source in sources" :key="source">
        <div class v-show="source.on">
          <h2>{{source.name}}</h2>

          <article v-for="post in source.posts" :key="post">
            <a v-bind:href="post.link" target="_blank">
              <h4 v-html="post.title.rendered"></h4>
              <p>{{post.date | prettyDate}}</p>
              <div v-html="post.excerpt.rendered"></div>
            </a>
          </article>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
// import NavBar from "../components/NavBar"
export default {
  name: "Main",
  //   components: {
  //       NavBar
  //   }
  data() {
    return {
      searchQuery: "",
      sources: [
        {
          name: "Blog",
          on: true,
          url: "http://10upburgerbar.local/wp-json/wp/v2/posts?per_page=3",
          posts: []
        }
      ]
    };
  },
  methods: {
    loadPosts() {
      const self = this;
      // eslint-disable-next-line no-use-before-define
      self.sources.forEach(function(source, index) {
        self.$delete(source, "posts");
        //Verify that source should be displayed
        if (source.on) {
          const searchUrl = self.generateUrl(source);
          // Get API with vue-resource
          self.$http.get(searchUrl).then(
            function(response) {
              self.$set(source, "posts", response.data);
            },
            // eslint-disable-next-line no-use-before-define
            function(response) {
              console.log("Error");
            }
          );
        }
      });
    },
    generateUrl() {
      const self = this;
      // Add search parameters.
      if (self.searchQuery) {
        return source.url + "&search=" + encodeURI(self.searchQuery);
      } else {
        return source.url;
      }
    }
  },
  mounted: function() {
    this.$nextTick(function() {
      // Load posts on initial page load
      this.loadPosts();
    });
  }
};
</script>

<style lang="scss">
.eats__main {
  width: 100vw;
  background: red;
}
</style>