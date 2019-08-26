<script>
    import froalaConfig from '../mixins/froalaConfig';
    export default {
        name: "Editor",
        props: [
            'text'
        ],
        mixins: [froalaConfig],
        data() {
          return {
              content: this.text,
              config: null
          }
        },
        mounted() {
            this.config = this.getFroalaConfig();
        }
    }
</script>