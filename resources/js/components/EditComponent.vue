// EditComponent.vue

<template>
  <div>
    <h1>Edit Item</h1>
    <form @submit.prevent="updateItem">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Item Title:</label>
            <input type="text" class="form-control" v-model="item.title">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Item Body:</label>
              <textarea class="form-control" v-model="item.body" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Update</button>
        </div>
    </form>
  </div>
</template>

<script> 
    export default {

      data() {
        return {
          item: {}
        }
      },
      created() {
        let uri = `http://laravelvuecrud.test/api/item/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => { 
            this.item = response.data;
        });
      },
      methods: {
        updateItem() {
          let uri = `http://laravelvuecrud.test/api/item/update/${this.$route.params.id}`;
          this.axios.post(uri, this.item).then((response) => {
            this.$router.push({name: 'items'});
          });
        }
      }
    }
</script>