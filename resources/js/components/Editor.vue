<script>
    import froalaConfig from '../mixins/froalaConfig';
    export default {
        name: "Editor",
        props: [
            'text','entityId', 'entityName'
        ],
        mixins: [froalaConfig],
        data() {
          return {
              content: this.text,
              config: null,
              id: this.entityId,
              folder: this.entityName
          }
        },
        mounted() {
            this.config = this.getFroalaConfig(this.id, this.folder);
        }
    }
</script>